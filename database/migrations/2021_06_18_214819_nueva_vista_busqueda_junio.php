<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class NuevaVistaBusquedaJunio extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        $query    = [];
        $busqueda = collect(config('busqueda'));
        $primera  = $busqueda->first();
        $from     = "";
        $anterior = null;

        foreach ($busqueda as $key => $columna) {
            $query[] = " pcd_{$columna}.valor as valor_{$columna} ";
            $query[] = " pcd_{$columna}.valor_slug as valor_slug_{$columna} ";
            $query[] = " pcd_{$columna}.posicion as posicion_{$columna} ";
            if (is_null($anterior)) {
                $query[] = " pcd_{$columna}.pieza_clave_id as pieza_clave_id";
            }

            $from = is_null($anterior)
                ? " from pieza_clave_datos pcd_".$primera
                : $from." left join pieza_clave_datos pcd_{$columna} on pcd_{$anterior}.pieza_clave_id = pcd_{$columna}.pieza_clave_id and pcd_{$columna}.posicion = {$columna} ";

            $anterior = $columna;

        }
        $where = " WHERE pcd_{$primera}.posicion = {$primera} ";
        DB::statement(" DROP VIEW IF EXISTS busquedas ");
        DB::statement(" CREATE VIEW busquedas AS SELECT ".implode(' , ', $query).$from.$where);
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
