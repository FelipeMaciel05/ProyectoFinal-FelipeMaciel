<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registrarse</title>
    <link rel="stylesheet" href="registrarse.css">
</head>
<body>
    <div class="registro">
    <h2>Registra un nuevo usuario</h2>

    <form method=POST>
    <div class="usuario">
    <p>Ingresa tu Correo Electronico:
    <input type="email" name="mail"> <br>
    </div>

    <div class="contraseña">
    <p>Contraseña:
    <input type="password" name="contraseñas"> <br>
    </div>

    <div class="confirmacion">
    <p>Confirmar contraseña:
    <input type="password" name="confirmar"> <br>
    </div>

    <div class="submit">
    <input type="submit" value="Guardar">
    <br>
    </div>

    <p><a href="http://localhost/ANTEPROYECTO/login.php">Iniciar Sesión</a></p>
    </form>

    </div>
</body>
</html>