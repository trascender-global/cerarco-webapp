<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class DeleteConstrainsFichas extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {

        Schema::disableForeignKeyConstraints();

        Schema::table('ficha_meta_data', function (Blueprint $table) {
            $table->dropForeign(['ficha_id']);
        });
        Schema::table('ficha_meta_data', function (Blueprint $table) {
            $table->dropColumn('ficha_id');
        });
        Schema::table('ficha_meta_data', function (Blueprint $table) {
            $table->foreignId('ficha_id')
                ->after('valor');
        });

        Schema::table('fichas', function (Blueprint $table) {
            $table->dropForeign(['user_id']);
        });
        Schema::table('fichas', function (Blueprint $table) {
            $table->dropColumn('user_id');
        });
        Schema::table('fichas', function (Blueprint $table) {
            $table->foreignId('user_id')
                ->after('codigo_modelo');
        });

    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        /*
        Schema::table('ficha_meta_data', function (Blueprint $table) {
            //
        });

        Schema::table('fichas', function (Blueprint $table) {
            //
        });
        */
    }
}
