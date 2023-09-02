<?php
$operacion=$_GET['operacion'];
$a=$_GET['a'];
$b=$_GET['b'];
 switch ($operacion)
 {
    case"suma";
    $c=$a+$b;
    break;
    case"resta";
    $c=$a-$b;
    break;
    case"multiplicar";
    $c=$a*$b;
    break;
    case"dividir";
    $c=$a/$b;
    break;
 }
 