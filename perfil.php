<?php
include'conectarBD.php';

mysqli_stat($conect);
  $query = mysqli_query($conect, "SELECT * FROM usuarios WHERE Correo = '".$gmail."' ");
  $nr = mysqli_num_rows($query);

  if($nr == 1){    
    header("Location: menu.php");
  }else if($nr == 0){
    echo "<script> alert('No existe usuario en este Gmail'); window.location='index.php' </script>";
  //desea crear una cuenta con este gmail ?
  }
  ?>