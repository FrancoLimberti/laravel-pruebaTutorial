<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Dancing+Script:wght@400&display=swap" rel="stylesheet">

    <link rel="stylesheet" href="css/estilo.css">
    <title>Sentirse Bien</title>
</head>

<body>

    <!-- Menu de navegación -->
    <nav class="navbar navbar-expand-lg navbar-light" style="background-color: #7fe67f">
        <div class="container-fluid">
            <a class="navbar-brand d-flex align-items-center" href="{{ url('/')}}">
                <img src="icons/Logo_SPA_.png" alt="Logo" width="68" height="32" class="d-inline-block align-top me-2">
                Sentirse Bien
            </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
                aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav me-auto"> <!-- Agrupa las opciones de navegación a la izquierda -->
                    <li class="nav-item">
                        <a class="nav-link" href="#"><i class="bi bi-person-vcard"></i> Quienes somos</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#"><i class="bi bi-cart4"></i> Servicios</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{url('/noticias') }}"><i class="bi bi-newspaper"></i> Noticias</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#"><i class="bi bi-briefcase-fill"></i> Empleo</a>
                    </li>
                </ul>

                @auth
                    <ul class="navbar-nav ms-auto">
                        <li class="nav-item">
                            <span class="nav-link">Bienvenido, {{ Auth::user()->nombre }}</span>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="{{ route('logout') }}">
                                <i class="bi bi-box-arrow-right"></i> Cerrar Sesión
                            </a>
                        </li>
                    </ul>
                @else
                    <ul class="navbar-nav ms-auto">
                        <li class="nav-item">
                            <a class="nav-link" href="{{ url('/registroUsuario') }}">
                                <i class="bi bi-person-plus-fill"></i> Registrarse
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="{{ url('/login') }}">
                                <i class="bi bi-person-circle"></i> Iniciar Sesión
                            </a>
                        </li>
                    </ul>
                @endauth
            </div>
        </div>
    </nav>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-CO6pWjp8tJ7Jk5g5rG1q48J3uITbQ8zDUBFzB9BMQGm1C3t8eXT79qKc6pC51smh"
        crossorigin="anonymous"></script>
</body>

</html>