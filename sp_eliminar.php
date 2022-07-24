<?php
$id = $_GET['ID'];

$cnx = mysqli_connect("localhost", "root", "", "control");
$sql = "DELETE FROM productos  WHERE ID LIKE $id";
$rta = mysqli_query($cnx, $sql);
if(!$rta) {
   echo "No se pudo Eliminar!";
}
else {
    header("Location: stock.php");
} 
?>