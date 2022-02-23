<?php

use App\Models\PiezaClaveCampos;
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use Illuminate\Support\Str;

class PiezaClavePorActualizar extends Migration
{
    private $where;

    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        PiezaClaveCampos::where('campo', 'like', 'Pieza Clave Por')
            ->update(['lista' => 0]);
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
