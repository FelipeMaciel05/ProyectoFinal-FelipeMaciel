<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>LogIn</title>
    <link rel="stylesheet" href="login.css">
</head>
<body>
    <div class="formulario">
      <h2>Inicia Sesión con tu cuenta</h2>
      <form method=POST> 
    
      <div class="usuario">
      <label>Correo Electronico</label> 
      <input type="email" name="mail"> <br>
      </div>

      <div class="contraseña">
      <label>Contraseña</label>
      <input type="password" name="contraseña"> <br>
      </div>
      
      <div class="submit">
      <input type="submit" value="Iniciar Sesión">
      <br>
      </div>

      <div class="link">  
        <span>Quiero <a href="http://localhost/ANTEPROYECTO/registrarse.php">Registrarme</a></span>
        <br>
        </div>
        <div class="link2">
        <label><a href="Acavaellinkalaotrapantallapararecuperarcontraseña">Olvide mi contraseña</a></label>
        </div>

    </form>
  </div>
</body>
</html>