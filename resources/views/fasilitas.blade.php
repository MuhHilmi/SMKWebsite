@extends('layout.app')

@section('title', 'Fasilitas - SMK Kesehatan Cianjur')

@section('content')
    {{-- Judul Halaman --}}
    <section class="bg-blue-500 py-24 px-4 text-center">
        <div class="max-w-7xl mx-auto text-white drop-shadow-lg">
            <h1 class="font-bold text-6xl mb-2">Fasilitas Sekolah</h1>
            <p class="font-semibold text-xl">Fasilitas lengkap untuk mendukung pembelajaran optimal.</p>
        </div>
    </section>

    <section class="bg-gradient-to-br from-blue-100 via-white to-blue-200">
        <div class="max-w-7xl mx-auto">
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8 py-10">
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