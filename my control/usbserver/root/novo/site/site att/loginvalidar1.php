<?php
include "cadastro2conexao.php";
    $login = $_POST['usuario'];
	$senha = $_POST['senha'];
  
        if (isset($login)) {
                     
            $verifica = mysql_query("SELECT * FROM cadastro WHERE usuario = '$login' AND senha = '$senha'") or die("erro ao selecionar");
                if (mysql_num_rows($verifica)<=0){
                    echo"<script language='javascript' type='text/javascript'>alert('Login e/ou senha incorretos');window.location.href='login.html';</script>";
                    die();
                }else{
                   
                    header("Location:index2.html");
                }
        }
?>
