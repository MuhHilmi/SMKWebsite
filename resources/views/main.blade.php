@extends('layout.app')

@section('title', 'SMK Kesehatan Cianjur')

@section('content')
    {{-- Bagian Utama --}}
    <section id="beranda" class="scroll-mt-24 relative bg-gradient-to-br from-blue-50 via-white to-blue-50 py-20 px-4 overflow-hidden">
        <div class="max-w-7xl mx-auto">
            <div class="grid md:grid-cols-2 gap-12 items-center">
                <div class="space-y-6">
                    <div class="inline-block">
                        <p class="bg-blue-100 text-blue-700 px-4 py-2 rounded-full text-sm font-medium">Sekolah Menengah Kejuruan</p>
                    </div>
                    <h1 class="text-5xl md:text-6xl font-bold text-gray-900 leading-tight">SMK Kesehatan <span>Cianjur</span></h1>
                    <p class="text-xl text-gray-600 leading-relaxed">Mempersiapkan tenaga kesehatan profesional yang kompeten, berintegritas, dan siap mengabdi kepada masyarakat.</p>
                    <div class="flex flex-col sm:flex-row gap-4 pt-4">
                        <a class="inline-flex items-center justify-center gap-2 whitespace-nowrap text-sm font-medium transition-colors focus-visible:outline-none focus-visible:ring-1 focus-visible:ring-ring disabled:pointer-events-none disabled:opacity-50 shadow h-10 rounded-md px-8 bg-blue-600 hover:bg-blue-700 text-white" href="#">Daftar Sekarang &#8594</a>
                        <a class="inline-flex items-center justify-center gap-2 whitespace-nowrap text-sm font-medium transition-colors focus-visible:outline-none focus-visible:ring-1 focus-visible:ring-ring disabled:pointer-events-none disabled:opacity-50 border shadow-sm hover:text-accent-foreground h-10 rounded-md px-8 border-blue-600 text-blue-600 hover:bg-blue-50" href="#">Profil Sekolah</a>
                    </div>
                </div>
                <div class="relative">
                    <div class="absolute inset-0 bg-gradient-to-br from-blue-400 to-blue-600 rounded-3xl transform rotate-6"></div>
                    <img class="relative rounded-3xl shadow-2xl object-cover w-full h-96" src="/img/bgSchool.jpg" alt="">
                </div>
            </div>
        </div>
    </section>

    {{-- Program --}}
    <section id="programs" class="scroll-mt-20 p-14 bg-gradient-to-tr from-blue-500 to-blue-200">
        <div class="max-w-7xl mx-auto">
            <h2 class="text-center mb-10 font-bold text-4xl text-white drop-shadow-lg">Program Keahlian</h2>
            {{-- <p class="text-center mb-10 text-lg text-gray-300 max-w-3xl mx-auto">Di SMK ABC, kami menawarkan program vokasi unggul yang mempersiapkan siswa untuk dunia kerja melalui jurusan praktis, pengalaman lapangan, dan dukungan kesehatan serta finansial.</p> --}}

            <!-- Jurusan -->
            <div class="grid grid-cols-1 md:grid-cols-3 gap-7 mb-14">
                <div class="bg-white rounded-lg overflow-hidden shadow-md flex flex-col border-2 transition-all duration-500 hover:border-blue-700 hover:shadow-lg">
                    <img class="w-full h-48 object-cover" src="img/jurusan/askep/IMG_1055.jpg" alt="Asisten Keperawatan">
                    <div class="flex flex-col justify-between flex-1">
                        <div>
                            <div class="flex flex-row items-center px-5 pt-2">
                                <img class="h-10 w-10" src="img/logo/LogoAskep.png" alt="Logo Jurusan Askep">
                                <h3 class="px-5 py-2 font-semibold text-xl text-black">Asisten Keperawatan</h3>
                            </div>
                            <p class="px-5 py-2 text-md text-gray-600 leading-relaxed">Asisten Keperawatan merupakan suatu kompetensi keahlian yang menghasilkan tenaga ahli di bidang kesehatan dalam asistensi keperawatan yang terampil dan kompeten, khususnya pemenuhan kebutuhan dasar manusia merawat kesehatan mental dan fisik.</p>
                        </div>
                        <a href="#contact" class="block m-5 bg-blue-600 p-3 text-center rounded transition-all duration-300 hover:bg-blue-800 text-white">Pelajari Lebih Lanjut</a>
                    </div>
                </div>
                <div class="bg-white rounded-lg overflow-hidden shadow-md flex flex-col border-2 transition-all duration-500 hover:border-blue-700 hover:shadow-lg">
                    <img class="w-full h-48 object-cover" src="img/jurusan/farmasi/IMG_0973.jpg" alt="Farmasi">
                    <div class="flex flex-col justify-between flex-1">
                        <div>
                            <div class="flex flex-row items-center px-5 pt-2">
                                <img class="h-10 w-10" src="img/logo/LogoFarmasi.png" alt="Logo Jurusan Farmasi">
                                <h3 class="px-5 py-2 font-semibold text-xl text-black">Farmasi</h3>
                            </div>
                            <p class="px-5 py-2 text-md text-gray-600 leading-relaxed">Farmasi merupakan kompetensi keahlian yang mempelajari segala hal tentang obat. Mulai dari bahan kimia yang ada didalamnya, proses pembuatan obat, proses pengemasan obat, fungsi dan kegunaan obat, sampai cara distribusi dan pengelolaan stok obat.</p>
                        </div>
                        <a href="#contact" class="block m-5 bg-blue-600 p-3 text-center rounded transition-all duration-300 hover:bg-blue-800 text-white">Pelajari Lebih Lanjut</a>
                    </div>
                </div>
                <div class="bg-white rounded-lg overflow-hidden shadow-md flex flex-col border-2 transition-all duration-500 hover:border-blue-700 hover:shadow-lg">
                    <img class="w-full h-48 object-cover" src="img/jurusan/atlm/IMG_1188.jpg" alt="Teknologi Laboratorium Medik">
                    <div class="flex flex-col justify-between flex-1">
                        <div>
                            <div class="flex flex-row items-center px-5 pt-2">
                                <img class="h-10 w-10" src="img/logo/LogoATLM.png" alt="Logo Jurusan ATLM">
                                <h3 class="px-5 py-2 font-semibold text-xl text-black">Teknologi Laboratorium Medik</h3>
                            </div>
                            <p class="px-5 py-2 text-md text-gray-600 leading-relaxed">Teknologi Laboratorium Medik merupakan kompetensi keahlian yang akan berkecimpung di dunia kesehatan untuk melaksanakan pelayanan pemeriksaan, pengukuran, penetapan dan pengujian terhadap bahan yang berasal dari manusia untuk penentuan jenis penyakit dan penyebab penyakit.</p>
                        </div>
                        <a href="#contact" class="block m-5 bg-blue-600 p-3 text-center rounded transition-all duration-300 hover:bg-blue-800 text-white">Pelajari Lebih Lanjut</a>
                    </div>
                </div>
            </div>
        </div>
    </section>

    {{-- Fasilitas --}}
    <section id="fasilitas" class="scroll-mt-20 bg-gradient-to-br from-blue-50 via-white to-blue-50 p-14">
        <div class="max-w-7xl mx-auto">
            <h2 class="text-center mb-10 font-bold text-4xl">Fasilitas Kami</h2>
            {{-- <p class="text-center mb-10 text-lg max-w-3xl mx-auto">SMK ABC dilengkapi dengan fasilitas modern yang mendukung pembelajaran praktis dan kenyamanan siswa.</p> --}}
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
                <div class="bg-white rounded-lg overflow-hidden shadow-md transition-all duration-300 text-center hover:-translate-y-1 hover:shadow-lg">
                    <img class="w-screen h-52 object-cover" src="img/fasilitas/LabAskep.jpg" alt="Laboratorium Askep">
                    <h3 class="px-5 py-2 font-semibold text-2xl">Laboratorium Asisten Keperawatan</h3>
                    <p class="p-5">Fasilitas praktik keperawatan dengan bed pasien, alat pemeriksaan, dan perlengkapan simulasi tindakan medis dasar.</p>
                </div>
                <div class="bg-white rounded-lg overflow-hidden shadow-md transition-all duration-300 text-center hover:-translate-y-1 hover:shadow-lg">
                    <img class="w-screen h-52 object-cover" src="img/fasilitas/LabTLM.jpg" alt="Laboratorium TLM">
                    <h3 class="px-5 py-2 font-semibold text-2xl">Laboratorium Teknologi Laboratorium Medik</h3>
                    <p class="p-5">Laboratorium untuk praktik analisis sampel darah, urin, dan mikrobiologi dengan peralatan standar medis.</p>
                </div>
                <div class="bg-white rounded-lg overflow-hidden shadow-md transition-all duration-300 text-center hover:-translate-y-1 hover:shadow-lg">
                    <img class="w-screen h-52 object-cover" src="img/fasilitas/LabFarmasi.jpg" alt="Laboratorium Farmasi">
                    <h3 class="px-5 py-2 font-semibold text-2xl">Laboratorium Farmasi</h3>
                    <p class="p-5">Tempat praktik peracikan obat, pengenalan bahan farmasi, serta uji kualitas sediaan sesuai prosedur laboratorium.</p>
                </div>
                <div class="bg-white rounded-lg overflow-hidden shadow-md transition-all duration-300 text-center hover:-translate-y-1 hover:shadow-lg">
                    <img class="w-screen h-52 object-cover" src="img/fasilitas/ruangkelas.jpg" alt="Ruang Kelas">
                    <h3 class="px-5 py-2 font-semibold text-2xl">Ruang Kelas</h3>
                    <p class="p-5">Ruang belajar yang nyaman, bersih, dan dilengkapi multimedia untuk mendukung proses belajar yang efektif.</p>
                </div>
                <div class="bg-white rounded-lg overflow-hidden shadow-md transition-all duration-300 text-center hover:-translate-y-1 hover:shadow-lg">
                    <img class="w-screen h-52 object-cover" src="img/fasilitas/lapangan.jpg" alt="Lapangan Sekolah">
                    <h3 class="px-5 py-2 font-semibold text-2xl">Lapangan Sekolah</h3>
                    <p class="p-5">Area terbuka untuk olahraga, upacara, dan berbagai kegiatan ekstrakurikuler siswa.</p>
                </div>
                <div class="bg-white rounded-lg overflow-hidden shadow-md transition-all duration-300 text-center hover:-translate-y-1 hover:shadow-lg">
                    <img class="w-screen h-52 object-cover" src="img/fasilitas/kantin.jpg" alt="Kantin">
                    <h3 class="px-5 py-2 font-semibold text-2xl">Kantin</h3>
                    <p class="p-5">Menyediakan makanan sehat dan higienis dengan harga terjangkau bagi seluruh warga sekolah.</p>
                </div>
            </div>
        </div>
    </section>
@endsection