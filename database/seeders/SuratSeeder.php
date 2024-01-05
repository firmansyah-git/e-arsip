<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

use App\Models\Surat;

class SuratSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Surat::create([
            'nomor_surat' => '556/585/IV.3/2023',
            'nama_instansi' => 'PT. Tirta Sriwijaya Maju',
            'tanggal' => '2023-08-14',
            'perihal' => 'Partisipasi dalam rangka mensukseskan kegiatan Parade Perahu Motor Hias',
            'informasi_singkat' => 'Dalam rangka peringatan hari Kemerdekaan Indonesia, diminta agar PT Tirta Sriwijaya Majua (Perseroda) untuk dapat turut berpartisipasi pada kegiatan Parede Perahu Motor Hias',
            'kategori' => 'surat_keluar',
            'file_surat' => '',
            'jenis_surat_id' => '1',
        ]);
    }
}
