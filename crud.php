<?php
include("connection.php");
$con = connection(); 

$sql = "SELECT * FROM users";
$query = mysqli_query($con, $sql);

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/style.css">

    <link rel="stylesheet" href="./CSS/Style3.css">
    <link rel="stylesheet" href="./CSS/mq.css">
    <title>Entregable 2</title>

</head>
<body>

<div class="contenedor">
    <header>
        <nav>
            <a href="/Index.html"> <img src="./Imagenes/Logo_caras_colors_emociones.png" class="img-logo" alt="Emociones" ></a>
            <ul>
                <li><a href="./Index2.html">Inicio</a></li>
                <li><a href="#Reconoce">Emociones</a></li>
                <li><a href="./Heridas de infancia2.html">Heridas de infancia</a></li>
                <li><a href="./Contacto2.html">Contacto</a></li>
                <li><a href="./crud.php">Crud</a></li>
                
            </ul>

        </nav>

    </header>

    <div>

    <div class="users-form">
        <h1>Crear usuario</h1>
        <form action="insert_user.php" method="POST">
            <input type="text" name="name" placeholder="Nombre">
            <input type="text" name="lastname" placeholder="Apellidos">
            <input type="text" name="username" placeholder="Username">
            <input type="password" name="password" placeholder="Contraseña">
            <input type="email" name="email" placeholder="Email"> 
            
            <input type="submit" value="Agregar">
        </form>
        
    </div>

    <div class="users-table">
        <h2>Usuarios registrados</h2>
        <table>
            <thead>
                <tr>
                    <th>id</th>
                    <th>Nombre</th>
                    <th>Apellido</th>
                    <th>Username</th>
                    <th>Password</th>
                    <th>Email</th>
                    <th></th>
                    <th></th>
                </tr>
            </thead>
            <tbody>
                <?php while($row = mysqli_fetch_array($query)): ?>
                    <tr>
                    <td><?= $row['id']?></td>
                    <td><?= $row['name']?></td>
                    <td><?= $row['lastname']?></td>
                    <td><?= $row['username']?></td>
                    <td><?= $row['password']?></td>
                    <td><?= $row['email']?></td>
                    <td><a href="update.php?id=<?= $row['id'] ?>" class="users-table--edit">Editar</a></td>
                    <td><a href="delete_user.php?id=<?= $row['id']?>" class="users-table--delete">Eliminar</a></td>
                </tr>
                <?php endwhile; ?>
            </tbody>
        </table>
    </div>

    <footer>
        <address>Derechos reservados lunatica.com</address>

        <div>
            <a href="#">Facebook</a>-
            <a href="#">Instagram</a>-
            <a href="#">Twitter</a>
        </div>

    </footer>

</body>
</html>