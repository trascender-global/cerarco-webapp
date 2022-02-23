<?php

use App\Models\PiezaClaveCampos;
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use Illuminate\Support\Str;

class CuadrandoListas extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        $pieza = PiezaClaveCampos::where([
            'campo' => 'Pieza Clave Por',
            'slug' => Str::kebab('dg Pieza Clave Por'),
            //'lista' => config('constants.lista_valores.datos_generales.contexto'),
            'pieza_clave_categorias_id' => config('constants.pieza_clave_categorias.datos_generales')
        ])->first();
        $pieza->lista = config('constants.lista_valores.datos_generales_pieza_clave.tipo_de_pieza');
        $pieza->save();
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
