<div class="aside-container">
    <div class="pb-4">
        <div class="flex justify-center pb-4">
            <img src="{{ asset('assets/img/lambang_sumsel.png') }}" alt="lambang sumsel" class="w-[90px]">
        </div>
        <div class="brand">
            <h2 class="leading-5 text-base md:text-lg text-center">
                Biro Perekonomian
                <br> Sumatera Selatan
            </h2>
        </div>
    </div>
    <div class="my-4 border border-1 border-gray-600"></div>
    <nav class="navigation">
        <ul class="nav-list">
            <li class="nav-item {{ Route::is('dashboard') ? 'active' : '' }}">
                <a href="/" class="nav-link">
                    <i class='bx bxs-dashboard nav-icon'></i>
                    <span class="nav-text">Dashboard</span>
                    
                </a>
            </li>
            @can('managePimpinan', Auth::user())
            <li class="nav-item {{ Request::is('arsip_pribadi*') ? 'active' : '' }}">
                <a href="/arsip_pribadi" class="nav-link">
                    <i class='bx bxs-file-blank nav-icon'></i>
                    <span class="nav-text">Arsip Pribadi</span>
                </a>
            </li>
            @endcan
            <li class="nav-item {{ Request::is('arsip', 'arsip/*') ? 'active' : '' }}">
                <a href="/arsip" class="nav-link">
                    <i class='bx bxs-file-blank nav-icon'></i>
                    <span class="nav-text">Arsip</span>
                </a>
            </li>
            @can('manageAdmin', Auth::user())
             <li class="nav-item {{ Request::is('jenis_surat*') ? 'active' : '' }}">
                <a href="/jenis_surat" class="nav-link">
                    <i class='bx bxs-file nav-icon'></i>
                    <span class="nav-text">Kelola Jenis Surat</span>
                </a>
            </li>
            <li class="nav-item {{ Request::is('user*') ? 'active' : '' }}">
                <a href="/user" class="nav-link">
                    <i class='bx bxs-user nav-icon'></i>
                    <span class="nav-text">Kelola Pegawai</span>
                </a>
            </li>
            @endcan
            <li class="nav-item self-end">
                <form action="/logout" method="post" class="nav-link">
                    @csrf
                    <button type="submit" class="flex w-full">
                        <i class='bx bx-log-out nav-icon'></i>
                        Logout
                    </button>
                </form>
            </li>
        </ul>
    </nav>
</div>