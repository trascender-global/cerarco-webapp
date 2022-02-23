<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateGlosarioMenusTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::disableForeignKeyConstraints();
        Schema::create('glosario_menus', function (Blueprint $table) {
            $table->id();
            $table->string('nombre',255);
            $table->string('descripcion')->default('');
            $table->string('slug')->unique();
            $table->foreignId('glosario_menu_id')->cascadeOnUpdate()->constrained();
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
        Schema::disableForeignKeyConstraints();
        Schema::dropIfExists('glosario_menus');
    }
}
