<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddSlugPiezaClaveCampos extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('pieza_clave_campos', function (Blueprint $table) {
            $table->string('slug')->after('campo');
            $table->smallInteger('textarea')->after('slug')->default(0);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('pieza_clave_campos', function (Blueprint $table) {
            $table->dropColumn(['slug','textarea']);
        });
    }
}
