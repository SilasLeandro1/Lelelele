<?php
include "verifica.php";
include "conexao.php";


$usuario = $_SESSION['usuario_usuario'];


$glicoseatual = $_POST['glicoseatual'];

$carboidratototal =  $_POST['carboidratototal'];

$valorinicio = $_POST['valorinicio'];

$variavelusuario = $_POST['variavelusuario'];

$incremento = $_POST['incremento'];
$resultado = $_POST['resultado'];
$id = $_POST['id'];




$sql = mysql_query("INSERT INTO `meu_diario`( `glicoseatual`,`carboidratototal`,`valorinicio`,`variavelusuario`,`incremento`,`id_user`,`resultado`) VALUES ('$glicoseatual','$carboidratototal','$valorinicio','$variavelusuario','$incremento','$id','$resultado' )");

if($sql){

}else{
	echo mysql_error();
}
header('Location: meudiario.php'); 
?>