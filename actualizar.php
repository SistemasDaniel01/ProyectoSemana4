<?php

include("conexion.php");
$con = conectar();
$id = $_GET['id'];
$sql = "SELECT*FROM estudiante WHERE codigo = '$id'";

$query = mysqli_query($con, $sql);

$row = mysqli_fetch_array($query);
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
    <title>Actualizar Datos</title>
</head>

<body>
    <div class="container mt-5">
        <form action="update.php" method="POST">
        <label for="exampleInputEmail1" class="form-label">codigo del Estudiante</label>
            <input class="form-control mb-4" readonly name="txtcod" value="<?php echo $row['codigo'] ?>">

            <label for="exampleInputEmail1" class="form-label">cedula del Estudiante</label>
            <input  class="form-control mb-4" name="txtced" value="<?php echo $row['cedula'] ?>">

            <label for="exampleInputEmail1" class="form-label">nombre del Estudiante</label>
            <input  class="form-control mb-4" name="txtname" value="<?php echo $row['nombre'] ?>">

            <label for="exampleInputEmail1" class="form-label">apellido del Estudiante</label>
            <input class="form-control mb-4"  name="txtlastname" value="<?php echo $row['apellido'] ?>">
            <input type="submit" class="btn btn-primary btn-block" value="actualizar"> 

        </form>

    </div>


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2" crossorigin="anonymous"></script>

</body>

</html>