<?php
//a phpMyAdmin
    $dbhost = "localhost";
    $dbusu = "root";
    $dbpass = "";
    $dbname = "basedatos";
    
    $conect = mysqli_connect($dbhost,$dbusu,$dbpass,$dbname) or die("error");
    
    if(!$conect){
        die("no hay conexion: ".mysqli_connect_error());
        }

?>