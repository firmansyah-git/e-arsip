@extends('layouts.app')

@section('container')
    <div class="main-container">
        <h2 class="page-title">Dashboard</h2>
        <section class="section mb-4 p-0">
            <div class="p-4">
                <h2>Selamat datang <span>user</span></h2>
            </div>
        </section>
        <section class="grid sm:grid-cols-2 md:grid-cols-3 gap-4">
            <div class="card">
                <div class="dash-icon-container">
                    <i class='bx bx-archive-in dash-icon text-red-500'></i>
                </div>
                <div class="">
                    <h2 class="archive-type">Surat Masuk</h2>
                    <span class="number-of-archives text-red-500">30</span>
                </div>
            </div>
            <div class="card">
                <div class="dash-icon-container">
                    <i class='bx bx-archive-out dash-icon text-blue-500'></i>
                </div>
                <div class="">
                    <h2 class="archive-type">Surat Keluar</h2>
                    <span class="number-of-archives text-blue-500">30</span>
                </div>
            </div>
            {{-- <div class="card">
                <div class="dash-icon-container">
                    <i class='bx bx-envelope dash-icon text-green-500'></i>
                </div>
                <div class="">
                    <h2 class="archive-type">Surat Resmi</h2>
                    <span class="number-of-archives text-green-500">30</span>
                </div>
            </div> --}}
        </section>
    </div>
@endsection