<?php

use App\Models\ListaValores;
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Schema;
use Illuminate\Support\Str;

class ModeladoDecoracion extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {

        Schema::disableForeignKeyConstraints();
        DB::table('lista_valores')->truncate();

        ListaValores::create([
            'valor'    => 'Modelado',
            'slug'     => Str::kebab('Decoracion Modelado'),
            'lista_id' => config('constants.lista_valores.decoraciones.decoracion')
        ]);
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        //
    }
}
