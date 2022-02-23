<?php

namespace Database\Seeders;

use App\Models\Listas;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Schema;
use Illuminate\Support\Str;

class ListasSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Schema::disableForeignKeyConstraints();
        DB::table('listas')->truncate();
        /**
         * Listas - Datos Generales
         */
        Listas::create([
            'nombre'        => 'Área geográfica',
            'slug'          => Str::kebab('Area geografica'),
            'tipo_lista_id' => config('constants.tipo_listas.datos_generales')
        ]);
        Listas::create([
            'nombre'        => 'Subregión geográfica',
            'slug'          => Str::kebab('Subregion geografica'),
            'tipo_lista_id' => config('constants.tipo_listas.datos_generales')
        ]);
        Listas::create([
            'nombre'        => 'Departamento',
            'slug'          => Str::kebab('Departamento'),
            'tipo_lista_id' => config('constants.tipo_listas.datos_generales')
        ]);
        Listas::create([
            'nombre'        => 'Publicación - estado',
            'slug'          => Str::kebab('Publicacion estado'),
            'tipo_lista_id' => config('constants.tipo_listas.datos_generales')
        ]);
        Listas::create([
            'nombre'        => 'Confiabilidad del Modelo',
            'slug'          => Str::kebab('Confiabilidad del Modelo'),
            'tipo_lista_id' => config('constants.tipo_listas.datos_generales')
        ]);
        Listas::create([
            'nombre'        => 'Confiabilidad modelo (o variante) Modelo conformado por piezas procedentes de:',
            'slug'          => Str::kebab('Confiabilidad conformado por piezas procedentes'),
            'tipo_lista_id' => config('constants.tipo_listas.datos_generales')
        ]);
        Listas::create([
            'nombre'        => 'Integridad de la pieza ',
            'slug'          => Str::kebab('Integridad de la pieza '),
            'tipo_lista_id' => config('constants.tipo_listas.datos_generales')
        ]);
        Listas::create([
            'nombre'        => 'Funcion Primaria',
            'slug'          => Str::kebab('Funcion Primaria'),
            'tipo_lista_id' => config('constants.tipo_listas.datos_generales')
        ]);
        Listas::create([
            'nombre'        => 'Contexto',
            'slug'          => Str::kebab('Contexto'),
            'tipo_lista_id' => config('constants.tipo_listas.datos_generales')
        ]);

        /**
         * Cronología del modelo
         */
        Listas::create([
            'nombre'        => 'a.C - d. C',
            'slug'          => Str::kebab('a.C - d. C'),
            'tipo_lista_id' => config('constants.tipo_listas.cronologia_del_modelo')
        ]);
        Listas::create([
            'nombre'        => 'Método de datación',
            'slug'          => Str::kebab('Metodo de datacion'),
            'tipo_lista_id' => config('constants.tipo_listas.cronologia_del_modelo')
        ]);

        /**
         * Descripción formal
         */
        Listas::create([
            'nombre'        => 'Forma Base',
            'slug'          => Str::kebab('Forma Base'),
            'tipo_lista_id' => config('constants.tipo_listas.descripcion_formal')
        ]);
        Listas::create([
            'nombre'        => 'Boca',
            'slug'          => Str::kebab('Boca'),
            'tipo_lista_id' => config('constants.tipo_listas.descripcion_formal')
        ]);
        Listas::create([
            'nombre'        => 'Borde',
            'slug'          => Str::kebab('Borde'),
            'tipo_lista_id' => config('constants.tipo_listas.descripcion_formal')
        ]);
        Listas::create([
            'nombre'        => 'Labio',
            'slug'          => Str::kebab('Labio'),
            'tipo_lista_id' => config('constants.tipo_listas.descripcion_formal')
        ]);
        Listas::create([
            'nombre'        => 'Cuello',
            'slug'          => Str::kebab('Cuello'),
            'tipo_lista_id' => config('constants.tipo_listas.descripcion_formal')
        ]);
        Listas::create([
            'nombre'        => 'Hombro',
            'slug'          => Str::kebab('Hombro'),
            'tipo_lista_id' => config('constants.tipo_listas.descripcion_formal')
        ]);
        Listas::create([
            'nombre'        => 'Cuerpo',
            'slug'          => Str::kebab('Cuerpo'),
            'tipo_lista_id' => config('constants.tipo_listas.descripcion_formal')
        ]);
        Listas::create([
            'nombre'        => 'Fondo',
            'slug'          => Str::kebab('Fondo'),
            'tipo_lista_id' => config('constants.tipo_listas.descripcion_formal')
        ]);
        Listas::create([
            'nombre'        => 'Base',
            'slug'          => Str::kebab('Base'),
            'tipo_lista_id' => config('constants.tipo_listas.descripcion_formal')
        ]);
        Listas::create([
            'nombre'        => 'Soporte',
            'slug'          => Str::kebab('Soporte'),
            'tipo_lista_id' => config('constants.tipo_listas.descripcion_formal')
        ]);
        Listas::create([
            'nombre'        => 'Asa',
            'slug'          => Str::kebab('Asa'),
            'tipo_lista_id' => config('constants.tipo_listas.descripcion_formal')
        ]);
        Listas::create([
            'nombre'        => 'Agarradera',
            'slug'          => Str::kebab('Agarradera'),
            'tipo_lista_id' => config('constants.tipo_listas.descripcion_formal')
        ]);
        Listas::create([
            'nombre'        => 'Mango',
            'slug'          => Str::kebab('Mango'),
            'tipo_lista_id' => config('constants.tipo_listas.descripcion_formal')
        ]);
        Listas::create([
            'nombre'        => 'Vertedera',
            'slug'          => Str::kebab('Vertedera'),
            'tipo_lista_id' => config('constants.tipo_listas.descripcion_formal')
        ]);
        Listas::create([
            'nombre'        => 'Caras',
            'slug'          => Str::kebab('Caras'),
            'tipo_lista_id' => config('constants.tipo_listas.descripcion_formal')
        ]);
        Listas::create([
            'nombre'        => 'Tipo de Figurina',
            'slug'          => Str::kebab('Tipo de Figurina'),
            'tipo_lista_id' => config('constants.tipo_listas.descripcion_formal')
        ]);
        Listas::create([
            'nombre'        => 'Tipo de Instrumento',
            'slug'          => Str::kebab('Tipo de Instrumento'),
            'tipo_lista_id' => config('constants.tipo_listas.descripcion_formal')
        ]);

        /**
         * Decoraciones
         */
        Listas::create([
            'nombre'        => 'Decoración',
            'slug'          => Str::kebab('Decoracion'),
            'tipo_lista_id' => config('constants.tipo_listas.decoraciones')
        ]);
        Listas::create([
            'nombre'        => 'Tratamiento de la superficie',
            'slug'          => Str::kebab('Tratamiento de la superficie'),
            'tipo_lista_id' => config('constants.tipo_listas.decoraciones')
        ]);
        Listas::create([
            'nombre'        => 'Localización dentro de la forma',
            'slug'          => Str::kebab('Localizacion dentro de la forma'),
            'tipo_lista_id' => config('constants.tipo_listas.decoraciones')
        ]);

        /**
         * Descripción técnica
         */
        Listas::create([
            'nombre'        => 'Acabado de la superficie',
            'slug'          => Str::kebab('Acabado de la superficie'),
            'tipo_lista_id' => config('constants.tipo_listas.descripcion_tecnica')
        ]);
        Listas::create([
            'nombre'        => 'Textura',
            'slug'          => Str::kebab('Textura'),
            'tipo_lista_id' => config('constants.tipo_listas.descripcion_tecnica')
        ]);
        Listas::create([
            'nombre'        => 'Granulometría',
            'slug'          => Str::kebab('Granulometria'),
            'tipo_lista_id' => config('constants.tipo_listas.descripcion_tecnica')
        ]);
        Listas::create([
            'nombre'        => 'Ambiente de cocción',
            'slug'          => Str::kebab('dt Ambiente de coccion'),
            'tipo_lista_id' => config('constants.tipo_listas.descripcion_tecnica')
        ]);
        Listas::create([
            'nombre'        => 'Técnica de manufactura',
            'slug'          => Str::kebab('Tecnica de manufactura'),
            'tipo_lista_id' => config('constants.tipo_listas.descripcion_tecnica')
        ]);

        /**
         * Descripción Fragmento
         */
        Listas::create([
            'nombre'        => 'Confiabilidad de la reconstrucción',
            'slug'          => Str::kebab('df Confiabilidad de la reconstruccion'),
            'tipo_lista_id' => config('constants.tipo_listas.descripcion_fragmento')
        ]);

        /**
         * Petrografia
         */
        Listas::create([
            'nombre'        => 'Composición inorganica (antiplástico)',
            'slug'          => Str::kebab('Composicion inorganica antiplastico'),
            'tipo_lista_id' => config('constants.tipo_listas.petrografia')
        ]);
        Listas::create([
            'nombre'        => 'Composición orgánica (antiplástico)',
            'slug'          => Str::kebab('Composicion organica antiplastico'),
            'tipo_lista_id' => config('constants.tipo_listas.petrografia')
        ]);
        Listas::create([
            'nombre'        => 'Forma de los granos (antiplástico)',
            'slug'          => Str::kebab('Forma de los granos antiplastico'),
            'tipo_lista_id' => config('constants.tipo_listas.petrografia')
        ]);
        Listas::create([
            'nombre'        => 'Esfericidad de los granos (antiplástico)',
            'slug'          => Str::kebab('Esfericidad de los granos antiplastico'),
            'tipo_lista_id' => config('constants.tipo_listas.petrografia')
        ]);
        Listas::create([
            'nombre'        => 'Disposición (antiplástico)',
            'slug'          => Str::kebab('Disposicion antiplastico'),
            'tipo_lista_id' => config('constants.tipo_listas.petrografia')
        ]);
        Listas::create([
            'nombre'        => 'Superficie interna',
            'slug'          => Str::kebab('Superficie interna'),
            'tipo_lista_id' => config('constants.tipo_listas.petrografia')
        ]);
        Listas::create([
            'nombre'        => 'Superficie externa',
            'slug'          => Str::kebab('Superficie externa'),
            'tipo_lista_id' => config('constants.tipo_listas.petrografia')
        ]);
        Listas::create([
            'nombre'        => 'Ambiente de cocción',
            'slug'          => Str::kebab('P Ambiente de coccion'),
            'tipo_lista_id' => config('constants.tipo_listas.petrografia')
        ]);

        /**
         * Difracción de rayos X
         */
        Listas::create([
            'nombre'        => 'Composición de la pasta (DRX orientado)',
            'slug'          => Str::kebab('Composicion de la pasta drx orientado'),
            'tipo_lista_id' => config('constants.tipo_listas.difraccion_de_rayos_x')
        ]);
        Listas::create([
            'nombre'        => 'Composición inorgánica segundo nivel',
            'slug'          => Str::kebab('Composicion inorganica segundo nivel'),
            'tipo_lista_id' => config('constants.tipo_listas.difraccion_de_rayos_x')
        ]);
        Listas::create([
            'nombre'        => 'Composición pigmentos',
            'slug'          => Str::kebab('Composicion pigmentos'),
            'tipo_lista_id' => config('constants.tipo_listas.difraccion_de_rayos_x')
        ]);

        /**
         * Datos generales Pieza clave
         */
        Listas::create([
            'nombre'        => 'Tipo de pieza',
            'slug'          => Str::kebab('Tipo de pieza'),
            'tipo_lista_id' => config('constants.tipo_listas.datos_generales_pieza_clave')
        ]);

        /**
         * Fragmento
         */
        Listas::create([
            'nombre'        => 'Localización dentro de la forma',
            'slug'          => Str::kebab('Localizacoón dentro de la forma'),
            'tipo_lista_id' => config('constants.tipo_listas.fragmento')
        ]);
        Listas::create([
            'nombre'        => 'Porcentaje en la forma',
            'slug'          => Str::kebab('Porcentaje en la forma'),
            'tipo_lista_id' => config('constants.tipo_listas.fragmento')
        ]);
        Listas::create([

            'nombre'        => 'Fragmento Confiabilidad de la reconstrucción',
            'slug'          => Str::kebab('Confiabilidad de la reconstruccion'),
            'tipo_lista_id' => config('constants.tipo_listas.fragmento')
        ]);

        /**
         * Contexto
         */
        Listas::create([
            'nombre'        => 'Procedencia y seguridad del hallazgo',
            'slug'          => Str::kebab('Procedencia y seguridad del hallazgo'),
            'tipo_lista_id' => config('constants.tipo_listas.contexto')
        ]);
        Listas::create([
            'nombre'        => 'Procedencia, relaciones y seguridad de la pieza (o fragmento)',
            'slug'          => Str::kebab('Procedencia relaciones seguridad pieza o fragmento'),
            'tipo_lista_id' => config('constants.tipo_listas.contexto')
        ]);

        /**
         * Otros
         */
        Listas::create([
            'nombre'        => 'Diligenciado por',
            'slug'          => Str::kebab('Diligenciado por'),
            'tipo_lista_id' => config('constants.tipo_listas.otros')
        ]);
        Listas::create([
            'nombre'        => 'Colección',
            'slug'          => Str::kebab('Coleccion'),
            'tipo_lista_id' => config('constants.tipo_listas.otros')
        ]);

    }
}
