<?php
  //conexion a bd

  include'../BackEnd/conectarBD.php';

  $nivel = 1;

  if($nivel == 1){
           
    $sql0 = mysqli_query($conect,"SELECT U.nombre_usuario, U.estado, N.nombre, U.cod_nivel, R.nombre AS NR FROM 
usuario U 
INNER JOIN nivel N ON U.cod_nivel = N.cod_nivel
INNER JOIN usuario_rol UR ON U.cod_usuario = UR.cod_rol
INNER JOIN rol R ON UR.cod_rol = R.cod_rol
WHERE N.cod_nivel IN ('1', '2', '3') ");

  }else if($nivel == 2){

    $sql0 = mysqli_query($conect,"SELECT U.nombre_usuario, U.estado, N.nombre, U.cod_nivel, R.nombre AS NR FROM 
usuario U 
INNER JOIN nivel N ON U.cod_nivel = N.cod_nivel
INNER JOIN usuario_rol UR ON U.cod_usuario = UR.cod_rol
INNER JOIN rol R ON UR.cod_rol = R.cod_rol
WHERE N.cod_nivel IN ('2', '3')");

  }else if($nivel == 3){

    $sql0 = mysqli_query($conect,"SELECT U.nombre_usuario, U.estado, N.nombre, U.cod_nivel, R.nombre AS NR FROM 
usuario U 
INNER JOIN nivel N ON U.cod_nivel = N.cod_nivel
INNER JOIN usuario_rol UR ON U.cod_usuario = UR.cod_rol
INNER JOIN rol R ON UR.cod_rol = R.cod_rol
WHERE N.cod_nivel IN ('3') ");

  }

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" type="text/css" href="../Css/allUsuarios.css">

<style>


</style>

</head>
<body>

<div class="arriba">
<a href="../FrontEnd/menu.html"> <button class="btn">Regresar</button></a>
<a href="../FrontEnd/registrar.html"> <button class="btn">Crear usuario</button></a>

</div>

    <div class="fondo">

      <div class="alldiv" style="overflow-x: auto;">
        <table id="customers">
          <tr>
           <th>Usuarios</th>
           <th>Estados</th>
           <th>Nivel</th>
           <th>Rol</th>
           <th></th>
          </tr>
          
        <?php 
        

        foreach($sql0 as $row) {?>
        <tr>
          <td><?php echo $row['nombre_usuario'];?></td>
          <td><?php echo $row['estado'];?></td>
          <td><?php echo $row['nombre'];?></td>
          <td><?php echo $row['NR'];?></td>
          <td><form action='permisos.php' method='POST'>
            <input type='hidden' name='id' value='<?php echo $row['cod_nivel'];?>'>
            <input type='submit' onclick="changeStyle()" value='Permisos'>
          </form></td>
        </tr>
        <?php
        }

        
        ?>
        </table>
      </div>

    </div>  
</body>
</html>

<script>
  function changeStyle() {
      document.getElementsByClassName("alldiv")[0].style.display = "none";
  }
</script>