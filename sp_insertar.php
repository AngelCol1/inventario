<?php
$nombre = $_POST['Nombre'];
$marca = $_POST['Marca'];
$descripcion = $_POST['Descripcion'];
$existencias = $_POST['Existencias'];
$precio_unidad = $_POST['Precio_Unidad'];

$cnx = mysqli_connect("localhost", "root", "", "control");
$sql = "INSERT INTO productos(Nombre, Marca, Descripcion, Existencias, Precio_Unidad) VALUES('$nombre', '$marca', '$descripcion', '$existencias', '$precio_unidad')";
$rta = mysqli_query($cnx, $sql);
if(!$rta) {
   echo "No se Registro!";
}
else {
    header("Location: stock.php");
} 
?>