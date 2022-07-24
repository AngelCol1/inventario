<?php
require_once 'conexion.php';
$sql="SELECT * FROM 'pedidos'";
$datos=$con->query($sql);
?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="description" content="" />
        <meta name="author" content="" />
        <title>ventas</title>
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
    <body>


<!-- DataTales Example -->
<div class="card shadow mb-4">
            <div class="card-header py-3">
                <h6 class="m-0 font-weight-bold text-primary">Pedidos</h6>
            </div>
            <div>
            <form action="buscar_pedido.php" method="POST">
            <input type="text" name="buscarp" id="">
            <input type="submit" value="Buscar">
            <a href="registrarpedidos.php">Nuevo</a>
        </form>
        </div>
            <div class="card-body">
                <div class="table-responsive">
                    <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                            <tr>
                                <th>ID</th>
                                <th>Nombre de Producto</th>
                                <th>Marca</th>
                                <th>Descripcion</th>
                                <th>Tienda</th>
                                <th>Proveedor</th>
                                <th>Cantidad</th>
                                <th>Costo Total</th>
                                <th>ACCIONES</th>
                            </tr>
                            <?php
                        $cnx = mysqli_connect("localhost", "root", "", "control");
                        $sql = "SELECT ID, Nombre_producto, Marca, Descripcion, Tienda, Proveedor, Cantidad, Costo_Total FROM pedidos order by id desc";
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
                        <td><?php echo $mostrar['6'] ?></td>
                        <td><?php echo $mostrar['7'] ?></td>
                        <td>
                            <a href="editar_pedido.php?
                            ID=<?php echo $mostrar['0'] ?> &
                            Nombre_producto=<?php echo $mostrar['1'] ?> &
                            Marca=<?php echo $mostrar['2'] ?> &
                            Descripcion=<?php echo $mostrar['3'] ?> &
                            Tienda=<?php echo $mostrar['4'] ?> &
                            Proveedor=<?php echo $mostrar['5'] ?> &
                            Cantidad=<?php echo $mostrar['6'] ?> &
                            Costo_Total=<?php echo $mostrar['7'] ?>
                            ">Editar</a>
                            <a href="delete_pedido.php? ID=<?php echo $mostrar['0'] ?>">Eliminar</a>
                        </td>
                    </tr>
                    <?php
                    }
                    ?>
                </table>
            </div>
            </body>

</html>