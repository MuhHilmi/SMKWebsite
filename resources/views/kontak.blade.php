@extends('layout.app')

@section('title', 'Kontak - SMK Kesehatan Cianjur')

@section('content')
    {{-- Judul Halaman --}}
    <section class="bg-blue-500 py-24 px-4 text-center">
        <div class="max-w-7xl mx-auto text-white drop-shadow-lg">
            <h1 class="font-bold text-6xl mb-2">Kontak Sekolah</h1>
            <p class="font-semibold text-xl">Hubungi kami untuk info lebih lanjut</p>
        </div>
    </section>

    <section class="bg-gradient-to-br from-blue-100 via-white to-blue-200">
        <div class="py-16 px-4">
            <div class="max-w-7xl mx-auto">
                <div class="grid md:grid-cols-2 gap-8 mb-12">
                    <div class="space-y-6">
                        <div class="rounded-xl border bg-card text-card-foreground border-none shadow-lg">
                            <div class="p-6">
                                <div class="flex items-start">
                                    <div class="w-12 h-12 bg-blue-100 rounded-full flex items-center justify-center mr-4 flex-shrink-0">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-map-pin w-6 h-6 text-blue-600" aria-hidden="true">
                                            <path d="M20 10c0 4.993-5.539 10.193-7.399 11.799a1 1 0 0 1-1.202 0C9.539 20.193 4 14.993 4 10a8 8 0 0 1 16 0"></path>
                                            <circle cx="12" cy="10" r="3"></circle>
                                        </svg>
                                    </div>
                                    <div>
                                        <h3 class="font-bold text-gray-900 mb-2">Alamat</h3>
                                        <p class="text-gray-600">Jl. Pangeran Hidayatullah No.105, Sawah Gede, Kec. Cianjur, Kabupaten Cianjur, Jawa Barat 43212</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="rounded-xl border bg-card text-card-foreground border-none shadow-lg">
                            <div class="p-6">
                                <div class="flex items-start">
                                    <div class="w-12 h-12 bg-blue-100 rounded-full flex items-center justify-center mr-4 flex-shrink-0">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-phone w-6 h-6 text-blue-600" aria-hidden="true">
                                            <path d="M22 16.92v3a2 2 0 0 1-2.18 2 19.79 19.79 0 0 1-8.63-3.07 19.5 19.5 0 0 1-6-6 19.79 19.79 0 0 1-3.07-8.67A2 2 0 0 1 4.11 2h3a2 2 0 0 1 2 1.72 12.84 12.84 0 0 0 .7 2.81 2 2 0 0 1-.45 2.11L8.09 9.91a16 16 0 0 0 6 6l1.27-1.27a2 2 0 0 1 2.11-.45 12.84 12.84 0 0 0 2.81.7A2 2 0 0 1 22 16.92z"></path>
                                        </svg>
                                    </div>
                                    <div>
                                        <h3 class="font-bold text-gray-900 mb-2">Telepon</h3>
                                        <p class="text-gray-600">(0263) 123456</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="rounded-xl border bg-card text-card-foreground border-none shadow-lg">
                            <div class="p-6">
                                <div class="flex items-start">
                                    <div class="w-12 h-12 bg-blue-100 rounded-full flex items-center justify-center mr-4 flex-shrink-0">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-mail w-6 h-6 text-blue-600" aria-hidden="true">
                                            <path d="m22 7-8.991 5.727a2 2 0 0 1-2.009 0L2 7"></path>
                                            <rect x="2" y="4" width="20" height="16" rx="2"></rect>
                                        </svg>
                                    </div>
                                    <div>
                                        <h3 class="font-bold text-gray-900 mb-2">Email</h3>
                                        <p class="text-gray-600">info@smkkesehatan-cianjur.sch.id</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="rounded-xl border bg-card text-card-foreground border-none shadow-lg">
                            <div class="p-6">
                                <div class="flex items-start">
                                    <div class="w-12 h-12 bg-blue-100 rounded-full flex items-center justify-center mr-4 flex-shrink-0">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-clock w-6 h-6 text-blue-600" aria-hidden="true">
                                            <circle cx="12" cy="12" r="10"></circle>
                                            <polyline points="12 6 12 12 16 14"></polyline>
                                        </svg>
                                    </div>
                                    <div>
                                        <h3 class="font-bold text-gray-900 mb-2">Jam Operasional</h3>
                                        <p class="text-gray-600">Senin - Jumat: 07.00 - 16.00 WIB</p>
                                        <p class="text-gray-600">Sabtu: 07.00 - 14.00 WIB</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="rounded-xl border bg-card text-card-foreground border-none shadow-lg">
                        <div class="p-0">
                            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2964.473419785895!2d107.12604288846043!3d-6.827219623522648!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e68525ed6ce5001%3A0xa52e75fe9fc15b95!2sSMK%20Kesehatan%20Cianjur!5e0!3m2!1sid!2sid!4v1787122404288!5m2!1sid!2sid" width="100%" height="500" loading="lazy" referrerpolicy="no-referrer-when-downgrade" class="rounded-lg" style="border: 0px;"></iframe>
                        </div>
                    </div>
                </div>
                <div class="rounded-xl border bg-card text-card-foreground border-none shadow-lg">
                    <div class="p-8">
                        <h3 class="text-2xl font-bold text-gray-900 mb-6 text-center">Ikuti Kami</h3>
                        <div class="flex justify-center space-x-6">
                            <a href="#" class="w-14 h-14 bg-blue-100 rounded-full flex items-center justify-center hover:bg-blue-600 hover:text-white transition-colors">
                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-facebook w-6 h-6" aria-hidden="true">
                                    <path d="M18 2h-3a5 5 0 0 0-5 5v3H7v4h3v8h4v-8h3l1-4h-4V7a1 1 0 0 1 1-1h3z"></path>
                                </svg>
                            </a>
                            <a href="#" class="w-14 h-14 bg-blue-100 rounded-full flex items-center justify-center hover:bg-blue-600 hover:text-white transition-colors">
                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-instagram w-6 h-6" aria-hidden="true">
                                    <rect width="20" height="20" x="2" y="2" rx="5" ry="5"></rect>
                                    <path d="M16 11.37A4 4 0 1 1 12.63 8 4 4 0 0 1 16 11.37z"></path>
                                    <line x1="17.5" x2="17.51" y1="6.5" y2="6.5"></line>
                                </svg>
                            </a>
                            <a href="#" class="w-14 h-14 bg-blue-100 rounded-full flex items-center justify-center hover:bg-blue-600 hover:text-white transition-colors">
                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-youtube w-6 h-6" aria-hidden="true">
                                    <path d="M2.5 17a24.12 24.12 0 0 1 0-10 2 2 0 0 1 1.4-1.4 49.56 49.56 0 0 1 16.2 0A2 2 0 0 1 21.5 7a24.12 24.12 0 0 1 0 10 2 2 0 0 1-1.4 1.4 49.55 49.55 0 0 1-16.2 0A2 2 0 0 1 2.5 17"></path>
                                    <path d="m10 15 5-3-5-3z"></path>
                                </svg>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection