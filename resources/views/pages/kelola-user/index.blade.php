@extends('layouts.app')

@section('container')

    <div class="main-container">
        <h2 class="page-title">Kelola User</h2>
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
                <form action="/user" method="get" class="grow">
                    @csrf
                    <div class="form-search">
                        <input type="text" name="search" id="search" placeholder="Cari user">
                        <button type="submit">Cari</button>
                    </div>
                </form>
                <a href="/user/create" class="button bg-blue-500">Tambah</a>
            </div>
        </section>

        <section class="section table-section">
            <div class="pagination rounded-t-md">
                {{ $users->links() }}
            </div>
            <table class="table table-auto">
                <thead>
                    <tr>
                        <th scope="col">No</th>
                        <th scope="col">NIK</th>
                        <th scope="col">Username</th>
                        <th scope="col">Nama</th>
                        <th scope="col">Email</th>
                        <th scope="col">Aksi</th>
                    </tr>
                </thead>
                <tbody>
                    @if($users->isNotEmpty())
                    @foreach ($users as $user)    
                    <tr>
                        <td>{{ $loop->iteration }}</td>
                        <td>{{ $user->nik }}</td>
                        <td>{{ $user->username }}</td>
                        <td>{{ $user->nama }}</td>
                        <td>{{ $user->email }}</td>
                        <td>
                            <form  id="deleteForm" action="/user/{{ $user->id }}" method="post">
                                @method('delete')
                                @csrf
                                <button type="submit" class="badge bg-red-500" onclick="return confirm('Apakah anda ingin menghapus user ini?')">
                                    <i class='bx bx-trash'></i>
                                </button>
                            </form>
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
                {{ $users->links() }}
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