<?php
$id = $_POST['ID'];
$nombre = $_POST['Nombre'];
$marca = $_POST['Marca'];
$descripcion = $_POST['Descripcion'];
$existencias = $_POST['Existencias'];
$precio_unidad = $_POST['Precio_Unidad'];

$cnx = mysqli_connect("localhost", "root", "", "control");
$sql = "UPDATE productos SET Nombre='$nombre', Marca='$marca', Descripcion='$descripcion', Existencias='$existencias', Precio_Unidad='$precio_unidad' WHERE ID LIKE $id";
$rta = mysqli_query($cnx, $sql);
if(!$rta) {
   echo "No se pudo Actualizar!";
}
else {
    header("Location: stock.php");
} 
?>