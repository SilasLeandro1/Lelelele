
<html class="no-js" lang="">
    <head>
	<body background="diabetess.jpg">
	 <?php
include "verifica.php";
include "conexao.php";


$usuario = $_SESSION['usuario_usuario'];

$sql = mysql_query("SELECT * FROM cadastro where usuario = '$usuario'");
while($linha = mysql_fetch_array($sql)){
	$nome = $linha['usuario'];

}
?>      
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">  
		<meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">
       

        <title>O que é Diabetes ?</title> <link rel="shortcut icon" href="logofinal1.png">
      
      
        <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700" rel="stylesheet">
        <link href="https://fonts.googleapis.com/css?family=Raleway:400,600,700" rel="stylesheet">

        <link rel="stylesheet" href="assets/css/font-awesome.min.css">
        <link rel="stylesheet" href="assets/css/bootstrap.min.css">
        <link rel="stylesheet" href="assets/css/magnific-popup.css">


       
        <link rel="stylesheet" href="assets/css/plugins.css" />

        
        <link rel="stylesheet" href="assets/css/oqdiabetes.css">

        
        <link rel="stylesheet" href="assets/css/responsive.css" />

        <script src="assets/js/vendor/modernizr-2.8.3-respond-1.4.2.min.js"></script>
		<style>
	
		</style>
    </head>
      
    <body data-spy="scroll" data-target=".navbar" data-offset="200">
       

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
										 
										<h1> O que é Diabetes? </h1>
                                            
                                                 <div class="home_btn">
                                                <a href="index.php" class="btn btn-primary">sair</a>
                                            </div>
                                            

                                        </div>
                                    </div>
                                    <div class="single_home_slider">
                                        <div class="main_home wow fadeInUp" data-wow-duration="700ms">
                                            <h1> My Control</h1>
                                            <p> A Diabetes ocorre quando os índeces de glicemias estão muitos elevados dentros do vasos sanguíneos	</p>
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
<div class="corpo">
<center>


</center>
</br><center>

<div class="texto">

<article>
<section class="infosite">
<table>
<tr>
<td>
<font size="times"  align="justify">
<p align="justify">
Diabetes Mellitus é uma doença caracterizada pela elevação da glicose no sangue (hiperglicemia). Pode ocorrer devido a defeitos na secreção ou na ação do hormônio insulina, que é produzido no pâncreas, pelas chamadas células beta . A função principal da insulina é promover a entrada de glicose para as células do organismo de forma que ela possa ser aproveitada para as diversas atividades celulares. A falta da insulina ou um defeito na sua ação resulta portanto em acúmulo de glicose no sangue, o que chamamos de hiperglicemia.</p>
<p><b> <h3>Como posso saber se estou Diabético?</h3> </b></p>

<p>O diagnóstico laboratorial pode ser feito de três formas e, caso positivo, deve ser confirmado em outra ocasião. São considerados positivos os que apresentarem os seguintes resultados:</p>

<p>1) glicemia de jejum > 126 mg/dl (jejum de 8 horas)</p>
<p>2) glicemia casual (colhida em qualquer horário do dia, independente da última refeição realizada (> 200 mg/dl em paciente com sintomas característicos de diabetes.</p>
<p>3) glicemia > 200 mg/dl duas horas após sobrecarga oral de 75 gramas de glicose.</p>

<p>Existem ainda dois grupos de pacientes, identificados por esses mesmos exames, que devem ser acompanhados de perto pois tem grande chance de tornarem-se diabéticos. Na verdade esses pacientes já devem ser submetidos a um tratamento preventivo que inclui mudança de hábitos alimentares, prática de atividade física ou mesmo a introdução de medicamentos. São eles:v </p>
<p>(a) glicemia de jejum > 110mg/dl e < 126 mg/dl.</p>
<p>(b) glicemia 2 horas após sobrecarga de 75 gr de glicose oral entre 140 mg/dl e 200 mg/dl</p>
<p>O diagnóstico precoce do diabetes é importante não só para prevenção das complicações agudas já descritas, como também para a prevenção de complicações crônicas.</p> </td> 
<td> 
<div class="pancreas">
</td> </tr><div> </table>

<table>
<tr>
<td>

<td>
<p><h3><b>A importância do acompanhamento médico</b></h3></p>

<p>É importante que o paciente compareça às consultas regularmente, conforme a determinação médica, nas quais ele deverá receber orientações sobre a doença e seu tratamento. Só um especialista saberá indicar de forma correta:</p>
<p>• a orientação nutricional adequada,</p>
<p>• como evitar complicações,</p>
<p>• como usar insulina ou outros medicamentos,</p>
<p>• como usar os aparelhos que medem a glicose (glicosímetros) e as canetas de insulina,</p>
<p>• fornecer orientações sobre atividade física,</p>
<p>• fornecer orientações de como proceder em situações de hipo e de hiperglicemia.</p>
<p>Esse aprendizado é fundamental não só para o bom controle do diabetes como também para garantir autonomia e independência ao paciente. É muito importante que ele realize suas atividades de rotina, viajar ou praticar esportes com muito mais segurança. É importante o envolvimento dos familiares com o tratamento do paciente diabético, visto que, muitas vezes, há uma mudança de hábitos, requerendo a adaptação de todo núcleo familiar.</p>
</td>
</tr>
</table>

<table>
<tr>
<td>
<p><b><h3>Por que tratar a hiperglicemia?</h3></b></p>

<p>A hiperglicemia é a elevação das taxas de açúcar no sangue e que deve ser controlada. Sabe-se que a hiperglicemia crônica através dos anos está associada a lesões da microcirculação, lesando e prejudicando o funcionamento de vários órgãos como os rins, os olhos, os nervos e o coração. Os pacientes que conseguem manter um bom controle da glicemia têm uma importante redução no risco de desenvolver tais complicações como já ficou demonstrado em vários estudos científicos.</p>
<p>Pacientes com Diabetes Tipo 2 não diagnosticado tem risco maior de apresentar acidente vascular cerebral, infarto do miocárdio e doença vascular periférica do que pessoas que não têm diabetes. Isso reforça a necessidade de um diagnóstico precoce que permita evitar tais complicações.</p>

<p><b><h3>A automonitorização</h3></b></p>

<p>Para obter um melhor controle dos níveis glicêmicos, não basta o paciente apenas acreditar que está fazendo tudo corretamente ou ter a sensação de estar sentindo-se “bem”. É necessário monitorar, no dia-a-dia, os níveis glicêmicos. Para isso, existem modernos aparelhos, os glicosímetros, de fácil utilização e que nos fornecem o resultado da glicemia em alguns segundos. Siga as orientações do seu médico quanto ao número de testes que deve ser realizado.</p>
<p>O objetivo desse controle não é só corrigir as eventuais hiperglicemias que ocorrerão, mas também tentar manter a glicemia o mais próximo da normalidade, sem causar hipoglicemia.</p>
<p>Quanto melhor o controle, maior o risco de hipoglicemia, daí a importância também da monitorização da glicemia mais vezes tanto para evitar a hipo, como também para que não se coma em excesso na correção dela, o que invalidaria os esforços para manter o controle. A monitorização permite que o paciente, individualmente, avalie sua resposta aos alimentos, aos medicamentos (especialmente à insulina) e à atividade física praticada.</p>

<p><b><h3>Exames de rotina</h3></b></p>

<p>De acordo com a necessidade, as consultas devem ser mensais, bimestrais ou trimestrais, com eventuais contatos por telefone ou fax, com envio da monitorização glicêmica. Nas consultas são solicitados os exames que devem incluir a glicemia, a hemoglobina glicada trimestral (que dá a média da glicemia diária nos últimos 2 a 3 meses), função renal anual (uréia, creatinina, pesquisa de micralbuminúria), perfil lipídico anual ou semestral, avaliação oftalmológica anual, avaliação cardiológica. Os demais exames devem ser solicitados de acordo com a necessidade individual do paciente.
<br> <b>Fonte: http://www.endocrino.org.br/ </b></p>
</td>
</tr>
</table>
</section
></article>
</font>
</div>
</div>
</div>
 </br> </br> </br> </br> </br> </br> </br> </br> </br> </br> </br> </br> </br> </br></br></br></br></br></br></br></br></br></br></br></br></br></br></br></br></br></br></br></br></br></br></br></br></br></br></br></br></br></br></br></br></br></br></br></br></br></br></br></br></br></br></br></br></br></br></br></br></br></br></br></br></br></br></br></br></br></br></br></br></br></br></br></br></br></br></br></br></br></br></br></br></br></br></br></br></br></br></br></br></br></br></br></br></br></br></br></br></br></br></br></br></br></br></br></br></br></br></br></br></br></br></br></br></br></br></br></br></br>
  
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
