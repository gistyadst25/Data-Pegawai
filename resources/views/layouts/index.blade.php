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
        <ul class="navbar-nav ms-auto">
            <li class="nav-item">
                <a href="/login" class="nav-link {{ Request::is('login') ? 'active' : '' }}"></i>Login</a>
            </li>

        </ul>
    </div>
</nav>

        <!-- <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-expanded="false">
            Dropdown
            </a>
            <div class="dropdown-menu">
            <a class="dropdown-item" href="#">Action</a>
            <a class="dropdown-item" href="#">Another action</a>
            <div class="dropdown-divider"></div>
            <a class="dropdown-item" href="#">Something else here</a>
            </div>
        </li>
        <li class="nav-item">
            <a class="nav-link disabled">Disabled</a>
        </li>
        </ul> -->
        <!-- <form class="form-inline my-2 my-lg-0">
        <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
        <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
        </form> -->
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