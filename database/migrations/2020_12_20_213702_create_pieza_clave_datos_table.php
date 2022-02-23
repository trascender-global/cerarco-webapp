<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePiezaClaveDatosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('pieza_clave_datos', function (Blueprint $table) {
            $table->id();
            $table->string('campo');
            $table->longText('valor');
            $table->longText('config');
            $table->foreignId('pieza_clave_id')->constrained('pieza_claves');
            $table->softDeletes();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('pieza_clave_datos');
    }
}
