<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class ModificarCampoSlug extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('pieza_clave_datos', function (Blueprint $table) {
            $table->dropColumn('valor_slug');
        });
        Schema::table('pieza_clave_datos', function (Blueprint $table) {
            $table->text('valor_slug')->after('valor');
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
            //
        });
    }
}
