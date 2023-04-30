<?php

if(isset($_POST['datos'])){

try {

$D1 = $_POST['D1'];
$D2 = $_POST['D2'];
$D3 = $_POST['D3'];
$D4 = $_POST['D4'];
$D5 = $_POST['D5'];
$D6 = $_POST['D6'];
$D7 = $_POST['D7'];
$D8 = $_POST['D8'];
$D9 = $_POST['D9'];

$D10 = $_POST['D10'];
$D11 = $_POST['D11'];
$D12 = $_POST['D12'];
$D13 = $_POST['D13'];
$D14 = $_POST['D14'];
$D15 = $_POST['D15'];
$D16 = $_POST['D16'];
$D17 = $_POST['D17'];
$D18 = $_POST['D18'];
$D19 = $_POST['D19'];
$D20 = $_POST['D20'];

$D21 = $_POST['D21'];
$D22 = $_POST['D22'];
$D23 = $_POST['D23'];
$D24 = $_POST['D24'];
$D25 = $_POST['D25'];
$D26 = $_POST['D26'];
$D27 = $_POST['D27'];
$D28 = $_POST['D28'];
$D29 = $_POST['D29'];
$D30 = $_POST['D30'];

$D31 = $_POST['D31'];
$D32 = $_POST['D32'];
$D33 = $_POST['D33'];
$D34 = $_POST['D34'];
$D35 = $_POST['D35'];
$D36 = $_POST['D36'];
$D37 = $_POST['D37'];
$D38 = $_POST['D38'];
$D39 = $_POST['D39'];
$D40 = $_POST['D40'];

$D41 = $_POST['D41'];
$D42 = $_POST['D42'];
$D43 = $_POST['D43'];
$D44 = $_POST['D44'];  

$quey = "insert into beneficiarios";
mysqli_query($conect, $quey);
mysqli_close($conect);

    //$_SESSION['primero'] = $usuari;
    //$_SESSION['segundo'] = $contraa;

    echo "<script> alert('PERFECTO'); window.location='registrar.html' </script>";


} catch (Exception $ex) {
    echo "<script> alert('Error, al registrar un usuario en BD'); window.location='registrar.html' </script>";

}
}
?>