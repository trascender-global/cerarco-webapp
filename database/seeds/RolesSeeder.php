<?php

namespace Database\Seeders;

use App\Models\Role;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;


class RolesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('roles')->truncate();
        Role::upsert([
                ['name' => 'super_admin'],
                ['name' => 'admin'],
                ['name' => 'user'],
            ], ['name']
        );
    }
}
