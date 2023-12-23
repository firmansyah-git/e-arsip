@extends('layouts.app')

@section('container')

    <div class="main-container">
        <h2 class="page-title">Arsip</h2>
        <section class="section mb-4 p-8">
            <h2 class="text-xl font-semibold">Tambah Data Surat</h2>
            <hr class="my-4">
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
                    <a href="/arsip" class="button bg-red-500">Kembali</a>
                </div>
            </form>
        </section>
    </div>
@endsection