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
    <label>Ingresa tu Correo Electronico</label>
    <input type="email" name="mail"> <br>
    </div>

    <div class="contraseña">
    <label>Contraseña</label>
    <input type="password" name="contraseñas"> <br>
    </div>

    <div class="confirmacion">
    <label>Confirmar contraseña</label> 
    <input type="password" name="confirmar"> <br>
    </div>

    <div class="submit">
    <input type="submit" value="Guardar">
    <br>
    </div>

    <div class="link">
    <span> Ya tenes cuenta? <a href="http://localhost/ANTEPROYECTO/login.php">Iniciar Sesión</a></span>
    </div>

    </form>

    </div>
</body>
</html>