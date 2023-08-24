<?php

include("connection.php");
$con = connection();

$id=$_GET['id'];

$sql = "SELECT * FROM users WHERE id = '$id'";
$query = mysqli_query($con, $sql);

$row = mysqli_fetch_array($query);

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="CSS/style.css">
    <title>Editar usuarios</title>
</head>
<body>
<div class="users-form">
        <h1>Editar usuarios</h1>
        <form action="edit_user.php" method="POST">
            <input type= hidden name="id" value="<?= $row['id']?>">
            <input type="text" name="name" placeholder="Nombre" value="<?= $row['name']?>">
            <input type="text" name="lastname" placeholder="Apellidos" value="<?= $row['lastname']?>">
            <input type="text" name="username" placeholder="Username" value="<?= $row['username']?>">
            <input type="password" name="password" placeholder="Contraseña" value="<?= $row['password']?>">
            <input type="email" name="email" placeholder="Email" value="<?= $row['email']?>"> 
            
            <input type="submit" value="Actualizar">
        </form>
        
    </div>
</body>
</html>