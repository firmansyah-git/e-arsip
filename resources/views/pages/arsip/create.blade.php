@extends('layouts.app')

@section('container')

    <div class="main-container">
        <h2 class="page-title">Arsip</h2>
        <nav class="font-medium text-gray-500 mb-4" aria-label="Breadcrumb">
            <ol class="list-none p-0 inline-flex">
                <li class="flex items-center">
                    <a href="/arsip" class="text-gray-500 hover:text-gray-700 transition duration-300">Arsip</a>
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 mx-2" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7" />
                    </svg>
                </li>
                <li>
                    <span class="text-gray-700">Tambah</span>
                </li>
            </ol>
        </nav>
        <section class="section mb-4 p-8">
            <h2 class="text-xl font-semibold">Tambah Data Surat</h2>
            <hr class="my-4">
            <form action="/arsip" method="post" enctype="multipart/form-data">
                @csrf
                <div class="mb-4">
                    <label for="nomor_surat" class="label">Nomor Surat</label>
                    <input type="text" name="nomor_surat" id="nomor_surat" class="input-group @error('nomor_surat') is-invalid @enderror" required>
                    @error('nomor_surat')    
                    <div class="invalid-feedback">
                        {{ $message }}
                    </div>
                    @enderror
                </div>
                <div class="mb-4">
                    <label for="nama_instansi" class="label">Nama Instansi</label>
                    <input type="text" name="nama_instansi" id="nama_instansi" class="input-group @error('nama_instansi') is-invalid @enderror" required>
                    @error('nama_instansi')    
                    <div class="invalid-feedback">
                        {{ $message }}
                    </div>
                    @enderror
                </div>
                <div class="mb-4">
                    <label for="tanggal" class="label">Tanggal</label>
                    <input type="date" name="tanggal" id="tanggal" class="input-group @error('tanggal') is-invalid @enderror" required>
                    @error('tanggal')    
                    <div class="invalid-feedback">
                        {{ $message }}
                    </div>
                    @enderror
                </div>
                <div class="mb-4">
                    <label for="perihal" class="label">Perihal</label>
                    <input type="text" name="perihal" id="perihal" class="input-group @error('perihal') is-invalid @enderror" required>
                    @error('perihal')    
                    <div class="invalid-feedback">
                        {{ $message }}
                    </div>
                    @enderror
                </div>
                <div class="mb-4">
                    <label for="informasi_singkat" class="label">Informasi Singkat</label>
                    <textarea name="informasi_singkat" id="informasi_singkat" class="input-group @error('informasi_singkat') is-invalid @enderror" required></textarea>
                    @error('informasi_singkat')    
                    <div class="invalid-feedback">
                        {{ $message }}
                    </div>
                    @enderror
                </div>
                <div class="grid md:grid-cols-2 gap-4 mb-4">
                    <div>
                        <label for="kategori" class="label">Kategori Surat</label>
                        <select name="kategori" id="kategori" class="form-select @error('kategori') is-invalid @enderror" required>
                            <option value="">Pilih kategori surat</option>
                            <option value="surat_masuk">Surat masuk</option>
                            <option value="surat_keluar">Surat keluar</option>
                        </select>
                        @error('kategori')    
                        <div class="invalid-feedback">
                            {{ $message }}
                        </div>
                        @enderror
                    </div>
                    <div>
                        <label for="jenis_surat_id" class="label">Jenis Surat</label>
                        <select name="jenis_surat_id" id="jenis_surat_id" class="form-select @error('jenis_surat_id') is-invalid @enderror" required>
                            <option value="">Pilih kategori surat</option>
                            @foreach ($jenis_surat as $item)
                                <option value="{{ $item->id }}">{{ $item->jenis_surat }}</option>
                            @endforeach
                        </select>
                        @error('jenis_surat_id')    
                        <div class="invalid-feedback">
                            {{ $message }}
                        </div>
                        @enderror
                    </div>
                </div>
                <div class="mb-4">
                    <label for="file_surat" class="label">file surat</label>
                    <input type="file" name="file_surat" id="file_surat" class="input-group @error('file') is-invalid @enderror" required>
                    @error('file')    
                    <div class="invalid-feedback">
                        {{ $message }}
                    </div>
                    @enderror
                </div>
                
                <input type="hidden" name="user_id" value="{{ auth()->user()->id }}">
                <div class="">
                    <button type="submit" class="button bg-blue-600">Simpan</button>
                    <a href="/arsip" class="button bg-red-500">Kembali</a>
                </div>
            </form>
        </section>
    </div>
@endsection