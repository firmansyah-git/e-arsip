@extends('layouts.app')

@section('container')
    <div class="main-container">
        <h2 class="page-title">Arsip</h2>

        <section class="section mb-4">
            <div class="flex gap-2 mb-2">
                <form action="" method="post" class="grow">
                    <div class="form-search">
                        <input type="text" name="search" id="search">
                        <button type="submit">Cari</button>
                    </div>
                </form>
                <button class="button bg-blue-600">Tambah</button>
            </div>
            <div>
                <p>Cari berdasarkan : </p>
            </div>
        </section>

        <section class="section table-section">
            <table class="table">
                <thead>
                    <tr>
                        <th scope="col"></th>
                        <th scope="col">No</th>
                        <th scope="col">Kode Klas</th>
                        <th scope="col">Jenis Arsip</th>
                        <th scope="col" class="w-[500px]">Uraian Informasi</th>
                        <th scope="col">Kurun Waktu</th>
                        <th scope="col">Tingkat Perkembangan</th>
                        <th scope="col">Jumlah</th>
                    </tr>
                </thead>
                <tbody>
                    @for ($i = 0; $i < 10; $i++)
                    <tr>
                        <td class="text-center">
                            <a href="#">
                                <i class='bx bxs-edit edit-icon'></i>
                            </a>
                        </td>
                        <td class="text-center">1</td>
                        <td>404</td>
                        <td>Copy</td>
                        <td class="w-[500px]">Lorem ipsum dolor sit, amet consectetur adipisicing elit. Rem libero ullam minus enim odit et quia atque eius possimus ipsum.</td>
                        <td>2019</td>
                        <td></td>
                        <td>1 berkas</td>
                    </tr>
                    @endfor
                </tbody>
            </table>
        </section>
    </div>


    <div class="fixed inset-0 bg-gray-900 bg-opacity-50 z-20 hidden">
        <div class="flex items-center justify-center min-h-screen">
            <div class="relative bg-white w-1/2 rounded-lg shadow-lg p-8">
              <!-- Konten Modal -->
              <div class="flex justify-between items-center mb-8">
                <h2 class="text-xl font-semibold">Modal Title</h2>
                <button onclick="toggleModal('myModal')" class="text-gray-500 hover:text-gray-700 focus:outline-none">
                  <svg class="h-5 w-5" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12"></path>
                  </svg>
                </button>
              </div>
              <hr>
              <div class="mt-4">
                  <form action="" method="post">
                    <div class="mb-4">
                        <label for="" class="block mb-2">Kode</label>
                        <input type="text" name="" id="" class="input-group">
                    </div>
                    <div class="mb-4">
                        <label for="" class="block mb-2">Kode</label>
                        <input type="text" name="" id="" class="input-group">
                    </div>
                    <div class="mb-4">
                        <label for="" class="block mb-2">Kode</label>
                        <input type="text" name="" id="" class="input-group">
                    </div>
                    <div class="mb-4">
                        <label for="" class="block mb-2">Kode</label>
                        <input type="text" name="" id="" class="input-group">
                    </div>
                    <div class="">
                        <button class="button bg-red-500">Hapus</button>
                        <button class="button bg-blue-600">Tambah</button>
                    </div>
                </form>
            </div>
            </div>
          </div>
    </div>
@endsection