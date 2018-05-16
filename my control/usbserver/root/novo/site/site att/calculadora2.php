<!DOCTYPE html>
<html >
  <head>
    <meta charset="UTF-8">
    <title>Calculadora</title><link rel="shortcut icon" href="logotittle.png">
    
    
    <link rel="stylesheet" href="fala_conosco.css"

    <link rel='stylesheet prefetch' href='http://maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css'>

        <link rel="stylesheet" href=".css">

    
        <link rel="shortcut icon" href="cardiogram.png" >
    
    
  </head>

<body background="diabetess.jpg">

<font face="verdana"> 
  </br>
   </br>
    </br>
     </br>
      </br>
       </br>
        </br>
         </br>
<?php
$glicoseatual= $_POST['glicoseatual'];
$valorinicio= $_POST ['valorinicio'];
$incremento= $_POST ['incremento'];

$carboidratototal= $_POST['carboidratototal'];
$variavelusuario= $_POST['variavelusuario'];

$insulinaglicose= ($glicoseatual-$valorinicio)/$incremento;
$insulinacarboidrato= $carboidratototal/$variavelusuario;

$insulinarefeicao= $insulinaglicose+$insulinacarboidrato;
 
echo "Você deve tomar $insulinarefeicao unidades de insulina por essa refeição.";

     ?>
            
 <div id="contact">
    
    <h1> </h1>
   
  
</div>
  

  </body>
</html>
