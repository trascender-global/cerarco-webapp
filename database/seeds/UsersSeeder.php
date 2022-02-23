<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Schema;
use Illuminate\Support\Str;

class UsersSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Schema::disableForeignKeyConstraints();
        DB::table('users')->truncate();
        User::create(
            [
                'name'              => 'Felipe',
                'email'             => 'dfelipegaitanh@gmail.com',
                'email_verified_at' => now(),
                'password'          => '$2y$12$EhSXJ7/m6Y9Kx/8PFk8Xp..3iSVR/a7AHIyR8nUo.2dS5ofA34hOy',
                'role_id'           => config('constants.roles.super_admin'),
                'remember_token'    => Str::random(10),
            ]
        );
        User::create(
            [
                'name'              => 'Nathali Marin',
                'email'             => 'nathaly198@gmail.com',
                'email_verified_at' => now(),
                'password'          => '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', // password
                'role_id'           => config('constants.roles.admin'),
                'remember_token'    => Str::random(10),
            ]
        );
        User::create(
            [
                'name'              => 'Alberto Sacarcina',
                'email'             => 'asarcina@icanh.gov.co',
                'email_verified_at' => now(),
                'password'          => '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', // password
                'role_id'           => config('constants.roles.admin'),
                'remember_token'    => Str::random(10),
            ]
        );
        User::create(
            [
                'name'              => 'Juliana Campuzano',
                'email'             => 'jcampuzano@icanh.gov.co',
                'email_verified_at' => now(),
                'password'          => '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', // password
                'role_id'           => config('constants.roles.admin'),
                'remember_token'    => Str::random(10),
            ]
        );
        //
    }
}
