<?php
$n=$_GET['n'];

echo '<form action="calculae.php" method="POST"';
for ($i=0;$i<$n;$i++)
{
?>
<input type="number" name"<?php echo $i?>">
<?php
}
echo '<input type="submit" value="sumar"';
echo "</form>";
?>