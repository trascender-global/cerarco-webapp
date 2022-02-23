<?php

use App\Models\ListaValores;
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Schema;
use Illuminate\Support\Str;

class ModeladoDecoracion1 extends Migration
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

        ListaValores::create([
            'valor'    => 'Ahumado',
            'slug'     => Str::kebab('Decoracion Ahumado'),
            'lista_id' => config('constants.lista_valores.decoraciones.decoracion')
        ]);
        ListaValores::create([
            'valor'    => 'Aplicación',
            'slug'     => Str::kebab('Decoracion Aplicacion'),
            'lista_id' => config('constants.lista_valores.decoraciones.decoracion')
        ]);
        ListaValores::create([
            'valor'    => 'Baño o engobe',
            'slug'     => Str::kebab('Decoracion Bano o engobe'),
            'lista_id' => config('constants.lista_valores.decoraciones.decoracion')
        ]);
        ListaValores::create([
            'valor'    => 'Bruñido',
            'slug'     => Str::kebab('Decoracion Brunido'),
            'lista_id' => config('constants.lista_valores.decoraciones.decoracion')
        ]);
        ListaValores::create([
            'valor'    => 'Calado',
            'slug'     => Str::kebab('Decoracion Calado'),
            'lista_id' => config('constants.lista_valores.decoraciones.decoracion')
        ]);
        ListaValores::create([
            'valor'    => 'Esgrafiado',
            'slug'     => Str::kebab('Decoracion Esgrafiado'),
            'lista_id' => config('constants.lista_valores.decoraciones.decoracion')
        ]);
        ListaValores::create([
            'valor'    => 'Estampado',
            'slug'     => Str::kebab('Decoracion Estampado'),
            'lista_id' => config('constants.lista_valores.decoraciones.decoracion')
        ]);
        ListaValores::create([
            'valor'    => 'Excisión',
            'slug'     => Str::kebab('Decoracion Excision'),
            'lista_id' => config('constants.lista_valores.decoraciones.decoracion')
        ]);
        ListaValores::create([
            'valor'    => 'Impresión con cestería',
            'slug'     => Str::kebab('Decoracion Impresion con cesteria'),
            'lista_id' => config('constants.lista_valores.decoraciones.decoracion')
        ]);
        ListaValores::create([
            'valor'    => 'Impresión con dedo',
            'slug'     => Str::kebab('Decoracion Impresion con dedo'),
            'lista_id' => config('constants.lista_valores.decoraciones.decoracion')
        ]);
        ListaValores::create([
            'valor'    => 'Impresión con hojas',
            'slug'     => Str::kebab('Decoracion Impresion con hojas'),
            'lista_id' => config('constants.lista_valores.decoraciones.decoracion')
        ]);
        ListaValores::create([
            'valor'    => 'Impresión con instrumento',
            'slug'     => Str::kebab('Decoracion Impresion con instrumento'),
            'lista_id' => config('constants.lista_valores.decoraciones.decoracion')
        ]);
        ListaValores::create([
            'valor'    => 'Incisión',
            'slug'     => Str::kebab('Decoracion Incision'),
            'lista_id' => config('constants.lista_valores.decoraciones.decoracion')
        ]);
        ListaValores::create([
            'valor'    => 'Perforado',
            'slug'     => Str::kebab('Decoracion Perforado'),
            'lista_id' => config('constants.lista_valores.decoraciones.decoracion')
        ]);
        ListaValores::create([
            'valor'    => 'Pintura negativa',
            'slug'     => Str::kebab('Decoracion Pintura negativa'),
            'lista_id' => config('constants.lista_valores.decoraciones.decoracion')
        ]);
        ListaValores::create([
            'valor'    => 'Pintura positiva',
            'slug'     => Str::kebab('Decoracion Pintura positiva'),
            'lista_id' => config('constants.lista_valores.decoraciones.decoracion')
        ]);
        ListaValores::create([
            'valor'    => 'Sin decoración',
            'slug'     => Str::kebab('Decoracion Sin decoracion'),
            'lista_id' => config('constants.lista_valores.decoraciones.decoracion')
        ]);
        ListaValores::create([
            'valor'    => 'Ungulado',
            'slug'     => Str::kebab('Decoracion Ungulado'),
            'lista_id' => config('constants.lista_valores.decoraciones.decoracion')
        ]);
        ListaValores::create([
            'valor'    => 'Otra',
            'slug'     => Str::kebab('Decoracion Otra'),
            'lista_id' => config('constants.lista_valores.decoraciones.decoracion')
        ]);
        ListaValores::create([
            'valor'    => 'No aplica',
            'slug'     => Str::kebab('Decoracion No aplica'),
            'lista_id' => config('constants.lista_valores.decoraciones.decoracion')
        ]);
        ListaValores::create([
            'valor'    => 'Modelado',
            'slug'     => Str::kebab('Decoracion Modelado'),
            'lista_id' => config('constants.lista_valores.decoraciones.decoracion')
        ]);
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
