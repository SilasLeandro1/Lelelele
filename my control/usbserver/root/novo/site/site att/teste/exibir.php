<?php
// Incluir aquivo de conexуo
include("conn.php");
 
// Recebe a id enviada no mщtodo GET
$id = $_GET['id'];
 
// Seleciona a noticia que tem essa ID
$sql = mysql_query("SELECT * FROM alimentos WHERE id = '".$id."'");
 
// Pega os dados e armazena em uma variсvel
$noticia = mysql_fetch_object($sql);
 
// Exibe o conteњdo da notica
echo $noticia->carboidrato;
 
// Acentuaчуo
?>