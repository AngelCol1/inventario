<?php
$nombre = $_POST['Nombre_producto'];
$marca = $_POST['Marca'];
$descripcion = $_POST['Descripcion'];
$tienda = $_POST['Tienda'];
$proveedor = $_POST['Proveedor'];
$cantidad = $_POST['Cantidad'];
$costo_total = $_POST['Costo_Total'];

$cnx = mysqli_connect("localhost", "root", "", "control");
$sql = "INSERT INTO pedidos(Nombre_producto, Marca, Descripcion, Tienda, proveedor, Cantidad, Costo_Total) VALUES('$nombre', '$marca', '$descripcion', '$tienda', '$proveedor', '$cantidad', '$costo_total')";
$rta = mysqli_query($cnx, $sql);
if(!$rta) {
   echo "No se Registro el pedido!";
}
else {
    header("Location: pedidos.php");
} 
?>