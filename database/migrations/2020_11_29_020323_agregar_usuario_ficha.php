<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AgregarUsuarioFicha extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('fichas', function (Blueprint $table) {
            $table->foreignId('user_id')
                ->after('codigo_modelo')
                ->constrained();

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('fichas', function (Blueprint $table) {
            $table->dropForeign('fichas_user_id_foreign');
            $table->dropColumn('user_id');
        });
    }
}
