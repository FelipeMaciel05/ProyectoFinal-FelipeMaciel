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
    <input type="email" name="mail" placeholder="Correo Electronico" required> <br>
    </div>

    <div class="contraseña">
    <input type="password" name="contraseña" placeholder="Contraseña" required> <br>
    </div>

    <div class="confirmacion">
    <input type="password" name="confirmar" placeholder="Confirmar contraseña" required> <br>
    </div>

    <div class="submit">
    <input type="submit" value="Registrarse">
    <br>
    </div>

    <div class="link">
    <span> Ya tenes cuenta? <a href="http://localhost/ANTEPROYECTO/login.php">Iniciar Sesión</a></span>
    </div>

    
    </form>

    </div>
</body>
</html>