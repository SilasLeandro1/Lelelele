
<html class="no-js" lang="">
    <head>
	<body background="diabetess.jpg">
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">  
		<meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">
       

        <title>Os Tipos de Diabetes ?</title> <link rel="shortcut icon" href="logofinal1.png">
      
      
        <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700" rel="stylesheet">
        <link href="https://fonts.googleapis.com/css?family=Raleway:400,600,700" rel="stylesheet">

        <link rel="stylesheet" href="assets/css/font-awesome.min.css">
        <link rel="stylesheet" href="assets/css/bootstrap.min.css">
        <link rel="stylesheet" href="assets/css/magnific-popup.css">


       
        <link rel="stylesheet" href="assets/css/plugins.css" />

        
        <link rel="stylesheet" href="assets/css/tipodiabetes.css">

        
        <link rel="stylesheet" href="assets/css/responsive.css" />

        <script src="assets/js/vendor/modernizr-2.8.3-respond-1.4.2.min.js"></script>
		<style>
	
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
                                            <a class="navbar-brand" href="#sobrediabetes">
											
                                                <img src="assets/images/logofinal1.png"  width="100" height="50" /> 
												
                                            </a>
                                        </div>

                                       



                                        <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">

                                            <ul class="nav navbar-nav navbar-right">
                                                <li><a href="perfil.php">HOME</a></li>
                                                
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
										 
										<h1> Tipos de Diabetes </h1>
                                            <p>  </br> Descrubra agora as variações de diabestes  </p>
                                           
                                            

                                        </div>
                                    </div>
                                    <div class="single_home_slider">
                                        <div class="main_home wow fadeInUp" data-wow-duration="700ms">
                                            <h1> My Control</h1>
                                            <p> A Diabetes tipo 1 ocorre quando o pâncreas tem a capacidade de produzir insulina, que fica localizada
                                           nas células betas</p>
                                            

                                        </div>
                                    </div>
                                    <div class="single_home_slider">
                                        <div class="main_home wow fadeInUp" data-wow-duration="700ms">
                                            <h1>My Control</h1>
                                            <p> Diabetes não é o fim  </p>
                                            <div class="home_btn">
                                                <a href="index.php" class="btn btn-primary">sair</a>
                                            </div>

                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
<div class="corpo">
<center>


</center>
</br>

<div class="texto">

<article>
<section class="infosite">

<font  align="justify">
<p align="justify">
<p> <b><h3>Pâncreas</h3></b></p></br>
<p>O pâncreas é um órgão localizado atrás do estômago que produz alguns hormônios importantes para nosso sistema digestivo. Em condições rotineiras, quando o nível de glicose no sangue sobe, células especiais, chamadas células beta, produzem insulina. Assim, de acordo com as necessidades do organismo no momento, é possível determinar se essa glicose vai ser utilizada como combustível para as atividades do corpo ou será armazenada como reserva, em forma de gordura.</p></br>
<p>Isso faz com que o nível de glicose (ou taxa de glicemia) no sangue volte ao normal.</p></br>

<p> <b><h3>Diabetes Tipo 1</h3></b></p></br>

<p>Em algumas pessoas, o sistema imunológico ataca equivocadamente as células beta. Logo, pouca ou nenhuma insulina é liberada para o corpo. Como resultado, a glicose fica no sangue, em vez de ser usada como energia. Esse é o processo que caracteriza o Tipo 1 de diabetes, que concentra entre 5 e 10% do total de pessoas com a doença.</p></br>

<p>O Tipo 1 aparece geralmente na infância ou adolescência, mas pode ser diagnosticado em adultos também. Essa variedade é sempre tratada com insulina, medicamentos, planejamento alimentar e atividades físicas, para ajudar a controlar o nível de glicose no sangue.</p></br>

<p><b><h3>Diabetes Tipo 2</h3></b></p></br>

<p>O Tipo 2 aparece quando o organismo não consegue usar adequadamente a insulina que produz; ou não produz insulina suficiente para controla a taxa de glicemia.</p></br>

<p>Cerca de 90% das pessoas com diabetes têm o Tipo 2. Ele se manifesta mais frequentemente em adultos, mas crianças também podem apresentar. Dependendo da gravidade, ele pode ser controlado com atividade física e planejamento alimentar. Em outros casos, exige o uso de insulina e/ou outros medicamentos para controlar a glicose.</p></br>


<p><b><h3>Diabetes Gestacional</h3></b></p></br>

<p>Durante a gravidez, para permitir o desenvolvimento do bebê, a mulher passa por mudanças em seu equilíbrio hormonal. A placenta, por exemplo, é uma fonte importante de hormônios que reduzem a ação da insulina, responsável pela captação e utilização da glicose pelo corpo. O pâncreas, consequentemente, aumenta a produção de insulina para compensar este quadro. 
 
</p></br>

<p>Em algumas mulheres, entretanto, este processo não ocorre e elas desenvolvem um quadro de diabetes gestacional, caracterizado pelo aumento do nível de glicose no sangue. Quando o bebê é exposto a grandes quantidades de glicose ainda no ambiente intrauterino, há maior risco de crescimento excessivo (macrossomia fetal) e, consequentemente, partos traumáticos, hipoglicemia neonatal e até de obesidade e diabetes na vida adulta.

</p></br>

<p><b><h3>Pré-Diabetes</h3></b></p></br>

<p>O termo pré-diabetes é usado quando os níveis de glicose no sangue estão mais altos do que o normal, mas não o suficiente para um diagnóstico de Diabetes Tipo 2. Obesos, hipertensos e pessoas com alterações nos lipídios estão no grupo de alto risco.</p></br>

<p>É importante destacar que 50% dos pacientes nesse estágio 'pré' vão desenvolver a doença. O pré-diabetes é especialmente importante por ser a única etapa que ainda pode ser revertida ou mesmo que permite retardar a evolução para o diabetes e suas complicações.</p></br>

<p>Por que existe essa preocupação? Muitos pacientes, ao serem comunicados de que têm pré-diabetes, não enxergam ali uma oportunidade. Deixam para 'cuidar' quando o problema se agravar. Só que o pré-diabetes pode prejudicar nervos e artérias, favorecendo diversos outros males, a exemplo de infarto e derrames (veja em Complicações)</p></br>

<p>A mudança de hábito alimentar e a prática de exercícios são os principais fatores de sucesso para o controle. No entanto, para 60% dos pacientes, a dieta é o passo mais difícil a ser incorporado na rotina. Ao todo, 95% têm dificuldades com o controle de peso, dieta saudável e exercícios regulares. Lembre-se: ninguém morre de diabetes, e sim do mau controle da doença.</p></br>

<p>De acordo com a International Diabetes Federation, entidade ligada à ONU, existem no mundo mais de 380 milhões de pessoas com diabetes. Na maioria dos casos, a doença está associada a condições como obesidade e sedentarismo, ou seja, pode ser evitada. É possível reduzir a taxa de glicose no sangue com medidas simples. Perder de 5 a 10% do peso por meio de alimentação saudável e exercícios faz uma grande diferença na qualidade de vida. Mexa-se!</p></br>

</p>
<br><br> <b>www.diabetes.org.br </b></p>
</br>
 <br>
</section
></article>

</div>
</div>
</div>
</br> </br> </br> </br> </br> </br> </br> </br> </br> </br> </br> </br></br></br></br></br></br></br></br></br></br></br></br></br></br></br></br></br></br></br></br></br></br></br></br></br></br></br></br></br></br></br></br></br></br></br></br></br></br></br></br></br></br></br></br></br></br></br></br></br></br></br></br></br></br></br></br></br></br></br></br></br></br></br></br></br></br></br></br></br></br></br></br></br></br></br></br></br></br></br></br></br></br></br></br></br></br></br></br></br></br></br></br></br></br></br></br></br></br></br></br></br></br></br></br></br></br></br></br></br>
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
