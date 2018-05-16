<html >
  <head>
    <meta charset="UTF-8">
    <title>Calculadora</title> <link rel="shortcut icon" href="logofinal1.png">
    
    <script type="text/javascript" src="funcs.js"></script>
    <link rel="stylesheet" href="css/normalize3.css">
    <link rel='stylesheet prefetch' href='http://maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css'>

        <link rel="stylesheet" href="css/style3.css"><link rel="shortcut icon" href="logotittle.png">
    
    

  </head>

<body background="diabetess.jpg">
  <?php

include "verifica.php";
include "conexao.php";


$usuario = $_SESSION['usuario_usuario'];

$sql = mysql_query("SELECT * FROM cadastro where usuario = '$usuario'");
while($linha = mysql_fetch_array($sql)){
  $metodo =$linha['metd'];
  $valorinicio =$linha['inic'];
  $contagem =$linha['cont'];
  $id =$linha['id'];
}
?>      



    <div class="logmod">
  <div class="logmod__wrapper">
    <a href="minhaconta.php"><span class="logmod__close">Close</span></a>

  <center><section id="cub">
   	
<form method="post" action="cadastrocalculadora.php">
      <input type="hidden" name="id" value="<?php echo $id ?>">

       <p class="p2" align="center">  Glicose atual: </p>  
     <input style=" float:left; margin-left:26%;" type="text" id="glicoseatual"  name="glicoseatual" placeholder="Ex: 150"/> <br></br>

    


      <p class="p2" align="center">  Inicio de correção: </p> 
        <input style=" float:left; margin-left:26%;" type="text" id="valorinicio"  name="valorinicio" value="<?php echo $valorinicio ?>"/> <br></br>

       
      <p class="p1" align="center">  Valor de divisão: </p> 
       <input  style=" float:left; margin-left:26%;" type="text" id="variavelusuario"  name="variavelusuario" value="<?php echo $metodo ?>" /> <br></br>

      <p class="p1" align="center"> Incremento de correção: </p> 
       <input  style=" float:left; margin-left:26%;" type="text" id="incremento"  name="incremento" value="<?php echo $contagem ?>" /><br></br> 
 
 <select name="carboidratototal"> 
  <?php
	$balimento=mysql_query("SELECT * FROM ALIMENTOS");
	while($fetchalimentos=mysql_fetch_array($balimento)){
		$alimento=$fetchalimentos['nomealimento'];
		$carboidratototal=$fetchalimentos['carboidrato'];
		?>
		
  <option value="<?php echo $carboidratototal;?>"><?php echo $alimento;?></option>
 

<?php		
	}
        ?> </select>
	 <select name="carboidratototal" id="carboidratototal"> 
  <?php
	$balimento=mysql_query("SELECT * FROM ALIMENTOS");
	while($fetchalimentos=mysql_fetch_array($balimento)){
		$alimento=$fetchalimentos['nomealimento'];
		$carboidratototal=$fetchalimentos['carboidrato'];
		?>
		
  <option value="<?php echo $carboidratototal;?>"  ><?php echo $alimento;?></option>
 

<?php		
	}
        ?> </select>	
		
     

    <input type="text" name="resultado" id="resultado">
        <button type="button" class="btn btn-primary" onClick="calculaGlicose()" >Calcule</button>
        <button>Salvar</button>
</form>
   </section></center>

        </div>
      
      <script>
      function calculaGlicose(){
        var glicoseAtual;
        var valorInicio;
        var incremento;
        var carboidratoTotal;
        var variavelUsuario;
        var insulinaGlicose;
        var insulinaCarboidrato;
        var insulinaRefeicao;
        
        glicoseAtual=parseInt(document.getElementById("glicoseatual").value);
        valorInicio=parseInt(document.getElementById("valorinicio").value);
        incremento=parseInt(document.getElementById("incremento").value);
        carboidratoTotal = parseInt(document.getElementById("carboidratototal").value);

        variavelUsuario=parseInt(document.getElementById("variavelusuario").value);
        
        insulinaGlicose=(glicoseAtual-valorInicio)/incremento;
        insulinaCarboidrato=carboidratoTotal/variavelUsuario;
        insulinaRefeicao=insulinaGlicose+insulinaCarboidrato;
        document.getElementById("resultado").value=insulinaRefeicao;
        window.alert(insulinaRefeicao);
        
      }
</script>


   
   
   
   
   
   
  </div>
</div>
    <script src='http://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js'></script>

        <script src="js/index.js"></script>

    
    
    
  </body>
</html>
