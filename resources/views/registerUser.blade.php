<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <!-- CSS -->
    <link rel="stylesheet" href="css/estilo.css">
    <title>Registro de Usuarios</title>
</head>

<body>

    @include('partials.header')

    <div class="container mt-5">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">Registro de Usuario</div>

                    <div class="card-body">
                        <form method="POST" action="{{ url('/registroUsuario')}}">
                            @csrf

                            <div class="mb-3 row">
                                <label for="name" class="col-md-4 col-form-label text-md-end">Nombre</label>
                                <div class="col-md-6">

                                    <input id="nombre" type="text"
                                        class="form-control @error('nombre') is-invalid @enderror" name="nombre"
                                        value="{{ old('nombre') }}" required autocomplete="nombre" autofocus>
                                    @error('nombre')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror

                                </div>
                            </div>

                            <div class="mb-3 row">
                                <label for="email" class="col-md-4 col-form-label text-md-end">Correo
                                    Electrónico</label>
                                <div class="col-md-6">
                                    <input id="email" type="email"
                                        class="form-control @error('email') is-invalid @enderror" name="email"
                                        value="{{ old('email') }}" required autocomplete="email">
                                    @error('email')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>

                            <div class="mb-3 row">
                                <label for="email" class="col-md-4 col-form-label text-md-end">Teléfono</label>
                                <div class="col-md-6">
                                    <input id="telefono" type="number"
                                        class="form-control @error('telefono') is-invalid @enderror" name="telefono"
                                        value="{{ old('telefono') }}" required autocomplete="telefono">
                                    @error('telefono')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>

                            <div class="mb-3 row">
                                <label for="password" class="col-md-4 col-form-label text-md-end">Contraseña</label>
                                <div class="col-md-6">
                                    <input id="password" type="password"
                                        class="form-control @error('password') is-invalid @enderror" name="password"
                                        required autocomplete="new-password" minlength="8">
                                    @error('password')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>

                            <div class="mb-3 row">
                                <label for="confirmar-password" class="col-md-4 col-form-label text-md-end">Confirmar
                                    Contraseña</label>
                                <div class="col-md-6">
                                    <input id="confirmar-password" type="password" class="form-control"
                                        name="confirmar-password" required autocomplete="new-password" minlength="8">
                                    <span id="password-error" class="invalid-feedback" style="display: none;">
                                        <strong>Las contraseñas no coinciden.</strong>
                                    </span>
                                </div>
                            </div>

                            <script>
                                document.addEventListener('DOMContentLoaded', function () {
                                    const password = document.getElementById('password');
                                    const confirmarPassword = document.getElementById('confirmar-password');
                                    const passwordError = document.getElementById('password-error');

                                    function validarContraseñas() {
                                        if (password.value !== confirmarPassword.value) {
                                            confirmarPassword.setCustomValidity('Las contraseñas no coinciden');
                                            passwordError.style.display = 'block';
                                        } else {
                                            confirmarPassword.setCustomValidity('');
                                            passwordError.style.display = 'none';
                                        }
                                    }

                                    password.addEventListener('change', validarContraseñas);
                                    confirmarPassword.addEventListener('keyup', validarContraseñas);
                                });
                            </script>

                            <div class="mb-3 row">
                                <div class="col-md-6 offset-md-4">
                                    <button type="submit" class="btn btn-primary">
                                        Registrarse
                                    </button>
                                    <a href="{{ url('/') }}" class="btn btn-warning">
                                        Volver
                                    </a>
                                </div>

                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>



</body>

</html>