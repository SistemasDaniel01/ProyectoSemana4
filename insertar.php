<?php

include ("conexion.php");
$con = conectar();
$codigo = $_POST['txtcod'];
$cedula = $_POST['txtced'];
$name = $_POST['txtname'];
$lastname = $_POST['txtlastname'];

$sql = "INSERT INTO estudiante VALUES('$codigo','$cedula','$name','$lastname')";

$query = mysqli_query($con,$sql);

if($query){
    header("Location: index.php");
}


?>