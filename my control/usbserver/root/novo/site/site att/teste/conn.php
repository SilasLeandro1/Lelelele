<?php
$host = "localhost"; 
$usuario = "root";
$senha = "usbw";
$banco = "my_control";
 
$db = mysql_connect($host, $usuario, $senha);
mysql_select_db("my_control", $db);
mysql_set_charset('utf8',$db);
?>