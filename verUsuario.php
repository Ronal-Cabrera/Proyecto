
<?php
include'conectarBD.php';

if(isset($_POST['Ingresar'])){

    try {

        $usuario=$_POST['Usuario1'];
        $contra=$_POST['Contra1'];
        
        //INSERT INTO usuarios (Usuario, Contra) VALUES ('usuario', PASSWORD('123R'));
        mysqli_stat($conect);
        $query = mysqli_query($conect, "SELECT * FROM usuarios WHERE Usuario ='".$usuario."' and Clave = PASSWORD('".$contra."')");
        $nr = mysqli_num_rows($query);
        mysqli_close($conect);

        if($nr == 1){
            header("Location: perfil.php");
            
        }else if($nr == 0)
        {
            //header("Location: index.php");
            echo "<script> alert('El usuario o la contraseña esta incorrecta, Verificar los datos agregados'); window.location='index.php' </script>";
        }

        $usuario="";
        $contra="";

    } catch (Exception $ex) {
        echo "<script> alert('Hay un ERROR al conectar con la base de datos'); window.location='index.php' </script>";
    }
}

if(isset($_POST['Registrar'])){

    try {
        $correo=$_POST['Correo'];
        $usuario=$_POST['Usuario'];
        $contra=$_POST['Contra'];
        $contra0=$_POST['Contra0'];

        if($contra == $contra0){

            try {

                mysqli_stat($conect);
                mysqli_query($conect, "INSERT INTO usuarios (Correo, Usuario, Clave) VALUES ('".$correo."', '".$usuario."', PASSWORD('".$contra."'))");
                

                $resultado = mysqli_query($conect, "SELECT * FROM usuarios WHERE Usuario ='".$usuario."' and Clave = PASSWORD('".$contra."')");
                $valores = mysqli_fetch_array($resultado);
                $cod = $valores['CodPass'];

                mysqli_query($conect, "INSERT INTO histocontra (CodPass, Clave) VALUES ('".$cod."', PASSWORD('".$contra."'))");
                mysqli_close($conect);

                header("Location: perfil.php");

            } catch (\Throwable $th) {
                
                echo "<script> alert('Error al guardar la informacion'); window.location='index.php' </script>";
    
            }
        
        }else{
            echo "<script> alert('Las contraseñas no son iguales'); window.location='registrar.php' </script>";
    
        }
        
        $usuario="";
        $contra="";
        $contra0="";

    } catch (Exception $ex) {
        echo "<script> alert('Hay un ERROR al conectar con la base de datos'); window.location='index.php' </script>";
    
    }
}
?>