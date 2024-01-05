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

        \App\Models\JenisSurat::create([
            'jenis_surat' => 'Surat keputusan',
        ]);
        \App\Models\JenisSurat::create([
            'jenis_surat' => 'Surat instruksi',
        ]);
        \App\Models\JenisSurat::create([
            'jenis_surat' => 'Surat tugas',
        ]);
        \App\Models\JenisSurat::create([
            'jenis_surat' => 'Surat edaran',
        ]);
        \App\Models\JenisSurat::create([
            'jenis_surat' => 'Surat panggilan',
        ]);
        \App\Models\JenisSurat::create([
            'jenis_surat' => 'Nota dinas',
        ]);
        \App\Models\JenisSurat::create([
            'jenis_surat' => 'Pengumuman',
        ]);
    }
}
