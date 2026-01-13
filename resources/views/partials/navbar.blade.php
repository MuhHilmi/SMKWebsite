<nav class="bg-white w-full sticky top-0 shadow-lg z-50">
    <div class="max-w-7xl mx-auto flex justify-between items-center px-6 py-4">

        <!-- Logo -->
        <div>
            <a href="/">
                <div class="flex items-center gap-2">
                    <img class="h-12" src="/img/LogoSKC.png" alt="Logo">
                    <h1 class="font-bold text-xl lg:text-2xl">
                        SMK Kesehatan Cianjur
                    </h1>
                </div>
            </a>
        </div>

        <!-- Menu Desktop -->
        <ul class="hidden md:flex gap-4">
            <li>
                <a class="border-2 border-blue-600 font-semibold text-blue-600 hover:bg-blue-800 hover:text-white transition-all rounded-md px-4 py-3 block"
                    href="/">Beranda</a>
            </li>
            <li>
                <a class="border-2 border-blue-600 font-semibold text-blue-600 hover:bg-blue-800 hover:text-white transition-all rounded-md px-4 py-3 block"
                    href="/profil">Profil</a>
            </li>
            <li>
                <a class="border-2 border-blue-600 font-semibold text-blue-600 hover:bg-blue-800 hover:text-white transition-all rounded-md px-4 py-3 block"
                    href="/fasilitas">Fasilitas</a>
            </li>
            <li>
                <a class="border-2 border-blue-600 font-semibold text-blue-600 hover:bg-blue-800 hover:text-white transition-all rounded-md px-4 py-3 block"
                    href="#">Galeri</a>
            </li>
            <li>
                <a class="border-2 border-blue-600 font-semibold text-blue-600 hover:bg-blue-800 hover:text-white transition-all rounded-md px-4 py-3 block"
                    href="#">Kontak</a>
            </li>
            <li>
                <a class="border-2 bg-blue-600 font-semibold text-white hover:bg-blue-800 hover:text-white transition-all rounded-md w-32 text-center ml-5 px-4 py-3 block"
                    href="#">Daftar</a>
            </li>
        </ul>

        <!-- Button Mobile -->
        <button id="btnDropdown" class="md:hidden text-2xl px-4 py-2 rounded-md">
            <i class="fa-solid fa-bars"></i>
        </button>
    </div>

    <!-- Menu Mobile -->
    <div id="menuDropdown" class="hidden absolute w-full bg-white border-t border-gray-200">
        <div class="px-4 pt-2 pb-4 space-y-1">
            <a href="/" class="block px-4 py-3 rounded-md text-base font-medium transition-colors text-gray-700 hover:text-blue-600 hover:bg-blue-50">Beranda</a>
            <a href="/profil" class="block px-4 py-3 rounded-md text-base font-medium transition-colors text-gray-700 hover:text-blue-600 hover:bg-blue-50">Tentang</a>
            <a href="#" class="block px-4 py-3 rounded-md text-base font-medium transition-colors text-gray-700 hover:text-blue-600 hover:bg-blue-50">Program</a>
            <a href="#" class="block px-4 py-3 rounded-md text-base font-medium transition-colors text-gray-700 hover:text-blue-600 hover:bg-blue-50">Fasilitas</a>
            <a href="#" class="block px-4 py-3 rounded-md text-base font-medium transition-colors bg-blue-400 text-white hover:text-blue-600 hover:bg-blue-50">Daftar Sekarang</a>
        </div>
    </div>
</nav>
