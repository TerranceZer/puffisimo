<!DOCTYPE html>
<?php
   $op=$_GET["op"]; //declaramos la variable $op que va a contener el valor de la opcion clickeada

   switch($op){ //con el switch indicamos que valores va a tener dicha variable segun cada opcion

       //en caso de que "?op" sea igual a "inicio" las variables $contenido y $titulo van a tener estos valores..

       //esto es igual para las siguientes opciones, excepto "default" que es el valor por defecto que se va a cargar sin clickear ninguna opcion.


       case "somos":
           $contenido="somos.php";
           $titulo="Conocenos | Mi página";
           break;

       case "quees":
           $contenido="quees.php";
           $titulo="Puffs | Mi página";
           break;

        case "contacto":
          $contenido="contacto.php";
          $titulo="Contacto | Mi p�gina";
          break;

          case "catalogo":
            $contenido="catalogo.php";
            $titulo="Contacto | Mi p�gina";
            break;

            case "puffealo":
              $contenido="puffealo.php";
              $titulo="Contacto | Mi p�gina";
              break;
       default:
           $contenido="carrusell.php";
           $titulo="Inicio | Mi página";
           break;
   }
?>


<html>

<head>
  <title>Puffisimo Index</title>
  <meta name="viewport" content="width=device-width, initial-scale 1.0" charset="utf-8">
  <link rel="icon" type="image/png" href="images/favicon.png">

  <!-- Bootstrap -->
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

  <!-- IE Support -->
  <!-- [if 1t IE 9]>
    <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
    <script src="https://oss.maxcdn.com/libs/respond.js/1.3.0/respond.min.js"></script>
  <![endif]-->

  <!-- CSS Custom Styles -->
  <link href="css/estilos.css" rel="stylesheet">
  <link href="css/style_bright.css" rel="stylesheet">
  <link rel="stylesheet" href="css/animate.css">
   <link href="https://fonts.googleapis.com/css?family=Port+Lligat+Slab" rel="stylesheet">

  <!-- Javascript -->
  <script>
    // Rutina para scroll suave al saltar a un ancla
    $(function() {
      $('a[href*="#"]:not([href="#carrusell"], [href="#myCarousel"])').click(function() {
        if (location.pathname.replace(/^\//, '') == this.pathname.replace(/^\//, '') && location.hostname == this.hostname) {
          var target = $(this.hash);
          target = target.length ? target : $('[name=' + this.hash.slice(1) + ']');
          if (target.length) {
            $('html, body').animate({
            scrollTop: target.offset().top
            }, 1000);
            return false;
          }
        }
      });
    });

    // Carousel
    jQuery(document).ready(function($) {
      $('#myCarousel').carousel({
        interval: 5000
      });

      // Handles the carousel thumbnails
      $('[id^=carousel-selector-]').click(function() {
        var id_selector = $(this).attr("id");
        try {
          var id = /-(\d+)$/.exec(id_selector)[1];
          console.log(id_selector, id);
          jQuery('#myCarousel').carousel(parseInt(id));
        } catch (e) {
          console.log('Regex failed!', e);
        }
      });

      // When the carousel slides, auto update the text
      $('#myCarousel').on('slid.bs.carousel', function (e) {
        var id = $('.item.active').data('slide-number');
        $('#carousel-text').html($('#slide-content-' + id).html());
      });
    });

    // Sticky Navbar
    var  mn = $(".main-nav");
    mns = ".main-nav-scrolled";
    hdr = $('header').height();

    $(window).scroll(function() {
      if ($(this).scrollTop() > $("header").height()) {
        $('#navinav').attr('class', 'main-nav-scrolled');
      }
      else {
        $('#navinav').attr('class', 'main-nav');
      }
    });

//que para la galeria
$(document).ready(function(){

  $(".filter-button").click(function(){
      var value = $(this).attr('data-filter');

      if(value == "all")
      {
          //$('.filter').removeClass('hidden');
          $('.filter').show('1000');
      }
      else
      {
//            $('.filter[filter-item="'+value+'"]').removeClass('hidden');
//            $(".filter").not('.filter[filter-item="'+value+'"]').addClass('hidden');
          $(".filter").not('.'+value).hide('3000');
          $('.filter').filter('.'+value).show('3000');

      }
  });

  if ($(".filter-button").removeClass("active")) {
$(this).removeClass("active");
}
$(this).addClass("active");

});
  </script>
</head>

<!-- xoxoxoxoxoxoxoxoxoxoxoxoxoxoxoxoxoxoxoxoxoxoxoxoxoxoxoxoxoxoxoxoxoxoxo  -->

<body>
   <header style="background-image: url('images/clouds.jpg'); background-size:cover;">
    <center>
        <img src='images/puffisimopng.png' class="animated tada" style="height:230px; padding-top:10px;">
    </center>
</header>

    <!-- Collapsing Navigation Bar -->
    <nav id="navinav" class="main-nav" role="navigation" id="nav-container">
      <div class="navbar-header" style="max-height:50px;">
        <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#navbar_collapse">
          <span <span class="glyphicon glyphicon-menu-hamburger"></span>
          <span class="sr-only">Toggle</span>
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
        </button>

      </div>
      <div class="collapse navbar-collapse" id="navbar_collapse" style="background-color: #FF7919; color: blue;
      border-color: black;">
        <ul class="nav navbar-nav navbar-right">
          <li><a href="?op=somos">¿Quiénes somos?</a></li>
          <li><a href="?op=quees">¿Qué es un Puff?</a></li>
          <li><a href="?op=catalogo">Catálogo</a></li>
          <li><a href="#"><img src="images/logo_blanco.png" alt="" width="50px;"></a></li>
          <li><a href="http://puffisimo.com.mx/shop/catalog/index.php">Tienda en línea</a></li>
          <li><a href="?op=puffealo">Puffealo</a></li>
          <li><a href="?op=contacto">Contacto</a></li>
        </ul>
      </div>
    </nav>

    <div class="main"> <br><br>

        <div class="row" style="">

          <div class="col-lg-2" style="">
            <script type="text/javascript">
var bannersnack_embed = {"hash":"bxpfv0a81","width":200,"height":350,"t":1502150380,"userId":30645626,"type":"html5"};
</script>
<script type="text/javascript" src="//cdn.bannersnack.com/iframe/embed.js"></script>
              <!--
            <div class="" style="padding-top: 40px; height:270px; border-left: thick double black">

            <ul style="list-style:none; padding-left:0px; ">
              <li>
                <a href="?op=somos"> <div id="menu">
                  ¿Quiénes somos?
                </div>  </a>
              </li>
              <li>
                <a href="?op=quees"> <div id="menu">
                  ¿Qué es un puff?
                </div>  </a>
              </li>
              <li>
                <a href="?op=tienda" style="background-color:green;"><div id="menu">Tienda en Línea</div></a>
              </li>
              <li>
                <a href="?op=contacto" style="background-color:green;"><div id="menu">Contacto</div></a>
              </li>
            </ul>

            <ul class="form">
		<li><a class="profile" href="#"><i class="icon-user"></i>Edit Profile</a></li>
		<li class="selected"><a class="messages" href="#"><i class="icon-envelope-alt"></i>Messages <em>5</em></a></li>
		<li><a class="settings" href="#"><i class="icon-cog"></i>App Settings</a></li>
		<li><a class="logout" href="#"><i class="icon-signout"></i>Logout</a></li>
	</ul>
          </div>
          -->
          </div>

          <div class="col-lg-8">
            <?php include($contenido) ?>
          </div>
            <div class="col-lg-2">
              <script type="text/javascript">
                  var bannersnack_embed = {"hash":"bc9exf8md","width":250,"height":250,"t":1501919877,"userId":30602381,"type":"html5"};
              </script>
              <script type="text/javascript" src="//cdn.bannersnack.com/iframe/embed.js"></script>

            </div>
        </div>
        <br>

        <!--
         Datos de Contacto
        <section id="contact" style="background-image:url('images/clouds.jpg'); background-size:cover; color:black;">
          <div class="row text-center clearfix">
            <div class="col-sm-8 col-sm-offset-2">
              <div class="contact-heading">

                <h2 class="title-one">Contáctanos</h2>
                <p>¿Quieres puffear a la medida? Envíanos un mensaje y nosotros nos ponemos en contacto contigo.</p>
              </div>
            </div>
          </div>
          <div class="contact-details">
            <div class="pattern">
            </div>
            <div class="row text-center clearfix">
              <div class="col-sm-6">
                <div class="contact-address">
                  <address>
                    <img src="images/pufflogo.png" style="width:75px; height:75px;"><br>
                    <strong>
                      Contacto:<br>
                      Tel. (55)19 41 24 44 <br>
                      email: ventas@puffisimo.com.mx <br>
                      Ciudad de México.
                    </strong>
                  </address>
                  <div class="social-icons">
                    <a href="https://web.facebook.com/itcbusinessmexico/"><i class="fa fa-facebook"></i></a>
                  </div>
                </div>
              </div>
              <div class="col-sm-5">
                <div id="contact-form-section">
                  <div class="status alert alert-success" style="display: none">
                  </div>
                  <form id="contact-form" class="contact" name="contact-form" method="post" action="send-mail.php">
                    <div class="form-group">
                      <input type="text" name="name" class="form-control name-field" required="required" placeholder="Nombre">
                    </div>
                    <div class="form-group">
                      <input type="email" name="email" class="form-control mail-field" required="required" placeholder="E-mail">
                    </div>
                    <div class="form-group">
                      <textarea name="message" id="message" required="required" class="form-control" rows="8" placeholder="Querido Puffisimo...">
                      </textarea>
                    </div>
                    <div class="form-group">
                      <button type="submit" class="btn btn-primary">Enviar</button>
                    </div>
                  </form>
                </div>
              </div>
            </div>
          </div>
        </section> <!-- /#contact  <br> -->
      </div>
    </div>
      <!-- Footer -->
      <footer style="background-color: #FF7919; position: relative;">
        <div class="container" style="background-color:#FF7919;">
            <div class="row">
              <div class="col-md-4">
              <h3>Contacto</h3>
              <ul>
                <li>Telefono: (55)19412444</li>
                <li>Correo: ventas@puffisimo.com.mx</li>
              </ul>
            </div>
            <div class="col-md-4">
            <br>
            <iframe src="https://www.facebook.com/plugins/page.php?href=https%3A%2F%2Fwww.facebook.com%2FPuffisimo-1740062506262228%2F&tabs=timeline&width=340&height=200&small_header=false&adapt_container_width=true&hide_cover=false&show_facepile=true&appId" width="340" height="200" style="border:none;overflow:hidden" scrolling="no" frameborder="0" allowTransparency="true"></iframe>
            <br><br>
          <a href="https://www.cerotec.net/stadisticas-105856/puffisimo.com.mx" title="contador">
            <img src="https://www.cerotec.net/contador.php?t=1&s=2&i=105856" alt="Contador de visitas y estad�sticas">
          </a>
          <a href="https://www.cerotec.net/contadores/" style="font-size:12px;"></a>
        <p>Puffisimo. Todos los derechos reservados. 2017.</p>
      </div>
      <div class="col-md-4">
            <h3>Mapa del sitio</h3>
            <ul>
                <li><a href="#definicion">¿Quiénes somos?</a></li>
            <li>¿Qué es un puff?</li>
            <li>Puffealo</li>

          </ul>
        </div>
        </div>
      </div>
        </footer>

</body>
<!--Mamadas para agregar el plug de facebook-->
<div id="fb-root"></div>
<script>(function(d, s, id) {
  var js, fjs = d.getElementsByTagName(s)[0];
  if (d.getElementById(id)) return;
  js = d.createElement(s); js.id = id;
  js.src = "//connect.facebook.net/es_LA/sdk.js#xfbml=1&version=v2.10";
  fjs.parentNode.insertBefore(js, fjs);
}(document, 'script', 'facebook-jssdk'));</script>
</html>
