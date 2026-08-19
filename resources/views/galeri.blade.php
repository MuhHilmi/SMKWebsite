@extends('layout.app')

@section('title', 'Galeri - SMK Kesehatan Cianjur')

@section('content')
    {{-- Judul Halaman --}}
    <section class="bg-blue-500 py-24 px-4 text-center">
        <div class="max-w-7xl mx-auto text-white drop-shadow-lg">
            <h1 class="font-bold text-6xl mb-2">Galeri Sekolah</h1>
            <p class="font-semibold text-xl">Dokumentasi kegiatan sekolah</p>
        </div>
    </section>

    {{-- Galeri --}}
    <section class="bg-gradient-to-br from-blue-100 via-white to-blue-200 py-16 px-4">
        <div class="max-w-7xl mx-auto">
            {{-- Filter --}}
            <div class="flex flex-wrap justify-center gap-3 mb-10">
                @php
                    $categories = [
                        'Semua',
                        'Kegiatan',
                        'Fasilitas',
                        'Prestasi',
                        'Ekstrakurikuler'
                    ];
                @endphp
                @foreach ($categories as $category)
                    <button
                        type="button"
                        data-category="{{ $category }}"
                        class="gallery-filter px-5 py-2.5 rounded-full font-semibold transition-all duration-300
                        {{ $category === 'Semua'
                            ? 'bg-blue-600 text-white shadow-lg'
                            : 'bg-white text-blue-600 hover:bg-blue-50' }}"
                    >
                        {{ $category }}
                    </button>
                @endforeach
            </div>
            {{-- Gallery --}}
            <div
                id="gallery-container"
                class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-6"
            ></div>
            {{-- Empty --}}
            <div
                id="gallery-empty"
                class="hidden text-center py-16"
            >
                <div class="text-5xl mb-4">📷</div>
                <h3 class="text-xl font-bold text-gray-700">
                    Belum ada foto
                </h3>
                <p class="text-gray-500 mt-2">
                    Belum ada dokumentasi untuk kategori ini.
                </p>
            </div>
        </div>
    </section>
    {{-- Modal --}}
    <div
        id="gallery-modal"
        class="fixed inset-0 z-50 hidden items-center justify-center bg-black/80 p-4"
    >
        <div class="relative max-w-5xl w-full">
            <button
                type="button"
                id="close-modal"
                class="absolute -top-12 right-0 text-white text-4xl hover:text-gray-300"
            >
                &times;
            </button>
            <img
                id="modal-image"
                src=""
                alt=""
                class="w-full max-h-[80vh] object-contain rounded-xl shadow-2xl"
            >
            <div class="bg-white rounded-b-xl p-5">
                <span
                    id="modal-category"
                    class="inline-block bg-blue-100 text-blue-600 px-3 py-1 rounded-full text-sm font-semibold"
                ></span>
                <h3
                    id="modal-title"
                    class="text-xl font-bold text-gray-800 mt-2"
                ></h3>
                <p
                    id="modal-description"
                    class="text-gray-600 mt-1"
                ></p>
            </div>
        </div>
    </div>
@endsection

<script>
document.addEventListener('DOMContentLoaded', function () {
    const gallery = [
        {
            id: 1,
            title: 'Kegiatan Belajar Mengajar',
            category: 'Kegiatan',
            description: 'Kegiatan pembelajaran siswa di lingkungan sekolah.',
            image: 'https://picsum.photos/id/1/800/600'
        },
        {
            id: 2,
            title: 'Gedung Sekolah',
            category: 'Fasilitas',
            description: 'Fasilitas gedung SMK Kesehatan Cianjur.',
            image: 'https://picsum.photos/id/10/800/600'
        },
        {
            id: 3,
            title: 'Prestasi Siswa',
            category: 'Prestasi',
            description: 'Dokumentasi prestasi siswa.',
            image: 'https://picsum.photos/id/20/800/600'
        },
        {
            id: 4,
            title: 'Kegiatan Ekstrakurikuler',
            category: 'Ekstrakurikuler',
            description: 'Kegiatan ekstrakurikuler siswa.',
            image: 'https://picsum.photos/id/30/800/600'
        },
        {
            id: 5,
            title: 'Kegiatan Sekolah',
            category: 'Kegiatan',
            description: 'Kegiatan siswa bersama guru.',
            image: 'https://picsum.photos/id/40/800/600'
        },
        {
            id: 6,
            title: 'Laboratorium',
            category: 'Fasilitas',
            description: 'Fasilitas laboratorium sekolah.',
            image: 'https://picsum.photos/id/50/800/600'
        },
        {
            id: 7,
            title: 'Upacara Sekolah',
            category: 'Kegiatan',
            description: 'Kegiatan upacara sekolah.',
            image: 'https://picsum.photos/id/60/800/600'
        },
        {
            id: 8,
            title: 'Organisasi Siswa',
            category: 'Ekstrakurikuler',
            description: 'Kegiatan organisasi siswa.',
            image: 'https://picsum.photos/id/70/800/600'
        },
        {
            id: 9,
            title: 'Penghargaan Siswa',
            category: 'Prestasi',
            description: 'Penghargaan atas prestasi siswa.',
            image: 'https://picsum.photos/id/80/800/600'
        }
    ];

    const container =
        document.getElementById('gallery-container');

    const empty =
        document.getElementById('gallery-empty');

    const modal =
        document.getElementById('gallery-modal');

    const modalImage =
        document.getElementById('modal-image');

    const modalTitle =
        document.getElementById('modal-title');

    const modalCategory =
        document.getElementById('modal-category');

    const modalDescription =
        document.getElementById('modal-description');

    const closeModal =
        document.getElementById('close-modal');

    /*
     * Render gallery
     */
    function renderGallery(category = 'Semua') {
        container.innerHTML = '';
        const filtered =
            category === 'Semua'
                ? gallery
                : gallery.filter(function (item) {
                    return item.category === category;
                });
        if (filtered.length === 0) {
            container.classList.add('hidden');
            empty.classList.remove('hidden');
            return;
        }
        container.classList.remove('hidden');
        empty.classList.add('hidden');
        filtered.forEach(function (item) {
            const card =
                document.createElement('div');
            card.className =
                'group bg-white rounded-2xl overflow-hidden shadow-md hover:shadow-2xl transition-all duration-300 cursor-pointer';
            card.innerHTML = `
                <div class="relative aspect-[4/3] overflow-hidden">
                    <img
                        src="${item.image}"
                        alt="${item.title}"
                        class="w-full h-full object-cover group-hover:scale-110 transition-transform duration-500"
                        loading="lazy"
                    >
                    <div class="absolute inset-0 bg-gradient-to-t from-black/70 via-transparent to-transparent opacity-0 group-hover:opacity-100 transition-opacity duration-300">
                    </div>
                    <div class="absolute bottom-4 left-4 right-4 text-white opacity-0 group-hover:opacity-100 transition-opacity duration-300">
                        <p class="text-sm font-medium">
                            Klik untuk melihat
                        </p>
                    </div>
                </div>
                <div class="p-5">
                    <span class="inline-block bg-blue-100 text-blue-600 px-3 py-1 rounded-full text-xs font-bold mb-3">
                        ${item.category}
                    </span>
                    <h3 class="text-lg font-bold text-gray-800">
                        ${item.title}
                    </h3>
                    <p class="text-sm text-gray-500 mt-2">
                        ${item.description}
                    </p>
                </div>
            `;
            card.addEventListener('click', function () {
                modalImage.src = item.image;
                modalImage.alt = item.title;
                modalTitle.textContent =
                    item.title;
                modalCategory.textContent =
                    item.category;
                modalDescription.textContent =
                    item.description;
                modal.classList.remove('hidden');
                modal.classList.add('flex');
                document.body.classList.add(
                    'overflow-hidden'
                );
            });
            container.appendChild(card);
        });
    }

    /*
     * Filter
     */
    document
        .querySelectorAll('.gallery-filter')
        .forEach(function (button) {
            button.addEventListener('click', function () {
                const category =
                    this.dataset.category;
                document
                    .querySelectorAll('.gallery-filter')
                    .forEach(function (btn) {
                        btn.classList.remove(
                            'bg-blue-600',
                            'text-white',
                            'shadow-lg'
                        );
                        btn.classList.add(
                            'bg-white',
                            'text-blue-600'
                        );
                    });
                this.classList.remove(
                    'bg-white',
                    'text-blue-600'
                );
                this.classList.add(
                    'bg-blue-600',
                    'text-white',
                    'shadow-lg'
                );
                renderGallery(category);
            });
        });

    /*
     * Close modal
     */
    function hideModal() {
        modal.classList.add('hidden');
        modal.classList.remove('flex');
        modalImage.src = '';
        document.body.classList.remove(
            'overflow-hidden'
        );
    }
    closeModal.addEventListener(
        'click',
        hideModal
    );
    modal.addEventListener(
        'click',
        function (event) {
            if (event.target === modal) {
                hideModal();
            }
        }
    );
    document.addEventListener(
        'keydown',
        function (event) {
            if (event.key === 'Escape') {
                hideModal();
            }
        }
    );
    /*
     * Initial render
     */
    renderGallery();
});
</script>
