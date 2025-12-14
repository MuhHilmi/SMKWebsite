<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="shortcut icon" href="img/LogoSKC.png" type="image/png">

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css">
    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>

    @vite(['resources/css/app.css', 'resources/js/app.js'])

    <title>@yield('title', 'App')</title>
</head>
<body>
    {{-- Navbar --}}
    @include('partials.navbar')

    <main class="w-full">
        @yield('content')
    </main>

    {{-- Footer --}}
    @include('partials.footer')

    <script>
        document.addEventListener('DOMContentLoaded', function() {
            // Data dummy untuk diagram
            const genderData = { labels: ['Laki-laki', 'Perempuan'], data: [100, 800], colors: ['#008DDA', '#41C9E2'] };
            const classData = { labels: ['X', 'XI', 'XII'], data: [300, 250, 450], colors: ['#008DDA', '#41C9E2', '#ACE2E1'] };
            const majorData = { labels: ['Askep', 'Farmasi', 'ATLM'], data: [400, 300, 300], colors: ['#008DDA', '#41C9E2', '#ACE2E1'] };
            const graduationData = { labels: ['A', 'B', 'C'], data: [200, 300, 500], colors: ['#008DDA', '#41C9E2', '#ACE2E1'] };

            // Fungsi untuk membuat chart pie
            function createPieChart(canvasId, data) {
                const ctx = document.getElementById(canvasId).getContext('2d');
                new Chart(ctx, {
                    type: 'pie',
                    data: {
                        labels: data.labels,
                        datasets: [{
                            data: data.data,
                            backgroundColor: data.colors,
                            borderWidth: 1
                        }]
                    },
                    options: {
                        responsive: true,
                        plugins: {
                            legend: { position: 'bottom' }
                        }
                    }
                });
            }

            // Buat diagram
            createPieChart('genderChart', genderData);
            createPieChart('classChart', classData);
            createPieChart('majorChart', majorData);
            createPieChart('graduationChart', graduationData);
        });

        // Smooth scroll untuk link internal
        document.querySelectorAll('a[href^="#"]').forEach(anchor => {
            anchor.addEventListener('click', function (e) {
                e.preventDefault();
                document.querySelector(this.getAttribute('href')).scrollIntoView({
                    behavior: 'smooth'
                });
            });
        });
    </script>
</body>
</html>