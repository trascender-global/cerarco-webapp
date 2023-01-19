<?php


namespace App\Http\Traits;

use App\Models\PiezaClave;
use Illuminate\Support\Arr;
use Illuminate\Support\Collection;
use Illuminate\Support\Facades\DB;


trait BusquedaTrait
{

    /**
     */
    protected static function obtenerBusquedaQuery(): Collection
    {
        return (empty(trim(request()->get('busqueda_palabra'))))
            ? self::obtenerBusquedaGeneral()
            : self::obtenerBusquedaPalabra();

    }

    protected static function obtenerBusquedaGeneral(): Collection
    {
        $collection = self::obtenerResultadosGenerales();
        $cronologia = self::obtenerResultadosCronologia();

        $collection =  ($cronologia->isNotEmpty())
            ? $collection->intersect($cronologia)
            : collect();
        return $collection->intersect(self::obtenerResultadosEspecificos());
    }

    protected static function obtenerResultadosGenerales(): Collection
    {
        $collection = self::obtenerBusqueda('area_geografica', config('busqueda.area_geografica'));
        $collection = $collection->intersect(self::obtenerBusqueda('sub_region_geografica', config('busqueda.sub_region_geografica')));
        $collection = $collection->intersect(self::obtenerBusqueda('departamentos', config('busqueda.departamento')));
        $collection = $collection->intersect(self::obtenerBusqueda('funcion_primaria', config('busqueda.funcion_primaria')));
        $collection = $collection->intersect(self::obtenerBusqueda('municipio_hallazgo', config('busqueda.municipio_hallazgo')));
        $collection = $collection->intersect(self::obtenerBusqueda('confiabilidad_modelo', config('busqueda.confiabilidad_modelo')));
        $collection = $collection->intersect(self::obtenerBusqueda('desc_formal_forma_base', config('busqueda.forma_base')));
        $collection = $collection->intersect(self::obtenerBusqueda('desc_formal_decoracion_1', config('busqueda.decoracion_1')));
        $collection = $collection->intersect(self::obtenerBusqueda('desc_formal_decoracion_2', config('busqueda.decoracion_2')));
        $collection = $collection->intersect(self::obtenerBusqueda('desc_formal_decoracion_3', config('busqueda.decoracion_3')));
        $collection = $collection->intersect(self::obtenerBusqueda('desc_formal_tratamiento_superficie', config('busqueda.tratamiento_superficie')));
        $collection = $collection->intersect(self::obtenerBusqueda('desc_tec_min_nombre_munsell', config('busqueda.min_nombre_munsell')));
        $collection = $collection->intersect(self::obtenerBusqueda('desc_tec_max_nombre_munsell', config('busqueda.max_nombre_munsell')));
        $collection = $collection->intersect(self::obtenerBusqueda('desc_tec_acabado_superficie_externa', config('busqueda.acabado_superficie_externa')));
        $collection = $collection->intersect(self::obtenerBusqueda('desc_tec_tecnica_manufactura', config('busqueda.tecnica_manufactura')));
        $collection = $collection->intersect(self::obtenerBusqueda('desc_tec_textura_externa', config('busqueda.textura_externa')));
        $collection = $collection->intersect(self::obtenerBusqueda('desc_tec_ambiente_coccion_1', config('busqueda.ambiente_coccion_1')));
        $collection = $collection->intersect(self::obtenerBusqueda('desc_tec_composicion_inorganica', config('busqueda.composicion_inorganica')));
        $collection = $collection->intersect(self::obtenerBusqueda('desc_tec_composicion_organica', config('busqueda.composicion_organica')));
        return $collection->intersect(self::obtenerBusqueda('desc_tec_forma_granos', config('busqueda.forma_granos')));

    }

    /**
     * @param  string  $key
     * @param  int  $posicion
     * @param  bool  $debug
     * @return \Illuminate\Support\Collection
     */
    protected static function obtenerBusqueda(string $key, int $posicion, bool $debug = false)
    {
        $resultado = (empty(request()->get($key)))
            ? session()->get('todos')
            : DB::table('pieza_clave_datos')->where(function ($query) use ($posicion, $key, $debug) {
                $query = $query->where('posicion', $posicion);
                if (is_array(request()->get($key))) {
                    $query->where(function ($query) use ($key, $posicion) {
                        foreach (request()->get($key) as $data) {
                            $query = $query->orWhere('valor_slug', 'like', $data);
                        }
                    });
                } else {
                    $query->whereRaw("lower(valor) like '%".trim(request()->get($key))."%'");
                }
            })
                ->select('pieza_clave_id')
                ->get();

        return self::mapResultados($resultado);
    }

    /**
     * @param  \Illuminate\Support\Collection  $resultado
     * @return \Illuminate\Support\Collection
     */
    protected static function mapResultados(Collection $resultado): Collection
    {
        return $resultado->map(function ($item) {
            return $item->pieza_clave_id;
        });
    }

    /**
     * @return \Illuminate\Support\Collection
     */
    protected static function obtenerResultadosCronologia(): Collection
    {
        $minimo = (int) request()->get('cronologia_bajo');
        $maximo = (int) request()->get('cronologia_alto');

        $collect = PiezaClave::all()->map(function ($piezaClave) {
            return $piezaClave->id;
        });

        $sql             = 'SELECT
                    pcd.pieza_clave_id  ,
                CASE
                    WHEN pcd.valor = "d.C." THEN ( select valor from pieza_clave_datos pcd2 where pcd2.posicion = '.config('busqueda.cronologia_alto').' and pcd2.pieza_clave_id = pcd.pieza_clave_id)
                    WHEN pcd.valor = "a.C." THEN ( select valor from pieza_clave_datos pcd2 where pcd2.posicion = '.config('busqueda.cronologia_alto').' and pcd2.pieza_clave_id = pcd.pieza_clave_id) * -1
                    ELSE 0
                END as valor
            from pieza_clave_datos pcd where pcd.posicion = '.config('busqueda.cronologia_alto_ac_dc');
        $cronologia_alta = DB::select($sql);

        $sql             = 'SELECT
        pcd.pieza_clave_id  ,
                CASE
                    WHEN pcd.valor = "d.C." THEN ( select valor from pieza_clave_datos pcd2 where pcd2.posicion = '.config('busqueda.cronologia_bajo').' and pcd2.pieza_clave_id = pcd.pieza_clave_id)
                    WHEN pcd.valor = "a.C." THEN ( select valor from pieza_clave_datos pcd2 where pcd2.posicion = '.config('busqueda.cronologia_bajo').' and pcd2.pieza_clave_id = pcd.pieza_clave_id) * -1
                    ELSE 0
                END as valor
            from pieza_clave_datos pcd where pcd.posicion = '.config('busqueda.cronologia_bajo_ac_dc');
        $cronologia_baja = DB::select($sql);

        $collect_cronologia = collect();
        foreach ($cronologia_alta as $datos) {
            if ((int) $datos->valor <= $maximo) {
                $collect_cronologia->push($datos->pieza_clave_id);
            }
        }

        foreach ($cronologia_baja as $datos) {
            if ((int) $datos->valor <= $minimo) {
                $collect_cronologia->push($datos->pieza_clave_id);
            }
        }

        return $collect->intersect($collect_cronologia);

    }

    protected static function obtenerResultadosEspecificos(): Collection
    {
        $collection = self::obtenerBusqueda('lista_modelos_codigo_modelo', config('busqueda.codigo_modelo'));
        $collection = $collection->intersect(self::obtenerBusquedaVariante('lista_modelos_variante_forma', 'forma'));
        $collection = $collection->intersect(self::obtenerBusquedaVariante('lista_modelos_variante_decorativa', 'decorativa'));
        $collection = $collection->intersect(self::obtenerBusquedaVariante('lista_modelos_variante_arqueometrica', 'arqueometrica'));
        $collection = $collection->intersect(self::obtenerBusquedaPiezaClave('lista_modelos_pieza_clave'));

        $collection = $collection->intersect(self::obtenerBusqueda('clasificaciones_existentes_area_geografica', config('busqueda.area_geografica')));
        return $collection->intersect(self::obtenerBusqueda('clasificaciones_existentes_sub_region_geografica', config('busqueda.sub_region_geografica')));
    }

    /**
     * @param  string  $key
     * @param  string  $variante
     * @return \Illuminate\Support\Collection
     */
    protected static function obtenerBusquedaVariante(string $key, string $variante): Collection
    {
        $collect = collect([]);
        if (!empty(trim(request()->get($key)))) {
            $variante = 'metadata_'.$variante;
            foreach (DB::table('modelos')->where('status',NULL)->get() as $data) {
                if (Arr::has(json_decode($data->$variante, true), trim(request()->get($key)))) {
                    $data = json_decode($data->$variante, true);
                    $collect->push($data[trim(request()->get($key))]['Descripción']['Descripción formal (resumen)']['pieza_clave_id'] ?? 0);
                }
            }
            return self::mapResultados($collect);
        }
        return self::mapResultados(session()->get('todos'));
    }

    /**
     * @param  string  $key
     * @return \Illuminate\Support\Collection
     */
    protected static function obtenerBusquedaPiezaClave(string $key): Collection
    {
        $resultados = (!empty(request()->get($key)))
            ? DB::table('pieza_clave_datos')
                ->select('pieza_clave_id')
                ->distinct()
                ->whereIn('pieza_clave_id', request()->get($key))
                ->get()
            : session()->get('todos');

        return self::mapResultados($resultados);

    }

    /**
     * @return \Illuminate\Support\Collection
     */
    protected static function obtenerBusquedaPalabra(): Collection
    {
        $collection = collect([]);
        foreach (config('busqueda') as $posicion) {
            $collection = $collection->union(DB::table('pieza_clave_datos')
                ->select('pieza_clave_id')
                ->distinct()
                ->WhereRaw("lower(valor) like '%".trim(request()->get('busqueda_palabra'))."%'")
                ->where("posicion", $posicion)
                ->get()
            );
        }
        return self::mapResultados($collection);
    }

    /**
     * @param  string  $campo
     * @return array
     */
    protected static function obtenerCronologiaValores(string $campo): array
    {
        $acdc       = ['+' => 'a.C.', "-" => 'd.C.'];
        $value_acdc = (int) $acdc < 0 ? $acdc['-'] : $acdc['+'];
        dump(request()->get($campo));
        $value = abs(request()->get($campo));
        return [$value, $value_acdc];
    }

    protected static function debug(
        $debug,
        ...$params
    ) {
        if ($debug === true) {
            dd($params);
        }
    }

    /**
     * @param  \Illuminate\Support\Collection  $resultados
     * @return \Illuminate\Support\Collection
     */
    protected static function obtenerModelosBusqueda(Collection $resultados): Collection
    {
        $modelos = [];
        foreach (PiezaClave::whereIn('id', $resultados)->get() as $pieza) {
            if($pieza->modelo->status===NULL){
                $modelos[$pieza->modelo->id] = $pieza->modelo;
            }
            
        }
        return collect($modelos);
    }

    /**
     * @param  \Illuminate\Support\Collection  $resultados
     * @return array
     */
    protected static function obtenerModelosBusquedaId(Collection $resultados): array
    {
        $modelos = [];
        foreach (PiezaClave::whereIn('id', $resultados)->get() as $pieza) {
            if($pieza->modelo->status===NULL){
            $modelos[$pieza->modelo->id] = $pieza->modelo->id;
        }
        }
        return $modelos;
    }

}