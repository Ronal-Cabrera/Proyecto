<?php
include'conectarBD.php';
//session_start();

//$_SESSION['primero'] = null;
//$_SESSION['segundo'] = null;

if(isset($_POST['registrar'])){

        try {

        $usuarioo = $_POST['usuario'];
        $contraa = $_POST['contra'];
        $nivell = $_POST['nivel'];
        if($nivell == "Nivel 1"){
            $nivel = 1;
        } else if($nivell == "Nivel 2"){
            $nivel = 2; 
        } else if($nivell == "Nivel 3"){
            $nivel = 3;
        }
        $resultado = mysqli_query($conect,"SELECT COUNT(*) FROM usuario");
        $numerofilas = ($resultado->fetch_array()[0] + 1);
            
    
            mysqli_query($conect, "CALL crear_usuario($numerofilas,'$usuarioo', '$contraa', $nivel)");
            mysqli_close($conect);
    
            //$_SESSION['primero'] = $usuari;
            //$_SESSION['segundo'] = $contraa;
    
            header("Location: registrar.php");
        
        } catch (Exception $ex) {
            echo $ex = "Error, no puede crear un usuario con el mismo nombre";
        }
    }

if(isset($_POST['login'])){

    try {

        $usuario=$_POST['suario'];
    $contra=$_POST['contra'];
    
    $query = mysqli_query($conect, "SELECT validar_usuario_password('$usuario', '$contra')");
    $nr = mysqli_num_rows($query);
    
    if($nr == 1){

        //$_SESSION['primero'] = $vusuario;
        //$_SESSION['segundo'] = $vcontra;
        header("Location: menu.html");

    }else if($nr == 0)
    {
        header("Location: login.html");
    }

    } catch (Exception $ex) {
        echo $ex = 1;
    }

    
}

?>