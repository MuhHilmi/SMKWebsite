const menuItems = document.querySelectorAll('.menu-item');
const menuSelected = document.querySelectorAll('.menu-selected');

menuItems.forEach(item => {
    item.addEventListener('click', () => {
        const key = item.dataset.key;

        // Reset menu item (warna)
        menuItems.forEach(el => {
            el.classList.remove('bg-blue-500', 'text-white');
        });

        // Aktifkan menu item
        item.classList.add('bg-blue-500', 'text-white');

        // Reset konten
        menuSelected.forEach(el => {
            el.classList.add('hidden');
            el.classList.remove('flex');
        });

        // Tampilkan konten yang diambil berdasarkan data-key
        const activeContent = document.querySelector(
            `.menu-selected[data-key="${key}"]`
        );

        if (activeContent) {
            activeContent.classList.remove('hidden');
            activeContent.classList.add('flex');
        }
    });
});
