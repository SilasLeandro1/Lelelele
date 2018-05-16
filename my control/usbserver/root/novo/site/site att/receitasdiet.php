
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
                                         
                                        <h1> My Control </h1>
                                            
                                                 <div class="home_btn">
                                                <a href="index.php" class="btn btn-primary">Sair</a>
                                            </div>
                                            

                                        </div>
                                    </div>
                                    <div class="single_home_slider">
                                        <div class="main_home wow fadeInUp" data-wow-duration="700ms">
                                            <h1> My Control</h1>
                                            <p> Veja agora Receitas que irão de dar água na boca   </p>
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
            <img src="modl/img/pudim.jpg" alt="Item Preview">
            <a href="#prdct1" class="cd-trigger">Pudim diet</a>
            <div class="quick-view-content">
                <div class="quick-view-content-wrapper">
                    <div class="cd-slider-wrapper">
                        <ul class="cd-slider">
                            <li class="selected"><img src="modl/img/pudim.jpg" alt="Product 1"></li>
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
                        <h2>pudim diet</h2>
                        <p style="text-align:left"> Para fazer o pudim diet ou sobremesa para diabéticos, você vai precisar dos seguintes ingredientes:

Uma unidade de leite condensado diet;</br>
3 ovos;</br>
200 mil de leite desnatado; e</br>
uma fava de baunilha.</br>
Também basta bater tudo no liquidificador e deixar na geladeira até que esfrie.</br>

pudim para diabéticosDepois, caramelize uma forma de pudim com 200 ml de frutose.</br> Depois disso, coloque toda a mistura de pudim dentro da forma devidamente caramelizada.</br>

E então, leve ao forno a 150 graus em banho maria, deixando cozinhar por aproximadamente 30 minutos, ou até que o creme fique firme.</br>

Depois, basta deixar esfriar e lavar o pudim para geladeira, até que atinja a consistência necessária. É importante tomar cuidado para não desenformar antes do tempo.</p>
            </td></tr> </div> </table>
			
                        <ul class="cd-item-action">
                                          
                            <li><a href="http://fatordiabetes.com/dieta-para-diabeticos/receitas/sobremesa-pudim-diet/"><button class="add-to-cart"> Referências </button></a></li> 
							<li><a href="Pudim diet.pdf">Imprimir</a></li> 
							
                        </ul> <!-- cd-item-action -->
                    </div> <!-- cd-item-info -->
                </div>
            </div>
			
        </li> <!-- cd-item -->

        <li class="cd-item" id="prdct2">
            <img src="canjica1.jpg" alt="Item Preview">
            <a href="#prdct2" class="cd-trigger">Canjica Diet</a>
            
           <div class="quick-view-content">
                <div class="quick-view-content-wrapper">
                    <div class="cd-slider-wrapper">
                        <ul class="cd-slider">
                            <li class="selected"><img src="canjica1.jpg" alt="Product 1"></li>
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
					
                        <h2>Canjica Diet</h2>
                        <p style="text-align:left"> Ingredientes: </br> </br>

• 1 pacote de canjica crua</br>

• 2 litros de água</br>

• 1 pacote de coco ralado sem açúcar</br>

• 1 litro de leite desnatado</br>

• 4 paçocas diet</br>

• 4 colheres de sopa de leite em pó desnatado</br>

• 8 colheres de sopa de adoçante culinário próprio para forno e fogão</br>

• Cravo da Índia</br>

• Canela em pau</br>

Preparo:</br>

• Lave a canjica e deixe-a de molho na água por uma noite</br>

• Em uma panela de pressão, cozinhe a canjica com dois litros de água</br>

• Após cozida, acrescente o leite desnatado, o coco ralado, o adoçante, a paçoca triturada e o leite em pó</br>

• Deixe ferver por alguns minutos ou até engrossar, sem parar de mexer</br>

• Adicione cravo e canela a gosto</br>

• Sirva quente ou gelado
</p>
</td></tr> </div> </table>
                        <ul class="cd-item-action">
                            <li><a href="http://www.diabete.com.br"><button class="add-to-cart"> Referências </button></a></li> 
					                  
                            <li><a href="canjica.pdf">Imprimir</a></li> 
						
                        </ul> <!-- cd-item-action -->
                    </div> <!-- cd-item-info -->
                </div>
            
</div>            
            
        </li> <!-- cd-item -->

        <li class="cd-item" id="prdct1">
            <img src="receita3.jpg" alt="Item Preview">
            <a href="#prdct3" class="cd-trigger">Quiche lorraine diet</a>
            
            <div class="quick-view-content">
                <div class="quick-view-content-wrapper">
                    <div class="cd-slider-wrapper">
                        <ul class="cd-slider">
                            <li class="selected"><img src="receita3.jpg" alt="Product 1"></li>
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
					
                        <h2>Quiche lorraine diet</h2>
                        <p>Ingredientes:</br>

MASSA </br>

• ½ xícara (chá) de farinha de trigo integral </br>

• ½ xícara (chá)de farinha de trigo </br>

• 3 colheres (sopa) de margarina light em pedacinhos </br>

• 1 gema</br>

• 3 colheres (sopa) de água </br>

• 1 colher (chá) de sal </br>

RECHEIO</br> </br>

• 5 fatias de presunto magro </br>

• 200g de ricota passada na peneira </br>

• 100g de queijo tipo minas frescal light </br>

• 300g de creme de leite light </br>

• 3 ovos </br>

• sal e pimenta a gosto </br>

• 1 pitada de noz moscada ralada </br>

Preparo:</br> </br>

• Em uma tigela, misture as farinhas de trigo com a margarina </br>

• Esfarele com as mãos até obter uma farofa </br>

• Junte a água, a gema e o sal </br>

• Amasse com as pontas dos dedos, forme uma bola, embrulhe em um filme plástico e deixe descansar por 15 minutos </br>

• Estenda a massa com um rolo de macarrão, forme uma forma própria para tortas (20cm de diâmetro) </br>

• Fure o fundo com um garfo </br>

• Cubra o fundo da forma com as fatias de presunto magro, espalhe a ricota e o queijo </br>

• Bata o creme de leite com os ovos, tempere com sal, a pimenta e a noz moscada </br>

• Regue o queijo com esse creme </br>

• Leve ao forno pré-aquecido (200°C) até que fique dourado </br>

Informação nutricional: </br>

• calorias: 226g por porção </br> </br>
 </td></tr> </div> </table>
						
                        <ul class="cd-item-action">
                            <li><a href="http://www.diabete.com.br"><button class="add-to-cart"> Referências </button></a></li>              
                            <li><a href="Quiche.pdf">Imprimir</a></li> 
                        </ul> <!-- cd-item-action -->
                    </div> <!-- cd-item-info -->
                </div>
            </div>
        </li> <!-- cd-item -->
        
        <li class="cd-item" id="prdct4">
            <img src="fatima.jpg" alt="Item Preview">
            <a href="#prdct4" class="cd-trigger">Brigadeiro Diet</a>
            
            <div class="quick-view-content">
                <div class="quick-view-content-wrapper">
                    <div class="cd-slider-wrapper">
                        <ul class="cd-slider">
                            <li class="selected"><img src="fatima.jpg" alt="Product 1"></li>
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
                        <h2>Brigadeiro Diet</h2>
                        <p>Ingredientes:</br></br>

• 1 xícara (chá) de leite desnatado</br>

• 1 xícara (chá) de leite em pó desnatado</br>

• 4 colheres (sopa) de cacau em pó</br>

• 2 colheres (sopa) de creme vegetal</br>

• ½ xícara (chá) de torradas moídas</br>

• ½ xícara de uva passa sem sementes</br>

• 5 colheres dosadoras de FINN pó a granel</br></br>

Preparo:</br></br>

• Leve uma panela ao fogo, com o leite em pó, o leite, o cacau, o creme vegetal e mexa até engrossar um pouco.</br>

• Retire do fogo e deixe esfriar.</br>

• Aos poucos junte o pó das torradas juntamente com o FINN e as passas.</br>

• Modele em bolinhas e coloque em forminhas.</br></br>

Informação nutricional:</br></br>

• Calorias por porção: 55,97 kcal</br>

• Carboidratos por porção: 8,18 g</br>

• Proteínas por porção: 3,09 g</br>

• Lipídios por porção: 1,21 g</br>
						</p>
</td></tr> </div> </table>
                        <ul class="cd-item-action">
                            <li><a href="http://www.diabete.com.br"><button class="add-to-cart"> Referências </button></a></li> 
					                  
                            <li><a href="brigadeiro.pdf">Imprimir</a></li> 
                        </ul> <!-- cd-item-action -->
                    </div> <!-- cd-item-info -->
                </div>
            </div>
        </li> <!-- cd-item -->
        
        <li class="cd-item" id="prdct5">
            <img src="tortaaplle.jpg" alt="Item Preview">
            <a href="#prdct5" class="cd-trigger">Torta de Maça Diet</a>
            
            <div class="quick-view-content">
                <div class="quick-view-content-wrapper">
                    <div class="cd-slider-wrapper">
                        <ul class="cd-slider">
                            <li class="selected"><img src="tortaaplle.jpg" alt="Product 1"></li>
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
                        <h2>Torta de Maça Diet</h2>
                        <p>INGREDIENTES </br></br>
2 ½ XÍCARAS (CHÁ) DE FARINHA DE AVEIA.</br>
1 COLHER (CHÁ) DE CANELA EM PÓ</br>
150g DE MARGARINA LIGHT</br>
1 XÍCARA (CHÁ) DE ADOÇANTE FORNO FOGÃO.</br>
4 MAÇAS MEDIAS, DESCASCADAS E PICADAS</br>
100g DE UVAS PASSAS </br>
1 OVO INTEIRO </br>
½ XÍCARA (CHÁ) DE LEITE DESNATADO. </br></br>
MODO DE PREPARO</br></br>
FAÇA UMA FAROFA GROSSA COMA A FARINHA, A CANELA, A MARGARINA E O ADOÇANTE. FORRE UMA FORMA DE ARO REMOVÍVEL (22cm DE diâmetro) COM A METADE DESSA FAROFA,</br> PRESSIONANDO COM AS COSTAS DE UMA COLHER PARA FORMAR UMA CAMADA UNIFORME.</br> ESPALHE SOBRE ESSA CAMADA AS MAÇAS PICADAS E AS UVAS PASSAS.
CUBRA COM O RESTANTE DA FAROFA SEM APERTAR, DEIXANDO-A SOLTA E COM ALGUNS BLOCOS DE MASSA, PARA QUE FIQUEM CROCANTES DEPOIS DE ASSADO. BATA O OVO COM O LEITE.</br> DESPEJE SOBRE A TORTA E ASSE EM FORNO MÉDIO E PREAQUECIDO POR CERCA DE 35min.</br> OU ATE QUE ELA FIQUE DOURADA. 
	</p>
</td></tr> </div> </table>
						
                        <ul class="cd-item-action">
						<li><a href="http://gshow.globo.com/receitas-gshow/receita/torta-de-maca-diet-555a07554d38854237000044.html"><button class="add-to-cart"> Referências </button></a></li> 
					              
                            <li><a href="torta de maca.pdf">Imprimir</a></li> 
                        </ul> <!-- cd-item-action -->
                    </div> <!-- cd-item-info -->
                </div>
            </div>
        </li> <!-- cd-item -->
        
        <li class="cd-item" id="prdct6">
            <img src="pao-de-queijo.jpg" alt="Item Preview">
            <a href="#prdct6" class="cd-trigger">Pão de queijo Diet</a>
            
            <div class="quick-view-content">
                <div class="quick-view-content-wrapper">
                    <div class="cd-slider-wrapper">
                        <ul class="cd-slider">
                            <li class="selected"><img src="pao-de-queijo.jpg" alt="Product 1"></li>
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
                        <h2>Pão de Queijo Diet</h2>
                        <p>INGREDIENTES</br> </br>
PÃO DE QUEIJO DIET DE LIQUIDIFICADOR</br>
Um lanche em quantidade moderada seria por exemplo cerca de 4 unidades ( 2 porções ) para o lanche da tarde!</br>
Ingredientes</br></br>
1 xícara de chá de leite desnatado</br>
1 ovo</br>
2 claras</br>
1/4 xícara de chá de óleo</br>
3 xícaras de chá de polvilho doce</br>
1 colher de chá de sal</br>
100g de queijo de minas ralado no ralador grosso</br>
1 cenoura sem casca ralada no ralador fino</br>
óleo para untar</br>
MODO DE PREPARO</br></br>
Bata o leite, ovo, claras, óleo, polvilho doce e sal no liquidificador. Retire e misture ,</br> com auxílio de uma colher, o queijo e a cenoura.</br> Coloque a massa em fôrmas de empada untadas com óleo.</br> Leve ao forno alto (250 graus C) até que fiquem dourados.</br> Espere esfriar um pouco, retire das fôrmas e sirva.
</p>
</td></tr> </div> </table>                       
					   <ul class="cd-item-action">
                          <li><a href="http://gshow.globo.com/receitas-gshow/receita/pao-de-queijo-diet-de-liquidificador-5196a07b4d38857a79000049.html"><button class="add-to-cart"> Referências </button></a></li> 
					              
                            
					              
                            <li><a href="queijo.pdf">Imprimir</a></li> 
                        </ul> <!-- cd-item-action -->
                    </div> <!-- cd-item-info -->
                </div>
            </div>
        </li> <!-- cd-item -->
        
        <li class="cd-item" id="prdct7">
            <img src="lasanha.jpg" alt="Item Preview">
            <a href="#prdct7" class="cd-trigger">Panqueca Diet</a>
            
            <div class="quick-view-content">
                <div class="quick-view-content-wrapper">
                    <div class="cd-slider-wrapper">
                        <ul class="cd-slider">
                            <li class="selected"><img src="lasanha.jpg" alt="Product 1"></li>
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
                        <h2>Panqueca Diet</h2>
                        <p>INGREDIENTES</br></br>
1 copo de leite desnatado (250ml)</br>
1 colher (sopa) de óleo</br>
2 ovos</br>
1 pitada de sal</br>
3 colheres (sopa) de farinha de aveia</br>
4 colheres (sopa) de farinha integral</br>
recheio a gosto de carne moída, frango etc.</br>
queijo ralado light para polvilhar a gosto</br></br>

MODO DE PREPARO</br></br>
Bata todos os ingredientes no liquidificador</br>
Unte uma frigideira com um pouquinho de azeite e coloque a massa com uma concha</br>
Quando começar a dourar as bordas, vire e deixe dourar o outro lado</br>
Depois é só colocar o recheio de sua preferência e enrolar</br>
Coloque um molho por cima</br>
</p>
</td></tr> </div> </table> 
						
                        <ul class="cd-item-action">
                              <li><a href="http://www.tudogostoso.com.br/receita/89997-panqueca-light.html"><button class="add-to-cart"> Referências </button></a></li> 
					                      
                            <li><a href="panqueca.pdf">Imprimir</a></li> 
                        </ul> <!-- cd-item-action -->
                    </div> <!-- cd-item-info -->
                </div>
            </div>
        </li> <!-- cd-item -->
        
        <li class="cd-item" id="prdct8">
            <img src="Bolo_chocolate.jpg" alt="Item Preview">
            <a href="#prdct8" class="cd-trigger">Bolo de chocolate Diet</a>
            
            <div class="quick-view-content">
                <div class="quick-view-content-wrapper">
                    <div class="cd-slider-wrapper">
                        <ul class="cd-slider">
                            <li class="selected"><img src="Bolo_chocolate.jpg" alt="Product 1"></li>
                            <li><img src="modl/img/item-2.jpg" alt="Product 2"></li>
                            <li><img src="modl/img/item-3.jpg" alt="Product 3"></li>
                        </ul> <!-- cd-slider -->
            
                        <ul class="cd-slider-navigation">
                         
                        </ul> <!-- cd-slider-navigation -->
                    </div> <!-- cd-slider-wrapper -->
        
                    <div class="cd-item-info">
                     <table> <tr> <td>
					<div id="overflowTest">                    
					<h2>Bolo de Chocolate Diet</h2>
                        <p>INGREDIENTES</br></br>
MASSA:</br></br>

3 ovos</br>
2 xícaras (chá) de farinha de trigo</br>
1 xícara (chá) adoçante (para forno e fogão)</br>
1 xícara (chá) de chocolate em pó diet CHOCOBOL SOY</br>
1 xícara (chá) de leite</br>
2 colheres (sopa) margarina ligth sem sal</br>
2 colheres (sopa) fermento em pó</br></br>
COBERTURA:</br></br>

½ xícara (chá) de leite</br>
1 xícara (chá) de chocolate em pó diet CHOCOBOL SOY</br>
1 colher (sobremesa) margarina ligth sem sal</br>
</p>
</td></tr> </div> </table> 
                        <ul class="cd-item-action">
                            <li><a href="http://www.diabete.com.br	"><button class="add-to-cart"> Referências </button></a></li> 
							<li><a href="Bolo_chocolate.pdf">Imprimir</a></li>   
				
                             
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
<a href="receitas2.php"> Próximo </a> </center></br></br>

           
            
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
