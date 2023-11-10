<?php
$con = new mysqli("localhost:8081", "root", "", "bd_biblioteca");
if ($con->connect_error) {
    die("conexion fallada" . $con->connect_error);
}
?>