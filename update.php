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

$sql="UPDATE alumno SET nombres='$nombres',apellidos='$apellidos',edad='$edad',fecha='$fecha',hora='$hora',tel='$tel',tele='$tele' WHERE cod_estudiante='$cod_estudiante'";
$query=mysqli_query($con,$sql);

    if($query){
        Header("Location:alumno.php");
    }
?>