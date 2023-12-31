@extends('layouts.app')

@section('container')

    <div class="main-container">
        <h2 class="page-title">Kelola Jenis Surat</h2>
        <nav class="font-medium text-gray-500 mb-4" aria-label="Breadcrumb">
            <ol class="list-none p-0 inline-flex">
                <li class="flex items-center">
                    <a href="/jenis_surat" class="text-gray-500 hover:text-gray-700 transition duration-300">Kelola Jenis Surat</a>
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
            <h2 class="text-xl font-semibold">Tambah Jenis Surat</h2>
            <hr class="my-4">
            <form action="/jenis_surat" method="post">
                @csrf
                <div class="mb-4">
                    <label for="jenis_surat" class="label">Nama jenis surat</label>
                    <input type="text" name="jenis_surat" id="jenis_surat" class="input-group @error('jenis_surat') is-invalid @enderror">
                    @error('jenis_surat')    
                    <div class="invalid-feedback">
                        {{ $message }}
                    </div>
                    @enderror
                </div>
                <div class="">
                    <button type="submit" class="button bg-blue-600">Simpan</button>
                    <button type="reset" class="button bg-red-500">Hapus</button>
                </div>
            </form>
        </section>
    </div>
@endsection