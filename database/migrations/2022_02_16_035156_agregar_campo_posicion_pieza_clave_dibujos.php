<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AgregarCampoPosicionPiezaClaveDibujos extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
     public function up()
    {
        Schema::table('pieza_clave_dibujos', function (Blueprint $table) {
            $table->tinyInteger('posicion')->nullable()->after('foto');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('pieza_clave_dibujos', function (Blueprint $table) {
            $table->dropColumn('posicion');
        });
    }
}
