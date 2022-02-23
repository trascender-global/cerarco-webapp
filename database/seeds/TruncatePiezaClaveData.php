<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Schema;

class TruncatePiezaClaveData extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Schema::disableForeignKeyConstraints();
        DB::table('modelos')->truncate();
        DB::table('pieza_claves')->truncate();
        DB::table('pieza_clave_datos')->truncate();
    }
}
