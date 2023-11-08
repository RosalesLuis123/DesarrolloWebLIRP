<?php
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $username = $_POST['Usuario'];
    $password = $_POST['password'];
    if ($username === "admin" && $password === "123") {
        session_start();
        $_SESSION["nivel"] = "admin";
        echo json_encode(["autenticado" => true]);
    } else {
        echo json_encode(["autenticado" => false]);
    }
} else {
    echo "Método no permitido.";
}
?>
