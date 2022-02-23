<?php

namespace Database\Seeders;

use App\Models\Departamento;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Schema;

class DepartamentosSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Schema::disableForeignKeyConstraints();
        DB::table('departamentos')->truncate();

        Departamento::create(['codigo' => '05', 'nombre' => 'Antioquia',]);
        Departamento::create(['codigo' => '08', 'nombre' => 'Atlántico',]);
        Departamento::create(['codigo' => '11', 'nombre' => 'Bogotá, D.C.',]);
        Departamento::create(['codigo' => '13', 'nombre' => 'Bolívar',]);
        Departamento::create(['codigo' => '15', 'nombre' => 'Boyacá',]);
        Departamento::create(['codigo' => '17', 'nombre' => 'Caldas',]);
        Departamento::create(['codigo' => '18', 'nombre' => 'Caquetá',]);
        Departamento::create(['codigo' => '19', 'nombre' => 'Cauca',]);
        Departamento::create(['codigo' => '20', 'nombre' => 'Cesar',]);
        Departamento::create(['codigo' => '23', 'nombre' => 'Córdoba',]);
        Departamento::create(['codigo' => '25', 'nombre' => 'Cundinamarca',]);
        Departamento::create(['codigo' => '27', 'nombre' => 'Chocó',]);
        Departamento::create(['codigo' => '41', 'nombre' => 'Huila',]);
        Departamento::create(['codigo' => '44', 'nombre' => 'La Guajira',]);
        Departamento::create(['codigo' => '47', 'nombre' => 'Magdalena',]);
        Departamento::create(['codigo' => '50', 'nombre' => 'Meta',]);
        Departamento::create(['codigo' => '52', 'nombre' => 'Nariño',]);
        Departamento::create(['codigo' => '54', 'nombre' => 'Norte de Santander',]);
        Departamento::create(['codigo' => '63', 'nombre' => 'Quindio',]);
        Departamento::create(['codigo' => '66', 'nombre' => 'Risaralda',]);
        Departamento::create(['codigo' => '68', 'nombre' => 'Santander',]);
        Departamento::create(['codigo' => '70', 'nombre' => 'Sucre',]);
        Departamento::create(['codigo' => '73', 'nombre' => 'Tolima',]);
        Departamento::create(['codigo' => '76', 'nombre' => 'Valle del Cauca',]);
        Departamento::create(['codigo' => '81', 'nombre' => 'Arauca',]);
        Departamento::create(['codigo' => '85', 'nombre' => 'Casanare',]);
        Departamento::create(['codigo' => '86', 'nombre' => 'Putumayo',]);
        Departamento::create(['codigo' => '88', 'nombre' => 'Archipiélago de San Andrés, Providencia y Santa Catalina',]);
        Departamento::create(['codigo' => '91', 'nombre' => 'Amazonas',]);
        Departamento::create(['codigo' => '94', 'nombre' => 'Guainía',]);
        Departamento::create(['codigo' => '95', 'nombre' => 'Guaviare',]);
        Departamento::create(['codigo' => '97', 'nombre' => 'Vaupés',]);
        Departamento::create(['codigo' => '99', 'nombre' => 'Vichada',]);

    }
}
