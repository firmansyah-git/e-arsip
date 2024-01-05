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
                    <span class="text-gray-700">Detail</span>
                </li>
            </ol>
        </nav>
        
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
                    <td>Informasi singkat</td>
                    <td>:</td>
                    <td>{{ $surat->informasi_singkat }}</td>
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
            </table>
            <div class="flex gap-x-2 ml-4 mt-2">
                @can('manageAdmin', Auth::user())
                <a href="/arsip/{{ $surat->id }}/edit" class="button bg-blue-500 hover:bg-blue-600">Ubah</a>
                <form action="/arsip/{{ $surat->id }}" method="post">
                    @method('delete')
                    @csrf
                    <button type="submit" class="button bg-red-500 hover:bg-red-600">Hapus</button>
                </form>
                @endcan
                <a href="/download/{{ $surat->file_surat }}" class="button bg-green-500 hover:bg-green-600">Download</a>
            </div>
        </section>
    </div>
@endsection