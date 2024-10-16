<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title', 'Sistem Data Siswa')</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        body {
            display: flex;
            flex-direction: row;
        }
        #sidebar {
            min-width: 250px;
            max-width: 250px;
            background-color: #343a40;
            height: 100vh;
            position: fixed;
            top: 0;
            left: 0;
            color: rgb(0, 0, 0);
        }
        #content {
            margin-left: 250px; /* Space for sidebar */
            padding: 20px;
            width: 100%;
        }
    </style>
</head>
<body>

    <!-- Navbar Samping -->
    <nav id="sidebar" class="navbar navbar-dark bg-dark">
        <div class="container-fluid flex-column">
            <a class="navbar-brand" href="#">Data Siswa</a>
            <ul class="navbar-nav flex-column">
                <li class="nav-item">
                    <a class="nav-link active" aria-current="page" href="#">Home</a>
                </li>
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" data-bs-toggle="dropdown">
                        @if(Route::is('siswa.index'))
                            Data Siswa
                        @elseif(Route::is('siswa.create'))
                            Tambah Data Siswa
                        @else
                            Data Siswa
                        @endif
                    </a>
                    <ul class="dropdown-menu bg-dark">
                        <li><a class="dropdown-item text-light" href="{{ route('siswa.index') }}">Data Siswa</a></li>
                        <li><a class="dropdown-item text-light" href="{{ route('siswa.create') }}">Tambah Baru</a></li>
                    </ul>
                </li>
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" data-bs-toggle="dropdown">
                        @if(Route::is('guru.index'))
                            Data Guru
                        @elseif(Route::is('guru.create'))
                            Tambah Data Guru
                        @else
                            Data Guru
                        @endif
                    </a>
                    <ul class="dropdown-menu bg-dark">
                        <li><a class="dropdown-item text-light" href="{{ route('guru.index') }}">Data Guru</a></li>
                        <li><a class="dropdown-item text-light" href="{{ route('guru.create') }}">Tambah Baru</a></li>
                    </ul>
                </li>
            </ul>
        </div>
    </nav>

    <!-- Konten -->
    <div id="content">
        <div class="container mt-4">
            @yield('content')
        </div>
    </div>

    <!-- Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
