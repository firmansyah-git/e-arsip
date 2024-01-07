@extends('layouts.app')

@section('container')

    <div class="main-container">
        <h2 class="page-title">Kelola Jenis Surat</h2>
        @if(session('success'))    
        <div class="session session-success" id="session">
            <p class="session-message">{{ session('success') }}</p>
            <button onclick="toggleAlert('session')" class="close-button">
                <i class='bx bx-x'></i>
            </button>
        </div>
        @endif
        <section class="section mb-4 p-0">
            <div class="flex gap-2 mb-2 pt-4 px-4 pb-2">
                <form action="/jenis_surat" method="get" class="grow">
                    @csrf
                    <div class="form-search">
                        <input type="text" name="search" id="search" placeholder="Cari jenis surat">
                        <button type="submit">Cari</button>
                    </div>
                </form>
                <a href="/jenis_surat/create" class="button bg-blue-500">Tambah</a>
            </div>
        </section>

        <section class="section table-section">
            <div class="pagination rounded-t-md">
                {{ $jenis_surat->links() }}
            </div>
            <table class="table table-auto">
                <thead>
                    <tr>
                        <th scope="col">No</th>
                        <th scope="col">Jenis Surat</th>
                        <th scope="col">Jumlah Surat</th>
                        <th scope="col">Aksi</th>
                    </tr>
                </thead>
                <tbody>
                    @if($jenis_surat->isNotEmpty())
                    @foreach ($jenis_surat as $item)    
                    <tr>
                        <td>{{ $loop->iteration }}</td>
                        <td>{{ $item->jenis_surat }}</td>
                        <td>{{ $item->surat->count() }}</td>
                        <td>
                            <div class="flex gap-x-2">
                                <a href="/jenis_surat/{{ $item->id }}/edit" class="badge bg-blue-500 hover:bg-blue-600"><i class='bx bxs-edit'></i></a>
                                <form  id="deleteForm" action="/jenis_surat/{{ $item->id }}" method="post">
                                    @method('delete')
                                    @csrf
                                    <button type="submit" class="badge bg-red-500" onclick="return confirm('Apakah anda ingin menghapus user ini?')">
                                        <i class='bx bx-trash'></i>
                                    </button>
                                </form>
                            </div>
                            
                        </td>
                    </tr>
                    @endforeach
                    @else
                    <tr>
                        <td colspan="6" class="text-center">Data tidak ditemukan</td>
                    </tr>
                    @endif
                </tbody>
            </table>
            <div class="pagination rounded-b-md">
                {{ $jenis_surat->links() }}
            </div>
        </section>
    </div> 

    <script>
        function toggleAlert(alertId) {
            var alert = document.getElementById(alertId);
            alert.classList.toggle('hidden');
        }
    </script>
@endsection