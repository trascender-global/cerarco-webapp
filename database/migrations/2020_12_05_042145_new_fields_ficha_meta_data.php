<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class NewFieldsFichaMetaData extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('ficha_meta_data', function (Blueprint $table) {
            $table->string('posicion')->after('valor');
            $table->string('tipo')->after('posicion')->default('0');
            $table->string('lista')->after('tipo');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('ficha_meta_data', function (Blueprint $table) {
            $table->dropColumn(['posicion', 'tipo', 'lista']);
        });
    }
}
