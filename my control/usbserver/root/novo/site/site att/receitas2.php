
<html class="no-js" lang="">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">  
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">
       
	   <style>
#overflowTest {
    
    color: black;
    padding: 15px;
    width: 100%;
    height: 300px;
    overflow: scroll;
    border: 1px solid #ccc;
}
</style>

        <title>My Control</title> <link rel="shortcut icon" href="logofinal1.png">
        <link rel="stylesheet" href="assets/css/font2.css" >
        <link rel="stylesheet" href="assets/css/font.css">
        <link rel="stylesheet" href="assets/css/font-awesome.min.css">
        <link rel="stylesheet" href="assets/css/bootstrap.min.css">
        <link rel="stylesheet" href="assets/css/magnific-popup.css">
        <link rel="stylesheet" href="assets/css/plugins.css" />
        <link rel="stylesheet" href="assets/css/style2.css">
        <link rel="stylesheet" href="assets/css/responsive.css" />
        <link rel="stylesheet" href="modl/css/reset.css"> <!-- CSS reset -->
        <link rel="stylesheet" href="modl/css/style.css"> <!-- Resource style -->
        <script src="modl/js/modernizr.js"></script> <!-- Modernizr -->

        <script src="assets/js/vendor/modernizr-2.8.3-respond-1.4.2.min.js"></script>
  
    </head>
      
    <body data-spy="scroll" data-target=".navbar" data-offset="200">
	<?php
include "verifica.php";
include "conexao.php";


$usuario = $_SESSION['usuario_usuario'];

$sql = mysql_query("SELECT * FROM cadastro where usuario = '$usuario'");
while($linha = mysql_fetch_array($sql)){
	$nome = $linha['usuario'];

}
?>      
       

        <div class="culmn">
            <header id="main_menu" class="header navbar-fixed-top">            
                <div class="main_menu_bg">
                    <div class="container">
                        <div class="row">
                            <div class="nave_menu">
                                <nav class="navbar navbar-default">
                                    <div class="container-fluid">
                                        
                                        <div class="navbar-header">
                                            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
                                                <span class="sr-only">Toggle navigation</span>
                                                <span class="icon-bar"></span>
                                                <span class="icon-bar"></span>
                                                <span class="icon-bar"></span>
                                            </button>
                                            <a class="navbar-brand" href="#home">
                                            
                                                <img src="assets/images/logofinal1.png"  width="100" height="50" /> 
                                                
                                            </a>
                                        </div>

                                       



                                        <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">

                                            <ul class="nav navbar-nav navbar-right">
                                                <li><a href="perfil.php">Home</a></li>
                             
                                                <li><a href="tabelas.php">Tabelas</a></li>
                                                
                                              
                                               
                                            </ul>


                                        </div>

                                    </div>
                                </nav>
                            </div>  
                        </div>

                    </div>

                </div>
            </header> 





            <section id="home" class="home">
                <div class="overlay">
                    <div class="container">
                        <div class="row">
                            <div class="col-sm-12 ">
                                <div class="main_home_slider text-center">
                                    <div class="single_home_slider">
                                        <div class="main_home wow fadeInUp" data-wow-duration="700ms">
                                         
                                        <h1> Receitas Diets </h1>
                                            
                                                 <div class="home_btn">
                                                <a href="index.php" class="btn btn-primary">Sair</a>
                                            </div>
                                            

                                        </div>
                                    </div>
                                    <div class="single_home_slider">
                                        <div class="main_home wow fadeInUp" data-wow-duration="700ms">
                                            <h1> My Control</h1>
                                            <p> Se Delicie com as receitas a baixo com baixo teor de carboidratos    </p>
                                             <div class="home_btn">
                                                <a href="index.php" class="btn btn-primary">Sair</a>
                                            </div>

                                        </div>
                                    </div>
                                    <div class="single_home_slider">
                                        <div class="main_home wow fadeInUp" data-wow-duration="700ms">
                                            <h1>My Control</h1>
                                            <p>A Diabetes não é o fim do mundo, mas sim um novo mundo a ser descoberto  </p>
                                          <div class="home_btn">
                                                <a href="index.php" class="btn btn-primary">Sair</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>






 








    <ul class="cd-items cd-container">
        <li class="cd-item" id="prdct1">
            <img src="iorgute.jpg" alt="Item Preview">
            <a href="#prdct1" class="cd-trigger">Iorgurte Caseiro de Morango Diet</a>
            <div class="quick-view-content">
                <div class="quick-view-content-wrapper">
                    <div class="cd-slider-wrapper">
                        <ul class="cd-slider">
                            <li class="selected"><img src="iorgute.jpg" alt="Product 1"></li>
                            <li><img src="modl/img/lasanha.jpg" alt="Product 2"></li>
                            <li><img src="modl/img/lasanha.jpg" alt="Product 3"></li>
                        </ul> <!-- cd-slider -->
            
                        <ul class="cd-slider-navigation">
                            <li><a class="cd-next" href="#0">Prev</a></li>
                            <li><a class="cd-prev" href="#0">Next</a></li>
                        </ul> <!-- cd-slider-navigation -->
                    </div> <!-- cd-slider-wrapper -->
        
                    <div class="cd-item-info">
					<table> <tr> <td>
					<div id="overflowTest">
                        <h2>Iogurte Caseiro de Morango Diet </h2>
                        <p style="text-align:left"> INGREDIENTES</br> </br>
1 litro de leite desnatado</br>
1 iogurte desnatado</br>
1 gelatina em pó diet de morango</br>
1 copo (requeijão) de água</br>
10 gotas de adoçante líquido ou 4 colheres de sopa de adoçante de sua preferencia.</br></br>
MODO DE PREPARO</br></br>
Esquente o leite até ficar um pouco mais que morno. Adicione o iogurte, misture bem e cubra o recipiente com um pano.</br>
 Deixe por 12 horas. Dissolva a gelatina na água fervente, misture bem e espere amornar. </br>
 Coloque no liquidificador a mistura do leite, a gelatina e o adoçante.</br>
 Bata por alguns segundos, coloque em tacinhas e leve à geladeira.            </td></tr> </div> </table>
			
                        <ul class="cd-item-action">
                                          
                            <li><a href="http://gshow.globo.com/receitas-gshow/receita/iogurte-caseiro-de-morango-diet-5550cf4e4d388573aa000043.html"><button class="add-to-cart"> Referências </button></a></li> 
							<li><a href="iorgurt.pdf">Imprimir</a></li> 
							
                        </ul> <!-- cd-item-action -->
                    </div> <!-- cd-item-info -->
                </div>
            </div>
			
        </li> <!-- cd-item -->

        <li class="cd-item" id="prdct2">
            <img src="kibe.jpg" alt="Item Preview">
            <a href="#prdct2" class="cd-trigger">Receita de quibe assado light de carne</a>
            
           <div class="quick-view-content">
                <div class="quick-view-content-wrapper">
                    <div class="cd-slider-wrapper">
                        <ul class="cd-slider">
                            <li class="selected"><img src="kibe.jpg" alt="Product 1"></li>
                            <li><img src="modl/img/item-2.jpg" alt="Product 2"></li>
                            <li><img src="modl/img/item-3.jpg" alt="Product 3"></li>
                        </ul> <!-- cd-slider -->
            
                        <ul class="cd-slider-navigation">
                            <li><a class="cd-next" href="#0">Prev</a></li>
                            <li><a class="cd-prev" href="#0">Next</a></li>
                        </ul> <!-- cd-slider-navigation -->
                    </div> <!-- cd-slider-wrapper -->
        
                    <div class="cd-item-info">
					<table> <tr> <td>
					<div id="overflowTest">
					
                        <h2>Receita de quibe assado light de carne</h2>
                        <p style="text-align:left"> 
Ingredientes:</br></br>
200 g de carne de vaca moída (90% magra, 10% gorda);</br>
½ xícara de chá de trigo para quibe;</br>
1 xícara de chá de água fria;</br>
1 pimenta dedo de moça;</br>
1 colher de chá de pimenta preta (opcional);</br>
Sal e hortelã a gosto.</br></br>
Modo de preparo:</br></br>
Pré aquecer o forno. Hidratar o trigo para quibe na água. Logo após, escorrer em uma peneira e reservar;</br>
Picar a pimenta dedo de moça e misturar com a carne moída em uma tigela;</br>
Adicionar a pimenta preta, o trigo e o sal. Misturar bem e acrescentar a hortelã picada;</br>
Mais uma vez, misturar bem e separar a massa em pedaços. Modelar esses pedaços no formato de um quibe;</br>
Passar para uma forma untada e levar ao forno por 10 minutos. </br>
Quantidade de porções que rende: 4</br>
Número de calorias por porção: 146</br>
</p>
</td></tr> </div> </table>
                        <ul class="cd-item-action">
                            <li><a href="https://duvidas.dicio.com.br/quibe-ou-kibe/"><button class="add-to-cart"> Referências </button></a></li> 
					                  
                            <li><a href="quibe.pdf">Imprimir</a></li> 
						
                        </ul> <!-- cd-item-action -->
                    </div> <!-- cd-item-info -->
                </div>
            
</div>            
            
        </li> <!-- cd-item -->

        <li class="cd-item" id="prdct1">
            <img src="torta_banana.jpg" alt="Item Preview">
            <a href="#prdct3" class="cd-trigger"> Torta Banana</a>
            
            <div class="quick-view-content">
                <div class="quick-view-content-wrapper">
                    <div class="cd-slider-wrapper">
                        <ul class="cd-slider">
                            <li class="selected"><img src="torta_banana.jpg" alt="Product 1"></li>
                            <li><img src="modl/img/item-2.jpg" alt="Product 2"></li>
                            <li><img src="modl/img/item-3.jpg" alt="Product 3"></li>
                        </ul> <!-- cd-slider -->
            
                        <ul class="cd-slider-navigation">
                            <li><a class="cd-next" href="#0">Prev</a></li>
                            <li><a class="cd-prev" href="#0">Next</a></li>
                        </ul> <!-- cd-slider-navigation -->
                    </div> <!-- cd-slider-wrapper -->
        
                    <div class="cd-item-info">
					<table> <tr> <td>
					<div id="overflowTest">
					
                        <h2>Torta de Banana diet</h2>
                        <p>INGREDIENTES</br></br>
Farinha de rosca</br>
12 Bananas Prata ou Nanica</br>
1 xícara de farinha de trigo</br>
1 xícara de adoçante forno e fogão</br>
125g de margarina gelada</br>
Se preferir pode colocar uvas passas a gosto fica muito bom!!</br></br>
MODO DE PREPARO</br></br>
Pulverize um pirex com a farinha de rosca Corte as bananas ao meio.</br>
Misture a farinha de trigo e o adoçante e cubra as metades da banana.</br>
Corte a margarina gelada em cubinhos e espalhe por cima. Jogue canela em pó por cima fica uma delicia.</br>
Leve ao forno, regular até ficar douradinho.</br>
 </td></tr> </div> </table>
						
                        <ul class="cd-item-action">
                            <li><a href="http://gshow.globo.com/receitas-gshow/receita/torta-de-banana-diet-555f70b54d38851b3c00003f.html"><button class="add-to-cart"> Referências </button></a></li>              
                            <li><a href="torta_banana.pdf">Imprimir</a></li> 
                            
                        </ul> <!-- cd-item-action -->
                    </div> <!-- cd-item-info -->
                </div>
            </div>
        </li> <!-- cd-item -->
        
        <li class="cd-item" id="prdct4">
            <img src="paçoca.jpg" alt="Item Preview">
            <a href="#prdct4" class="cd-trigger">Paçoca Diet</a>
            
            <div class="quick-view-content">
                <div class="quick-view-content-wrapper">
                    <div class="cd-slider-wrapper">
                        <ul class="cd-slider">
                            <li class="selected"><img src="paçoca.jpg" alt="Product 1"></li>
                            <li><img src="modl/img/item-2.jpg" alt="Product 2"></li>
                            <li><img src="modl/img/item-3.jpg" alt="Product 3"></li>
                        </ul> <!-- cd-slider -->
            
                        <ul class="cd-slider-navigation">
                            <li><a class="cd-next" href="#0">Prev</a></li>
                            <li><a class="cd-prev" href="#0">Next</a></li>
                        </ul> <!-- cd-slider-navigation -->
                    </div> <!-- cd-slider-wrapper -->
        
                    <div class="cd-item-info">
					<table> <tr> <td>
					<div id="overflowTest">
                        <h2>Paçoca Diet</h2>
                        <p>Ingredientes</br></br>

 

2 xícaras (chá) de amendoim torrado e sem pele</br>
½ xícara (chá) de leite em pó</br>
3 ½ colheres (sopa) de adoçante culinário</br>
5 colheres (sopa) de leite desnatado (75 ml)</br></br>

Modo de preparo</br></br>

Bata o amendoim junto com o leite em pó e o adoçante no processador, até obter uma farofa fina.</br> Passe para uma tigela e acrescente o leite aos poucos, misturando com uma colher, até obter uma massa úmida (se atingir esse ponto antes que o leite acabe, não é necessário acrescentar o resto).</br> Forre uma vasilha retangular pequena (18 x 28 cm) com papel-filme e despeje a massa. Pressione-a sobre o refratário com as costas de uma colher até ficar bem compacta.</br> Cubra com mais papel-filme e espere cerca de 1 hora antes de cortar. Retire o filme plástico e corte a massa em quadradinhos ou em losangos, com uma faca ou cortador. </br>Guarde em refratário fechado.

Rendimento: 30 unidades (12 g cada)</br>
Tempo de preparo: 20 minutos</br>
Calrorias por uninade (12 g): 56,2</br>
						</p>
</td></tr> </div> </table>
                        <ul class="cd-item-action">
                            <li><a href="http://corpoacorpo.uol.com.br/dieta/receitas-light/pacoca-diet-tem-apenas-56-calorias/2352#"><button class="add-to-cart"> Referências </button></a></li> 
					                  
                            <li><a href="paçoca.pdf">Imprimir</a></li> 
                        </ul> <!-- cd-item-action -->
                    </div> <!-- cd-item-info -->
                </div>
            </div>
        </li> <!-- cd-item -->
        
        <li class="cd-item" id="prdct5">
            <img src="maracuja.jpg" alt="Item Preview">
            <a href="#prdct5" class="cd-trigger">Mousse de Maracujá Diet</a>
            
            <div class="quick-view-content">
                <div class="quick-view-content-wrapper">
                    <div class="cd-slider-wrapper">
                        <ul class="cd-slider">
                            <li class="selected"><img src="maracuja.jpg" alt="Product 1"></li>
                            <li><img src="modl/img/item-2.jpg" alt="Product 2"></li>
                            <li><img src="modl/img/item-3.jpg" alt="Product 3"></li>
                        </ul> <!-- cd-slider -->
            
                        <ul class="cd-slider-navigation">
                            <li><a class="cd-next" href="#0">Prev</a></li>
                            <li><a class="cd-prev" href="#0">Next</a></li>
                        </ul> <!-- cd-slider-navigation -->
                    </div> <!-- cd-slider-wrapper -->
        
                    <div class="cd-item-info">
					<table> <tr> <td>
					<div id="overflowTest">
                        <h2>Mousse de Maracujá Diet</h2>
                        <p>INGREDIENTES</br></br>
MOUSSE:</br></br>

1 xícara de leite desnatado</br>
1 xícara de iogurte natural desnatado</br>
1 xícara de suco concentrado de maracujá</br>
1 lata de creme de leite light</br>
1/2 xícara de adoçante culinário</br>
1 envelope de gelatina em pó sem sabor</br>
1/2 xícara de água</br></br>
CALDA:</br></br>

Polpa de 1 maracujá</br>
3 colheres de sopa de adoçante culinário</br>
1 e 1/2 xícaras de chá de água</p>
</td></tr> </div> </table>
						
                        <ul class="cd-item-action">
						<li><a href="http://www.tudogostoso.com.br/receita/69631-mousse-de-maracuja-diet.html"><button class="add-to-cart"> Referências </button></a></li> 
					              
                            <li><a href="maracuja.pdf">Imprimir</a></li> 
                        </ul> <!-- cd-item-action -->
                    </div> <!-- cd-item-info -->
                </div>
            </div>
        </li> <!-- cd-item -->
        
        <li class="cd-item" id="prdct6">
            <img src="lanche_de_cane_maluca.jpg" alt="Item Preview">
            <a href="#prdct6" class="cd-trigger">Lanche de carne Maluca</a>
            
            <div class="quick-view-content">
                <div class="quick-view-content-wrapper">
                    <div class="cd-slider-wrapper">
                        <ul class="cd-slider">
                            <li class="selected"><img src="lanche_de_cane_maluca.jpg" alt="Product 1"></li>
                            <li><img src="modl/img/item-2.jpg" alt="Product 2"></li>
                            <li><img src="modl/img/item-3.jpg" alt="Product 3"></li>
                        </ul> <!-- cd-slider -->
            
                        <ul class="cd-slider-navigation">
                            <li><a class="cd-next" href="#0">Prev</a></li>
                            <li><a class="cd-prev" href="#0">Next</a></li>
                        </ul> <!-- cd-slider-navigation -->
                    </div> <!-- cd-slider-wrapper -->
        
                    <div class="cd-item-info">
					<table> <tr> <td>
					<div id="overflowTest">
                        <h2>Lanche de Carne Maluca </h2>
                        <p>INGREDIENTES</br></br>
1 kg de miolo de acém</br>
3 caldos de carne</br>
2 colheres de sopa de azeite</br>
1 pimentão vermelho</br>
1 pimentão verde</br>
100 g de azeitona azeitona sem caroço</br>
1 cebola grande</br>
5 dentes de alho</br>
2 latas de molho pronto</br></br>
MODO DE PREPARO</br></br>
Cozinhe a carne com os caldos na pressão por 1 hora</br>
Desfie a carne e reserve a água do cozimento</br>
Coloque na panela o azeite (se não tiver pode ser óleo mesmo)</br>
Refogue a cebola e o alho</br>
Acrescente os pimentões picadinhos e a azeitona sem caroço e refogue bem até murchar</br>
Coloque a carne desfiada e o molho de tomate misture tudo e jogue a água do cozimento reservada</br>
Verifique se está bom de sal e deixe ferver bem até apurar o molho</p>
</td></tr> </div> </table>                       
					   <ul class="cd-item-action">
                          <li><a href="http://gshow.globo.com/receitas-gshow/receita/carne-louca-529c0a3d4d38853dc4000044.html"><button class="add-to-cart"> Referências </button></a></li> 
					              
                            
					              
                            <li><a href="lanche.pdf">Imprimir</a></li> 
                        </ul> <!-- cd-item-action -->
                    </div> <!-- cd-item-info -->
                </div>
            </div>
        </li> <!-- cd-item -->
        
        <li class="cd-item" id="prdct7">
            <img src="strogonoff.jpg" alt="Item Preview">
            <a href="#prdct7" class="cd-trigger">Strogonoff de Frango</a>
            
            <div class="quick-view-content">
                <div class="quick-view-content-wrapper">
                    <div class="cd-slider-wrapper">
                        <ul class="cd-slider">
                            <li class="selected"><img src="strogonoff.jpg" alt="Product 1"></li>
                            <li><img src="modl/img/item-2.jpg" alt="Product 2"></li>
                            <li><img src="modl/img/item-3.jpg" alt="Product 3"></li>
                        </ul> <!-- cd-slider -->
            
                        <ul class="cd-slider-navigation">
                            <li><a class="cd-next" href="#0">Prev</a></li>
                            <li><a class="cd-prev" href="#0">Next</a></li>
                        </ul> <!-- cd-slider-navigation -->
                    </div> <!-- cd-slider-wrapper -->
        
                    <div class="cd-item-info">
					<table> <tr> <td>
					<div id="overflowTest">
                        <h2>Strogonoff de Frango</h2>
                        <p>INGREDIENTES</br></br>
300 g de peito de frango cortados em cubinhos</br>
1 cebola picada ou processada</br>
2 colheres de sopa de catchup</br>
1 colher de chá de mostarda</br>
1 caixinha de creme de leite light</br>
1 xícara de chá de molho de tomate</br>
1/2 xícara de chá de cogumelos em fatias</br>
1 colher de sopa de margarina light</br>
Sal e pimenta a gosto</br></br>
MODO DE PREPARO</br></br>
Em uma panela derreta a margarina e doure o frango</br>
Acrescente a cebola, o molho de tomate, o catchup, a mostarda e o sal</br>
Misture bem e deixe refogar por 15 minutos</br>
Se estiver seco neste meio-tempo, acrescente um pouquinho de água</br>
Quando o frango estiver macio, acrescente o creme de leite light e os cogumelos e deixe ferver até engrossar o caldo (mais ou menos 5 minutos)</br>
Sirva acompanhado de arroz branco e batata palha</br>

</p>
</td></tr> </div> </table> 
						
                        <ul class="cd-item-action">
                              <li><a href="http://www.tudogostoso.com.br/receita/10594-estrogonofe-light-de-frango.html"><button class="add-to-cart"> Referências </button></a></li> 
					                      
                            <li><a href="frango.pdf">Imprimir</a></li> 
                        </ul> <!-- cd-item-action -->
                    </div> <!-- cd-item-info -->
                </div>
            </div>
        </li> <!-- cd-item -->
        
        <li class="cd-item" id="prdct8">
            <img src="tapioca.jpg" alt="Item Preview">
            <a href="#prdct8" class="cd-trigger">Tapioca</a>
            
            <div class="quick-view-content">
                <div class="quick-view-content-wrapper">
                    <div class="cd-slider-wrapper">
                        <ul class="cd-slider">
                            <li class="selected"><img src="tapioca.jpg" alt="Product 1"></li>
                            <li><img src="modl/img/item-2.jpg" alt="Product 2"></li>
                            <li><img src="modl/img/item-3.jpg" alt="Product 3"></li>
                        </ul> <!-- cd-slider -->
            
                        <ul class="cd-slider-navigation">
                         
                        </ul> <!-- cd-slider-navigation -->
                    </div> <!-- cd-slider-wrapper -->
        
                    <div class="cd-item-info">
                     <table> <tr> <td>
					<div id="overflowTest">                    
					<h2>Tapioca</h2>
                        <p>INGREDIENTES</br></br>
Polvilho doce;</br>
Água.</br></br>

MODO DE PREPARO</br></br>
Umedeça 1 kg de polvilho e deixe na geladeira por 12 horas</br>
Passe na peneira, e misture uma pitada de sal</br>
Está pronta</br>
É só aquecer uma frigideira e colocar uma pequena quantidade, deixar a farinha ficar úmida e vire com uma espátula</br>
Está pronta para colocar o recheio do seu gosto</br>
</p>
</td></tr> </div> </table> 
                        <ul class="cd-item-action">
                            <li><a href="http://www.tudogostoso.com.br/receita/6584-tapioca.html"><button class="add-to-cart"> Referências </button></a></li> 
							<li><a href="tapioca.pdf">Imprimir</a></li>   
				
                             
                        </ul> <!-- cd-item-action -->
                    </div> <!-- cd-item-info -->
                </div>
            </div>
        </li> <!-- cd-item -->

    </ul> <!-- cd-items -->

    <div id="cd-quick-view" class="cd-quick-view">
        <a href="javascript:void(0);" class="cd-close">Close</a>
    </div> <!-- cd-quick-view -->

    <div id="cd-quick-view-coverlay"></div>

<center>
<a href="receitasdiet.php"> Anterior </a> </center></br></br>

           
            
            <section class="footer">
                <div class="container">
                    <div class="row">
                        <div class="col-sm-12">
                            <div class="main_footer">
                                <div class="row">

                                    <div class="col-sm-6 col-xs-12">
                                        <div class="copyright_text">
                                            <p class=" wow fadeInRight" data-wow-duration="1s">My Control </p>
                                        </div>
                                    </div>

                                    <div class="col-sm-6 col-xs-12">
                                        <div class="flowus">
                                            <a href="https://www.facebook.com/mycontrolproject/"><i class="fa fa-facebook"></i></a>
                                            <a href="https://twitter/MyControl_BM"><i class="fa fa-twitter"></i></a>
                                      
                                        </div>
                                    </div>

                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>









        </div>





        <div class="scrollup">
            <a href="#"><i class="fa fa-chevron-up"></i></a>
        </div>

        <script src="modl/js/jquery-2.1.1.js"></script>
        <script src="modl/js/velocity.min.js"></script>
        <script src="modl/js/main.js"></script>
        <script src="assets/js/vendor/jquery-1.11.2.min.js"></script>
        <script src="assets/js/vendor/bootstrap.min.js"></script>
        <script src="assets/js/jquery.magnific-popup.js"></script>
        <script src="assets/js/jquery.mixitup.min.js"></script>
        <script src="assets/js/jquery.easing.1.3.js"></script>
        <script src="assets/js/jquery.masonry.min.js"></script>
        <script src="https://maps.googleapis.com/maps/api/js?v=3.exp"></script>
        <script src="http://maps.google.com/maps/api/js"></script>
        <script src="assets/js/gmaps.min.js"></script> 
        <script src="assets/js/plugins.js"></script>
        <script src="assets/js/main.js"></script>
        <script src="js/jquery-2.1.1.js"></script>


    </body>
</html>
