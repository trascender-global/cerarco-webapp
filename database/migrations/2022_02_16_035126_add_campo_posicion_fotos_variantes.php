<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddCampoPosicionFotosVariantes extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
     public function up()
    {
        Schema::table('fotos_variantes', function (Blueprint $table) {
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
        Schema::table('fotos_variantes', function (Blueprint $table) {
            $table->dropColumn('posicion');
        });
    }
}
