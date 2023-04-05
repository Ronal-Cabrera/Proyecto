<?php
include'conectarBD.php';
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
<style>

.boton {
  margin: 0px 0px 5px 0px;
  padding: 7px;
  font-size:large;
  width: 70%;
  background-color: #1f046d;
  color: rgb(255, 255, 255);

  border: none;
  border-radius: 15px;
  cursor: pointer;
}

.boton:hover {
  background-color: #0d0034;
}

.fondo{
    font-size: larger;
  text-align:center;
  border-radius: 5px;
  border-style: none;
  background-color: #061e99;
  padding: 20px;
  width: 40%;
  margin: 50px auto;
  background-image: url(https://images.unsplash.com/photo-1614851099511-773084f6911d?ixlib=rb-4.0.3&ixid=MnwxMjA3fDB8MHxzZWFyY2h8Mnx8Z3JhZGllbnQlMjB3YWxscGFwZXJ8ZW58MHx8MHx8&w=1000&q=80);
}
    </style>
</head>
<body>
<div class="fondo">

  <form action="recuperar.php" method="POST">
    <button type="submit"  class="boton" name="Codigo"> Enviar codigo </button><br>
  </form>

</div>
</body>
</html>

<?php

if(isset($_POST['Codigo'])){
  try {
    $num = rand(1000,9999);

  mysqli_stat($conect);
  //mysqli_query($conect, "INSERT INTO usuarios (CodRecup) VALUES ('".$num."')");
  mysqli_query($conect,"UPDATE usuarios SET CodRecuperar = '$num' WHERE CodPass = 2");

  $resultado = mysqli_query($conect, "SELECT * FROM usuarios WHERE CodPass = 2");
  $valores = mysqli_fetch_array($resultado);
  $correo = $valores['Correo'];

  mysqli_close($conect);

  $url = "https://script.google.com/macros/s/AKfycbyvmNsIyIgdv5cDKABvoaXMG4_z-bGxWQorZNtqROJy0bS05e02fnPGFdHYtclDpWDd/exec";
  $ch = curl_init($url);
  curl_setopt_array($ch, [
      CURLOPT_RETURNTRANSFER => TRUE,
      CURLOPT_POSTFIELDS => http_build_query([
          "recipient" => $correo,
          "subject" => "Correo de recuperacion",
          "body" => $num,
      ])
  ]);

  curl_exec($ch);

  echo "<script> alert('un Codigo fue enviado a tu Correo'); window.location='enviar.php' </script>";
    
  } catch (\Throwable $th) {
    echo "error al enviar";
  }

  

}
?>
