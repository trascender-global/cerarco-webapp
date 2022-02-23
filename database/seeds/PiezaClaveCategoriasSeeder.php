<?php

namespace Database\Seeders;

use App\Models\PiezaClaveCategorias;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Schema;
use Illuminate\Support\Str;

class PiezaClaveCategoriasSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Schema::disableForeignKeyConstraints();
        DB::table('pieza_clave_categorias')->truncate();
        /**
         * Listas - Datos Generales
         */
        PiezaClaveCategorias::create([
            'categoria'        => 'Datos Generales',
            'slug'          => Str::kebab('Datos Generales'),
        ]);
        PiezaClaveCategorias::create([
            'categoria'        => 'Cronología',
            'slug'          => Str::kebab('Cronología '),
        ]);
        PiezaClaveCategorias::create([
            'categoria'        => 'Fragmento',
            'slug'          => Str::kebab('Fragmento'),
        ]);
        PiezaClaveCategorias::create([
            'categoria'        => 'Contexto',
            'slug'          => Str::kebab('Contexto'),
        ]);
        PiezaClaveCategorias::create([
            'categoria'        => 'Descripcion Formal',
            'slug'          => Str::kebab('Descripcion Formal'),
        ]);
        PiezaClaveCategorias::create([
            'categoria'        => 'Decoracion',
            'slug'          => Str::kebab('Decoracion'),
        ]);
        PiezaClaveCategorias::create([
            'categoria'        => 'Descripcion Tecnica',
            'slug'          => Str::kebab('Descripcion Tecnica'),
        ]);
        PiezaClaveCategorias::create([
            'categoria'        => 'Petrografia',
            'slug'          => Str::kebab('Petrografia'),
        ]);
        PiezaClaveCategorias::create([
            'categoria'        => 'Difracion de Rayos X',
            'slug'          => Str::kebab('Difracion de Rayos X'),
        ]);
        PiezaClaveCategorias::create([
            'categoria'        => 'Fotografias',
            'slug'          => Str::kebab('Fotografias'),
        ]);
        PiezaClaveCategorias::create([
            'categoria'        => 'Dibujos',
            'slug'          => Str::kebab('Dibujos'),
        ]);
        PiezaClaveCategorias::create([
            'categoria'        => 'Otros',
            'slug'          => Str::kebab('Otros'),
        ]);

    }
}
