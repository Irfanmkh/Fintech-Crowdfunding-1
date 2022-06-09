<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
</head>

<body>
    <div id="app">
        <nav class="navbar navbar-expand-md navbar-light bg-white shadow-sm">
            <div class="container-fluid">
                <a class="navbar-brand" href="{{ url('/') }}">
                    <img src="{{ asset('img/logo.png') }}" alt="">
                    {{ config('app.name', 'Laravel') }}
                </a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">
                    <span class="navbar-toggler-icon"></span>
                </button>
            </div>
            <div class="collapse navbar-collapse container-fluid" id="navbarSupportedContent">
                <!-- Left Side Of Navbar -->
                <ul class="navbar-nav me-auto">
                    <li class="nav-item">
                        <a class="nav-link active" href="#">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">About</a>
                    </li>
                    <li>
                        <a class="nav-link" href="#">Donate</a>
                    </li>
                </ul>

                <!-- Right Side Of Navbar -->
                <ul class="navbar-nav ms-auto">
                    <!-- Authentication Links -->
                </ul>
            </div>
    </div>
    </nav>

    <main class="py-4">
        <div><img src="{{ asset('img/logo.png') }}" alt=""></div>
        <div>
            <p>Website sederhana ini ditujukan untuk membantu pembangunan
                masjid dan panti asuhan di daerah Kamal, Bangkalan, Jawa Timur.
                Dibuat dan dikembangkan oleh Kelompok 3 Financial Technology
                Sistem Informasi Universitas Trunojoyo Madura</p>
        </div>
        <div>
            <p>Our Team :
            </p>
        </div>
        <div>
            Rieldo Tampubolon - J.M. Havidz Yasaf Al-Afghoni - Irfan Maulana Khakiki - Fajar Naufal Daffa - Nafi'ul Anam
            (nanti ditambah foto masing-masing :v)
        </div>
    </main>
    <footer>
        Powered by Kelompok 3 Financial Technology - Sistem Informasi Universitas Trunojoyo Madura
    </footer>
    </div>
</body>

</html>