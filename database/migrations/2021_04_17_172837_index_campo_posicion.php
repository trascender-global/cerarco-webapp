<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class IndexCampoPosicion extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::disableForeignKeyConstraints();
        Schema::table('pieza_clave_datos', function (Blueprint $table) {
            $table->unsignedBigInteger('posicion')->change();
        });
        Schema::table('pieza_clave_datos', function (Blueprint $table) {
            $table->foreign('posicion')->references('id')->on('pieza_clave_campos');
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
            $table->dropForeign('pieza_clave_datos_posicion_foreign');
        });
    }
}
