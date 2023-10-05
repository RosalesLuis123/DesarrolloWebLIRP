<?php
include("conexion.php");
$descripcion=$_POST['descripcion'];
$numero_camas=$_POST['numero_camas'];

$sql="INSERT INTO tipo_habitacion(descripcion,numero_camas) values
 ('$descripcion', '$numero_camas') ";

 //echo $sql;
 if ($con->query($sql) === TRUE) {
    echo "Se creo el registro correctamente";
} else {
    echo "Error: " . $sql . "<br>" . $con->error;
}
$con->close()
?>
<meta http-equiv="refresh" content="3; url=read.php" />

