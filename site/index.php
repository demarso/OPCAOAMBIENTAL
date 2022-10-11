<? date_default_timezone_set('America/Sao_Paulo'); ?>
<!DOCTYPE html>
<html lang="pt-br">
   <head>
      <!-- basic -->
      <meta charset="utf-8">
      <meta http-equiv="X-UA-Compatible" content="IE=edge">
      <!-- mobile metas -->
      <meta name="viewport" content="width=device-width, initial-scale=1">
      <meta name="viewport" content="initial-scale=1, maximum-scale=1">
      <!-- site metas -->
      <title>OPÇÃO AMBIENTAL</title>
      <meta name="keywords" content="">
      <meta name="description" content="">
      <meta name="author" content="">
      <!-- bootstrap css -->
      <link rel="stylesheet" href="css/bootstrap.min.css">
      <!-- style css -->
      <link rel="stylesheet" href="css/style.css">
      <link rel="stylesheet" href="css/navbar.css">
      <!-- Responsive-->
     
   </head>
   <!-- body -->
   <body>
         <!-- loader  -->
      <div class="loader_bg">
         <div class="loader"><img src="images/loading.gif" alt="#" /></div>
      </div>
      <!-- end loader -->
<!--*************************************************************************************************** -->      
      <!-- header -->
      <header>
         <!-- header inner -->
      <?php
        include ('menu.php');
        include ('recaptchalib.php'); ?>
      </header>
      <!-- end header inner -->
      <!-- end header -->
<!--*************************************************************************************************** -->      
      <!-- banner -->
      <section id="banner" class="banner_main">
        <?php  include ('banner.php'); ?> 
      </section>
      <!-- end banner -->
<!--*************************************************************************************************** -->    
      <!-- about -->
      <div id="about"  class="about">
         <div class="container">
           <h1 class="section-heading text-center mb-3">Quem Somos?</h1>
           <div class="section-heading  mx-auto mb-4">A OPÇÃO AMBIENTAL é uma Consultoria Ambiental com o objetivo de desenvolver maneiras que possibilitem ajudar os empreendimentos nas adequações ambientais, através da sustentabilidade, garantindo um futuro melhor para as próximas gerações.
           <br />Somos a sua assessoria no planejamento e execução de sistemas de gestão de resíduos sólidos e elaboração de estudos e projetos ambientais.</div>
       </div>
      </div>
      <!-- end about -->
<!--*************************************************************************************************** -->      
      <!-- service -->
      <div id="service"  class="service">
         <div class="container">
            <div class="row">
               <div class="col-md-12">
                  <div class="titlepage">
                     <h2> <img src="images/head.png" alt="#"/> Nossos Serviços</h2>
                  </div>
               </div>
            </div>
            <div class="row mb-4">
               <div class="col-md-4">
                  <div id="hover_chang" class="service_box">
                     <i><img src="images/thr1.jpg" alt="#"/></i>
                     <h3>Serviço 1</h3>
                     <p>Descrição do Serviço 1</p>
                  </div>
               </div>
               <div class="col-md-4">
                  <div id="hover_chang" class="service_box">
                     <i><img src="images/thr2.png" alt="#"/></i>
                     <<h3>Serviço 2</h3>
                     <p>Descrição do Serviço 2</p>
                  </div>
               </div>
               <div class="col-md-4">
                  <div id="hover_chang" class="service_box">
                     <i><img src="images/thr3.png" alt="#"/></i>
                     <h3>Serviço 3</h3>
                     <p>Descrição do Serviço 3</p>
                  </div>
               </div>
               
            </div>
         </div>
      </div>
      <!-- end service -->
<!--*************************************************************************************************** -->      
      <!-- consultoria -->
      <div id="consultoria"  class="consultoria">
      <div class="container">
         <h3 class="section-heading text-center mb-3">Consultoria Ambiental: O que Significa?</h3>
         <div class="section-intro single-col-max mx-auto mb-4">Que a consultoria ambiental trata de assuntos voltados para área ambiental, não há dúvidas.
         Mas você sabia o que significa e quais as principais áreas de atuação?
A consultoria ambiental é imprescindível para empreendimentos que possuem interação com o meio ambiente, quanto a geração de impactos ambientais.
No geral, ela visa a realização de análises técnicas sobre danos ao meio ambiente que um projeto ou empreendimento pode gerar.</div>
         <div class="benefits-list text-center mb-3">
            <h4 class="text-center mb-4">As principais áreas de atuação da consultoria ambiental são:</h4>
            <ul class="list-unstyled text-start d-inline-block">
               <li><i class="fas fa-check-circle me-2"></i>Políticas de gestão de resíduos;</li>
               <li><i class="fas fa-check-circle me-2"></i>Sistema de gestão ambiental;</li>
               <li><i class="fas fa-check-circle me-2"></i>Educação ambiental;</li>
               <li><i class="fas fa-check-circle me-2"></i>Licenciamento ambiental;</li>
               <li><i class="fas fa-check-circle me-2"></i>Certificação ambiental;</li>
               <li><i class="fas fa-check-circle me-2"></i>Recuperação de áreas degradadas;</li>
            </ul>
         </div><!--//benefits-list-->
      </div><!--//consultoria-section-->
     </div> 
      <!-- end consultoria -->
<!--*************************************************************************************************** -->      
       <!-- reciclagem -->
      <div id="reciclagem" class="customer">
         <div class="container">
            <div class="row">
               <div class="col-md-12">
                  <div class="titlepage">
                     <h2> <img src="images/head.png" alt="#"/>Reciclagem</h2>
                  </div>
               </div>
            </div>
            <div id="myCarousel" class="carousel slide customer_Carousel " data-ride="carousel">
               <ol class="carousel-indicators">
                  <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
                  <li data-target="#myCarousel" data-slide-to="1"></li>
                <!--   <li data-target="#myCarousel" data-slide-to="2"></li> -->
               </ol>
               <div class="carousel-inner">
                  <div class="carousel-item active">
                     <div class="container">
                        <div class="carousel-caption ">
                           <div class="test_box">
                              <i><img src="images/Reciclagem 1.jpg" width="200" /></i>
                              <h4>Você sabe o que é?</h4>
                            <!--  <span>Bruna Lourenço</span> -->
                              <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum. excelência, peço a Deus que continue te capacitando cada vez mais, e que todos os seus sonhos se concretizem!</p>
                              <img src="images/icon.png" alt="#"/>
                           </div>
                        </div>
                     </div>
                  </div>
                  <div class="carousel-item">
                     <div class="container">
                        <div class="carousel-caption">
                           <div class="test_box">
                              <i><img src="images/Reciclagem 2.jpg" width="200" /></i>
                              <h4>Como surgiu.</h4>
                            <!--  <span>Bruna Lourenço</span> -->
                              <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum. excelência, peço a Deus que continue te capacitando cada vez mais, e que todos os seus sonhos se concretizem!</p>
                              <img src="images/icon.png" alt="#"/>
                           </div>
                        </div>
                     </div>
                  </div>
             <div class="carousel-item">
                     <div class="container">
                        <div class="carousel-caption">
                           <<div class="test_box">
                              <i><img src="images/Reciclagem 3.jpg" width="200" /></i>
                              <h4>Seus benefícios.</h4>
                            <!--  <span>Bruna Lourenço</span> -->
                              <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum. excelência, peço a Deus que continue te capacitando cada vez mais, e que todos os seus sonhos se concretizem!</p>
                              <img src="images/icon.png" alt="#"/>
                           </div>
                        </div>
                     </div>
                  </div> 
               </div>
               <a class="carousel-control-prev" href="#myCarousel" role="button" data-slide="prev">
               <i class="fa fa-chevron-left" aria-hidden="true"></i>
               </a>
               <a class="carousel-control-next" href="#myCarousel" role="button" data-slide="next">
               <i class="fa fa-chevron-right" aria-hidden="true"></i>
               </a>
            </div>
         </div>
      </div>
      <!-- end reciclagem -->
<!--*************************************************************************************************** -->      
      </div>
      <!--  contato -->
      <div id="contato" class="contact">
         <div class="container">
            <div class="row">
               <div class="col-md-12">
                  <div class="titlepage">
                     <h2> <img src="images/head.png" alt="#"/>Contato</h2>
                  </div>
               </div>
            </div>
            <div class="row">
               <div class="col-md-6">
                  <form id="request" class="main_form" action="enviaEmail.php">
                     <div class="row">
                        <div class="col-md-12 ">
                           <input class="contactus" placeholder="Nome" type="type" name="nome"> 
                        </div>
                        <div class="col-md-12">
                           <input class="contactus" placeholder="E-mail" type="type" name="email"> 
                        </div>
                        <div class="col-md-12">
                           <input class="contactus" placeholder="Celular" type="type" name="celular">                          
                        </div>
                        <div class="col-md-12">
                           <textarea class="textarea" placeholder="Menssagem" type="type" name="menssagem">
                        </div>
                        
                        <div class="g-recaptcha" data-sitekey="6LdjJAcgAAAAANbuQaBo7K1LbNEBxP5FqdDWx9SW"><div>
                        <div class="col-sm-col-xl-6 col-lg-6 col-md-6 col-sm-12">
                           <button class="send_btn">Enviar</button>
                        </div>
                        <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12">
                        <div class="map-responsive">
                           <iframe src="" width="600" height="432" frameborder="0" style="border:0; width: 100%;" allowfullscreen></iframe>
                        </div>
                        </div>
                     </div>
                  </form>
               
               </div>
               
            </div>
         </div>
      </div>
      <!-- end contato -->
<!--*************************************************************************************************** -->      
      <!--  social -->
      <div id="social"  class="social">
       
      <div class="card-group row marcador">
         <div class="card text-black  mb-3" style="max-width: 18rem;">
           <div class="card-header">Instagram</div>
           <div class="card-body">
            <a href="https://www.instagram.com/opcaoambiental/"><img class="card-img" src="images/instagram_icon.png" alt="Card image"></a>
           </div>
         </div>        
         <div class="card text-black  mb-3" style="max-width: 18rem;">
           <div class="card-header">WhatsApp</div>
           <div class="card-body">
            <a href="http://api.whatsapp.com/send?1=pt_BR&phone=5521982389242"><img class="card-img" src="images/whatsapp_icon.png" alt="Card image"></a>
           </div>
         </div>  
       
   </div>
      </div>   
      <!-- end social -->
<!--*************************************************************************************************** --> 
      <!--  footer -->
      <footer id="contact">
         <div class="footer">
        <!--    <div class="container">
               <div class="row">
                  <div class="col-md-8 offset-md-4">
                     <form class="bottom_form">
                        <h3>Newsletter</h3>
                        <input class="enter" placeholder="Enter your email" type="text" name="Enter your email">
                        <button class="sub_btn">subscribe</button>
                     </form>
                  </div>
               </div>
               <div class="row">
                  <div class="col-xl-6 col-md-12">
                     <div class="row">
                        <div class="col-md-7 padd_bottom">
                           <div class="heading3">
                              <a href="#"><img src="images/logo1.png" alt="#"/></a>
                              <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Donec odio. Quisque volutpat mattis eros.Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Donec odio. Quisque volutpat mattis eros.</p>
                           </div>
                        </div>
                        <div class="col-md-5 padd_bottom padd_bott">
                           <div class="heading3">
                              <h3>Contact Us</h3>
                              <ul class="infometion">
                                 <li><a href="#">Donec odio. Quisque </a></li>
                                 <li><a href="#">volutpat mattis</a></li>
                                 <li><a href="#">eros.Lorem ipsum dolor</a></li>
                                 <li><a href="#">sit amet, consectetuer  </a></li>
                                 <li><a href="#">adipiscing elit. Donec  </a></li>
                                 <li><a href="#">odio. Quisque volutpat </a></li>
                              </ul>
                           </div>
                        </div>
                     </div>
                  </div>
                  <div class="col-xl-6 col-md-12">
                     <div class="row">
                        <div class="col-md-6 offset-md-1 padd_bottom">
                           <div class="heading3">
                              <h3>INFORMATION</h3>
                              <ul class="infometion">
                                 <li><a href="#">Donec odio. Quisque </a></li>
                                 <li><a href="#">volutpat mattis</a></li>
                                 <li><a href="#">eros.Lorem ipsum dolor</a></li>
                                 <li><a href="#">sit amet, consectetuer  </a></li>
                                 <li><a href="#">adipiscing elit. Donec  </a></li>
                                 <li><a href="#">odio. Quisque volutpat </a></li>
                              </ul>
                           </div>
                        </div>
                        <div class="col-md-5">
                           <div class="heading3">
                              <h3>MY ACCOUNT</h3>
                              <ul class="infometion">
                                 <li><a href="#">Donec odio. Quisque </a></li>
                                 <li><a href="#">volutpat mattis</a></li>
                                 <li><a href="#">eros.Lorem ipsum dolor</a></li>
                                 <li><a href="#">sit amet, consectetuer  </a></li>
                                 <li><a href="#">adipiscing elit. Donec  </a></li>
                                 <li><a href="#">odio. Quisque volutpat </a></li>
                              </ul>
                           </div>
                        </div>
                     </div>
                  </div>
               </div>
            </div> -->
            <div class="copyright">
               <div class="container">
                  <div class="row">
                     <div class="col-md-12">
                        <p>© 2020-<? echo date("Y"); ?> Todos os Direitos Reservados. <a href="https://idbras.com.br/" target="_blank">IDBRAS</a></p>
                        <div style="text-align:left"><a href="https://studiovivianmartins.com.br/sys" target="_blank">Sistema</a></div>
                     </div>
                  </div>
               </div>
            </div>
         </div>
      </footer>
      <style>

div.box {
   width: 150px;
   display: inline-block;
}
 .card-header{
   margin: 0 auto;
 } 
 .card-body{
  
  background: #fe9d9d;
 }

 .card{
  margin: 0 auto;
  background: #fe9d9d;
 }

img {
   position:relative;
   max-width: 50%;
  display: block;
  margin: 0 auto;
}

h4{
   position:relative;
 margin-top: 0;
 margin-bottom: 0;  
 margin: 0 auto;
}

.marcador {
    background: #fe9d9d;
    border: 1px solid #f94646;
    height: auto;
  }
  .marcador-container {
    background: #4bf946;
    border: 1px solid #46ae46;
  }
  .borda{
    border: 1px solid blue;
  }
  
.align-items-center{

   display: flex;
   align-items: center;
}

</style>
      <!-- end footer -->
      <!-- Javascript files-->
      <script src="js/jquery.min.js"></script>
      <script src="js/popper.min.js"></script>
      <script src="js/bootstrap.bundle.min.js"></script>
      <script src="js/jquery-3.0.0.min.js"></script>
      <script src="https://www.google.com/recaptcha/api.js" async defer></script>
      <script src="js/jquery.mCustomScrollbar.concat.min.js"></script>
      <script src="js/custom.js"></script>
      <script>
         $('a[href^="#"]').on('click', function(event) {
         
          var target = $(this.getAttribute('href'));
         
          if( target.length ) {
              event.preventDefault();
              $('html, body').stop().animate({
                  scrollTop: target.offset().top
              }, 2000);
          }
         
         });
      </script>
      <script>
         // This example adds a marker to indicate the position of Bondi Beach in Sydney,
         // Australia.
         function initMap() {
           var map = new google.maps.Map(document.getElementById('map'), {
             zoom: 11,
             center: {lat: 40.645037, lng: -73.880224},
             });
         
         var image = 'images/maps-and-flags.png';
         var beachMarker = new google.maps.Marker({
             position: {lat: 40.645037, lng: -73.880224},
             map: map,
             icon: image
           });
         }
      </script>
      <!-- google map js -->
      <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyA8eaHt9Dh5H57Zh0xVTqxVdBFCvFMqFjQ&callback=initMap"></script>
      <!-- end google map js --> 
   <?
    include("class.ipdetails.php");
    $ip = $_SERVER['REMOTE_ADDR'];  
    #$ip = "189.73.71.160";
    $ipdetails = new ipdetails($ip); 
    $ipdetails->scan();
    include("conexao.php");
    $Data = date("Y-m-d");
    $Hora = date('H:i:s');
    $IP = $ip;
    $Pais = $ipdetails->get_country();
    $Estado = $ipdetails->get_region();
    $Cidade = $ipdetails->get_city();
    $Latitude = $ipdetails->get_latitude();
    $Longitude = $ipdetails->get_longitude();

    $sql = "INSERT INTO localizacao(
                        IP,
                        Data,
                        Hora,
                        Pais,
                        Estado,
                        Cidade,
                        Latitude,
                        Longitude
                        )
                        VALUES
                        ('$IP',
                        '$Data',
                        '$Hora',
                        '$Pais',
                        '$Estado',
                        '$Cidade',
                        '$Latitude',
                        '$Longitude'
                        )";
   $result = mysqli_query($conn,$sql) or die ("Cadastro da Localizaçao não realizado.");
  ?> 
   </body>
</html>

