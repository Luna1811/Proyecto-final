<?php

include("connection.php");
$con = connection();

$id = $_GET['id'];

//$sql = "DELETE FROM 'users' WHERE 'id'= '$id'";
//$query = mysqli_query($con, $sql);

$sql = "DELETE FROM users WHERE id='$id'";

$query = mysqli_query($con, $sql);


if ($query){
    Header("Location: index2.html"); 
}else{
    echo "Error al eliminar el usuario";
}

?>