<?php
include('conexion.php');
    $titulo = $_POST['titulo'];
    $autor = $_POST['autor'];
    $anio = $_POST['anio'];
    $imagen = $_FILES['imagen'];

    $og_filename = $_FILES['imagen']['name'];
    $extension = explode(".", $og_filename)[1];
    $filename = uniqid() . '.' . $extension;
    copy($_FILES['imagen']['tmp_name'], "images/$filename");
    
    $sql = "INSERT INTO libros(titulo, autor, anio, imagen) VALUES('$titulo', '$autor', '$anio', '$filename')";
    mysqli_query($con, $sql);

    echo "Libro introducido"
?>
