<?php
session_start();
require 'conexion.php';

if (!empty($_POST['matricula']) && !empty($_POST['password'])) {
    $records = $conn->prepare('SELECT id,usuarios, matricula FROM usuarios FROM medi WHERE matricula = :matricula');
    $records->bindParam(':matricula', $_POST['matricula']);
    $records->execute();
    $results = $records->fetch(PDO::FETCH_ASSOC);

    $message = '';

    if (count($results) > 0 && password_verify($_POST['password'], $results['password'])) {
      $_SESSION['user_id'] = $results['id'];
      header("Location: /jvh-crud/alum.php");
    } 
  }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="inter.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">
    <title>MÉDICO</title>
</head>
<body>
<nav class="navbar navbar-success">
    <div class="container-fluid">
        <a class="navbar-brand" href="#">
            <img src="imagen1.png" alt="" width="210" height="105" class="d-inline-block align-text-top">
         </a>
    </div>
</nav>

    <?php if(!empty($message)): ?>
      <p> <?= $message ?></p>
    <?php endif; ?>

        <h1>Ingresar</h1>
        <form action="log.php" method="post">
            <input type="text" name="usuarios" placeholder="Usuario"> 
            <input type="password" name="matricula" placeholder="Matricula">
           
               <th><a href="alum.php" class="btn btn-success btn-lg">INGRESAR</a></th>
            
</body>
</html>