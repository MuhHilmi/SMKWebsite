<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Statistik Siswa</title>

    <!-- Chart.js -->
    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>

    <style>
        .chart-box {
            width: 400px;
            margin: 20px auto;
        }
    </style>
</head>
<body>
    <div id="chart-data"
        data-gender='@json($gender)'
        data-kelas='@json($kelas)'
        data-jurusan='@json($jurusan)'
    ></div>

    <h2 style="text-align:center;">Statistik Siswa</h2>

    <!-- PIE: Gender -->
    <div class="chart-box">
        <h3 style="text-align:center;">Jenis Kelamin</h3>
        <canvas id="genderChart"></canvas>
    </div>

    <!-- BAR: Kelas -->
    <div class="chart-box">
        <h3 style="text-align:center;">Kelas</h3>
        <canvas id="kelasChart"></canvas>
    </div>

    <!-- BAR: Jurusan -->
    <div class="chart-box">
        <h3 style="text-align:center;">Jurusan</h3>
        <canvas id="jurusanChart"></canvas>
    </div>

    <script src="/js/statistik.js"></script>
</body>
</html>
