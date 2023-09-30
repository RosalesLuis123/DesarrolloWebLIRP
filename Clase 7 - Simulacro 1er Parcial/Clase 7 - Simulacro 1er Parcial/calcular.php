<?php
    $n = $_COOKIE['n'];
    $m = $_COOKIE['m'];
    $sum_filas = array();
    for($i = 1; $i <= $n; $i++){
        $sum_fila = 0;
        for($j = 1; $j <= $m; $j++){
            $sum_fila += $_POST["$i-$j"];
        }  
        array_push($sum_filas, $sum_fila);
    }
    $sum_cols = array();
    for($i = 1; $i <= $m; $i++){
        $sum_col = 0;
        for($j = 1; $j <= $n; $j++){
            $sum_col += $_POST["$j-$i"];
        }   
        array_push($sum_cols, $sum_col);
    }

    echo "Sumas de las filas <br>";
    foreach($sum_filas as $fila){
        echo "$fila ";
    }
    echo "<br>";
    echo "Suma de las columnas <br>";
    foreach($sum_cols as $col){
        echo "$col ";
    }
?>