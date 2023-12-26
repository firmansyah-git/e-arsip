@extends('layouts.app')

@section('container')
    <div class="main-container">
        <h2 class="page-title">Arsip</h2>
        <section class="section">
            <table class=" list-table">
                <tr>
                    <td scope="col">Nomor surat</td>
                    <td scope="col">:</td>
                    <td scope="col">{{ $surat->nomor_surat }}</td>
                </tr>
                <tr>
                    <td>Nama instansi</td>
                    <td>:</td>
                    <td>{{ $surat->nama_instansi }}</td>
                </tr>
                <tr>
                    <td>Tanggal</td>
                    <td>:</td>
                    <td>{{ $surat->tanggal }}</td>
                </tr>
                <tr>
                    <td>Perihal</td>
                    <td>:</td>
                    <td>{{ $surat->perihal }}</td>
                </tr>
                <tr>
                    <td>Uraian informasi</td>
                    <td>:</td>
                    <td>{{ $surat->isi }}</td>
                </tr>
                <tr>
                    <td>Kategori</td>
                    <td>:</td>
                    <td>{{ $surat->kategori }}</td>
                </tr>
                <tr>
                    <td>Jenis surat</td>
                    <td>:</td>
                    <td>{{ $surat->jenisSurat->jenis_surat }} </td>
                </tr>
                <tr>
                    <td>File</td>
                    <td>:</td>
                    <td>{{ $surat->file_surat }}</td>
                </tr>
            </table>
            @can('manageAdmin', Auth::user())
            <div class="flex gap-x-2 ml-4 mt-2">
                <a href="/arsip/{{ $surat->id }}/edit" class="button bg-blue-500">Ubah</a>
                <form action="/arsip/{{ $surat->id }}" method="post">
                    @method('delete')
                    @csrf
                    <button type="submit" class="button bg-red-500">Hapus</button>
                </form>
            </div>
            @endcan
        </section>
    </div>
@endsection