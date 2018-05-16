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