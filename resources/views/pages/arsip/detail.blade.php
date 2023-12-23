@extends('layouts.app')

@section('container')
    <div class="main-container">
        <section class="section">
            <p>{{ $surat->nomor_surat }}</p>
            <p>{{ $surat->nama_instansi }}</p>
            <p>{{ $surat->tanggal }}</p>    
            <p>{{ $surat->perihal }}</p>    
            <p>{{ $surat->isi }}</p>    
            <p>{{ $surat->kategori }}</p>    
            <p>{{ $surat->jenisSurat->jenis_surat }}</p>    
            <p>{{ $surat->file_surat }}</p>    

            @can('manageAdmin', Auth::user())
            <div class="flex gap-x-2">
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