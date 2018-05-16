<html >
  <head>
    <meta charset="UTF-8">
    <title>Meu Perfil</title> <link rel="shortcut icon" href="logofinal1.png">
    
    
    <link rel="stylesheet" href="css/normalize4.css">
    <link rel='stylesheet prefetch' href='http://maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css'>

        <link rel="stylesheet" href="css/style4.css"><link rel="shortcut icon" href="logotittle.png">
    
    

  </head>

<body background="diabetess.jpg">

 <?php
include "verifica.php";
include "conexao.php";


$usuario = $_SESSION['usuario_usuario'];
if (isset($_POST['senha'])) {
$nome = $_POST['name'];
$nome1 = $_POST['senha'];
$nome2 = $_POST['metodo'];
$nome3 = $_POST['inicio'];
$nome4 = $_POST['contagem'];
$sql = mysql_query ("UPDATE  `cadastro` SET  `senha` =  '$nome1', `metd` = '$nome2',`inic` = '$nome3', `cont`= '$nome4' WHERE  `usuario` =  '$nome'");
  if ($sql){
  }else{
  }
}else {


}

  





$sql = mysql_query("SELECT * FROM cadastro where usuario = '$usuario'");
while($linha = mysql_fetch_array($sql)){
  $nome = $linha['usuario'];
  $senha =$linha['senha'];
  $metodo =$linha['metd'];
  $inicio =$linha['inic'];
  $contagem =$linha['cont'];
}

?>      

    <div class="logmod">
  <div class="logmod__wrapper">
    <a href="minhaconta.php"><span class="logmod__close">Close</span></a>

   <center> <section id="cub">
   	
<form method="post" action="#">
<br></br>
    Usuario: <p><input type="text" name="name" value="<?php echo $nome ?>"> <br></br>
    Senha:<p><input type="password" name="senha" value="<?php echo $senha ?>"><br></br>
    Incremento de correção:<p><input type="text" name="metodo" value="<?php echo $metodo ?>"><br></br>
    Início de correção:<p><input type="text" name="inicio" value="<?php echo $inicio ?>"><br></br>
  Valor de divisão<p><input type="text" name="contagem" value="<?php echo $contagem ?>"><br></br>

<button >Salvar</button>
</center>
</form>




   </section>
   
   
   
   
   
   
  </div>
</div>
    <script src='http://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js'></script>

        <script src="js/index.js"></script>

    
    
    
  </body>
</html>
