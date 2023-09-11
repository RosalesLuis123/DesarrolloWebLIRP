<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="estilos.css">

</head>
<body>
<?php
include("conexion.php");
$nombres=$_POST['nombres'];
$apellidos=$_POST['apellidos'];
$CU=$_POST['CU'];
$idcarrera=$_POST['idcarrera'];

$sql="INSERT INTO alumno(nombres,apellidos,cu,idcarrera) values
 ('$nombres', '$apellidos','$CU',$idcarrera) ";

 //echo $sql;
 if ($con->query($sql) === TRUE) {
    echo "Se creo el registro correctamente";
} else {
    echo "Error: " . $sql . "<br>" . $con->error;
}
$con->close()
?>
<meta http-equiv="refresh" content="3; url=read.php" />

   
</body>
</html>

