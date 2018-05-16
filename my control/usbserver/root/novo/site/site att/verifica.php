<?php
include "conexao.php";

session_start();

if(isset($_SESSION['usuario_usuario']) && isset($_SESSION['senha_usuario'])){
	
	$usuario_usuario = $_SESSION['usuario_usuario'];
	$senha_usuario = $_SESSION['senha_usuario'];
	
	$sql = mysql_query("SELECT * FROM cadastro where usuario = '$usuario_usuario'");
while($linha = mysql_fetch_array($sql)){
	$senha_db = $linha['senha'];
}

$cont = mysql_num_rows($sql);

if($cont == 0){
	echo "
	 <meta http-equiv='refresh' content='0; url=login.html' />
	 <script type='text/javascript'>alert('Usuario Inexistente')</script>
	 ";
	} else {
		if($senha_db != $senha_usuario) {
			echo "
	 <meta http-equiv='refresh' content='0; url=login.html' />
	 <script type='text/javascript'>alert('Senha incorreta')</script>
	 ";
			}
	}
	
}

else{echo "
	 <meta http-equiv='refresh' content='0; url=login.html' />
	 <script type='text/javascript'>alert('Precisa estar Logado!')</script>
	 ";
	
}

?>