<?php
$id = $_POST['ID'];
$nombre = $_POST['Nombre_producto'];
$marca = $_POST['Marca'];
$descripcion = $_POST['Descripcion'];
$tienda = $_POST['Tienda'];
$proveedor = $_POST['Proveedor'];
$cantidad = $_POST['Cantidad'];
$costo_total = $_POST['Costo_Total'];

$cnx = mysqli_connect("localhost", "root", "", "control");
$sql = "UPDATE pedidos SET Nombre_producto='$nombre', Marca='$marca', Descripcion='$descripcion',  Tienda='$tienda', Proveedor='$proveedor', Cantidad='$cantidad', Costo_Total='$costo_total' WHERE ID LIKE $id";
$rta = mysqli_query($cnx, $sql);
if(!$rta) {
   echo "No se pudo Actualizar el pedido!";
}
else {
    header("Location: pedidos.php");
} 
?>