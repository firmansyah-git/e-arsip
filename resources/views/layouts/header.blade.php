<div class="header-container">
    <div class="menu">
        <i class='bx bx-menu menu-icon hover:text-blue-500'></i>
    </div>

    <h1 class="text-black text-lg md:text-2xl p-0 flex items-center grow align-middle tracking-wider font-medium">E-ARSIP</h1>

    <a href="/account/{{ auth()->user()->id }}"  class="text-black pe-4 leading-none align-middle text-sm md:text-base">{{ auth()->user()->username }}</a>
</div>