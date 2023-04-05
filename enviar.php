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
        h1 {
  margin: 0px;
  text-align:center;
  color: #ffffff;
}
h3 {
  margin: 4px 0px 0px 0px;
  text-align: center;
  color: #ffffff;
}

.texto {
  margin: 0px;
  font-size: large;
  padding: 7px;
  width: 70%;
  margin: 0px;
  display: inline-block;
  border: 1px solid #0aa3a3;
  border-radius: 15px;
  box-sizing: border-box;
}

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

<form action="enviar.php" method="post">
    <h1>Cambiar contraseña</h1><br>

    <h3>Ingresar contraseña</h3>
    <input type="password" class="texto" name="NewPass" placeholder="Ingrese contraseña.."> <br>

    <h3>Ingresar codigo</h3>
    <input type="text" class="texto" name="Codigo" placeholder="Ingrese codigo.."> <br>
    <br>

    <button type="submit"  class="boton" name="Cambiar"> Aceptar </button><br><br>
    
  </form>

</div>

</body>
</html>
<?php
if(isset($_POST['Cambiar'])){
    try {
        $pass=$_POST['NewPass'];
        $codi=$_POST['Codigo'];
        
        mysqli_stat($conect);
        $query = mysqli_query($conect, "SELECT * FROM usuarios WHERE CodRecuperar = '".$codi."' ");
        $nr = mysqli_num_rows($query);

        if($nr == 1){
            
            $queri = mysqli_query($conect, "SELECT * FROM histocontra WHERE Clave = PASSWORD('$pass') ");
            $nri = mysqli_num_rows($queri);

            if($nri == 1){
                mysqli_close($conect);
                echo "<script> alert('No puede utilizar una contraseña que ya uso antes'); window.location='enviar.php' </script>";
            
            }else if($nri == 0)
            {
                $resultado = mysqli_query($conect, "SELECT * FROM usuarios WHERE CodRecuperar = '".$codi."' ");
                $valores = mysqli_fetch_array($resultado);
                $cod = $valores['CodPass'];

                mysqli_query($conect,"UPDATE usuarios SET Clave = PASSWORD('$pass') WHERE CodRecuperar = '$codi'");
                mysqli_query($conect, "INSERT INTO histocontra (CodPass, Clave) VALUES ('$cod', PASSWORD('".$pass."'))");
                mysqli_query($conect,"UPDATE usuarios SET CodRecuperar = NULL WHERE CodPass = '$cod' ");
                mysqli_close($conect);

                header("Location: perfil.php");
            } 

        }else if($nr == 0)
        {
            mysqli_close($conect);
            echo "<script> alert('Ingrese un codigo valido'); window.location='enviar.php' </script>";
        }

   

    } catch (\Throwable $th) {
        echo "<script> alert('Error, con actualizar datos'); window.location='enviar.php' </script>";
    }
}
?>
