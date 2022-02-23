<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddCampoIdConfigPiezaClaveDatos extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('pieza_clave_datos', function (Blueprint $table) {
            $table->smallInteger('posicion')->after('valor_slug');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('pieza_clave_datos', function (Blueprint $table) {
            $table->dropColumn('posicion');
        });
    }
}
