<?php
    $filas = $_GET['filas'];
    $cols = $_GET['cols'];
    $pares = array("Viva", "Mi", "Sucre");
    $impares = array("Cuna", "De", "Libertad");
?>

<table border=1>
    <?php for($i = 0; $i < $filas; $i++){ ?>
        <tr>
            <?php for($j = 0; $j < $cols; $j++){ 
                    if($j%2 == 0){
                        $texto = $pares[$i%3];
                    } else {
                        $texto = $impares[$i%3];
                    }
                    if($j%2 == 0 && $i%2 == 0){ ?>
                        <td style="background-color: blue"><?php echo $texto ?></td>
                    <?php } else if($j%2 != 0 && $i%2 != 0){ ?>
                        <td style="background-color: red"><?php echo $texto ?></td>
                    <?php } else { ?>
                        <td><?php echo $texto ?></td>
                    <?php } ?>
            <?php } ?>
        </tr>
    <?php } ?>
</table>
