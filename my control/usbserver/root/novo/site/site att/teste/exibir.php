<?php
// Incluir aquivo de conex�o
include("conn.php");
 
// Recebe a id enviada no m�todo GET
$id = $_GET['id'];
 
// Seleciona a noticia que tem essa ID
$sql = mysql_query("SELECT * FROM alimentos WHERE id = '".$id."'");
 
// Pega os dados e armazena em uma vari�vel
$noticia = mysql_fetch_object($sql);
 
// Exibe o conte�do da notica
echo $noticia->carboidrato;
 
// Acentua��o
?>