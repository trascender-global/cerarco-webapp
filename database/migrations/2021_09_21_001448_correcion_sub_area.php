<?php

use App\Models\ListaValores;
use Illuminate\Database\Migrations\Migration;
use Illuminate\Support\Str;

class CorrecionSubArea extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {

        if (ListaValores::where('slug', 'can')
            ->where('lista_id', config('constants.lista_valores.datos_generales.subregion_geografica'))
            ->exists()) {
            $can = ListaValores::where('slug', 'can')
                ->where('lista_id', config('constants.lista_valores.datos_generales.subregion_geografica'))
                ->first();

            $can->valor = '(cax) Cañón del Cauca';
            $can->slug  = 'cax';
            $can->save();
        }

        if (!ListaValores::where('slug', 'mag')
            ->where('lista_id', config('constants.lista_valores.datos_generales.subregion_geografica'))
            ->exists()) {
            $mag = ListaValores::create([
                'valor'    => '(mag) Bajo Magdalena',
                'slug'     => Str::kebab('mag'),
                'lista_id' => config('constants.lista_valores.datos_generales.subregion_geografica')
            ]);
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
