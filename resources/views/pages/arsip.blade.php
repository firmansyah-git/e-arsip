@extends('layouts.app')

@section('container')

    <div class="main-container">
        <h2 class="page-title">Arsip</h2>
        <section class="section mb-4 p-0">
            <div class="flex gap-2 mb-2 pt-4 px-4 pb-2">
                <form action="" method="post" class="grow">
                    <div class="form-search">
                        <input type="text" name="search" id="search" placeholder="Cari surat">
                        <button type="submit">Cari</button>
                    </div>
                </form>
                <button type="submit" class="button bg-blue-500" onclick="toggleModal('addSurat')">Tambah</button>
            </div>
            <div class="advanced-search">
                <button class="hover:bg-gray-100 flex items-center justify-between w-full py-2 px-4 mb-2 focus:outline-none">
                    <span>Cari berdasarkan</span>
                    <svg class="w-4 h-4 fill-current" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20">
                        <path d="M6 9l4 4 4-4"></path>
                    </svg>
                </button>
                <div class="hidden content px-4 pb-4">
                    <div class="grid md:grid-cols-4 gap-4 mb-4">
                        <div>
                            <label for="" class="label">Kategori</label>
                            <select name="" id="" class="form-select">
                                <option value="">Pilih kategori surat</option>
                                <option value="surat_masuk">Surat masuk</option>
                                <option value="surat_keluar">Surat keluar</option>
                            </select>
                        </div>
                        <div>
                            <label for="" class="label">Jenis surat</label>
                            <select name="" id="" class="form-select">
                                <option value="">Pilih jenis surat</option>
                                <option value="surat_masuk">Surat keputusan</option>
                                <option value="surat_masuk">Surat tugas</option>
                                <option value="surat_masuk">Surat undangan</option>
                            </select>
                        </div>
                        <div>
                            <label for="" class="label">Tahun</label>
                            <select name="" id="" class="form-select">
                                <option value="">Pilih tahun</option>
                                <option value="surat_masuk">Surat masuk</option>
                                <option value="surat_keluar">Surat keluar</option>
                                <option value="surat_resmi">Surat resmi</option>
                            </select>
                        </div>
                    </div>
                    <div>
                        <button class="button bg-blue-500">Terapkan</button>
                        <button class="button bg-red-500 ">Hapus</button>
                    </div>
                </div>
            </div>
            
        </section>

        <section class="section table-section">
            <table class="table">
                <thead>
                    <tr>
                        <th scope="col"></th>
                        <th scope="col">No</th>
                        <th scope="col">Nomor Surat</th>
                        <th scope="col">Tanggal</th>
                        <th scope="col">Nama Instansi</th>
                        <th scope="col">Perihal</th>
                        <th scope="col">Kategori</th>
                        <th scope="col">Jenis Surat</th>
                        <th scope="col">Aksi</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($surat as $surat)    
                    <tr>
                        <td class="text-center">
                            <a href="/arsip/{{ $surat->id }}">
                                <i class='bx bx-show edit-icon'></i>
                            </a>
                        </td>
                        <td class="text-center">1</td>
                        <td>{{ $surat->nomor_surat }}</td>
                        <td>{{ $surat->tanggal }}</td>
                        <td>{{ $surat->nama_instansi }}</td>
                        <td>{{ $surat->perihal }}</td>
                        <td>
                            @if ( $surat->kategori == 'surat_masuk')
                                Surat masuk
                            @else 
                                Surat keluar
                            @endif
                        </td>
                        <td>{{ $surat->jenisSurat->jenis_surat }}</td>
                        <td>
                            <button class="badge bg-blue-500"><i class='bx bxs-download'></i></button>
                        </td>
                    </tr>
                    @endforeach
                    {{-- <tr>
                        <td class="text-center">
                            <a href="#">
                                <i class='bx bx-show edit-icon'></i>
                            </a>
                        </td>
                        <td class="text-center">2</td>
                        <td>020.1/685/IV.2/2023</td>
                        <td>11 September 2023</td>
                        <td>Pemilik Galeri Wong Kito, Songket Permata</td>
                        <td>Penawaran Partisipasi Pameran</td>
                        <td>Surat Keluar</td>
                        <td>Surat Undangan</td>
                        <td>
                            <button class="badge bg-blue-500"><i class='bx bxs-download'></i></button>
                        </td>
                    </tr>
                    <tr>
                        <td class="text-center">
                            <a href="#">
                                <i class='bx bx-show edit-icon'></i>
                            </a>
                        </td>
                        <td class="text-center">3</td>
                        <td>005/1897/IV.1/2023</td>
                        <td>13 Juni 2023</td>
                        <td>Pemerintah Provinsi Sumatera Selatan Sekretariat Daerah</td>
                        <td>Partisipasi dalam rangka mensukseskan kegiatan Parade Perahu Motor Hias</td>
                        <td>Surat Masuk</td>
                        <td>Surat Undangan</td>
                        <td>
                            <button class="badge bg-blue-500"><i class='bx bxs-download'></i></button>
                        </td>
                    </tr> --}}
                </tbody>
            </table>
        </section>
    </div>


    <div class="modal fixed inset-0 bg-gray-900 bg-opacity-50 z-20 overflow-y-scroll py-8 hidden" id="addSurat">
        <div class="flex items-center justify-center min-h-screen">
            <div class="relative bg-white w-1/2 rounded-lg shadow-lg p-8">
              <!-- Konten Modal -->
              <div class="flex justify-between items-center mb-4">
                <h2 class="text-xl font-semibold">Tambah Data Surat</h2>
                    <button onclick="toggleModal('addSurat')" class="text-gray-500 hover:text-gray-700 focus:outline-none">
                    <svg class="h-5 w-5" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12"></path>
                    </svg>
                    </button>
              </div>
              <hr>
              <div class="mt-4">
                  <form action="/arsip" method="post">
                    @csrf
                    <div class="mb-4">
                        <label for="nomor_surat" class="label">Nomor Surat</label>
                        <input type="text" name="nomor_surat" id="nomor_surat" class="input-group">
                    </div>
                    <div class="mb-4">
                        <label for="nama_instansi" class="label">Nama Instansi</label>
                        <input type="text" name="nama_instansi" id="nama_instansi" class="input-group">
                    </div>
                    <div class="mb-4">
                        <label for="tanggal" class="label">Tanggal</label>
                        <input type="date" name="tanggal" id="tanggal" class="input-group">
                    </div>
                    <div class="mb-4">
                        <label for="perihal" class="label">Perihal</label>
                        <input type="text" name="perihal" id="perihal" class="input-group">
                    </div>
                    <div class="mb-4">
                        <label for="isi" class="label">Uraian Informasi</label>
                        <input type="text" name="isi" id="isi" class="input-group">
                    </div>
                    <div class="grid md:grid-cols-2 gap-4 mb-4">
                        <div>
                            <label for="kategori" class="label">Kategori Surat</label>
                            <select name="kategori" id="kategori" class="form-select">
                                <option value="">Pilih kategori surat</option>
                                <option value="surat_masuk">Surat masuk</option>
                                <option value="surat_keluar">Surat keluar</option>
                            </select>
                        </div>
                        <div>
                            <label for="jenis_surat_id" class="label">Jenis Surat</label>
                            <select name="jenis_surat_id" id="jenis_surat_id" class="form-select">
                                <option value="">Pilih kategori surat</option>
                                @foreach ($jenis_surat as $item)
                                    <option value="{{ $item->id }}">{{ $item->jenis_surat }}</option>
                                @endforeach
                            </select>
                        </div>
                    </div>
                    <div class="mb-4">
                        <label for="file_surat" class="label">file surat</label>
                        <input type="text" name="file_surat" id="file_surat" class="input-group">
                    </div>
                    <div class="">
                        <button type="submit" class="button bg-blue-600">Simpan</button>
                        <button type="reset" class="button bg-red-500">Hapus</button>
                    </div>
                </form>
            </div>
            </div>
          </div>
    </div>
    <script>
        // Fungsi untuk memunculkan modal
        function toggleModal(modalId) {
            var modal = document.getElementById(modalId);
            modal.classList.toggle('hidden');
        }



        document.querySelectorAll('.advanced-search button').forEach(item => {
          item.addEventListener('click', event => {
            const parent = event.target.closest('.advanced-search');
            const content = parent.querySelector('.content');
      
            // Toggling hidden class
            content.classList.toggle('hidden');
      
            // Changing arrow direction
            const arrow = parent.querySelector('svg');
            arrow.classList.toggle('transform');
          });
        });
    </script>
      
@endsection