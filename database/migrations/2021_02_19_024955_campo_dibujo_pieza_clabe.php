<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CampoDibujoPiezaClabe extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('pieza_claves', function (Blueprint $table) {
            $table->string('dibujo')->after('pieza_clave');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('pieza_claves', function (Blueprint $table) {
            $table->dropColumn('dibujo');
        });
    }
}
