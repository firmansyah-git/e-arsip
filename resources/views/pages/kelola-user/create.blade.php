@extends('layouts.app')

@section('container')

    <div class="main-container">
        <h2 class="page-title">Kelola User</h2>
        <section class="section mb-4 p-8">
            <h2 class="text-xl font-semibold">Tambah User</h2>
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