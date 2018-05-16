<?php
session_start();
?>
!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />

<title>Documento sem título</title>
</head>

<body>
<?php
include "conexao.php";

$usuario = $_POST['usuario'];
$senha = $_POST['senha'];
$sql = mysql_query("SELECT * FROM cadastro where usuario = '$usuario'");
while($linha = mysql_fetch_array($sql)){
	$senha_db = $linha['senha'];
}

$cont = mysql_num_rows($sql);

if($cont == 0){
	echo "
	 <meta http-equiv='refresh' content='0; url=login.html' />
	 <script type='text/javascript'>alert('Usuario inexistente')</script>
	 ";
	} else {
		if($senha_db != $senha) {
			echo "
	 <meta http-equiv='refresh' content='0; url=login.html' />
	 <script type='text/javascript'>alert('Senha incorreta')</script>
	 ";
			} else{
				
				$_SESSION['usuario_usuario'] = $usuario;
				$_SESSION['senha_usuario'] = $senha;
				header("Location: perfil.php");

				}
		}
		mysql_close($db);
		
?>
</body>
</html>