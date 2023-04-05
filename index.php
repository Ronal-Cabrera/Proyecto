<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="estiloLog.css">
    <title>Document</title>
</head>
<body>
<div class="fondo">
  
<h1>Iniciar Session</h1><br>
  <form action="verUsuario.php" method="POST">

    <h3>Usuario</h3>
    <input type="text" class="texto" name="Usuario1" placeholder="Ingrese su usuario.."> <br>

    <h3>Contraseña</h3>
    <input type="password" class="texto" name="Contra1" placeholder="Ingrese su contraseña.."> <br><br>

    <button type="submit"  class="boton" name="Ingresar"> Ingresar </button>   <br>
  </form>
    <a href="registrar.php"><input type="submit" class="boton" value="Registrar"><br></a>
    <div class="enlace">
  <?php require ('autentificacion.php')?>
    <a href="<?php echo $client->createAuthUrl() ?>" style=" text-decoration: none;">Iniciar sesión con Google</a>
  </div>
  <br>
  <a href="recuperar.php"><h5>Se le olvido la contraseña</h5></a>
  

</div>
</body>
</html>
