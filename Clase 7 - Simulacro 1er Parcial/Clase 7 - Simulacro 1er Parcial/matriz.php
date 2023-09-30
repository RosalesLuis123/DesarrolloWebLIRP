<?php
    $n = $_GET['n'];
    $m = $_GET['m'];
    setcookie("n", $n, time()+3600);
    setcookie("m", $m, time()+3600);
?>

<form action="calcular.php" method="post">
    <table border=1>
        <?php for($i = 1; $i <= $n; $i++){ ?>
            <tr>
                <?php for($j = 1; $j <= $m; $j++){ ?>
                    <td><input type="number" name="<?php echo "$i-$j"?>"></td>
                <?php } ?>
            </tr>
        <?php } ?>
    </table>
    <input type="submit" value="Calcular">
</form>
