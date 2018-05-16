<?php

include ('conexao.php');
header('Content-Type: text/html; charset=utf-8');


?>


<html >
  <head>
    <meta http-equiv="Content-Type" content="text/html;charset=iso-8859-1">
    <title>Tabelas</title> <link rel="shortcut icon" href="logofinal1.png">
    
    
    <link rel="stylesheet" href="css/normalize2.css">
    <link rel='stylesheet prefetch' href='http://maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css'>

        <link rel="stylesheet" href="css/style2.css"><link rel="shortcut icon" href="logotittle.png">
    <link href="tabela.php">
    
    <style>
#search-box {
    position: relative;
    width: 100%;
    margin: 0;
}
#search-form {
    height: 40px;
    border: 1px solid #999;
    -webkit-border-radius: 5px;
    -moz-border-radius: 5px;
    border-radius: 5px;
    background-color: #fff;
    overflow: hidden;
}
#search-text {
    font-size: 14px;
    color: #ddd;
    border-width: 0;
    background: transparent;
}
#search-box input[type="text"] {
    width: 90%;
    padding: 11px 0 12px 1em;
    color: #333;
    outline: none;
}
#search-button {
    position: absolute;
    top: 0;
    right: 0;
    height: 42px;
    width: 80px;
    font-size: 14px;
    color: #fff;
    text-align: center;
    line-height: 42px;
    border-width: 0;
    background-color: #4d90fe; /*--define a cor do botão Buscar--*/
    -webkit-border-radius: 0px 5px 5px 0px;
    -moz-border-radius: 0px 5px 5px 0px;
    border-radius: 0px 5px 5px 0px;
    cursor: pointer;
}


table {
    font-family: arial, sans-serif;
    border-collapse: collapse;
    width: 100%;
}

td, th {
    border: 1px solid #dddddd;
    text-align: left;
    padding: 8px;
}

tr:nth-child(even) {
    background-color:  #cccccc;
}
</style>
  </head>

<body background="diabetess.jpg">

 <?php
include "verifica.php";
include "conexao.php";


$usuario = $_SESSION['usuario_usuario'];

$sql = mysql_query("SELECT * FROM cadastro where usuario = '$usuario'");
while($linha = mysql_fetch_array($sql)){
	$nome = $linha['usuario'];

}
?>      

    <div class="logmod">
  <div class="logmod__wrapper">
    <a href="perfil.php"><span class="logmod__close">Close</span></a>
	<div id='search-box'>
  <form action='' id='search-form' method='post' target='_top'>
    <input id='search-text' name='produto' placeholder='Digite sua pesquisa' type='text'/>
   
 <button id='search-button' type='submit'><span>Buscar</span></button>
  </form>
</div>
  <center>  	<section id="cub">

   	<section id="cub1">
	<br>
	<table  id="ph">
	<?php
	if (isset($_POST['produto'])){
		$alimento = $_POST['produto'];
		$consulta = "SELECT * FROM alimentos WHERE nomealimento LIKE '$alimento%'";
		$query    = mysql_query($consulta);
		while ($reg_alimento = mysql_fetch_array($query)){
	
	?>
	<tr>
	<th>
	<?php echo $reg_alimento['nomealimento']; ?></th>
	
	<th>
	<?php echo $reg_alimento['quantidade']."<br>"; ?></th>
	
	<th>
	<?php echo $reg_alimento['carboidrato']."<br>"; ?> </th>
	</tr>
	
	
	
		<?php
		
}
		}		
		?>
		
	</table>
	<br>

	</section>
   </section></center>
   
   
   
   
   
   
  </div>
</div>
    <script src='http://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js'></script>

        <script src="js/index.js"></script>

    
    
    
  </body>
</html>
