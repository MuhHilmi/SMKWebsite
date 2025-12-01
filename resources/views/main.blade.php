@extends('layout.app')

@section('title', 'SMK Kesehatan Cianjur')

@section('content')
    {{-- Bagian Utama --}}
    <div id="hero" class="scroll-mt-24 w-full mx-0 px-0">
        <div
        class="flex bg-cover bg-center bg-no-repeat flex-col justify-center h-screen items-center text-center text-white"
        style="background-image: linear-gradient(180deg, rgba(0, 0, 0, 0.5), rgba(0, 0, 0, 0.5)), url(/img/bgSchool.jpg);">
            <h1 class="text-4xl md:text-5xl font-bold">SMK Kesehatan Cianjur</h1>
            <p class="mt-2">Lorem ipsum dolor sit, amet consectetur adipisicing elit. Aliquid natus quod veniam harum nam aliquam.</p>
            <a class="bg-sky-600 font-bold text-xl px-6 py-4 rounded-md hover:bg-sky-800 transition-all duration-300 mt-6 cursor-pointer"
            href="#">
                Daftar Sekarang
            </a>
        </div>
    </div>

    {{-- Bagian Tentang --}}
    <section id="tentang" class="scroll-mt-20 bg-[#f8f9fa] p-14">
        <div class="w-full">
            <h2 class="text-center mb-10 text-3xl">Tentang Kami</h2>

            {{-- Sejarah Singkat --}}
            <div class="text-center mb-10">
                <h3 class="text-2xl mb-5">Sejarah Singkat</h3>
                <p class="text-sm max-w-3xl m-auto">Sekolah ABC didirikan pada tahun 2000 oleh sekelompok pendidik visioner yang ingin menciptakan lingkungan belajar yang inovatif. Dari awal kecil dengan 50 siswa, kini kami telah berkembang menjadi institusi terkemuka dengan lebih dari 1000 siswa, fokus pada pendidikan holistik dan teknologi modern.</p>
            </div>

            {{-- Visi dan Misi --}}
            <div class="grid grid-cols-1 gap-5 mb-14 md:grid-cols-2 md:gap-7">
                <div class="bg-[#a8dadc] p-5 md:p-7 rounded-lg text-center shadow-md transition-transform duration-300 hover:-translate-y-1 vision">
                    <h3 class="text-xl mb-3">Visi</h3>
                    <p class="text-md">Menjadi sekolah terdepan yang mencetak siswa unggul, inovatif, dan berintegritas tinggi untuk menghadapi tantangan global.</p>
                </div>
                <div class="bg-[#a8dadc] p-5 md:p-7 rounded-lg text-center shadow-md transition-transform duration-300 hover:-translate-y-1 mission">
                    <h3 class="text-xl mb-3">Misi</h3>
                    <p class="text-md">Menyediakan pendidikan berkualitas dengan kurikulum modern, fasilitas lengkap, dan kegiatan ekstrakurikuler yang mendukung pertumbuhan siswa secara menyeluruh.</p>
                </div>
            </div>

            {{-- Diagram --}}
            <div class="mt-10">
                <h3 class="text-center text-xl mb-7">Data Siswa (Dummy)</h3>
                <div class="grid gap-5 md:gap-7 grid-cols-1 md:grid-cols-2 lg:grid-cols-4">
                    <div class="p-5 rounded-lg shadow-md md:p-5">
                        <h4 class="text-center mb-5">Jumlah Siswa Berdasarkan Kelamin</h4>
                        <canvas id="genderChart"></canvas>
                    </div>
                    <div class="p-5 rounded-lg shadow-md md:p-5">
                        <h4 class="text-center mb-5">Jumlah Siswa Berdasarkan Kelas</h4>
                        <canvas id="classChart"></canvas>
                    </div>
                    <div class="p-5 rounded-lg shadow-md md:p-5">
                        <h4 class="text-center mb-5">Jumlah Siswa Berdasarkan Jurusan</h4>
                        <canvas id="majorChart"></canvas>
                    </div>
                    <div class="p-5 rounded-lg shadow-md md:p-5">
                        <h4 class="text-center mb-5">Jumlah Siswa Berdasarkan Lulusan Terbaik</h4>
                        <canvas id="graduationChart"></canvas>
                    </div>
                </div>
            </div>
        </div>
    </section>

    {{-- Program --}}
    <section id="programs" class="scroll-mt-20 p-14 bg-green-600 text-white">
        <div class="w-full">
            <h2 class="text-center mb-10 text-4xl">Program Kami</h2>
            <p class="text-center mb-10 text-lg text-gray-300 max-w-3xl mx-auto">Di SMK ABC, kami menawarkan program vokasi unggul yang mempersiapkan siswa untuk dunia kerja melalui jurusan praktis, pengalaman lapangan, dan dukungan kesehatan serta finansial.</p>

            <!-- Jurusan -->
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-7 mb-14">
                <div class="bg-white rounded-lg overflow-hidden shadow-md transition-transform duration-300 hover:-translate-y-1">
                    <img class="w-full h-48 object-cover" src="https://dummyimage.com/300x200" alt="Teknik Informatika">
                    <h3 class="px-5 py-2 text-2xl text-black">Teknik Informatika</h3>
                    <p class="px-5 py-2 text-black">Pelajari pemrograman, jaringan, dan teknologi digital dengan praktik langsung di lab komputer.</p>
                    <a href="#contact" class="block m-5 bg-green-600 p-3 text-center rounded transition-all duration-300 hover:bg-green-800">Pelajari Lebih Lanjut</a>
                </div>
                <div class="bg-white rounded-lg overflow-hidden shadow-md transition-transform duration-300 hover:-translate-y-1">
                    <img class="w-full h-48 object-cover" src="https://dummyimage.com/300x200" alt="Tata Boga">
                    <h3 class="px-5 py-2 text-2xl text-black">Tata Boga</h3>
                    <p class="px-5 py-2 text-black">Kembangkan keterampilan kuliner dengan fokus pada hidangan sehat dan inovatif di dapur simulasi.</p>
                    <a href="#contact" class="block m-5 bg-green-600 p-3 text-center rounded transition-all duration-300 hover:bg-green-800">Pelajari Lebih Lanjut</a>
                </div>
                <div class="bg-white rounded-lg overflow-hidden shadow-md transition-transform duration-300 hover:-translate-y-1">
                    <img class="w-full h-48 object-cover" src="https://dummyimage.com/300x200" alt="Akuntansi">
                    <h3 class="px-5 py-2 text-2xl text-black">Akuntansi</h3>
                    <p class="px-5 py-2 text-black">Belajar manajemen keuangan, perpajakan, dan simulasi bisnis untuk karir di dunia korporat.</p>
                    <a href="#contact" class="block m-5 bg-green-600 p-3 text-center rounded transition-all duration-300 hover:bg-green-800">Pelajari Lebih Lanjut</a>
                </div>
            </div>

            <!-- Program Tambahan -->
            <div class="additional-programs">
                <h3 class="text-center text-2xl mb-7">Program Tambahan</h3>
                <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-5">
                    <div class="bg-green-200 p-5 rounded-xl text-center shadow-md text-black">
                        <h4 class="text-xl mb-2">Program PKL (Praktik Kerja Lapangan)</h4>
                        <p>Pengalaman kerja langsung di perusahaan mitra selama 3-6 bulan untuk membangun keterampilan praktis.</p>
                    </div>
                    <div class="bg-green-200 p-5 rounded-xl text-center shadow-md text-black">
                        <h4 class="text-xl mb-2">Magang</h4>
                        <p>Magang wajib di industri terkait jurusan, dengan dukungan supervisor sekolah dan perusahaan.</p>
                    </div>
                    <div class="bg-green-200 p-5 rounded-xl text-center shadow-md text-black">
                        <h4 class="text-xl mb-2">Ekstrakurikuler</h4>
                        <p>Kegiatan seperti klub coding, kuliner, atau olahraga untuk pengembangan holistik siswa.</p>
                    </div>
                    <div class="bg-green-200 p-5 rounded-xl text-center shadow-md text-black">
                        <h4 class="text-xl mb-2">Tes Kesehatan Gratis</h4>
                        <p>Pemeriksaan kesehatan rutin gratis untuk semua siswa, termasuk konsultasi nutrisi dan kesehatan mental.</p>
                    </div>
                    <div class="bg-green-200 p-5 rounded-xl text-center shadow-md text-black">
                        <h4 class="text-xl mb-2">Kegiatan Sehat Jasmani</h4>
                        <p>Olahraga bersama tiap minggu sekali pada hari Rabu, seperti jogging, yoga, atau permainan tim untuk menjaga kebugaran.</p>
                    </div>
                    <div class="bg-green-200 p-5 rounded-xl text-center shadow-md text-black">
                        <h4 class="text-xl mb-2">Beasiswa</h4>
                        <p>Beasiswa prestasi akademik, olahraga, atau kebutuhan khusus tersedia untuk siswa berprestasi.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    {{-- Fasilitas --}}
    <section id="fasilitas" class="scroll-mt-20 bg-[#f8f9fa] p-14">
    <div class="w-full">
        <h2 class="text-center mb-5 text-3xl">Fasilitas Kami</h2>
        <p class="text-center mb-10 text-lg max-w-3xl mx-auto">SMK ABC dilengkapi dengan fasilitas modern yang mendukung pembelajaran praktis dan kenyamanan siswa.</p>
        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
            <div class="bg-white rounded-lg overflow-hidden shadow-md transition-transform duration-300 text-center hover:-translate-y-1">
                <img class="w-screen h-52 object-cover" src="https://dummyimage.com/300x200" alt="Ruang Kelas">
                <h3 class="px-5 py-2 text-2xl">Ruang Kelas</h3>
                <p class="p-5">Ruang kelas yang nyaman dan dilengkapi dengan proyektor, AC, dan meja kerja untuk pembelajaran interaktif.</p>
            </div>
            <div class="bg-white rounded-lg overflow-hidden shadow-md transition-transform duration-300 text-center hover:-translate-y-1">
                <img class="w-screen h-52 object-cover" src="https://dummyimage.com/300x200" alt="Laboratorium Komputer">
                <h3 class="px-5 py-2 text-2xl">Laboratorium Komputer</h3>
                <p class="p-5">Lab dengan komputer terbaru untuk praktik pemrograman, desain grafis, dan simulasi teknologi.</p>
            </div>
            <div class="bg-white rounded-lg overflow-hidden shadow-md transition-transform duration-300 text-center hover:-translate-y-1">
                <img class="w-screen h-52 object-cover" src="https://dummyimage.com/300x200" alt="Laboratorium Kimia">
                <h3 class="px-5 py-2 text-2xl">Laboratorium Kimia</h3>
                <p class="p-5">Fasilitas lengkap untuk eksperimen kimia, termasuk alat uji dan bahan praktikum yang aman.</p>
            </div>
            <div class="bg-white rounded-lg overflow-hidden shadow-md transition-transform duration-300 text-center hover:-translate-y-1">
                <img class="w-screen h-52 object-cover" src="https://dummyimage.com/300x200" alt="Laboratorium Fisika">
                <h3 class="px-5 py-2 text-2xl">Laboratorium Fisika</h3>
                <p class="p-5">Lab fisika dengan peralatan canggih untuk demonstrasi hukum fisika dan proyek sains.</p>
            </div>
            <div class="bg-white rounded-lg overflow-hidden shadow-md transition-transform duration-300 text-center hover:-translate-y-1">
                <img class="w-screen h-52 object-cover" src="https://dummyimage.com/300x200" alt="Lapangan Sekolah">
                <h3 class="px-5 py-2 text-2xl">Lapangan Sekolah</h3>
                <p class="p-5">Lapangan luas untuk olahraga, kegiatan jasmani, dan acara sekolah seperti upacara atau pertandingan.</p>
            </div>
            <div class="bg-white rounded-lg overflow-hidden shadow-md transition-transform duration-300 text-center hover:-translate-y-1">
                <img class="w-screen h-52 object-cover" src="https://dummyimage.com/300x200" alt="Kantin">
                <h3 class="px-5 py-2 text-2xl"3>Kantin</h3>
                <p class="p-5">Kantin sehat dengan menu bergizi, termasuk pilihan makanan organik dan minuman segar untuk siswa.</p>
            </div>
        </div>
    </div>
</section>
@endsection