<?php

namespace Database\Seeders;


use App\Models\PiezaClaveCampos;
use App\Models\Listas;
use App\Models\ListaValores;
use App\Models\PiezaClaveCategorias;
use App\Models\PiezaClaveDato;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;

class NewSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        /**
         * 
         */
        PiezaClaveCategorias::create([
            'categoria'        => 'Microscopio electrónico de barrido',
            'slug'          => Str::kebab('Microscopio electronico de barrido'),
        ]);
        /**
         * Petrografia Lista
         */
        Listas::create([
            'nombre'        => 'Porosidad (pasta)',
            'slug'          => Str::kebab('Porosidad pasta'),
            'tipo_lista_id' => config('constants.tipo_listas.petrografia')
        ]);
        Listas::create([
            'nombre'        => 'Porosidad (forma de los poros)',
            'slug'          => Str::kebab('Porosidad forma de los poros'),
            'tipo_lista_id' => config('constants.tipo_listas.petrografia')
        ]);
        Listas::create([
            'nombre'        => 'Porosidad (tamaño de los poros)',
            'slug'          => Str::kebab('Porosidad tamaño de los poros'),
            'tipo_lista_id' => config('constants.tipo_listas.petrografia')
        ]);
        Listas::create([
            'nombre'        => 'Tamaño de los granos (antiplástico)',
            'slug'          => Str::kebab('Tamaño de los granos antiplastico'),
            'tipo_lista_id' => config('constants.tipo_listas.petrografia')
        ]);
        /**
         * Petrografia Lista valores
         */

         /*porocidad pasta  */
        ListaValores::create([
            'valor'    => 'Baja',
            'slug'     => Str::kebab('Porosidad pasta baja'),
            'lista_id' => config('constants.lista_valores.petrografia.porosidad_pasta')
        ]);
        ListaValores::create([
            'valor'    => 'Alta',
            'slug'     => Str::kebab('Porosidad pasta alta'),
            'lista_id' => config('constants.lista_valores.petrografia.porosidad_pasta')
        ]);
        /*porocidad forma  */
        ListaValores::create([
            'valor'    => 'Vesiculares',
            'slug'     => Str::kebab('Porosidad forma vesiculares'),
            'lista_id' => config('constants.lista_valores.petrografia.porosidad_forma')
        ]);
        ListaValores::create([
            'valor'    => 'Circulares',
            'slug'     => Str::kebab('Porosidad forma circulares'),
            'lista_id' => config('constants.lista_valores.petrografia.porosidad_forma')
        ]);
        ListaValores::create([
            'valor'    => 'Lineales',
            'slug'     => Str::kebab('Porosidad forma lineales'),
            'lista_id' => config('constants.lista_valores.petrografia.porosidad_forma')
        ]);
        /*porocidad tamaño  */
        ListaValores::create([
            'valor'    => 'Muy finos (0,05 a 0,1 mm)',
            'slug'     => Str::kebab('Porosidad tamaño muy finos'),
            'lista_id' => config('constants.lista_valores.petrografia.porosidad_tamaño')
        ]);
        ListaValores::create([
            'valor'    => 'Finos (0,1 a 0,25 mm)',
            'slug'     => Str::kebab('Porosidad tamaño finos'),
            'lista_id' => config('constants.lista_valores.petrografia.porosidad_tamaño')
        ]);
        ListaValores::create([
            'valor'    => 'Medianos (0,25 a 0,50 mm)',
            'slug'     => Str::kebab('Porosidad tamaño medianos'),
            'lista_id' => config('constants.lista_valores.petrografia.porosidad_tamaño')
        ]);
        ListaValores::create([
            'valor'    => 'Gruesos (superior a 0,50 mm)',
            'slug'     => Str::kebab('Porosidad tamaño gruesos'),
            'lista_id' => config('constants.lista_valores.petrografia.porosidad_tamaño')
        ]);
        ListaValores::create([
            'valor'    => 'Otro',
            'slug'     => Str::kebab('Porosidad tamaño otro'),
            'lista_id' => config('constants.lista_valores.petrografia.porosidad_tamaño')
        ]);
        /*Tamaño granos  */
        ListaValores::create([
            'valor'    => 'Muy finos (0,05 a 0,1 mm)',
            'slug'     => Str::kebab('Tamaño grano muy finos'),
            'lista_id' => config('constants.lista_valores.petrografia.tamaño_granos')
        ]);
        ListaValores::create([
            'valor'    => 'Finos (0,1 a 0,25 mm)',
            'slug'     => Str::kebab('Tamaño grano finos'),
            'lista_id' => config('constants.lista_valores.petrografia.tamaño_granos')
        ]);
        ListaValores::create([
            'valor'    => ' Medianos (0,25 a 0,50 mm)',
            'slug'     => Str::kebab('Tamaño grano medianos'),
            'lista_id' => config('constants.lista_valores.petrografia.tamaño_granos')
        ]); 
        ListaValores::create([
            'valor'    => 'Gruesos (superior a 0,50 mm)',
            'slug'     => Str::kebab('Tamaño grano gruesos'),
            'lista_id' => config('constants.lista_valores.petrografia.tamaño_granos')
        ]);
        ListaValores::create([
            'valor'    => 'Otro',
            'slug'     => Str::kebab('Tamaño grano otro'),
            'lista_id' => config('constants.lista_valores.petrografia.tamaño_granos')
        ]);
        /**
         * Petrografia Pieza clave campos
         */

        PiezaClaveCampos::create([
            'campo' => 'Porosidad (pasta)',
            'slug' => Str::kebab('pet porosidad pasta'),
            'lista' => config('constants.lista_valores.petrografia.porosidad_pasta'),
            'pieza_clave_categorias_id' => config('constants.pieza_clave_categorias.petrografia')
        ]);
        PiezaClaveCampos::create([
            'campo' => 'Porosidad (forma de los poros)',
            'slug' => Str::kebab('pet porosidad forma'),
            'lista' => config('constants.lista_valores.petrografia.porosidad_forma'),
            'pieza_clave_categorias_id' => config('constants.pieza_clave_categorias.petrografia')
        ]);
        PiezaClaveCampos::create([
            'campo' => 'Porosidad (tamaño de los poros)',
            'slug' => Str::kebab('pet porosidad tamaño'),
            'lista' => config('constants.lista_valores.petrografia.porosidad_tamaño'),
            'pieza_clave_categorias_id' => config('constants.pieza_clave_categorias.petrografia')
        ]);
        PiezaClaveCampos::create([
            'campo' => 'Comentarios sobre composición (inclusiones añadidas e inclusiones naturales)',
            'slug' => Str::kebab('pet comentarios sobre composicion inclusiones'),
            'textarea' => 1,
            'pieza_clave_categorias_id' => config('constants.pieza_clave_categorias.petrografia')
        ]);
        PiezaClaveCampos::create([
            'campo' => 'Comentarios sobre composición (detalles sobre petrografía)',
            'slug' => Str::kebab('pet comentarios sobre composicion detalles'),
            'textarea' => 1,
            'pieza_clave_categorias_id' => config('constants.pieza_clave_categorias.petrografia')
        ]);
        PiezaClaveCampos::create([
            'campo' => 'Tamaño de los granos (antiplástico)',
            'slug' => Str::kebab('pet tamaño de los granos'),
            'lista' => config('constants.lista_valores.petrografia.tamaño_granos'),
            'pieza_clave_categorias_id' => config('constants.pieza_clave_categorias.petrografia')
        ]);
        PiezaClaveCampos::create([
            'campo' => 'Composición',
            'slug' => Str::kebab('micro composicion'),
            'pieza_clave_categorias_id' => config('constants.pieza_clave_categorias.microscopio_electronico_de_barrido')
        ]);
        DB::table('pieza_clave_datos')->where('posicion',93)->delete();
        DB::table('pieza_clave_campos')->where('id',93)->delete();
    }
}
