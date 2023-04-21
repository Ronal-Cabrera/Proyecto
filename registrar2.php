<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="estiloReg.css">
  <title>Login</title>
</head>
<body>
  
<div class="fondo">
<h1>Registrar</h1> <br>
  <form action="verUsuario.php" method="post">
    <h3>Correo</h3>
    <input type="gmail" class="texto" name="Correo" placeholder="Ingrese su usuario.."> <br>

    <h3>Usuario</h3>
    <input type="text" class="texto" name="Usuario" placeholder="Ingrese su usuario.."> <br>

    <h3>Contraseña</h3>
    <input type="password" class="texto" name="Contra" placeholder="Ingrese una Contraseña.."> <br>

    <h3>Confirmar Contraseña</h3>
    <input type="password" class="texto" name="Contra0" placeholder="Confirme la Contraseña.."> <br><br><br>

    <button type="submit"  class="boton" name="Registrar"> Registrar </button>   <br>
    </form>

    <div class="enlace">
  <?php require ('autentificacion.php')?>
    <a href="<?php echo $client->createAuthUrl() ?>" style=" text-decoration: none;">Iniciar sesión con Google</a>
  </div>
</div>

<script src="validar.js"></script>

</body>
</html>