<?php 
    include("conexion.php");
    $con=conectar();

    $sql="SELECT *  FROM alumno";
    $query=mysqli_query($con,$sql);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://use.fontawesome.com/releases/v6.1.0/js/all.js" crossorigin="anonymous"></script>


    <link href="esti/inter.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">
    <title>PAGINA ALUMNO</title>
</head>
    <body class="body">
            <div class="container mt-5 ">
                    <div class="row"> 
                        
                        <div class="col-md-4" >
                            <h3>INGRESE DATOS</h3>
                                <form action="insertar.php" method="POST">
                                    <input type="text" class="form-control mb-3" name="cod_estudiante" placeholder="cod_estudiante" value="" required >
                                    <input type="text" class="form-control mb-3" name="nombres" placeholder="Nombres" value="" required>
                                    <input type="text" class="form-control mb-3" name="apellidos" placeholder="Apellidos" value="" required>
                                    <input type="text" class="form-control mb-3" name="edad" placeholder="Edad" value="" required>
                                    <input type="date" class="form-control mb-3" name="fecha" placeholder="Fecha" value="" required>
                                    <select class="form-control mb-3" name="hora" placeholder="Hora" value="" required>
                                        <option value="">Seleccione una hora</option>
                                        <option value="7:00am-8:00am">7:00am-8:00am</option>
                                        <option value="8:00am-9:00am">8:00am-9:00am</option>
                                        <option value="9:00am-10:00am">9:00am-10:00am</option>
                                        <option value="10:00am-11:00am">10:00am-11:00am</option>
                                        <option value="11:00am-12:00pm">11:00am-12:00pm</option>
                                        <option value="12:00pm-13:00pm">12:00pm-13:00pm</option>
                                        <option value="13:00pm-14:00pm">13:00pm-14:00pm</option>
                                        <option value="15:00pm-16:00pm">15:00pm-16:00pm</option>
                                        <option value="16:00pm-17:00pm">16:00pm-17:00pm</option>
                                        <option value="17:00pm-18:00pm">17:00pm-18:00pm</option>
                                        <option value="18:00pm-19:00pm">18:00pm-19:00pm</option>
                                        <option value="19:00pm-20:00pm">19:00pm-20:00pm</option>
                                    </select>
                                    <input type="text" class="form-control mb-3" name="tel" placeholder="Telefono  Celular" value="" required>
                                    <input type="text" class="form-control mb-3" name="tele" placeholder="Telefono de Referencia" value="" required>
                                    
                                    <input type="submit" class="btn btn-success">
                                    <th><a href="index.php" class="btn btn-danger">Cerrar Sesion</a></th> 
                                </form>
                        </div>

                        <div class="col-md-6 ">
                        <h3>Citas Registradas</h3>
                            <table class="table" >
                                <thead class="table-success table-striped" >
                                    <tr>
                                        <th>Nombres</th>
                                        <th>Apellidos</th>
                                        <th>Edad</th>
                                        <th>Fecha</th>
                                        <th>Hora</th>
                                        <th>Telefono Celular</th>
                                        <th>Telefono de Referencia</th>
                                    </tr>
                                </thead>

                                <tbody>
                                        <?php
                                            while($row=mysqli_fetch_array($query)){
                                        ?>
                                            <tr>
                                               
                                                <th><?php  echo $row['nombres']?></th>
                                                <th><?php  echo $row['apellidos']?></th>    
                                                <th><?php  echo $row['edad']?></th>
                                                <th><?php  echo $row['fecha']?></th>
                                                <th><?php  echo $row['hora']?></th>
                                                <th><?php  echo $row['tel']?></th>
                                                <th><?php  echo $row['tele']?></th>
                                                <th><a href="actualizar.php?id=<?php echo $row['cod_estudiante'] ?>" class="btn btn-info">Editar</a></th>
                                                <th><a href="delete.php?id=<?php echo $row['cod_estudiante'] ?>" class="btn btn-danger">Eliminar</a></th> 
                                                                                       
                                            </tr>
                                        <?php 
                                            }
                                        ?>
                                </tbody>
                            </table>
                        </div>
                    </div>  
            </div>
            
    </body>
</html>