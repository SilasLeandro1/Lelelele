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
        <link rel="stylesheet" href="assets/css/minhaconta.css">
        <link rel="stylesheet" href="assets/css/responsive.css" />
		<link rel="stylesheet" href="3.3.7.js.bootstrap.js" />
		
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
											
                                               <a href="perfil.php"> <img src="assets/images/logofinal1.png"  width="100" height="50" /> </a>
												
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
										 
										<h1> <strong>Minha conta</strong> <strong></strong></h1>

                                            

                                        </div>
                                    </div>
                                    <div class="single_home_slider">
                                        <div class="main_home wow fadeInUp" data-wow-duration="700ms">
                                            <h1> Minha Conta</h1>
                                            <p> Para ter acesso a calculadora de carboidratos, gráficos e obter uma área</br> onde  terá acesso a todos seus registros. 
                                             	Faça o seu Login	</p>
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



           <section id="service" class="service">
                <div class="container">
                    <div class="row">
                        <div class="col-sm-12">
                            <div class="main_service_area">
                                <div class="main_service_content">
                                    <div class="service_tabe">
                                        
										<center>
                                        <ul class="service_tabe_menu nav nav-tabs" role="tablist">
                                            <li role="presentation" class="active"><a href="#webdesign" aria-controls="webdesign" role="tab" data-toggle="tab"><i class="fa fa-map-marker"></i> <br /> Calculadora de Carboidratos </a></li>
                                            <li role="presentation"><a href="#appdesign" aria-controls="appdesign" role="tab" data-toggle="tab"><i class="fa fa-map-marker"></i> <br />Meu Diário </a></li>
          
                                            <li role="presentation"><a href="#gamedesign" aria-controls="gamedesign" role="tab" data-toggle="tab"><i class="fa fa-map-marker"></i> <br />Meu Perfil</a></li>
                                        </ul>
										</center>

                                      
                                        <div class="tab-content">
                                            <div role="tabpanel" class="tab-pane active" id="webdesign">
                                                <div class="single_service_tab">
                                                    <div class="row">
                                                        <div class="col-sm-6">
                                                            <div class="single_tab_content">
                                                                <div class="head_title">
                                                                    <h3> Calculadora Glicêmica</h3>
                                                                    <div class="separator"></div>
                                                                </div>
                                                                <p> A Calculadora Glicêmica é uma área recervada ao usuario, onde poderá
																calcular as unidades de insulina de acordo com a quantidade de carboidratos
															    ingeridos e a glicose em uma determinada refeição.
                                                                 </p>

														<a href="calculadoraLogado.php" class="btn btn-primary">acesse sua calculadora</a>
                            </div>
                            </div>
														

                                                        <div class="col-sm-6">
                                                            <div class="single_tab_img">
                                                                <img src="calc.jpg"  alt="" id="sopa2"/>
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
                                                                    <h3>Meu diário</h3>
                                                                    <div class="separator"></div>
                                                                </div>
                                                                <p> Pensando no bem estar do usuário, o site proporcina o acesso aos "Registros Anteriores",
                                                               que é onde estará guardado todo o seu controle glicêmico, que poderá levado para suas consultas
                                                                médicas.
																</p>
                                                              <a href="meudiario.php" class="btn btn-primary">Acesse seu diário</a>
                                                             
                                                            </div>
                                                        </div>

                                                        <div class="col-sm-6">
                                                            <div class="single_tab_img">
                                                                <img src="meudiario.jpg" alt="" />
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
                                                                    <h3>Meu Perfil</h3>
                                                                    <div class="separator"></div>
                                                                </div>
                                                               
															   <p>acesse seu perfil de usuário para editar ou acresentar suas informações. 
															   </p>


                                                                <a href="meuperf.php" class="btn btn-primary">Acesse seu Perfil</a>
                                                            </div>
                                                        </div>

                                                        <div class="col-sm-6">
                                                            <div class="single_tab_img">
                                                                <img src="" alt="" />
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
 
           
</center>
</picture>
</br>
</br>

 
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
                                            <p class=" wow fadeInRight" data-wow-duration="1s">My Control</p>
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


      
        <script src="assets/js/plugins.js"></script>
        <script src="assets/js/main.js"></script>

    </body>
</html>






