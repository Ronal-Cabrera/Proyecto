
    <!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Inicio</title>
    <link rel="stylesheet" type="text/css" href="./estiloLog.css">

<style>
  body {
  font-family: Arial, Helvetica, sans-serif;
  height: 100%;
  margin: 0;
  background: url(12.png) no-repeat;
  height: 100%;

/* Center and scale the image nicely */
background-position: center;
background-size: cover;
}
</style>
</head>
<body>

<div id="id01" class="modal">
  
  <form class="modal-content animate" method="POST" action="usuariosCreYreg.php">
    <div class="imgcontainer">
      
      <img src="logoazulsin.png" alt="Avatar" class="avatar">
    </div>

    <div class="container">
      <label for="uname"><b>usuario</b></label>
      <input type="text" placeholder="Ingrese usuario" name="usuario" required>

      <label for="psw"><b>Contraseña</b></label>
      <input type="password" placeholder="Ingrese Contraseña" name="contra" required>
        
      <button type="submit" name="login">Ingresar</button>

    </div>

  </form>
</div>

</body>
</html>

    