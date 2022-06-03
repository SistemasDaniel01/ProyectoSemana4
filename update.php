<?php

include("conexion.php");
$con = conectar();
$cod = $_POST['txtcod'];
$ced = $_POST['txtced'];
$name = $_POST['txtname'];
$lastname = $_POST['txtlastname'];

$sql = "UPDATE estudiante SET cedula='$ced', nombre='$name', apellido='$lastname' WHERE codigo='$cod' ";

$query = mysqli_query($con,$sql);

if($query){
    header("Location: index.php");
}
?>