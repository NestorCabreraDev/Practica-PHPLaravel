<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        //Creación de Admin para accesar a la aplicacion

        DB::table('docente')->insert([
            'nombre' => 'admin',
            'apellido' => 'admin',
            'email' => 'admin@admin.com',
            'password' => Hash::make('admin')
        ]);
    }
}
