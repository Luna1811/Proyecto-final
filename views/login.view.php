<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./CSS/Style.css">
    <link rel="stylesheet" href="./CSS/mq.css">

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Freehand&family=Lilita+One&family=Poppins:wght@300&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css" integrity="sha512-9usAa10IRO0HhonpyAIVpjrylPvoDwiPUiKdWk5t3PyolY1cOd4DSE0Ga+ri4AuTroPR5aQvXU9xC6qOPnzFeg==" crossorigin="anonymous" referrerpolicy="no-referrer">

    <title>Iniciar sesión</title>

   
    
</head>

<body>
    <div class="contenedor">

    <header>
        <nav>
            <a href="/Index.html"> <img src="./Imagenes/Logo_caras_colors_emociones.png" class="img-logo" alt="Emociones" ></a>
            <ul>
                <li><a href="./Index.html">Inicio</a></li>
                <li><a href="#Reconoce">Emociones</a></li>
                <li><a href="./Heridas de infancia.html">Heridas de infancia</a></li>
                <li><a href="./Contacto.html">Contacto</a></li>
                <li><a href="./login/index.php">Login</a></li>
            </ul>

        </nav>

    </header>


        <h1 class="titulo">Iniciar sesión</h1>

        <a href="cerrar.php">Cerrar Sesión</a>
        <hr class="border">
        <form action="<?php echo htmlspecialchars($_SERVER['PHP_SELF'])  ?>" class="formulario" name="login" method=POST>
            <div class="form-group">
                <i class="fa fa-user icono izquierda" aria-hidden="true"></i>
                <input type="text" name="usuario" class="usuario" placeholder="Usuario">
            </div>

            

            <div class="form-group">
                <i class="fa fa-user icono izquierda" aria-hidden="true"></i>
                <input type="text" name="password" class="password" placeholder="Contraseña">
                <i class="submit-btn fa fa-arrow-right" onclick="login.submit()"></i>
            </div>

            <?php if(!empty($errores)):?>
                <div class="error">
                    <ul>
                        <?php echo $errores;?>
                    </ul>
                </div>
            <?php endif; ?>
    
        </form>
        
        <p class="texto-registrate">¿aún no tienes una cuenta?</p>
        <p class="texto">
            <a href="registrate.php" class="texto-registrate-enlace">Registrate</a>
        </p>

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