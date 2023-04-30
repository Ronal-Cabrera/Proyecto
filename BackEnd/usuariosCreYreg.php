<?php
include'conectarBD.php';
//session_start();
$myUsu = 1;
//$_SESSION['primero'] = null;
//$_SESSION['segundo'] = null;

if(isset($_POST['registrar'])){

        try {

        $usuarioo = $_POST['usuario'];
        $contraa = $_POST['contra'];
        $nivell = $_POST['nivel'];
        $roll = $_POST['rol'];

        if($nivell == "Nivel 1"){
            $nivel = 1;
        } else if($nivell == "Nivel 2"){
            $nivel = 2; 
        } else if($nivell == "Nivel 3"){
            $nivel = 3;
        }

        if($roll == "admin"){
            $rol = 1;
        } else if($roll == "secretaria"){
            $rol = 2; 
        } else if($roll == "usuario Tipo1"){
            $rol = 3;
        } else if($roll == "usuario Tipo2"){
            $rol = 4;
        }


        $resultado = mysqli_query($conect,"SELECT COUNT(*) FROM usuario");
        $numerofilas = ($resultado->fetch_array()[0] + 1);
            
    
            mysqli_query($conect, "CALL crear_usuario($numerofilas,'$usuarioo', '$contraa', $nivel, $rol, $myUsu)");
            mysqli_close($conect);
    
            //$_SESSION['primero'] = $usuari;
            //$_SESSION['segundo'] = $contraa;
    
            echo "<script> alert('PERFECTO'); window.location='registrar.html' </script>";
    
        
        } catch (Exception $ex) {
            echo "<script> alert('Error, al registrar un usuario en BD'); window.location='registrar.html' </script>";
    
        }
    }

if(isset($_POST['login'])){

    try {

        $usuario=$_POST['usuario'];
    $contra=$_POST['contra'];
    
    $query = mysqli_query($conect, "SELECT * FROM usuario WHERE nombre_usuario = '$usuario' AND password = PASSWORD('$contra')");
    $nr = mysqli_num_rows($query);
    
    if($nr == 1){

        //$_SESSION['primero'] = $vusuario;
        //$_SESSION['segundo'] = $vcontra;
        header("Location: menu.html");

    }else if($nr == 0)
    {
        echo "<script> alert('Error, Usuario o contraseña incorrecta'); window.location='index.php' </script>";
    
    }

    } catch (Exception $ex) {
        echo "<script> alert('Error, en try catch'); window.location='index.php' </script>";
    
    }

    
}

?>