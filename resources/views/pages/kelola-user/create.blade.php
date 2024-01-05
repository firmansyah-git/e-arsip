@extends('layouts.app')

@section('container')

    <div class="main-container">
        <h2 class="page-title">Kelola Akun Pegawai</h2>
        <nav class="font-medium text-gray-500 mb-4" aria-label="Breadcrumb">
            <ol class="list-none p-0 inline-flex">
                <li class="flex items-center">
                    <a href="/user" class="text-gray-500 hover:text-gray-700 transition duration-300">Kelola Pegawai</a>
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
            <h2 class="text-xl font-semibold">Tambah Akun Pegawai</h2>
            <hr class="my-4">
            <form action="/user" method="post">
                @csrf
                <div class="mb-4">
                    <label for="nik" class="label">NIK</label>
                    <input type="text" name="nik" id="nik" class="input-group @error('nik') is-invalid @enderror">
                    @error('nik')    
                    <div class="invalid-feedback">
                        {{ $message }}
                    </div>
                    @enderror
                </div>
                <div class="mb-4">
                    <label for="nama" class="label">Nama Lengkap</label>
                    <input type="text" name="nama" id="nama" class="input-group @error('nama') is-invalid @enderror">
                    @error('nama')    
                    <div class="invalid-feedback">
                        {{ $message }}
                    </div>
                    @enderror
                </div>
                <div class="mb-4">
                    <label for="username" class="label">Username</label>
                    <input type="text" name="username" id="username" class="input-group @error('username') is-invalid @enderror">
                    @error('username')    
                    <div class="invalid-feedback">
                        {{ $message }}
                    </div>
                    @enderror
                </div>
                <div class="mb-4">
                    <label for="email" class="label">Email</label>
                    <input type="email" name="email" id="email" class="input-group @error('email') is-invalid @enderror">
                    @error('email')    
                    <div class="invalid-feedback">
                        {{ $message }}
                    </div>
                    @enderror
                </div>
                <div class="mb-4">
                    <label for="password" class="label">Password</label>
                    <input type="password" name="password" id="password" class="input-group @error('password') is-invalid @enderror">
                    @error('password')    
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