<html>
<meta charset="utf-8">

<form action="busca.php" method="post">
<input type="text" name="busca"/>
<input type="submit" value="buscar"/>
</form>

<?php
mysql_connect("localhost","root","usbw");
@$a=$_POST['busca'];
mysql_select_db("my_control");
$busca=mysql_query("SELECT * FROM alimentos WHERE nomealimento='$a'");

?>
<table border="1">
<tr><td>Alimento</td><td>Quantidade</td><td>Carboidrato</td></tr>
<?php
while($resultado=mysql_fetch_array($busca)){
?>
<tr><td><?php echo $resultado['nomealimento']; ?> </td><td><?php echo $resultado['quantidade']; ?> </td><td><?php echo $resultado['carboidrato']; ?> </td></tr>
<?php
}
?>
</table>

</html>