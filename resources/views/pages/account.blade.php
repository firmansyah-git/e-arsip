@extends('layouts.app')

@section('container')
    <div class="main-container">
        <h2 class="page-title">Pusat Akun</h2>
        @if(session('success'))    
        <div class="session session-success" id="session">
            <p class="session-message">{{ session('success') }}</p>
            <button onclick="toggleAlert('session')" class="close-button">
                <i class='bx bx-x'></i>
            </button>
        </div>
        @endif
        <section class="section mb-4 p-6">
            <form action="/account/{{ $user->id }}" method="POST">
                @method('put')
                @csrf
                <div class="mb-4">
                    <label for="nik" class="label">NIK</label>
                    <input type="text" name="nik" id="nik" class="input-group @error('nik') is-invalid @enderror" value="{{ old('nik',$user->nik) }}">
                    @error('nik')    
                    <div class="invalid-feedback">
                        {{ $message }}
                    </div>
                    @enderror
                </div>
                <div class="mb-4">
                    <label for="nama" class="label">Nama</label>
                    <input type="text" name="nama" id="nama" class="input-group @error('nama') is-invalid @enderror" value="{{ old('nama',$user->nama) }}">
                    @error('nama')    
                    <div class="invalid-feedback">
                        {{ $message }}
                    </div>
                    @enderror
                </div>
                <div class="mb-4">
                    <label for="username" class="label">Username</label>
                    <input type="text" name="username" id="username" class="input-group @error('username') is-invalid @enderror" value="{{ old('username',$user->username) }}">
                    @error('username')    
                    <div class="invalid-feedback">
                        {{ $message }}
                    </div>
                    @enderror
                </div>
                <div class="mb-4">
                    <label for="password" class="label">Password baru</label>
                    <input type="password" name="password" id="password" class="input-group @error('password') is-invalid @enderror" value="{{ old('password') }}">
                    @error('password')    
                    <div class="invalid-feedback">
                        {{ $message }}
                    </div>
                    @enderror
                </div>
                <div class="">
                    <button class="button bg-blue-500">Ubah</button>
                    <button class="button bg-red-500">Kembali</button>
                </div>
            </form>
        </section>
    </div>
    <script>
        function toggleAlert(alertId) {
            var alert = document.getElementById(alertId);
            alert.classList.toggle('hidden');
        }
    </script>
@endsection