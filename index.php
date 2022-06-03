<?php
include("conexion.php");
$con = conectar();
$bd = "SELECT * FROM estudiante";

$query = mysqli_query($con,$bd);

?>

<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Ejemplo</title>
   <!-- Font Awesome -->
<link
  href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css"
  rel="stylesheet"
/>
<!-- Google Fonts -->
<link
  href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700&display=swap"
  rel="stylesheet"
/>
<!-- MDB -->
<link
  href="https://cdnjs.cloudflare.com/ajax/libs/mdb-ui-kit/4.1.0/mdb.min.css"
  rel="stylesheet"
/></head>

<body>
    <div class="container mt-5">


        <div class="row">
            <div class="col-md-3 p-4 mb-2 bg-white text-dark border">
                <h1>Ingrese datos</h1>
                <form action="insertar.php" method="POST">

                    <input type="text" class="form-control mb-4" name="txtcod" placeholder="ingrese el codigo del estudiante">
                    <input type="text" class="form-control mb-4" name="txtced" placeholder="ingrese la cedula del estudiante">
                    <input type="text" class="form-control mb-4" name="txtname" placeholder="ingrese el nombre del estudiante">
                    <input type="text" class="form-control mb-4" name="txtlastname" placeholder="ingrese el apellido del estudiante">
                    <input type="submit" class="btn-primary">



                </form>

            </div>

            <div class="col-md-8">
                <table class="table align-middle mb-0 bg-white">

                    <thead class="bg-dark text-white">

                    <tr>
                        <th>Codigo</th>
                        <th>Cedula</th>
                        <th>Nombre</th>
                        <th>Apellido</th>
                        <th>Acciones</th>

                    </tr>

                    </thead>

                    <tbody>
                        <?php
                        while ($row = mysqli_fetch_array($query)){
                            ?><tr>
                                <td><?php echo $row ['codigo'] ?></td>
                                <td><?php echo $row ['cedula'] ?></td>
                                <td><?php echo $row ['nombre'] ?></td>
                                <td><?php echo $row ['apellido'] ?></td>

                                <td><a href="actualizar.php?id=<?php echo $row['codigo'] ?>" class="btn btn-link btn-rounded btn-sm fw-bold">Editar</a>
                            <a href="delete.php?id=<?php echo $row['codigo'] ?>" class="btn btn-link btn-rounded btn-sm fw-bold">Eliminar</a></td>
                            </tr>
                       <?php
                        }?>
                    </tbody>
                </table>

            </div>

        </div>

    </div>

   <!-- MDB -->
<script
  type="text/javascript"
  src="https://cdnjs.cloudflare.com/ajax/libs/mdb-ui-kit/4.1.0/mdb.min.js"
></script>
</body>

</html>