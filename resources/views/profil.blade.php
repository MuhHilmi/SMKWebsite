@extends('layout.app')

@section('title', 'Profil - SMK Kesehatan Cianjur')

@section('content')
    {{-- Judul Halaman --}}
    <section class="bg-blue-500 py-24 px-4 text-center">
        <div class="max-w-7xl mx-auto text-white drop-shadow-lg">
            <h1 class="font-bold text-6xl mb-2">Profil Sekolah</h1>
            <p class="font-semibold text-xl">Mengenal lebih dekat SMK Kesehatan Cianjur</p>
        </div>
    </section>

    {{-- Visi dan Misi --}}
    <section class="bg-gradient-to-br from-blue-50 via-white to-blue-50 py-10 px-4">
        <div class="max-w-7xl mx-auto">
            <div class="grid grid-cols-1 lg:grid-cols-2 gap-10">
                <div class="visi rounded-xl border bg-card text-card-foreground border-none shadow-lg p-8">
                    <div class="flex items-center gap-5">
                        <div class="bg-blue-100 rounded-full p-4 inline-block">
                            <i class="fa-solid fa-eye text-blue-500 text-2xl"></i>
                        </div>
                        <h1 class="font-bold text-2xl">Visi</h1>
                    </div>
                    <div class="mt-5">
                        <p class="text-lg text-gray-700 leading-relaxed">Menjadi Sekolah Menengah Kejuruan Kesehatan yang unggul dan juara dalam mencetak lulusan asisten tenaga kesehatan yang profesional</p>
                    </div>
                </div>
                <div class="visi rounded-xl border bg-card text-card-foreground border-none shadow-lg p-8">
                    <div class="flex items-center gap-5">
                        <div class="bg-blue-100 rounded-full p-4 inline-block">
                            <i class="fa-solid fa-bullseye text-blue-500 text-2xl"></i>
                        </div>
                        <h1 class="font-bold text-2xl">Misi</h1>
                    </div>
                    <div class="mt-5">
                        <ol>
                            <li class="flex flex-row gap-2">
                                <span class="flex-shrink-0 w-6 h-6 bg-blue-600 text-white rounded-full flex items-center justify-center text-sm font-bold mr-3 mt-0.5">1</span>
                                <span class="text-md text-gray-700 leading-relaxed">Mewujudkan kurikulum berbasis kompetensi sesuai dengan kebutuhan Dunia Usaha / Dunia industri.</span>
                            </li>
                            <li class="flex flex-row gap-2">
                                <span class="flex-shrink-0 w-6 h-6 bg-blue-600 text-white rounded-full flex items-center justify-center text-sm font-bold mr-3 mt-0.5">2</span>
                                <span class="text-md text-gray-700 leading-relaxed">Mewujudkan tenaga pendidik dan tenaga kependidikan yang profesional.</span>
                            </li>
                            <li class="flex flex-row gap-2">
                                <span class="flex-shrink-0 w-6 h-6 bg-blue-600 text-white rounded-full flex items-center justify-center text-sm font-bold mr-3 mt-0.5">3</span>
                                <span class="text-md text-gray-700 leading-relaxed">Mewujudkan lulusan Asisten Tenaga Kesehatan yang kompeten, kreatif, inovatif, dan mandiri untuk dapat berkompetisi di Dunia Usaha / Dunia Industri.</span>
                            </li>
                            <li class="flex flex-row gap-2">
                                <span class="flex-shrink-0 w-6 h-6 bg-blue-600 text-white rounded-full flex items-center justify-center text-sm font-bold mr-3 mt-0.5">4</span>
                                <span class="text-md text-gray-700 leading-relaxed">Mewujudkan lulusan yang berjiwa kewirausahaan sehingga dapat menciptakan lapangan kerja di bidang kesehatan.</span>
                            </li>
                            <li class="flex flex-row gap-2">
                                <span class="flex-shrink-0 w-6 h-6 bg-blue-600 text-white rounded-full flex items-center justify-center text-sm font-bold mr-3 mt-0.5">5</span>
                                <span class="text-md text-gray-700 leading-relaxed">Mewujudkan sarana prasarana yang sesuai dengan standar Dunia Usaha / Dunia Industri.</span>
                            </li>
                            <li class="flex flex-row gap-2">
                                <span class="flex-shrink-0 w-6 h-6 bg-blue-600 text-white rounded-full flex items-center justify-center text-sm font-bold mr-3 mt-0.5">6</span>
                                <span class="text-md text-gray-700 leading-relaxed">Mewujudkan kewirausahaan sekolah yang bersinergi dengan Bisnis Center dan Teacing Factory.</span>
                            </li>
                            <li class="flex flex-row gap-2">
                                <span class="flex-shrink-0 w-6 h-6 bg-blue-600 text-white rounded-full flex items-center justify-center text-sm font-bold mr-3 mt-0.5">7</span>
                                <span class="text-md text-gray-700 leading-relaxed">Mewujudkan tata kelola keuangan yang transparan dan akuntabel.</span>
                            </li>
                        </ol>
                    </div>
                </div>
            </div>
        </div>
    </section>

    {{-- Program Keahlian --}}
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
@endsection