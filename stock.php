<?php
require_once 'conexion.php';
$sql="SELECT * FROM 'productos'";
$datos=$con->query($sql);
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <meta name="description" content="" />
    <meta name="author" content="" />
    <title>Productos</title>
    <!-- Favicon-->
    <link rel="icon" type="image/x-icon" href="assets/favicon.ico" />
    <!-- Font Awesome icons (free version)-->
    <script src="https://use.fontawesome.com/releases/v6.1.0/js/all.js" crossorigin="anonymous"></script>
    <!-- Google fonts-->
    <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700" rel="stylesheet" type="text/css" />
    <link href="https://fonts.googleapis.com/css?family=Roboto+Slab:400,100,300,700" rel="stylesheet" type="text/css" />
    <!-- Core theme CSS (includes Bootstrap)-->
    <link href="css/styles.css" rel="stylesheet" />
</head>


<!-- DataTales Example -->
<div class="card shadow mb-4">
    <div class="card-header py-3">
        <h6 class="m-0 font-weight-bold text-primary">Productos</h6>
    </div>
    <div>
        <form action="buscar.php" method="POST">
            <input type="text" name="buscar" id="">
            <input type="submit" value="Buscar">
            <a href="ingresarproductos.php">Nuevo</a>
        </form>
    </div>


    <!-- DataTales Example -->
    <div class="card shadow mb-4">
        <div class="card-header py-3">
        </div>
        <div class="card-body">
            <div class="table-responsive">
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                    <tr>
                        <td>ID</td>
                        <td>Nombre</td>
                        <td>Marca</td>
                        <td>Descripcion</td>
                        <td>Existencias</td>
                        <td>Precio_Unidad</td>
                        <td>Opciones</td>
                    </tr>
                    <?php
                        $cnx = mysqli_connect("localhost", "root", "", "control");
                        $sql = "SELECT ID, Nombre, Marca, Descripcion, Existencias, Precio_Unidad FROM productos order by id desc";
                        $rta = mysqli_query($cnx, $sql);
                        while($mostrar = mysqli_fetch_row($rta)) {
                        ?>
                    <tr>
                        <td><?php echo $mostrar['0'] ?></td>
                        <td><?php echo $mostrar['1'] ?></td>
                        <td><?php echo $mostrar['2'] ?></td>
                        <td><?php echo $mostrar['3'] ?></td>
                        <td><?php echo $mostrar['4'] ?></td>
                        <td><?php echo $mostrar['5'] ?></td>
                        <td>
                            <a href="editar.php?
                            ID=<?php echo $mostrar['0'] ?> &
                            Nombre=<?php echo $mostrar['1'] ?> &
                            Marca=<?php echo $mostrar['2'] ?> &
                            Descripcion=<?php echo $mostrar['3'] ?> &
                            Existencias=<?php echo $mostrar['4'] ?> &
                            Precio_Unidad=<?php echo $mostrar['5'] ?>
                            ">Editar</a>
                            <a href="sp_eliminar.php? ID=<?php echo $mostrar['0'] ?>">Eliminar</a>
                        </td>
                    </tr>
                    <?php
                    }
                    ?>
                </table>
            </div>
            </body>

</html>