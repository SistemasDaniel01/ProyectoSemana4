<?php

include ("conexion.php");
$con = conectar();
$id = $_GET['id'];
$sql = "DELETE FROM estudiante WHERE codigo = '$id'";

$query = mysqli_query($con, $sql);

if($query){
    header("Location: index.php");
}

?>