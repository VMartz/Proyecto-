<?php 
    include("conexion.php");
    $con=conectar();

$sql="SELECT * FROM alumno WHERE cod_estudiante";
$query=mysqli_query($con,$sql);

$row=mysqli_fetch_array($query);
?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <title></title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link href="inter.css" rel="stylesheet">
        <title>Actualizar</title>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">
        
    </head>
    <body>
                <div class="container mt-5">
                    <form action="up.php" method="POST">
                    
                                <input type="hidden" name="cod_estudiante" value="<?php echo $row['cod_estudiante']  ?>">
                                
                                <input type="text" class="form-control mb-3" name="nombres" placeholder="Nombres" value="<?php echo $row['nombres']  ?>">
                                <input type="text" class="form-control mb-3" name="apellidos" placeholder="Apellidos" value="<?php echo $row['apellidos']  ?>">
                                <input type="text" class="form-control mb-3" name="edad" placeholder="Edad" value="<?php echo $row['edad']  ?>">
                                <input type="date" class="form-control mb-3" name="fecha" placeholder="Fecha" value="<?php echo $row['fecha']  ?>">
                                <input type="text" class="form-control mb-3" name="hora" placeholder="Hora" value="<?php echo $row['hora']  ?>">
                                <input type="text" class="form-control mb-3" name="tel" placeholder="Telefono" value="<?php echo $row['tel']  ?>">
                                <input type="text" class="form-control mb-3" name="tele" placeholder="Telefono de Referencia" value="<?php echo $row['tele']  ?>">
                                
                            <input type="submit" class="btn btn-primary btn-block" value="Actualizar">
                    </form>             
                </div>
    </body>
</html>