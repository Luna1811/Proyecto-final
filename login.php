<?php session_start();

if(isset($_SESSION['usuario']))
{
    header("Location: index.php");
}

$errores = '';

    if($_SERVER['REQUEST_METHOD'] == 'POST')
    {
        $usuario = filter_var(strtolower($_POST['usuario']), FILTER_SANITIZE_STRING);
        $password = hash('sha512', $_POST['password']);


        try
            {
                $conexion = new PDO('mysql:host=localhost;dbname=login_final2', 'root', '');
            }
        catch(PDOExeption $e)
            {
                echo "Error: " . $e->getMessage();
            }


        $statement = $conexion->prepare('SELECT * FROM usuarios WHERE usuario = :usuario AND pass = :password');
        $statement->execute(array(':usuario' => $usuario, ':password' => $password));
        $resultado = $statement->fetch();



        if($resultado !== false)
            {
                $_SESSION['usuario'] = $usuario;
                header("location: index.php");
            }
        else
            {
                $errores = '<li>Datos incorrectos</li>';
            }
    }



require 'views/login.view.php'


?>