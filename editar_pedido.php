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
    <?php
$id = $_GET['ID'];
$nombre = $_GET['Nombre_producto'];
$marca = $_GET['Marca'];
$descripcion = $_GET['Descripcion'];
$tienda = $_GET['Tienda'];
$proveedor = $_GET['Proveedor'];
$cantidad = $_GET['Cantidad'];
$costo_total = $_GET['Costo_Total'];
?>
    <!-- End of Topbar -->

    <!-- Begin Page Content -->

    <div class="container-fluid">
        <form method="POST" action="edit_pedido.php">
            <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">ID</label>
                <input type="text" class="form-control" name="ID" id="" value="<?=$id?>" aria-describedby="emailHelp">

                <div class="mb-3">
                    <label for="exampleInputEmail1" class="form-label">Nombre</label>
                    <input type="text" class="form-control" name="Nombre_producto" id="" value="<?=$nombre?>" aria-describedby="emailHelp">

                </div>
                <div class="mb-3">
                    <label for="exampleInputEmail1" class="form-label">Marca</label>
                    <input type="text" class="form-control" name="Marca" id="" value="<?=$marca?>" aria-describedby="emailHelp">

                </div>
                <div class="mb-3">
                    <label for="exampleInputEmail1" class="form-label">Descripcion</label>
                    <input type="text" class="form-control" name="Descripcion" id="" value="<?=$descripcion?>" aria-describedby="emailHelp">

                </div>

            </div>
            <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">Tienda</label>
                <input type="text" class="form-control" name="Tienda" id="" value="<?=$tienda?>" aria-describedby="emailHelp">

            </div>

    </div>
    <div class="mb-3">
        <label for="exampleInputEmail1" class="form-label">Proveedor</label>
        <input type="text" class="form-control" name="Proveedor" id="" value="<?=$proveedor?>" aria-describedby="emailHelp">
    </div>
    <div class="mb-3">
        <label for="exampleInputEmail1" class="form-label">Cantidad</label>
        <input type="text" class="form-control" name="Cantidad" id="" value="<?=$cantidad?>" aria-describedby="emailHelp">
    </div>
    <div class="mb-3">
        <label for="exampleInputEmail1" class="form-label">Costo_Total</label>
        <input type="text" class="form-control" name="Costo_Total" id="" value="<?=$costo_total?>" aria-describedby="emailHelp">

    <button type="submit" class="btn btn-primary">Actualizar</button>
    </form>
    
    <table>
   <form action="pedidos.php" method="POST">
   <button type="submit" class="btn btn-primary">Cancelar</button>
   </form></table>

    <!-- Bootstrap core JS-->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
    <!-- Core theme JS-->
    <script src="js/scripts.js"></script>
    <!-- * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * *-->
    <!-- * *                               SB Forms JS                               * *-->
    <!-- * * Activate your form at https://startbootstrap.com/solution/contact-forms * *-->
    <!-- * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * *-->
    <script src="https://cdn.startbootstrap.com/sb-forms-latest.js"></script>
</body>

</html>