<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class IndicesTablaPiezaClaveDatos extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('pieza_clave_datos', function (Blueprint $table) {
            $table->index('posicion');
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
            $table->dropIndex('pieza_clave_datos_posicion_index');
        });
    }
}
