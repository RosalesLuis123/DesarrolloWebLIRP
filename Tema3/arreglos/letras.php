<?php
$a=array('a','b','c','d');
echo $a[0];
echo $a[3];
echo "<br>";
echo $a[3];
echo "<br>";
for($i=0;$i<count($a);$i++)
{
    echo $a[$i];
}
echo "<br>";
echo "<h1>RECORRER CON EL CICLO FORENCH</h1>";
foreach ($a as $elemento)
{
 echo $elemento;
}
foreach ($a as $indice=>$elemento)
{
    echo $indice."=>".$elemento;
}
$letras3=[0=>"a",1=>"b",2=>"c"];
?>