<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // \App\Models\User::factory(10)->create();

        
        \App\Models\RoleUser::create([
            'id' => 1,
            'role' => 'admin',
        ]);
        \App\Models\RoleUser::create([
            'id' => 2,
            'role' => 'kepala',
        ]);
        \App\Models\RoleUser::create([
            'id' => 3,
            'role' => 'pegawai',
        ]);
        
        \App\Models\User::create([
            'nik' => '1234567890',
            'nama' => 'admin',
            'username' => 'admin',
            'password' => bcrypt('admin'), //admin
            'role_id' => 1
        ]);

        \App\Models\User::create([
            'nik' => '0987654321',
            'nama' => 'pegawai',
            'username' => 'pegawai',
            'password' => bcrypt('pegawai'), //admin
            'role_id' => 3
        ]);

        \App\Models\User::create([
            'nik' => '0123456789012',
            'nama' => 'kepala',
            'username' => 'kepala',
            'password' => bcrypt('kepala'), //admin
            'role_id' => 2
        ]);
    }
}
