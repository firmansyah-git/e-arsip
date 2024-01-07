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
            'file_surat' => 'example.pdf',
            'jenis_surat_id' => '1',
            'user_id' => '1'
        ]);

        Surat::create([
            'nomor_surat' => '800/440/IV.1/2023',
            'nama_instansi' => 'Gubernur Sumatera Selatan',
            'tanggal' => '2023-06-26',
            'perihal' => 'Tindak lanjut hasil pengawasan pengelolaan sektor ketahanan energi pada Pemerintah Provinsi Sumatera Selatan Tahun 2023',
            'informasi_singkat' => 'Menindaklanjuti Surat Gubernur Sumatera Selatan 700/1676/ITDAPROV.VI.1/2023 tanggal 25 Mei 2023 Perihal Tindak Lanjut Hasil Pengawasan Pengelolaan Sektor Ketahanan Energi pada Pemerintah Provinsi Sumatera Selatan Tahun 2023',
            'kategori' => 'surat_keluar',
            'file_surat' => 'example.pdf',
            'jenis_surat_id' => '1',
            'user_id' => '1'
        ]);
        Surat::create([
            'nomor_surat' => '800/640/IV.2/2023',
            'nama_instansi' => 'Badan Kepegawaian Daerah Provinsi Sumatera Selatan',
            'tanggal' => '2023-08-29',
            'perihal' => 'Tindak lanjut hasil pengawasan pengelolaan sektor ketahanan energi pada Pemerintah Provinsi Sumatera Selatan Tahun 2023',
            'informasi_singkat' => 'Menindaklanjuti surat Sekretaris Daerah Provinsi Sumatera Selatan Nomor: 800/10.290/BKD.IV/2023 tanggal 18 Juli 2023 hal Penerapan E-Kinerja di Lingkungan Pemerintah Provinsi Sumatera Selatan.',
            'kategori' => 'surat_keluar',
            'file_surat' => 'example.pdf',
            'jenis_surat_id' => '1',
            'user_id' => '1'
        ]);
        Surat::create([
            'nomor_surat' => '020.1/685/IV.2/2023',
            'nama_instansi' => 'Pemilik Galeri Wong Kito',
            'tanggal' => '2023-09-11',
            'perihal' => 'Penawaran Partisipasi Pameran',
            'informasi_singkat' => 'Penawaran partisipasi ke ikutsertaan penyelenggaran pameran exsplore South Sumatera 2023. The Eternally of Beauty :yang akan dilaksanakan pada tanggal 14-17 September 2023 bertempat di Nagoya Hill Shopping Mall, Batam sebagai bentuk komitmen kami untuk membantu UMKM yang ada di Provinsi Sumatera Selatan. Sebagai Pengembangan Usaha Ekonomi Kreatif, Perdagangan dan Investasi.',
            'kategori' => 'surat_keluar',
            'file_surat' => 'example.pdf',
            'jenis_surat_id' => '1',
            'user_id' => '1'
        ]);
        Surat::create([
            'nomor_surat' => '800/722/IV.2/2023',
            'nama_instansi' => 'Badan Kepegawaian Daerah Provinsi Sumatera Selatan',
            'tanggal' => '2023-08-25',
            'perihal' => 'Perbaikan Draft Standar Kompetensi Jabatan Administrator Biro Perekonomian Setda Provinsi Sumatera Selatan',
            'informasi_singkat' => 'Menindaklanjuti surat Sekretaris Daerah Provinsi Sumatera Selatan Nomor: 800/11079/BKD.II/2023 tanggal 29 Agustus 2023 hal Perbaikan Draft Standar Kompetensi Jabatan Administrator di Lingkungan Pemerintah Provinsi Sumatera Selatan Tahun 2022.',
            'kategori' => 'surat_keluar',
            'file_surat' => 'example.pdf',
            'jenis_surat_id' => '1',
            'user_id' => '1'
        ]);
        Surat::create([
            'nomor_surat' => '800/1105/PBJ/VI/2023',
            'nama_instansi' => 'Kepala Organisasi Perangkat Daerah di Lingkungan Pemerintah Provinsi Sumatera Selatan',
            'tanggal' => '2023-07-24',
            'perihal' => 'Money Implementasi Transaksi Katalog Lokal dan P3DN di OPD Pemerintah Provinsi Sumsel',
            'informasi_singkat' => 'Menindaklanjuti surat Sekretaris Daerah Provinsi Sumatera Selatan Nomor: 800/11079/BKD.II/2023 tanggal 29 Agustus 2023 hal Perbaikan Draft Standar Kompetensi Jabatan Administrator di Lingkungan Pemerintah Provinsi Sumatera Selatan Tahun 2022.',
            'kategori' => 'surat_keluar',
            'file_surat' => 'example.pdf',
            'jenis_surat_id' => '1',
            'user_id' => '1'
        ]);
        Surat::create([
            'nomor_surat' => '400/0069/III/I/2023',
            'nama_instansi' => 'Gubernur Sumatera Selatan Sekretariat Daerah',
            'tanggal' => '2023-07-24',
            'perihal' => 'Senam Kesegaran Jasmani (SKJ)',
            'informasi_singkat' => 'Mewajibkan ASN mengikuti kegiatan Senam Kesegaran Jasmani',
            'kategori' => 'surat_masuk',
            'file_surat' => 'example.pdf',
            'jenis_surat_id' => '1',
            'user_id' => '1'
        ]);
    }
}
