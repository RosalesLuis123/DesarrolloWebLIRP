<?php
        $numero = $_GET["numero"];

        if (isset($_GET["calcularFibonacci"])) {
            include "funcionfibo.php";
            echo "<h2>Resultado de Fibonacci:</h2>";
            echo "Fibonacci de $numero: " . fibonacci($numero) . "<br>";
        } elseif (isset($_GET["calcularFactorial"])) {
            include "funcionfact.php";
            echo "<h2>Resultado de Factorial:</h2>";
            echo "Factorial de $numero: " . factorial($numero) . "<br>";
        }
    ?>