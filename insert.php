<?php
include("conexion.php");
$con=conectar();

$cod_estudiante=$_POST['cod_estudiante'];
$nombres=$_POST['nombres'];
$apellidos=$_POST['apellidos'];
$edad=$_POST['edad'];
$fecha=$_POST['fecha'];
$hora=$_POST['hora'];
$tel=$_POST['tel'];
$tele=$_POST['tele'];

$sql="INSERT INTO alumno VALUES('$cod_estudiante','$nombres','$apellidos','$edad','$fecha','$hora','$tel','$tele')";
$query= mysqli_query($con,$sql);

if($query){
    Header("Location: alum.php");
}else {
}
?>