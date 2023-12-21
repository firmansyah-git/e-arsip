<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class JenisSuratSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        \App\Models\JenisSurat::create([
            'jenis_surat' => 'Surat undangan',
        ]);

        \App\Models\JenisSurat::create([
            'jenis_surat' => 'Surat dinas',
        ]);
    }
}
