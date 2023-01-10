<?php
namespace Database\Seeders;

use Database\Seeders\CiudadesSeeder;
use Database\Seeders\DepartamentosSeeder;
use Database\Seeders\FichasSeeder;
use Database\Seeders\GlosarioContenidoSeeder;
use Database\Seeders\GlosarioMenuSeeder;
use Database\Seeders\GlosarioSeeder;
use Database\Seeders\ListasSeeder;
use Database\Seeders\ListaValoresSeeder;
use Database\Seeders\PiezaClaveCamposSeeder;
use Database\Seeders\PiezaClaveCategoriasSeeder;
use Database\Seeders\RolesSeeder;
use Database\Seeders\TipoListasSeeder;
use Database\Seeders\TruncatePiezaClaveData;
use Database\Seeders\UsersSeeder;
use Database\Seeders\NewSeeder;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $this->call(NewSeeder::class);
    }
}
