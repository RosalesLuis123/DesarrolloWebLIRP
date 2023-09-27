<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php echo "hola mundo";
    for($i=0;$i<10;$i++)
    {
        echo "linea" .$i, "<br>";
    }
    $n=6;
    $f=1;
    for($i=1;$i<=$n;$i++)
    {
        $f*=$i;
    }
    echo "factorial de " .$n. " es " .$f;
    ?>
</body>
</html>