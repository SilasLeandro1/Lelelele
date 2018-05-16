

<html >
  <head>
    <meta charset="UTF-8">
    <title>Calculadora</title> <link rel="shortcut icon" href="logofinal1.png">
    
    <script type="text/javascript" src="funcs.js"></script>
    <link rel="stylesheet" href="css/normalize3.css">
    <link rel='stylesheet prefetch' href='http://maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css'>
    <link rel="stylesheet" href="ca.css">
        <link rel="stylesheet" href="css/style3.css"><link rel="shortcut icon" href="logotittle.png">
    
    

  </head>

<body >

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
    <a href="minhaconta.php"><span class="logmod__close">Close</span></a>


<div class="container">
    
<table >
<thead>
 <tr >
    <th>Data</th>
    <th>Glicose </th> 
    <th>Carboidrato total</th>
    <th>Valor inicial</th>
    <th>Incremento</th>
	<th>Resultado</th>

  </tr>
    </thead>
    <tbody>
<?php

$usuario = $_SESSION['usuario_usuario'];

$sql = mysql_query("SELECT * FROM cadastro where usuario = '$usuario'");
while($linha = mysql_fetch_array($sql)){

  $id =$linha['id'];
}
date_default_timezone_set('America/Sao_Paulo');
$query = mysql_query("SELECT * FROM meu_diario where id_user = '$id' ");
while ($row = mysql_fetch_assoc($query)) {
    echo "<tr>";
    echo " <td> " .     date('d/m/Y á\s h:i',strtotime($row['datas'])) ."</td>";
    echo " <td>" . $row['glicoseatual']." </td>";
    echo " <td>" . $row['carboidratototal']." </td>";
    echo " <td>" . $row['valorinicio']." </td>";
    echo " <td>" . $row['incremento']." </td>";
	    echo " <td>" . $row['resultado']." </td>";
	
	

    echo "</tr>";
}
?>

    </tbody>
</table>









</div>
</div>
</div>
    <script src='http://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js'></script>

        <script src="js/index.js"></script>

    
    
    
  </body>
</html>




























