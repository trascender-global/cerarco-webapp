<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class ListaValores extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {

        Schema::disableForeignKeyConstraints();
        DB::table('lista_valores')->truncate();

        try {
            Artisan::call('db:seed', ['--class' => 'ListaValoresSeeder', '--force' => true]);
        }catch (\Exception $e){
            Artisan::output('salio');
        }
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        //
    }
}
