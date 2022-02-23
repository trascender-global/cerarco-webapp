<?php

namespace Database\Seeders;

use App\Models\TipoListas;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Schema;
use Illuminate\Support\Str;

class TipoListasSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Schema::disableForeignKeyConstraints();
        DB::table('tipo_listas')->truncate();
        TipoListas::create([
            'modelo' => 'Datos generales',
            'slug'   => Str::kebab('Datos generales'),
        ]);
        TipoListas::create([
            'modelo' => 'Cronología del modelo',
            'slug'   => Str::kebab('Cronologia del modelo'),
        ]);
        TipoListas::create([
            'modelo' => 'Descripción formal',
            'slug'   => Str::kebab('Descripcion formal'),
        ]);
        TipoListas::create([
            'modelo' => 'Decoraciones',
            'slug'   => Str::kebab('Decoraciones'),
        ]);
        TipoListas::create([
            'modelo' => 'Descripción técnica',
            'slug'   => Str::kebab('Descripcion técnica'),
        ]);
        TipoListas::create([
            'modelo' => 'Descripción Fragmento',
            'slug'   => Str::kebab('Descripcion Fragmento'),
        ]);
        TipoListas::create([
            'modelo' => 'Petrografia',
            'slug'   => Str::kebab('Petrografia'),
        ]);
        TipoListas::create([
            'modelo' => 'Difracción de rayos X',
            'slug'   => Str::kebab('Difraccion de rayos X'),
        ]);
        TipoListas::create([
            'modelo' => 'Datos generales Pieza clave',
            'slug'   => Str::kebab('Datos generales Pieza clave'),
        ]);
        TipoListas::create([
            'modelo' => 'Fragmento',
            'slug'   => Str::kebab('Fragmento'),
        ]);
        TipoListas::create([
            'modelo' => 'Contexto',
            'slug'   => Str::kebab('Contexto'),
        ]);
        TipoListas::create([
            'modelo' => 'Otros',
            'slug'   => Str::kebab('Otros'),
        ]);
    }
}
