<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

    <style>

    .alldiv22{
    margin: 0px auto 50px auto;
    width: 98%;
}
    #customers {
    margin: 0px auto 0px auto;
    font-family: Arial, Helvetica, sans-serif;
    border-collapse: collapse;
    width:100%;
    border:solid  white;
  }
  
  #customers td, #customers th {
    border: 1px solid #ddd;
    padding: 8px;
  }
  /*
  #customers tr:nth-child(even){
    background-color: #7da6f1;}
  */
  #customers tr:hover {
    color: white;
    background-color: #7da6f1;}
  
  #customers th {
    padding-top: 12px;
    padding-bottom: 12px;
    text-align: left;
    background-color: #377dd7;
    color: white;
  }


    </style>

</head>
<body>
<a href="allUsuarios.php"> <button class="btn">Regresar</button></a>
<div class="alldiv22" style="overflow-x: auto;">
 
 <table id="customers">
     <tr>
       <th>Permisos</th>
       <th></th>
     </tr>
     <?php if (isset($_POST['id'])) { 
       $id = $_POST['id'];
       include'conectarBD.php';
       $sql2 = mysqli_query($conect,"SELECT A.descripcion
       FROM usuario U
       INNER JOIN usuario_rol UR ON U.cod_usuario = UR.cod_usuario
       INNER JOIN rol R ON UR.cod_rol = R.cod_rol
       INNER JOIN rol_actividad RA ON R.cod_rol = RA.cod_rol
       INNER JOIN actividad A ON RA.cod_actividad = A.cod_actividad
       WHERE U.cod_usuario IN ('$id')");

       foreach($sql2 as $row) {?>
       <tr>
     
         <td><?php echo $row['descripcion'];?></td>
         <td><div class="checkDiv"><input type="checkbox" class="check" name="vehicle1" value="Bike"></div></td>
       
       </tr>
       <?php
         }
       }
     ?>
   
   </table>
   <button class="botoncheck">Aceptar</button>

<!--
if (isset($_POST['mi_checkbox']) && $_POST['mi_checkbox'] == 'on') {
// El checkbox está marcado
} else {
// El checkbox no está marcado
}

-->

 </div>

</body>
</html>