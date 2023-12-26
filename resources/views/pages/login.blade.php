@extends('layouts.auth')

@section('container')
    @if (session('failed'))
    <div class="session session-failed">
        <p class="session-message">{{ session('failed') }}</p>
    </div>
    @endif
    <div class="bg-white rounded-md p-8 shadow lg:w-1/3">
        <div class="flex items-center justify-evenly mb-4">
            <div class="">
                <img src="{{ asset('assets/img/lambang_sumsel.png') }}" alt="lambang_sumsel" class="w-[50px]">
            </div>
            <div>
                <h2 class="leading-6 text-base lg:text-xl">
                    E-ARSIP BIRO PEREKENOMIAN
                    <br> SUMATERA SELATAN
                </h2>
            </div>
        </div>
        <hr class="mb-4">
        <div>
            <form action="/login" method="POST">
                @csrf
                <div class="mb-4">
                    <label for="username" class="label">Username</label>
                    <input type="text" name="username" id="username" class="input-group" placeholder="Masukkan username">
                </div>
                <div class="mb-4">
                    <label for="password" class="label">Password</label>
                    <input type="password" name="password" id="password" class="input-group" placeholder="Masukkan Password">
                </div>
                <button class="button bg-blue-500 hover:bg-blue-700 w-full">Login</button>
            </form>
        </div>
    </div>
@endsection