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

    {{-- Bagian Tentang --}}
    {{-- <section id="tentang" class="scroll-mt-20 bg-[#f8f9fa] p-14">
        <div class="max-w-7xl mx-auto">
            <h2 class="text-center mb-10 text-3xl">Tentang Kami</h2>

            Sejarah Singkat
            <div class="text-center mb-10">
                <h3 class="text-2xl mb-5">Sejarah Singkat</h3>
                <p class="text-sm max-w-3xl m-auto">Sekolah ABC didirikan pada tahun 2000 oleh sekelompok pendidik visioner yang ingin menciptakan lingkungan belajar yang inovatif. Dari awal kecil dengan 50 siswa, kini kami telah berkembang menjadi institusi terkemuka dengan lebih dari 1000 siswa, fokus pada pendidikan holistik dan teknologi modern.</p>
            </div>

            Visi dan Misi
            <div class="grid grid-cols-1 gap-5 mb-14 lg:grid-cols-2 md:gap-7">
                <div class="bg-[#a8dadc] p-5 md:p-7 rounded-lg text-center shadow-md vision">
                    <h3 class="text-xl mb-3">Visi</h3>
                    <p class="text-md">Menjadi Sekolah Menengah Kejuruan Kesehatan yang unggul dan juara dalam mencetak lulusan asisten tenaga kesehatan yang profesional.</p>
                </div>
                <div class="bg-[#a8dadc] p-5 md:p-7 rounded-lg text-center shadow-md mission">
                    <h3 class="text-xl mb-3">Misi</h3>
                    <p class="text-md">
                        <ul class="text-left">
                            <li class="list-decimal">Mewujudkan kurikulum berbasis kompetensi sesuai dengan kebutuhan Dunia Usaha / Dunia industri.</li>
                            <li class="list-decimal">Mewujudkan tenaga pendidik dan tenaga kependidikan yang profesional.</li>
                            <li class="list-decimal">Mewujudkan lulusan Asisten Tenaga Kesehatan yang kompeten, kreatif, inovatif, dan mandiri untuk dapat berkompetisi di Dunia Usaha / Dunia Industri.</li>
                            <li class="list-decimal">Mewujudkan lulusan yang berjiwa kewirausahaan sehingga dapat menciptakan lapangan kerja di bidang kesehatan.</li>
                            <li class="list-decimal">Mewujudkan sarana prasarana yang sesuai dengan standar Dunia Usaha / Dunia Industri.</li>
                            <li class="list-decimal">Mewujudkan kewirausahaan sekolah yang bersinergi dengan Bisnis Center dan Teacing Factory.</li>
                            <li class="list-decimal">Mewujudkan tata kelola keuangan yang transparan dan akuntabel</li>
                        </ul>
                    </p>
                </div>
            </div>

            <!-- Section Kata Pengantar dari Kepala Sekolah -->
            <section id="principal-message" class="about bg-[#a8dadc] rounded-md p-14">
                <div class="w-full">
                    <h2 class="text-center items-center mb-10 text-xl font-semibold md:text-2xl">Kata Pengantar dari Kepala Sekolah</h2>
                    <div class="flex items-center justify-center gap-8 flex-wrap">
                        <img src="https://dummyimage.com/200x250" alt="Kepala Sekolah" class="w-52 h-60 object-cover rounded shadow-md">
                        <div class="max-w-xl">
                            <h3 class="text-2xl mb-4 text-center">Dr. Ahmad Santoso, S.Pd., M.Pd.</h3>
                            <p class="text-lg text-center md:text-justify">"Selamat datang di SMK ABC, tempat di mana impian siswa diwujudkan melalui pendidikan vokasi berkualitas. Kami berkomitmen untuk membentuk generasi muda yang siap menghadapi tantangan dunia kerja dengan integritas, inovasi, dan keterampilan unggul. Bersama, mari kita bangun masa depan yang lebih cerah."</p>
                        </div>
                    </div>
                </div>
            </section>

            <!-- Section Wakil Kepala Sekolah -->
            <section id="vice-principals" class="about bg-[#f8f9fa] p-16">
                <div class="w-full">
                    <h2 class="text-center mb-10 text-3xl">Wakil Kepala Sekolah</h2>
                    <div class="grid grid-cols-1 lg:grid-cols-3 gap-7">
                        <div class="bg-white place-items-center p-5 rounded-lg text-center shadow-md transition-transform duration-300 hover:-translate-y-1">
                            <img class="w-36 h-52 object-cover rounded-lg mb-4" src="https://dummyimage.com/200x250" alt="Wakil Kesiswaan">
                            <h3 class="text-lg mb-3">Wakil Kepala Sekolah Bidang Kesiswaan</h3>
                            <p class="font-bold mb-3">Siti Aminah, S.Pd.</p>
                            <p>Bertanggung jawab atas kesejahteraan siswa, disiplin, dan kegiatan kesiswaan untuk menciptakan lingkungan belajar yang positif.</p>
                        </div>
                        <div class="bg-white place-items-center p-5 rounded-lg text-center shadow-md transition-transform duration-300 hover:-translate-y-1">
                            <img class="w-36 h-52 object-cover rounded-lg mb-4" src="https://dummyimage.com/200x250" alt="Wakil Kurikulum">
                            <h3 class="text-lg mb-3">Wakil Kepala Sekolah Bidang Kurikulum</h3>
                            <p class="font-bold mb-3">Budi Hartono, M.Pd.</p>
                            <p>Mengembangkan kurikulum vokasi yang relevan dengan industri, memastikan pembelajaran praktis dan inovatif.</p>
                        </div>
                        <div class="bg-white place-items-center p-5 rounded-lg text-center shadow-md transition-transform duration-300 hover:-translate-y-1">
                            <img class="w-36 h-52 object-cover rounded-lg mb-4" src="https://dummyimage.com/200x250" alt="Wakil Hubin">
                            <h3 class="text-lg mb-3">Wakil Kepala Sekolah Bidang Hubungan Industri (Hubin)</h3>
                            <p class="font-bold mb-3">Rina Sari, S.E.</p>
                            <p>Menjalin kemitraan dengan dunia usaha untuk program PKL, magang, dan penempatan kerja siswa.</p>
                        </div>
                    </div>
                </div>
            </section>

            <!-- Section Kepala Program/Jurusan -->
            <section id="program-heads" class="about bg-[#f8f9fa] p-16">
                <div class="w-full">
                    <h2 class="text-center mb-10 text-3xl">Kepala Program/Jurusan</h2>
                    <div class="grid grid-cols-1 lg:grid-cols-3 gap-7">
                        <div class="bg-white place-items-center p-5 rounded-lg text-center shadow-md transition-transform duration-300 hover:-translate-y-1">
                            <img class="w-36 h-52 object-cover rounded-lg mb-4" src="https://dummyimage.com/200x250" alt="Kepala Farmasi">
                            <h3 class="text-lg mb-3">Kepala Program Farmasi</h3>
                            <p class="font-bold mb-3">Dr. Maya Indah, Apt.</p>
                            <p>Memimpin program farmasi dengan fokus pada praktik laboratorium, etika profesi, dan persiapan sertifikasi.</p>
                        </div>
                        <div class="bg-white place-items-center p-5 rounded-lg text-center shadow-md transition-transform duration-300 hover:-translate-y-1">
                            <img class="w-36 h-52 object-cover rounded-lg mb-4" src="https://dummyimage.com/200x250" alt="Kepala Askeb">
                            <h3 class="text-lg mb-3">Kepala Program Askeb (Asuhan Keperawatan)</h3>
                            <p class="font-bold mb-3">Nurhayati, S.Kep., Ns.</p>
                            <p>Mengembangkan keterampilan keperawatan praktis, empati, dan pelayanan kesehatan holistik.</p>
                        </div>
                        <div class="bg-white place-items-center p-5 rounded-lg text-center shadow-md transition-transform duration-300 hover:-translate-y-1">
                            <img class="w-36 h-52 object-cover rounded-lg mb-4" src="https://dummyimage.com/200x250" alt="Kepala TLM">
                            <h3 class="text-lg mb-3">Kepala Program TLM (Teknik Laboratorium Medis)</h3>
                            <p class="font-bold mb-3">Agus Priyanto, S.Si., M.Biomed.</p>
                            <p>Mengawasi praktikum medis, analisis laboratorium, dan teknologi kesehatan terkini.</p>
                        </div>
                    </div>
                </div>
            </section>

            Diagram
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
    </section> --}}

    {{-- Program --}}
    <section id="programs" class="scroll-mt-20 p-14 bg-gradient-to-tr from-blue-50 via-white to-blue-50">
        <div class="max-w-7xl mx-auto">
            <h2 class="text-center mb-10 font-bold text-4xl">Program Keahlian</h2>
            {{-- <p class="text-center mb-10 text-lg text-gray-300 max-w-3xl mx-auto">Di SMK ABC, kami menawarkan program vokasi unggul yang mempersiapkan siswa untuk dunia kerja melalui jurusan praktis, pengalaman lapangan, dan dukungan kesehatan serta finansial.</p> --}}

            <!-- Jurusan -->
            <div class="grid grid-cols-1 md:grid-cols-3 gap-7 mb-14">
                <div class="bg-white rounded-lg overflow-hidden shadow-md flex flex-col border-2 transition-all duration-500 hover:border-blue-700 hover:shadow-lg">
                    <img class="w-full h-48 object-cover" src="img\jurusan\askep\PhotoBersamaAskep.jpg" alt="Asisten Keperawatan">
                    <div class="flex flex-col justify-between flex-1">
                        <div>
                            <h3 class="px-5 py-2 font-semibold text-2xl text-black">Asisten Keperawatan</h3>
                            <p class="px-5 py-2 text-black">Pelajari pemrograman, jaringan, dan teknologi digital dengan praktik langsung di lab komputer.</p>
                        </div>
                        <a href="#contact" class="block m-5 bg-blue-600 p-3 text-center rounded transition-all duration-300 hover:bg-blue-800 text-white">Pelajari Lebih Lanjut</a>
                    </div>
                </div>
                <div class="bg-white rounded-lg overflow-hidden shadow-md flex flex-col border-2 transition-all duration-500 hover:border-blue-700 hover:shadow-lg">
                    <img class="w-full h-48 object-cover" src="img\jurusan\farmasi\PhotoBersamaFarmasi.jpg" alt="Farmasi">
                    <div class="flex flex-col justify-between flex-1">
                        <div>
                            <h3 class="px-5 py-2 font-semibold text-2xl text-black">Farmasi</h3>
                            <p class="px-5 py-2 text-black">Kembangkan keterampilan kuliner dengan fokus pada hidangan sehat dan inovatif di dapur simulasi.</p>
                        </div>
                        <a href="#contact" class="block m-5 bg-blue-600 p-3 text-center rounded transition-all duration-300 hover:bg-blue-800 text-white">Pelajari Lebih Lanjut</a>
                    </div>
                </div>
                <div class="bg-white rounded-lg overflow-hidden shadow-md flex flex-col border-2 transition-all duration-500 hover:border-blue-700 hover:shadow-lg">
                    <img class="w-full h-48 object-cover" src="img\jurusan\atlm\PhotoBersamaATLM.jpg" alt="Teknologi Laboratorium Medik">
                    <div class="flex flex-col justify-between flex-1">
                        <div>
                            <h3 class="px-5 py-2 font-semibold text-2xl text-black">Teknologi Laboratorium Medik</h3>
                            <p class="px-5 py-2 text-black">Belajar manajemen keuangan, perpajakan, dan simulasi bisnis untuk karir di dunia korporat.</p>
                        </div>
                        <a href="#contact" class="block m-5 bg-blue-600 p-3 text-center rounded transition-all duration-300 hover:bg-blue-800 text-white">Pelajari Lebih Lanjut</a>
                    </div>
                </div>
            </div>

            <!-- Program Tambahan -->
            {{-- <div class="additional-programs">
                <h3 class="text-center text-2xl mb-7">Program Tambahan</h3>
                <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-5">
                    <div class="bg-blue-200 p-5 rounded-xl text-center shadow-md text-black">
                        <h4 class="text-xl mb-2">Program PKL (Praktik Kerja Lapangan)</h4>
                        <p>Pengalaman kerja langsung di perusahaan mitra selama 3-6 bulan untuk membangun keterampilan praktis.</p>
                    </div>
                    <div class="bg-blue-200 p-5 rounded-xl text-center shadow-md text-black">
                        <h4 class="text-xl mb-2">Magang</h4>
                        <p>Magang wajib di industri terkait jurusan, dengan dukungan supervisor sekolah dan perusahaan.</p>
                    </div>
                    <div class="bg-blue-200 p-5 rounded-xl text-center shadow-md text-black">
                        <h4 class="text-xl mb-2">Ekstrakurikuler</h4>
                        <p>Kegiatan seperti klub coding, kuliner, atau olahraga untuk pengembangan holistik siswa.</p>
                    </div>
                    <div class="bg-blue-200 p-5 rounded-xl text-center shadow-md text-black">
                        <h4 class="text-xl mb-2">Tes Kesehatan Gratis</h4>
                        <p>Pemeriksaan kesehatan rutin gratis untuk semua siswa, termasuk konsultasi nutrisi dan kesehatan mental.</p>
                    </div>
                    <div class="bg-blue-200 p-5 rounded-xl text-center shadow-md text-black">
                        <h4 class="text-xl mb-2">Kegiatan Sehat Jasmani</h4>
                        <p>Olahraga bersama tiap minggu sekali pada hari Rabu, seperti jogging, yoga, atau permainan tim untuk menjaga kebugaran.</p>
                    </div>
                    <div class="bg-blue-200 p-5 rounded-xl text-center shadow-md text-black">
                        <h4 class="text-xl mb-2">Beasiswa</h4>
                        <p>Beasiswa prestasi akademik, olahraga, atau kebutuhan khusus tersedia untuk siswa berprestasi.</p>
                    </div>
                </div>
            </div> --}}
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