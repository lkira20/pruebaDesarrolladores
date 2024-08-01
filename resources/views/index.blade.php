<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

    <style>
        body {
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            background-color: #f8f9fa;
        }

        .register-container {
            width: 100%;
            max-width: 400px;
            padding: 20px;
            background-color: white;
            border: 1px solid #ddd;
            border-radius: 4px;
            box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
        }

        .register-container h2 {
            text-align: center;
            margin-bottom: 20px;
        }
    </style>

    <title>Hello, world!</title>
</head>

<body>
    <div class="register-container">
        <h2>Crear cuenta</h2>
        <form>
            <div class="mb-3">
                <label for="name" class="form-label">Tu nombre</label>
                <input type="text" class="form-control" id="name" placeholder="Nombres y apellidos" required>
            </div>
            <div class="mb-3">
                <label for="email" class="form-label">Número de teléfono móvil o correo electrónico</label>
                <input type="email" class="form-control" id="email" placeholder="" required>
            </div>
            <div class="mb-3">
                <label for="password" class="form-label">Contraseña</label>
                <input type="password" class="form-control" id="password" placeholder="Como mínimo 6 caracteres"
                    required>
                <div class="form-text">La contraseña debe contener al menos seis caracteres.</div>
            </div>
            <div class="mb-3">
                <label for="confirm-password" class="form-label">Vuelve a escribir la contraseña</label>
                <input type="password" class="form-control" id="confirm-password" placeholder="" required>
            </div>
            <button type="submit" class="btn btn-warning w-100">Continuar</button>
        </form>
        <small class="d-block mt-3 text-center">
            Al crear una cuenta, aceptas las <a href="#">Condiciones de Uso</a> y el <a href="#">Aviso de
                Privacidad</a> de amazon.com.
        </small>
        <div class="mt-3 text-center">
            <a href="#">¿Compras para el trabajo? Crea una cuenta corporativa gratis</a>
        </div>
        <div class="mt-3 text-center">
            <a href="#">¿Ya tienes una cuenta? Iniciar sesión</a>
        </div>
    </div>

    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous">
    </script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js"
        integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js"
        integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous">
    </script>
    -->
</body>

</html>
