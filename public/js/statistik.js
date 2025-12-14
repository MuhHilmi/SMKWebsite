// Ambil data dari Laravel (lewat attribute HTML)
const gender = JSON.parse(document.getElementById("chart-data").dataset.gender);
const kelas = JSON.parse(document.getElementById("chart-data").dataset.kelas);
const jurusan = JSON.parse(document.getElementById("chart-data").dataset.jurusan);

// --------------------
// PIE — Gender
// --------------------
new Chart(document.getElementById('genderChart'), {
    type: 'pie',
    data: {
        labels: ['Laki-laki', 'Perempuan'],
        datasets: [{
            data: [gender.L, gender.P],
        }]
    }
});

// --------------------
// BAR — Kelas
// --------------------
new Chart(document.getElementById('kelasChart'), {
    type: 'bar',
    data: {
        labels: ['X', 'XI', 'XII'],
        datasets: [{
            data: [kelas.X, kelas.XI, kelas.XII],
        }]
    }
});

// --------------------
// BAR — Jurusan
// --------------------
new Chart(document.getElementById('jurusanChart'), {
    type: 'bar',
    data: {
        labels: ['Farmasi', 'Askep', 'TLM'],
        datasets: [{
            data: [jurusan.Farmasi, jurusan.Askep, jurusan.TLM],
        }]
    }
});
