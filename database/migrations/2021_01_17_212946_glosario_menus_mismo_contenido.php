<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class GlosarioMenusMismoContenido extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('glosario_menus', function (Blueprint $table) {
            $table->unsignedBigInteger('mismo_contenido_id');
            $table->foreign('mismo_contenido_id')->references('id')->on('glosario_menus');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('glosario_menus', function (Blueprint $table) {
            $table->dropForeign(['mismo_contenido_id']);
        });
    }
}
