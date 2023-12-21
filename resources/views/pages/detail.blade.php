@extends('layouts.app')

@section('container')
    <div class="main-container">
        <section class="section">
            <p>{{ $surat->nomor_surat }}</p>
            <p>{{ $surat->nama_instansi }}</p>
            <p>{{ $surat->tanggal }}</p>    
            <p>{{ $surat->perihal }}</p>    
            <p>{{ $surat->isi }}</p>    
            <p>{{ $surat->kategori }}</p>    
            <p>{{ $surat->jenisSurat->jenis_surat }}</p>    
            <p>{{ $surat->file_surat }}</p>    

            <button type="submit" class="button bg-blue-500" onclick="toggleModal('editSurat')">Edit</button>
            <form action="arsip/{{ $surat->id }}" method="post">
                @method('delete')
                @csrf
                <button type="submit" class="button bg-red-500">Hapus</button>
            </form>

        </section>

    </div>

    
    <div class="fixed inset-0 bg-gray-900 bg-opacity-50 z-20 overflow-y-scroll py-8 hidden" id="editSurat">
        <div class="flex items-center justify-center min-h-screen">
            <div class="relative bg-white w-1/2 rounded-lg shadow-lg p-8">
              <!-- Konten Modal -->
              <div class="flex justify-between items-center mb-4">
                <h2 class="text-xl font-semibold">Ubah Data Surat</h2>
                    <button onclick="toggleModal('editSurat')" class="text-gray-500 hover:text-gray-700 focus:outline-none">
                    <svg class="h-5 w-5" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12"></path>
                    </svg>
                    </button>
              </div>
              <hr>
              <div class="mt-4">
                  <form action="/arsip/{{ $surat->id }}" method="post">
                    @method('put')
                    @csrf
                    <div class="mb-4">
                        <label for="nomor_surat" class="label">Nomor Surat</label>
                        <input type="text" name="nomor_surat" id="nomor_surat" class="input-group" value="{{ $surat->nomor_surat }}">
                    </div>
                    <div class="mb-4">
                        <label for="nama_instansi" class="label">Nama Instansi</label>
                        <input type="text" name="nama_instansi" id="nama_instansi" class="input-group" value="{{ $surat->nama_instansi }}">
                    </div>
                    <div class="mb-4">
                        <label for="tanggal" class="label">Tanggal</label>
                        <input type="date" name="tanggal" id="tanggal" class="input-group" value="{{ $surat->tanggal }}">
                    </div>
                    <div class="mb-4">
                        <label for="perihal" class="label">Perihal</label>
                        <input type="text" name="perihal" id="perihal" class="input-group" value="{{ $surat->perihal }}">
                    </div>
                    <div class="mb-4">
                        <label for="isi" class="label">Uraian Informasi</label>
                        <input type="text" name="isi" id="isi" class="input-group" value="{{ $surat->isi }}">
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
                        <input type="text" name="file_surat" id="file_surat" class="input-group" value="{{ $surat->file_surat }}">
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
        function toggleModal(modalId) {
            var modal = document.getElementById(modalId);
            modal.classList.toggle('hidden');
        }

    </script>
@endsection