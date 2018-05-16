
<html class="no-js" lang="">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">  
		<meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">
       

        <title>My Control</title> <link rel="shortcut icon" href="logofinal1.png">
        <link rel="stylesheet" href="assets/css/font2.css" >
        <link rel="stylesheet" href="assets/css/font.css">
        <link rel="stylesheet" href="assets/css/font-awesome.min.css">
        <link rel="stylesheet" href="assets/css/bootstrap.min.css">
        <link rel="stylesheet" href="assets/css/magnific-popup.css">
        <link rel="stylesheet" href="assets/css/plugins.css" />
        <link rel="stylesheet" href="assets/css/style.css">
        <link rel="stylesheet" href="assets/css/responsive.css" />
        <script src="assets/js/vendor/modernizr-2.8.3-respond-1.4.2.min.js"></script>
		<style>
		#sopa {
		margin-left:40%;
		}
		#sopa2 {
		margin left:40%;
		}
		
		
		
		</style>
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

                                       


<style type="text/css">
.menu li{
position:relative; 
float:left; 

}
.menu li a{ padding:5px 10px; display:block;}

.menu li a:hover{
background:#333; 
color:#000000; 

}
.menu li:hover ul, .menu li.over ul{display:block;}
.menu li ul li{
border:1px solid #c0c0c0; 
display:block; 
width:150px;
}

  .menu li  ul{
position:absolute; 
top:25px; 
left:0;
background-color:#fff; 
display:none;

}	
 
</style>
                                        <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
    <nav class="menu">
                                            <ul class="nav navbar-nav navbar-right">
                                                <li><a href="perfil.php">Home</a></li>
												<li><a href="minhaconta.php">Minha Conta</a>
												<ul class="submenu-1"> 
                                              <li>  <a href="calculadoraLogado.php" >Calculadora</a></li>
                                              <li><a href="#">Meu Diario</a></li>
                                              
                 
             </li>
        </ul>
												</li>
												
												
												
												
												
												
                                                <li><a href="tabelas.php">Tabelas</a></li>
                                               <li><a href="index.php">Sair</a></li>
                                               
                                            </ul>

</nav>
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
										 
										<h1> <strong>Bem-Vindo </strong> </br> <strong><?php echo $nome ?></strong></h1>

                                            

                                        </div>
                                    </div>
                                    <div class="single_home_slider">
                                        <div class="main_home wow fadeInUp" data-wow-duration="700ms">
                                            <h1> My Control</h1>
                                            <p> Para ter acesso a calculadora de carboidratos, gráficos e obter uma área</br> onde  terá acesso a todos seus registros. 
                                             	Faça o seu Login	</p>
                                             <div class="home_btn">
                                                <a href="index.html" class="btn btn-primary">sair</a>
                                            </div>

                                        </div>
                                    </div>
                                    <div class="single_home_slider">
                                        <div class="main_home wow fadeInUp" data-wow-duration="700ms">
                                            <h1>My Control</h1>
                                            <p>A Diabetes não é o fim do mundo, mas sim um novo mundo a ser descoberto  </p>
                                          <div class="home_btn">
                                                <a href="index.html" class="btn btn-primary">sair</a>
                                            </div>
                                        </div>
                                    </div> -->
									
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>



           <section id="service" class="service">
                <div class="container">
                    <div class="row">
                        <div class="col-sm-12">
                            <div class="main_service_area">
                                <div class="main_service_content">
                                    <div class="service_tabe">
                                        
										<center>
                                        <ul class="service_tabe_menu nav nav-tabs" role="tablist">
                                            <li role="presentation" class="active"><a href="#webdesign" aria-controls="webdesign" role="tab" data-toggle="tab"><i class="fa fa-map-marker"></i> <br />O que é Diabetes? </a></li>
                                            <li role="presentation"><a href="#appdesign" aria-controls="appdesign" role="tab" data-toggle="tab"><i class="fa fa-map-marker"></i> <br />Tipos de Diabetes</a></li>
          
                                            <li role="presentation"><a href="#gamedesign" aria-controls="gamedesign" role="tab" data-toggle="tab"><i class="fa fa-map-marker"></i> <br />Receitas</a></li>
                                        </ul>
										</center>

                                        
                                        <div class="tab-content">
                                            <div role="tabpanel" class="tab-pane active" id="webdesign">
                                                <div class="single_service_tab">
                                                    <div class="row">
                                                        <div class="col-sm-6">
                                                            <div class="single_tab_content">
                                                                <div class="head_title">
                                                                    <h3> O Que é Diabetes?</h3>
                                                                    <div class="separator"></div>
                                                                </div>
                                                                <p>Diabetes Mellitus é uma doença caracterizada pela elevação da glicose no sangue (hiperglicemia).
																Pode ocorrer devido a defeitos na secreção ou na ação do hormônio insulina,
																que é produzido no pâncreas, pelas chamadas células beta .
																A função principal da insulina é promover a entrada de glicose para as células do 
																organismo de forma que ela possa ser aproveitada para as diversas atividades celulares.
																A falta da insulina ou um defeito na sua ação resulta portanto em acúmulo de glicose no sangue, 
																o que chamamos de hiperglicemia. </p>

                                                                <a href="o qdiabetes.php" class="btn btn-primary"> Leia Mais</a>
                                                            </div>
                                                        </div>

                                                        <div class="col-sm-6">
                                                            <div class="single_tab_img">
                                                                <img src="assets/images/p1.png" alt="" id="sopa2"/>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div role="tabpanel" class="tab-pane" id="appdesign">
                                                <div class="single_service_tab">
                                                    <div class="row">
                                                        <div class="col-sm-6">
                                                            <div class="single_tab_content">
                                                                <div class="head_title">
                                                                    <h3>Tipos de Diabetes </h3>
                                                                    <div class="separator"></div>
                                                                </div>
                                                                <p>Diabete tipo 1 </br> O Tipo 1 aparece geralmente na infância ou adolescência, mas pode ser diagnosticado em adultos também.
																Essa variedade é sempre tratada com insulina, medicamentos, planejamento alimentar e atividades físicas, 
																para ajudar a controlar o nível de glicose no sangue. </br>
																Diabete tipo 2 </br>
																O Tipo 2 aparece quando o organismo não consegue usar adequadamente a insulina que produz; 
																ou não produz insulina suficiente para controla a taxa de glicemia.
																</p>
                                                              <a href="tipodiabetes.php" class="btn btn-primary">leia mais</a>
                                                             
                                                            </div>
                                                        </div>

                                                        <div class="col-sm-6">
                                                            <div class="single_tab_img">
                                                                <img src="assets/images/p2.png" alt="" />
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            
                                            <div role="tabpanel" class="tab-pane" id="gamedesign">
                                                <div class="single_service_tab">
                                                    <div class="row">
                                                        <div class="col-sm-6">
                                                            <div class="single_tab_content">
                                                                <div class="head_title">
                                                                    <h3>Receitas</h3>
                                                                    <div class="separator"></div>
                                                                </div>
                                                                <p> Se Você está a procura de receitas saborosa, e com baixo teor de carboidratos, então clique 
em confira nossas receitas.																</p>

                                                                <a href="receitasdiet.php" class="btn btn-primary">Confira nossas Receitas</a>
                                                            </div>
                                                        </div>

                                                        <div class="col-sm-6">
                                                            <div class="single_tab_img">
                                                                <img src="assets/images/receitas.png" alt="" />
                                                            </div>
                                                        </div>
                                                        
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
			</br>
           

<picture>
 
           <section id="testimoniall" class="testimoniall">
               
                    <div class="container">
                        <div class="row">
                            <div class="main_testimonial sections text-center">
                                <div class="col-md-12" data-wow-delay="0.2s">
                                <br></br>
								 <br></br>
								  <br></br>
								   <br></br>
								    <br></br>
									 <br></br>
									  <br></br>
									   <br></br>
									    <br></br>

                                </div>
                            </div>

                        </div>
                    </div>
                </div>
            </section>
</picture>

 <section id="service" class="service">
                <div class="container">
                    <div class="row">
                        <div class="col-sm-12">
                            <div class="main_service_area">
                                <div class="main_service_content">
                                    <div class="service_tabe">
                                        
									

                                        
                                        <div class="tab-content">
                                            <div role="tabpanel" class="tab-pane active" id="webdesign">
                                                <div class="single_service_tab">
                                                    <div class="row">
                                                        <div class="col-sm-6">
                                                            <div class="single_tab_content">
                                                                <div class="head_title">
                                                                    <h3> Tabelas De Carboidratos</h3>
                                                                    <div class="separator"></div>
                                                                </div>
                                                                <p> Se Você desejar ter um controler da sua alimentação, e saber a quantiade de
																caboidrato possuida em sua refeição, o My Control oferece tabelas de carboidratos.
					

                                                                <br><a href="tabelas.php" class="btn btn-primary"> Ver Tabelas </a><br>
                                                            </div>
                                                        </div>

                                                        <div class="col-sm-6">
                                                            <div class="single_tab_img">
                                                                <img src="assets/images/p7.png" alt="" id="sopa" />
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div> </section>
</br>
</br>

<section id="team" class="team">
                <div class="container">
                    <div class="row">
                        <div class="col-sm-12">
                            <div class="main_team sections">
                                <div class="row">
                                    <div class="head_title">
                                        <h3>Sobre Nós </h3>
                                        <div class="separator"></div>
                                    </div>
                                    <div class="col-sm-3 col-xs-12">
                                        <div class="single_team_content">
                                            <div class="single_team_img">
                                                <img src="assets/images/marcy.png"  width="500" height="340" alt="" />
                                            </div>
                                            <div class="single_team_text_overlay">
                                                <h4>Marcela Maciel</h4>
                                                <p>17 anos</p>
                                                <div class="team_overlay_socail">
                                                    <a href=""><i class="fa fa-facebook"></i></a>
                                                    <a href=""><i class="fa fa-twitter"></i></a>
                                                    <a href=""><i class="fa fa-google-plus"></i></a>
                                                    <a href=""><i class="fa fa-pinterest-p"></i></a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="col-sm-3 col-xs-12">
                                        <div class="single_team_content">
                                            <div class="single_team_img">
                                                <img src="assets/images/bia.png"  width="70" height="340"  alt="" />
                                            </div>
                                            <div class="single_team_text_overlay">
                                                <h4>Beatriz Freire</h4>
                                                <p>17 anos</p>
                                                <div class="team_overlay_socail">
                                                    <a href=""><i class="fa fa-facebook"></i></a>
                                                    <a href=""><i class="fa fa-twitter"></i></a>
                                                    <a href=""><i class="fa fa-google-plus"></i></a>
                                                    <a href=""><i class="fa fa-pinterest-p"></i></a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="col-sm-3 col-xs-12">
                                        <div class="single_team_content">
                                            <div class="single_team_img">
                                                <img src="assets/images/Silinhas.png" width="500" height="340" alt="" />
                                            </div>
                                            <div class="single_team_text_overlay">
                                                <h4>Silas Leandro</h4>
                                                <p>17 anos</p>
                                                <div class="team_overlay_socail">
                                                    <a href=""><i class="fa fa-facebook"></i></a>
                                                    <a href=""><i class="fa fa-twitter"></i></a>
                                                    <a href=""><i class="fa fa-google-plus"></i></a>
                                                    <a href=""><i class="fa fa-pinterest-p"></i></a>
                                                </div>
                                            </div>
                                        </div>
                                    </div> 

                                    <div class="col-sm-3 col-xs-12">
                                        <div class="single_team_content">
                                            <div class="single_team_img">
                                                <img src="assets/images/thom.png" width="500" height="340" alt="" />
                                            </div>
                                            <div class="single_team_text_overlay">
                                                <h4>Thomas Antonio</h4>
                                                <p>17 anos</p>
                                                <div class="team_overlay_socail">
                                                    <a href=""><i class="fa fa-facebook"></i></a>
                                                    <a href=""><i class="fa fa-twitter"></i></a>
                                                    <a href=""><i class="fa fa-google-plus"></i></a>
                                                    <a href=""><i class="fa fa-pinterest-p"></i></a>
                                                </div>
                                            </div>
                                        </div>
                                    </div> 
                                </div>

                            </div>
                        </div>
                    </div>
                </div>
            </section>

			

            <section id="testimonial" class="testimonial">
                <div class="video_overlay">
                    <div class="container">
                        <div class="row">
                            <div class="main_testimonial sections text-center">
                                <div class="col-md-12" data-wow-delay="0.2s">
                                    <div class="main_teastimonial_slider text-center">

                                        <div class="single_testimonial">
                                            <div class="row">
                                                <div class="col-sm-8 col-sm-offset-2">
                                                    <i class="fa fa-quote-left"></i>
                                                    <p>O Projeto My Control tem como objetivo auxiliar pessoas que possuem a doença crônica Diabetes, e facilitar no controle glicêmico do usuário.													</p>
                                                    <div class="single_test_author">
                                                        <h4><span> My Control</span></h4>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="single_testimonial">
                                            <div class="row">
                                                <div class="col-sm-8 col-sm-offset-2">
                                                    <i class="fa fa-quote-left"></i>
                                                    <p>  Acreditamos que para ter um controle melhor, é presciso ter sempre por perto os seus registros em mãos,
                                                      por isso criamos uma área especial pra você, consultar os seus registros anteriores.    </p>
                                                    <div class="single_test_author">
                                                        <h4> Meu Diario <span> My Control </span></h4>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                       
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                </div>
                            </div>

                        </div>
                    </div>
                </div>
            </section>


           




            <section id="contact" class="contact">
                <div class="container">
                    <div class="row">
                        <div class="col-sm-12">
                            <div class="row">
                                <div class="contact_contant sections">
                                   
                                            

                                    <div class="col-sm-6">
                                        <div class="head_title">
                                            <h3>Entre em contato conosco</h3>
                                            <div class="separator"></div>
                                        </div>
                                        <div class="single_contant_left">
                                            <form action="#" id="formid">
                                                
                                                <div class="row">
                                                    <div class="col-sm-6">
                                                        <div class="form-group">
                                                            <input type="text" class="form-control" name="name" placeholder="Nome" required>
                                                        </div>
                                                    </div>
                                                    <div class="col-sm-6">
                                                        <div class="form-group">
                                                            <input type="text" class="form-control" name="name" placeholder="Sobrenome" required>
                                                        </div>
                                                    </div>
                                                </div>


                                                <div class="row">
                                                    <div class="col-sm-6">
                                                        <div class="form-group">
                                                            <input type="email" class="form-control" name="email" placeholder="Email" required>
                                                        </div>
                                                    </div>
                                                    <div class="col-sm-6">
                                                        <div class="form-group">
                                                            <input type="text" class="form-control" name="Assunto" placeholder="Assunto" required>
                                                        </div>
                                                    </div>
                                                </div>


                                                <div class="form-group">
                                                    <textarea class="form-control" name="message" rows="8" placeholder="Message"></textarea>
                                                </div>

                                                <div class="">
                                                    <input type="submit" value="Enviar" class="btn btn-primary">
                                                </div>
                                                
                                            </form>
                                        </div>
                                    </div>

                                </div>
                            </div>
                        </div>
                    </div>
					<div class="logo_contato">
					</div>
            </section>  



           



            
            <section class="footer">
                <div class="container">
                    <div class="row">
                        <div class="col-sm-12">
                            <div class="main_footer">
                                <div class="row">

                                    <div class="col-sm-6 col-xs-12">
                                        <div class="copyright_text">
                                            <p class=" wow fadeInRight" data-wow-duration="1s">My Control</i>  </p>
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

        <script src="assets/js/vendor/jquery-1.11.2.min.js"></script>
        <script src="assets/js/vendor/bootstrap.min.js"></script>

        <script src="assets/js/jquery.magnific-popup.js"></script>
        <script src="assets/js/jquery.mixitup.min.js"></script>
        <script src="assets/js/jquery.easing.1.3.js"></script>
        <script src="assets/js/jquery.masonry.min.js"></script>

        <script src="https://maps.googleapis.com/maps/api/js?v=3.exp"></script>
        <script src="http://maps.google.com/maps/api/js"></script>
        <script src="assets/js/gmaps.min.js"></script>


        <script>

                                            function showmap() {
                                                var mapOptions = {
                                                    zoom: 8,
                                                    scrollwheel: false,
                                                    center: new google.maps.LatLng(-34.397, 150.644),
                                                    mapTypeId: google.maps.MapTypeId.ROADMAP
                                                };
                                                var map = new google.maps.Map(document.getElementById('map_canvas'), mapOptions);
                                            }
        </script>

        <script src="assets/js/plugins.js"></script>
        <script src="assets/js/main.js"></script>

    </body>
</html>
