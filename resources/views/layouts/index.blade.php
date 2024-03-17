<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CRUD LARAVEL 8</title>
    <link rel="stylesheet" href="{{ asset('css/bootstrap.min.css') }}">
    @yield('style')
</head>
<body>

    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
    <a class="navbar-brand" href="#">My Blog</a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>

    <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav mr-auto">
            <li class="nav-item">
                <a class="nav-link {{ Request::is('home') ? 'active' : '' }}" href="/home">Home</a>
            </li>
            <li class="nav-item">
                <a class="nav-link {{ Request::is('pegawai') ? 'active' : '' }}" href="/pegawai">Daftar Pegawai </a>
            </li>

            <li class="nav-item">
                <a class="nav-link {{ Request::is('pegawai/create') ? 'active' : '' }}" href="/pegawai/create">Tambah Data Pegawai </a>
            </li>

        </ul>
        
    </div>
</nav>

    </div>
    </nav>

<div class="container">
    @yield('content')
</div>
<script src="https://code.jquery.com/jquery-3.6.3.min.js" integrity="sha256-pvPw+upLPUjgMXY0G+8O0xUf+/Im1MZjXxxgOcBQBXU=" crossorigin="anonymous"></script>

    @yield('script')
<script src="{{ asset('js/bootstrap.min.js') }}"></script>

  <!-- Script to initialize Feather Icons -->
  <script src="https://cdn.jsdelivr.net/npm/feather-icons/dist/feather.min.js"></script>
  <script>
    feather.replace();
  </script>
  
</body>
</html>