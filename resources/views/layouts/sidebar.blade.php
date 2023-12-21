<div class="aside-container">
    <div class="pb-4">
        <div class="flex justify-center pb-4">
            <img src="{{ asset('assets/img/lambang_sumsel.png') }}" alt="lambang sumsel" class="w-[80px]">
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
            <li class="nav-item active">
                <a href="/" class="nav-link">
                    <i class='bx bxs-dashboard nav-icon'></i>
                    <span class="nav-text">Dashboard</span>
                    
                </a>
            </li>
            <li class="nav-item">
                <a href="/arsip" class="nav-link">
                    <i class='bx bxs-file-blank nav-icon'></i>
                    <span class="nav-text">Arsip</span>
                </a>
            </li>
            <li class="nav-item self-end">
                <a href="" class="nav-link">
                    <i class='bx bx-log-out nav-icon'></i>
                    <form action="/logout" method="post">
                        @csrf
                        <button type="submit" class="nav-text">Logout</button>
                    </form>
                </a>
            </li>
        </ul>
    </nav>
</div>