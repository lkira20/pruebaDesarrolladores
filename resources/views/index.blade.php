<!doctype html>
<html lang="es">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    @vite(['resources/css/app.css', 'resources/js/app.js'])
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

    <title>prueba desarrollador!</title>
</head>

<body>
    <main>
        <img src="{{ asset('images/Amazon-Mexico.png') }}" style="width: 150px;" alt="logom amazon mexico"
            class="rounded mx-auto d-block ">
        <div class="register-container pt-2 mt-3">
            <div id="response"></div>
            <h1 class="h3 mb-3">Crear cuenta</h1>
            <form id="ajax-form" method="POST">
                @csrf
                <div class="mb-2">
                    <label for="name" class=" fw-bold">Tu nombre</label>
                    <input type="text" class="form-control" id="name" name="name" required>
                </div>
                <div class="mb-2">
                    <label for="email" class=" fw-bold">Correo electrónico</label>
                    <input type="email" class="form-control" id="email" name="email" required>
                </div>
                <div class="mb-2">
                    <label for="password" class=" fw-bold">Contraseña</label>
                    <input type="password" class="form-control" id="password" name="password"
                        placeholder="Debe tener al menos 6 caracteres" required>
                    <div class="form-text">¡ La contraseña debe contener al menos seis caracteres.</div>
                </div>
                <div class="mb-2">
                    <label for="confirm-password" class=" fw-bold">Vuelve a escribir la contraseña</label>
                    <input type="password" class="form-control" id="confirm-password" name="password_confirmation"
                        required>
                </div>
                <button type="submit" class="amazon-button w-100">Crear tu cuenta de Amazon</button>
            </form>
            <small class="d-block mt-3 small">
                Al crear una cuenta, aceptas las <a href="#">Condiciones de Uso</a> y el <a href="#">Aviso
                    de
                    Privacidad</a> de amazon.com.
            </small>

            <hr class="my-4">
            <div>
                <span class="small">¿Ya tienes una cuenta? <a href="#">Iniciar sesión</a></span>
            </div>
        </div>
    </main>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous">
    </script>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script>
        $(document).ready(function() {
            $('#ajax-form').on('submit', function(e) {
                e.preventDefault(); // Previene el envío del formulario por defecto
                const form = $(this).serialize();
                console.log('form')
                console.log(form)
                $.ajax({
                    url: '{{ route('register') }}',
                    method: 'POST',
                    data: form,
                    success: function(response) {
                        console.log(response)
                        if (response.success) {
                            $('#response').html('<div class="alert alert-success">' + response
                                .message + '</div>');
                        } else {
                            $('#response').html(
                                '<div class="alert alert-danger">Error en la solicitud</div>'
                            );
                        }
                    },
                    error: function(error) {
                        console.log('error')
                        console.log(error)
                        const message = error.responseJSON
                        if (message.message) {
                            return $('#response').html('<div class="alert alert-danger">' +
                                message.message + '</div>');
                        }

                        return $('#response').html(
                            '<div class="alert alert-danger">Error en la solicitud</div>');
                    }
                });
            });
        });
    </script>
</body>

</html>
