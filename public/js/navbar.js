const btnDropdown = document.getElementById('btnDropdown');
const menuDropdown = document.getElementById('menuDropdown');

btnDropdown.addEventListener('click', () => {
    menuDropdown.classList.toggle('hidden');
});

// Tutup menu saat item diklik (opsional, direkomendasikan)
document.querySelectorAll('#menuDropdown a').forEach(link => {
    link.addEventListener('click', () => {
        menuDropdown.classList.add('hidden');
    });
});
