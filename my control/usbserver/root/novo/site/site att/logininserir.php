<?php
$usuario = $_POST['usuario'];
$senha = $_POST['senha'];
$repitasenha = $_POST['repitasenha'];
$connect = mysql_connect('localhost','root','usbw');
$db = mysql_select_db('my_control');
if($senha != $repitasenha){
 
                echo"<script language='javascript' type='text/javascript'>alert('Senhas Diferentes');window.location.href='login.html';</script>";
				die();
}else  
$sql="INSERT INTO cadastro (usuario, senha) VALUES ('$usuario','$senha')";
$result = mysql_query($sql);
if ($result)
header("Location:login.html");
else{
echo "Erro ao tentar cadastrar dados no banco!";}


?>