@extends('layouts.app')

@section('container')
    <div class="main-container">
        <h2 class="page-title">Dashboard</h2>
        <section class="section mb-4 p-0">
            <div class="p-4">
                <h2>Selamat datang {{ auth()->user()->username }}</h2>
            </div>
        </section>
        <section class="grid sm:grid-cols-2 md:grid-cols-3 gap-4">
            <div class="card cursor-pointer" onclick="location.href = '/arsip?kategori=surat_masuk' ">
                <div class="dash-icon-container">
                    <i class='bx bx-archive-in dash-icon text-red-500'></i>
                </div>
                <div class="">
                    <h2 class="archive-type">Surat Masuk</h2>
                    <span class="number-of-archives text-red-500">{{ $surat_masuk }}</span>
                </div>
            </div>
            <div class="card cursor-pointer"  onclick="location.href = '/arsip?kategori=surat_keluar' ">
                <div class="dash-icon-container">
                    <i class='bx bx-archive-out dash-icon text-blue-500'></i>
                </div>
                <div class="">
                    <h2 class="archive-type">Surat Keluar</h2>
                    <span class="number-of-archives text-blue-500">{{ $surat_keluar }}</span>
                </div>
            </div>
            @can('manageAdmin', Auth::user())
            <div class="card cursor-pointer" onclick="location.href = '/user' ">
                <div class="dash-icon-container">
                    <i class='bx bxs-user dash-icon text-green-500'></i>
                </div>
                <div class="">
                    <h2 class="archive-type">Akun Pegawai</h2>
                    <span class="number-of-archives text-green-500">{{ $users }}</span>
                </div>
            </div>
            @endcan
        </section>
    </div>
@endsection