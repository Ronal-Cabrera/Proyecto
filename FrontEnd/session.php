<?php
include'conectarBD.php';
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="./Css/session.css">
    <title>Document</title>
</head>
<body>
    
    <label for="pw"><b>Area</b></label>
    <select name="persona" class="nivel" >
        <option value=""></option>
        
        <?php 
        foreach($sql0 as $row) {
        ?>
        <option><?php //echo $row['nombre_usuario'];?></option>
        <?php
        }
        ?>

    </select> 
          
    <label for="pw"><b>Beneficiario</b></label>
    <select name="beneficiario" class="nivel" >
        <option value=""></option>
        
        <?php 
        foreach($sql0 as $row) {
        ?>
        <option><?php //echo $row['nombre_usuario'];?></option>
        <?php
        }
        ?>

    </select> 

    <label for="pw"><b>numero de session</b></label>
    <select name="beneficiario" class="nivel" >
        <option value=""></option>
        <option>1</option>
        <option>2</option>
        <option>3</option>
        <option>4</option>
        <option>5</option>
        <option>6</option>
        <option>7</option>
        <option>8</option>
        <option>9</option>
        <option>10</option>
    </select> 

    <label for="pw"><b>Horario</b></label>
    <select name="beneficiario" class="nivel" >
        <option value=""></option>
        <option>8:00 a 8:30</option>
        <option>8:30 a 9:00</option>
        <option>9:00 a 9:30</option>
        <option>9:30 a 10:00</option>
        <option>10:00 a 10:30</option>
        <option>10:30 a 11:00</option>
        <option>11:00 a 11:30</option>
        <option>11:30 a 12:00</option>
        <option>12:00 a 12:30</option>
        <option>12:30 a 1:00</option>
    </select> 

    <input type="text">
</body>
</html>