@extends('layouts.app')

@section('container')
    <div class="main-container">
        <h2 class="page-title">Pusat Akun</h2>
        <section class="section mb-4 p-6">
            <form action="">
                <div class="mb-4">
                    <label for="" class="label">Nama</label>
                    <input type="text" name="" id="" class="input-group">
                </div>
                <div class="mb-4">
                    <label for="" class="label">Username</label>
                    <input type="text" name="" id="" class="input-group">
                </div>
                <div class="mb-4">
                    <label for="" class="label">Email</label>
                    <input type="text" name="" id="" class="input-group">
                </div>
                <div class="mb-4">
                    <label for="" class="label">NIK</label>
                    <input type="text" name="" id="" class="input-group">
                </div>
                <div class="mb-4">
                    <label for="" class="label">Password</label>
                    <input type="text" name="" id="" class="input-group">
                </div>
                <div class="">
                    <button class="button bg-blue-500">Ubah</button>
                    <button class="button bg-red-500">Kembali</button>
                </div>
            </form>
        </section>
    </div>
@endsection