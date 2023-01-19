<?php

namespace App\Imports;

use App\Models\ListaValores;
use App\Models\Modelo;
use App\Models\PiezaClave;
use App\Models\PiezaClaveDato;
use Illuminate\Support\Collection;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Str;
use Maatwebsite\Excel\Concerns\ToCollection;

class PiezaClaveCollectionImport implements ToCollection
{
    /**
     * @param  Collection  $collection
     */
    public function collection(Collection $collection)
    {
        $modelo     = self::createModelo($collection->first());
        $dataConfig = config('fichas.columnas');

        $dataModelo        = [];
        $dataForma         = [];
        $dataDecorativa    = [];
        $dataArqueometrica = [];
        self::getFichas($collection)->map(function ($ficha) use ($dataConfig, $modelo, &$dataModelo, &$dataForma, &$dataDecorativa, &$dataArqueometrica) {
            if (is_null($ficha)) {
                return;
            }
            $piezaClave = $modelo->piezasClave->isEmpty() ? null : $modelo->piezasClave->first();
            foreach ($dataConfig as $config) {
                $data = $ficha->get($config['fila'] - 1);
                //dd($ficha->get(4));
                if (is_null($data)) {
                    continue;
                }
                $campo = trim($config['nombre']);
                $valor = self::getValor($data, 1);
                if (self::piezaClavenDoesntExist($piezaClave, $config)) {
                    $piezaClave = self::createPiezaClave($valor, $modelo);
                    $piezaClave->dibujos()->delete();
                    $piezaClave->fotos()->delete();
                    continue; 
                }

                $piezaClaveDato = self::createPiezaClaveDato($piezaClave, $campo, $valor, $config);
                if ($config['modelo'] === true) {
                    $modelo_bloque = $piezaClaveDato->getAttribute('config')['modelo_bloque'];

                    $dataModelo[$modelo_bloque][$config['nombre']] = $piezaClaveDato;
                }
                if ($config['forma'] === true && $ficha[config('fichas.variantes.forma')][1]!='') {
                    $variante     = $ficha[config('fichas.variantes.forma')][1];
                    $forma_bloque = $piezaClaveDato->getAttribute('config')['forma_bloque'];

                    $dataForma[$variante][$forma_bloque][$config['nombre']] = $piezaClaveDato;
                }
                if ($config['decorativa'] === true && $ficha[config('fichas.variantes.decorativa')][1]!='') {
                    $variante          = $ficha[config('fichas.variantes.decorativa')][1];
                    $decorativa_bloque = $piezaClaveDato->getAttribute('config')['decorativa_bloque'];

                    $dataDecorativa[$variante][$decorativa_bloque][$config['nombre']] = $piezaClaveDato;
                }
                if ($config['arqueometrica'] === true && $ficha[config('fichas.variantes.arqueometrica')][1]!='') {
                    $variante             = $ficha[config('fichas.variantes.arqueometrica')][1];
                    $arqueometrica_bloque = $piezaClaveDato->getAttribute('config')['arqueometrica_bloque'];

                    $dataArqueometrica[$variante][$arqueometrica_bloque][$config['nombre']] = $piezaClaveDato;
                }
            }
        });

        $modelo->metadata_modelo        = $dataModelo;
        $modelo->metadata_forma         = $dataForma;
        $modelo->metadata_decorativa    = $dataDecorativa;
        $modelo->metadata_arqueometrica = $dataArqueometrica;
        $modelo->save();
    }

    /**
     * @param  Collection  $row
     * @return Modelo
     */
    private static function createModelo(Collection $row): Modelo
    {
        return Modelo::firstOrCreate([
            'user_id' => Auth::id(),
            'codigo'  => trim($row[1]),
        ]);
    }

    /**
     * @param  Collection  $collection
     * @return Collection
     */
    private static function getFichas(Collection $collection)
    {
        return self::getFichaColumsCollection($collection)->map(function ($data) {
            if (!empty($data->first()->get(1))) {
                return $data;
            }
        });
    }

    /**
     * @param  Collection  $collection
     * @return Collection
     */
    private static function getFichaColumsCollection(Collection $collection): Collection
    {
        $ficha = [];
        foreach ($collection as $data) {
            for ($i = 1; $i < $data->count(); $i++) {
                $ficha[$i - 1][] = collect(self::getDataPorColumna($data, $i));
            }
        }
        return collect(self::getFichasCollection($ficha));
    }

    /**
     * @param $data
     * @param  int  $i
     * @return array
     */
    private static function getDataPorColumna($data, int $i): array
    {
        return [trim($data[0]), self::getValor($data, $i)];
    }

    /**
     * @param $data
     * @param  int  $i
     * @return string|null
     */
    private static function getValor($data, int $i)
    {
        return trim(preg_replace('/\s+/', ' ', $data[$i]));
    }

    /**
     * @param $ficha
     * @return array|Collection[]
     */
    private static function getFichasCollection($ficha)
    {
        return array_map(function ($data) {
            return collect($data);
        }, $ficha);
    }

    /**
     * @param $piezaClave
     * @param $config
     * @return bool
     */
    private static function piezaClavenDoesntExist($piezaClave, $config): bool
    {
        return is_null($piezaClave) && $config['pieza_clave'] === true;
    }

    /**
     * @param  string  $valor
     * @param  Modelo  $modelo
     * @return PiezaClave
     */
    private static function createPiezaClave(string $valor, Modelo $modelo): PiezaClave
    {
        return PiezaClave::create([
            'pieza_clave' => $valor,
            'modelo_id'   => $modelo->id
        ]);
    }

    /**
     * @param  PiezaClave|null  $piezaClave
     * @param  string  $campo
     * @param  string  $valor
     * @param  array  $config
     * @return PiezaClaveDato
     */
    private static function createPiezaClaveDato(PiezaClave $piezaClave, string $campo, string $valor, array $config): PiezaClaveDato
    {
        $valor_slug = '';
        if ($config['lista'] !== 0) {
            $data       = ListaValores::where('lista_id', $config['lista'])->where('valor', $valor)->first();
            $valor_slug = Str::limit(!is_null($data) ? $data->slug : $valor);
        }

        self::borrarPiezaClave($piezaClave, $config['id']);

        return PiezaClaveDato::create([
            'pieza_clave_id' => $piezaClave->id,
            'campo'          => $campo,
            'valor'          => $valor,
            'valor_slug'     => $valor_slug,
            'posicion'       => $config['id'],
            'config'         => $config,
        ]);
    }

    /**
     * @param  \App\Models\PiezaClave  $piezaClave
     * @param $id
     */
    private static function borrarPiezaClave(PiezaClave $piezaClave, $id): void
    {
        if (
        PiezaClaveDato::where('pieza_clave_id', $piezaClave->id)
            ->where('posicion', $id)
            ->exists()
        ) {
            PiezaClaveDato::where('pieza_clave_id', $piezaClave->id)
                ->where('posicion', $id)
                ->forceDelete();
        }
    }

}
