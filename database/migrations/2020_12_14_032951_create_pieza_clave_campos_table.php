<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePiezaClaveCamposTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('pieza_clave_campos', function (Blueprint $table) {
            $table->id();
            $table->longText('campo');
            $table->smallInteger('lista')->default(0);
            $table->foreignId('pieza_clave_categorias_id')
                ->constrained();
            $table->timestamps();
            $table->softDeletes();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('pieza_clave_campos');
    }
}
