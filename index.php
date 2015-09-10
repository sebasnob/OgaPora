<?php
include_once 'oga-admin/includes/db_connect.php';
include_once 'oga-admin/includes/functions.php';
?>
<!DOCTYPE html>
<html lang="es">
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>Oga Pora</title>
<meta name="keywords" content="OgaPora" />
<meta name="description" content="OgaPora">
<link rel="shortcut icon" href="images/favicon.ico">

<!-- Web Fonts
================================================== -->
<link href='http://fonts.googleapis.com/css?family=Raleway:400,100,900,800,600,500,700,300,200' rel='stylesheet' type='text/css'>

<!-- CSS
================================================== -->
<link rel="stylesheet" href="css/bootstrap.css">
<link rel="stylesheet" href="rs-plugin/css/settings.css" media="screen" />
<link rel="stylesheet" href="fonts/font-awesome/css/font-awesome.min.css">
<link rel="stylesheet" href="css/plugins.css" />
<link rel="stylesheet" href="css/style.css" />
<link rel="stylesheet" href="css/scrolling-nav.css" />
<link rel="stylesheet" href="PgwSlider-master/pgwslider.css" />

<!-- IE
================================================== -->
<!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
<!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
<!--[if lt IE 9]>
	<script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
	<script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
<![endif]-->

<!-- Style Switcher (Demo Only)
================================================== -->
<link rel="stylesheet" href="switcher/css/switcher.css" />
<link rel="alternate stylesheet" media="screen" title="color1" href="switcher/css/color1.css" />
<link rel="alternate stylesheet" media="screen" title="color2" href="switcher/css/color2.css" />
<link rel="alternate stylesheet" media="screen" title="color3" href="switcher/css/color3.css" />
<link rel="alternate stylesheet" media="screen" title="color4" href="switcher/css/color4.css" />
<link rel="alternate stylesheet" media="screen" title="color5" href="switcher/css/color5.css" />
<link rel="alternate stylesheet" media="screen" title="color6" href="switcher/css/color6.css" />
<link rel="alternate stylesheet" media="screen" title="color7" href="switcher/css/color7.css" />
<link rel="alternate stylesheet" media="screen" title="color8" href="switcher/css/color8.css" />
<link rel="alternate stylesheet" media="screen" title="color9" href="switcher/css/color9.css" />
<link rel="alternate stylesheet" media="screen" title="color10" href="switcher/css/color10.css" />
<link rel="alternate stylesheet" media="screen" title="color11" href="switcher/css/color11.css" />
<link rel="alternate stylesheet" media="screen" title="color12" href="switcher/css/color12.css" />
<link rel="alternate stylesheet" media="screen" title="color13" href="switcher/css/color13.css" />
<link rel="alternate stylesheet" media="screen" title="color14" href="switcher/css/color14.css" />
<link rel="alternate stylesheet" media="screen" title="box1" href="switcher/css/box1.css" />
<link rel="alternate stylesheet" media="screen" title="footer1" href="switcher/css/footer1.css" />
<!-- End Style Switcher
================================================== -->

<?php 

$imgGaleria1 = getGalery($mysqli, '1');
$imgGaleria2 = getGalery($mysqli, '2');
$imgGaleria3 = getGalery($mysqli, '3');

?>

</head>

<body>
<div class="boxed-layout"> 
  
  <div id="topbar">
    <div class="container">
      <div class="row">
        <div class="col-md-8">
          <p><i class="fa fa-phone-square"></i> Telefonos: (0341)-153051985&nbsp;|&nbsp;(0341)-2431688</p>
        </div>
        <div class="col-md-4">
          <ul class="social-icons">
            <li><a href="#"><i class="fa fa-twitter"></i></a></li>
            <li><a href="#"><i class="fa fa-facebook"></i></a></li>
          </ul>
        </div>
        <!-- end .col-md-4 --> 
      </div>
      <!-- end .row --> 
    </div>
    <!-- end .container --> 
  </div>
  <!-- end #topbar --> 
  
  <header id="header">
    <nav class="navbar yamm navbar-default navbar-static-top" role="navigation">
      <div class="container">
        <div class="navbar-header">
          <a class="navbar-brand dropdown-toggle page-scroll" href="#topbar"><img src="images/logo.png" alt="" /></a>
		</div>
        <div class="navbar-collapse collapse">
          <ul class="nav navbar-nav">
            <li class="active dropdown"><a href="#topbar" class="dropdown-toggle hvr js-activated page-scroll" data-toggle="dropdown">Inicio</a></li>
            <li class="dropdown"><a href="#quienes" class="dropdown-toggle hvr js-activated page-scroll" data-toggle="dropdown">Quienes Somos</a></li>
            <li class="dropdown"><a href="#obras" class="dropdown-toggle hvr js-activated page-scroll" data-toggle="dropdown">Obras en Proceso</a></li>
            <li class="dropdown yamm-fw"><a href="#proyectos" class="dropdown-toggle hvr js-activated page-scroll" data-toggle="dropdown">Obras Finalizadas</a></li>
            <li class="dropdown"><a href="#ventas" class="dropdown-toggle hvr js-activated page-scroll" data-toggle="dropdown">Ventas</a></li>
            <li class="dropdown"><a href="#clientes" class="dropdown-toggle hvr js-activated page-scroll" data-toggle="dropdown">Clientes</a></li>
            <li class="dropdown"><a href="#contacto" class="dropdown-toggle hvr js-activated page-scroll" data-toggle="dropdown">Contacto</a></li>
          </ul>
        </div>
      </div>
    </nav>
  </header>
  <!-- end #header -->
  <div class="clearfix"></div>
  <!-- end .clearfix --> 
  
  <div class="tp-banner-container">
    <div class="tp-banner" >
      <ul>
        <!-- SLIDE 1  -->
        <li data-transition="fade" data-slotamount="7" data-masterspeed="2000" data-thumb="homeslider_thumb1.jpg" data-delay="16000"  data-saveperformance="on"  data-title="Ken Burns Slide"> 
          <!-- MAIN IMAGE --> 
          <img src="images/assets/dummy.png"  alt="laptopmockup_sliderdy" data-lazyload="images/slider/slider1.jpg" data-bgposition="right top" data-kenburns="on" data-duration="12000" data-ease="Power0.easeInOut" data-bgfit="115" data-bgfitend="100" data-bgpositionend="center bottom"> 
          <!-- LAYERS --> 
          
          <!-- LAYER NR. 1 -->
          <div class="tp-caption black-big skewfromright randomrotateout tp-resizeme rs-parallaxlevel-0"
			data-x="200"
			data-y="170" 
			data-speed="1000"
			data-start="1500"
			data-easing="Power3.easeInOut"
			data-splitin="none"
			data-splitout="none"
			data-elementdelay="0.1"
			data-endelementdelay="0.1"
			data-end="130000"
			data-endspeed="1000"
                        style="z-index: 20; max-width: auto; max-height: auto; white-space: nowrap;">Bienvenidos a <strong style="color: #528FCC">&Oacute;ga Por&atilde;</strong></div>
          
          <!-- LAYER NR. 2 -->
         <div class="tp-caption black-normal skewfromright randomrotateout tp-resizeme rs-parallaxlevel-0"
			data-x="200"
			data-y="294" 
			data-speed="1000"
			data-start="2000"
			data-easing="Power3.easeInOut"
			data-splitin="none"
			data-splitout="none"
			data-elementdelay="0.1"
			data-endelementdelay="0.1"
			data-end="135000"
			data-endspeed="1000"
			style="z-index: 20; max-width: auto; max-height: auto; white-space: nowrap;">Empresa <strong>Constructora</strong></div>
          
          <!-- LAYER NR. 3 -->
          <div class="tp-caption black-small skewfromright randomrotateout tp-resizeme rs-parallaxlevel-0"
			data-x="200"
			data-y="370" 
			data-speed="1000"
			data-start="2500"
			data-easing="Power3.easeInOut"
			data-splitin="none"
			data-splitout="none"
			data-elementdelay="0.1"
			data-endelementdelay="0.1"
			data-end="140000"
			data-endspeed="1000"
			style="z-index: 20; max-width: auto; max-height: auto; white-space: nowrap;">Soluciones constructivas y de ingenieria</div>
        </li>
       </ul>
      <div class="tp-bannertimer"></div>
    </div>
    <!-- end .tp-banner --> 
  </div>
  <!-- end .tp-banner-container -->
  
  <div class="mb-100 clearfix" id="quienes"></div>
  <!-- end .mb-100 clearfix --> 
  <div class="container">
    <br/>
    <div class="row wow fadeInUp" data-wow-duration="1s" data-wow-delay="0.5s">
      <div class="col-md-12 text-center">
        <h3>Quienes <strong>Somos</strong></h3>
        <div class="titleline-center"></div>
        <!-- end .titleline-center -->
        <p class="lead">
            Óga porá es una empresa constructora encabeza por Gerardo Rodas que ofrece prestaciones que le permiten brindar soluciones constructivas y de ingenieria desde hace mas de 40 años en Rosario , Buenos Aires y Santa Fe trabajando para varias reparticiones municipales en obras civiles e industriales, de infraestructura urbana , regional, portuarias .También como anexo a nuestra empresa nos hemos desempeñado en la construcción de casas unifamiliares, en emprendimientos particulares y privados.<br/><br/>
            <span class="highlight-theme">Cultura de trabajo</span> Somos un equipo de trabajo, dedicado a brindar soluciones constructivas. Buscamos satisfacer las necesidades de nuestros clientes, de nuestros empleados y la rentabilidad de nuestros accionistas. La excelente calidad de obra, las finas terminaciones , el estricto cumplimiento de los plazos de entrega , la alta rentabilidad de las unidades y como prioridad uno de respuesta al comprador se ha logrado consolidar una excelente clientela , como las grande firmas que nos contratan y como inversores que nos acompañan en los edificios propios.
            Los trabajos que hemos realizado, demuestran nuestra capacidad de respuesta, ante los más variados requerimientos de nuestros comitentes, entregando así, obras llave en mano, realizando el proyecto, dirección y ejecución de obra, aceptando la dinámica de cada emprendimiento en particular. La empresa lleva a cabo proyectos propios ,interviniendo en todas la etapas del desarrollo , desde la búsqueda del terreno , proyecto , dirección de obra y  la construcción de unidades habitacionales de vanguardia, aplicando un alto índice de calidad constructiva y de materiales, pasando por el asesoramiento profesional en la personalización de las terminaciones de las unidades vendidas, la garantía otorgada sobre los productos, es el seguimiento post venta.
        </p>
      </div>
      <!-- end .col-md-12 --> 
    </div>
  </div>
  
  <div class="mb-100" id="obras"></div>
  <!-- end .mb-100 --> 
  <div class="container">
    <br/>
    <div class="row wow fadeInUp" data-wow-duration="1s" data-wow-delay="0.5s">
        <div class="col-md-12 text-center">
            <h3>Obras en <strong>Proceso</strong></h3>
            <div class="titleline-center"></div>
            <p class="lead">En estas obras nos encontramos trabajando.</p>
        </div>
      	<?php 
            $i = 0;
            foreach ($imgGaleria2 as $img2)
            {
                if($i%2==0)
                {?>
                <div class="row">
                    <div class="col-md-6"> 
                        <img src="<?php echo $img2['url_img']?>" class="img-responsive frame" alt="" /> 
                    </div>
                    <div class="col-md-6">
                        <h3><?php echo $img2['titulo']?></h3>
                        <p>
                            <span class="dropcap-theme"><?php echo substr($img2['descripcion'],0,1);?></span>
                            <?php echo $img2['descripcion']?>
                        </p>
                    </div>
                </div>
                <?php }else{ ?>    
                <div class="row">
                    <div class="col-md-6">
                        <h3><?php echo $img2['titulo']?></h3>
                        <p>
                            <span class="dropcap-theme"><?php echo substr($img2['descripcion'],0,1);?></span>
                            <?php echo $img2['descripcion']?>
                        </p>
                    </div>
                    <div class="col-md-6"> 
                        <img src="<?php echo $img2['url_img']?>" class="img-responsive frame" alt="" /> 
                    </div>
                </div>
                <?php } ?> 
            <?php $i++;} ?>    
        <!-- end .container -->
        <div class="mb-100"></div>
    <!-- end .mb-100 -->
    </div>
    <!-- end .row --> 
  </div>
  
  <div class="mb-80" id="proyectos"></div>
  <!-- end .mb-80 --> 
  <div class="slash-wrapper">
    <div class="container">
        <div class="row wow fadeInUp" data-wow-duration="1s" data-wow-delay="0.5s" id="proyectos">
          <div class="col-md-12 text-center">
            <h3>Obras <strong>Finalizadas</strong></h3>
            <div class="titleline-center"></div>
            <!-- end .titleline-center -->
            <p class="lead">Estas son algunas de las obras en las cuales trabajamos.</p>
          </div>
        </div>
        <!--nueva galeria-->
        <div>
            <?php 
            $i = 0;
            foreach ($imgGaleria1 as $img1)
            {
                if($i%2==0)
                {?>
                <div class="row">
                    <div class="col-md-6"> 
                        <img src="<?php echo $img1['url_img']?>" class="img-responsive frame" alt="" /> 
                    </div>
                    <div class="col-md-6">
                        <h3><?php echo $img1['titulo']?></h3>
                        <p>
                            <span class="dropcap-theme"><?php echo substr($img1['descripcion'],0,1);?></span>
                            <?php 
                                if(strlen($img1['descripcion']) > 700)
                                {
                                    echo substr($img1['descripcion'],0,700) . "...";
                                }
                                else
                                {
                                    echo $img1['descripcion'];
                                }
                            ?>
                            <br>
                            <a href="proyectos.php?id_proyecto=<?php echo $img1['id']?>&nombre_proyecto=<?php echo $img1['titulo']?>" class="btn-outline linke">m&aacute;s info</a>
                        </p>
                    </div>
                </div>
                <?php }else{ ?>    
                <div class="row">
                    <div class="col-md-6">
                        <h3><?php echo $img3['titulo']?></h3>
                        <p>
                            <span class="dropcap-theme"><?php echo substr($img3['descripcion'],0,1);?></span>
                            <?php echo $img3['descripcion']?>
                            <br>
                            <a href="proyectos.php?id_proyecto=<?php echo $img3['id']?>&nombre_proyecto=<?php echo $img3['titulo']?>" class="btn-outline linke">m&aacute;s info</a>
                        </p>
                    </div>
                    <div class="col-md-6"> 
                        <img src="<?php echo $img3['url_img']?>" class="img-responsive frame" alt="" /> 
                    </div>
                </div>
                <?php } ?> 
            <?php $i++;} ?>  
        </div>
    </div>
  </div>
  
  <div class="mb-100" id="ventas"></div>
  <div class="container">
    <br/>
    <div class="row wow fadeInUp" data-wow-duration="1s" data-wow-delay="0.5s">
        <div class="col-md-12 text-center">
            <h3>Proyectos en <strong>Venta</strong></h3>
            <div class="titleline-center"></div>
            <p class="lead">Los siguientes proyectos se encuentran en venta.</p>
        </div>
      	<?php 
            $i = 0;
            foreach ($imgGaleria3 as $img3)
            {
                if($i%2==0)
                {?>
                <div class="row">
                    <div class="col-md-6"> 
                        <img src="<?php echo $img3['url_img']?>" class="img-responsive frame" alt="" /> 
                    </div>
                    <div class="col-md-6">
                        <h3><?php echo $img3['titulo']?></h3>
                        <p>
                            <span class="dropcap-theme"><?php echo substr($img3['descripcion'],0,1);?></span>
                            <?php echo $img3['descripcion']?>
                            <br>
                            <a href="proyectos.php?id_proyecto=<?php echo $img3['id']?>&nombre_proyecto=<?php echo $img3['titulo']?>" class="btn-outline linke">m&aacute;s info</a>
                        </p>
                    </div>
                </div>
                <?php }else{ ?>    
                <div class="row">
                    <div class="col-md-6">
                        <h3><?php echo $img3['titulo']?></h3>
                        <p>
                            <span class="dropcap-theme"><?php echo substr($img3['descripcion'],0,1);?></span>
                            <?php echo $img3['descripcion']?>
                            <br>
                            <a href="proyectos.php?id_proyecto=<?php echo $img3['id']?>&nombre_proyecto=<?php echo $img3['titulo']?>" class="btn-outline linke">m&aacute;s info</a>
                        </p>
                    </div>
                    <div class="col-md-6"> 
                        <img src="<?php echo $img3['url_img']?>" class="img-responsive frame" alt="" /> 
                    </div>
                </div>
                <?php } ?> 
            <?php $i++;} ?>    
        <!-- end .container -->
        <div class="mb-100"></div>
    </div>
  </div>
  
  <div class="mb-100" id="clientes"></div>
  <div class="container">
    <br/>
    <div class="row wow fadeInUp" data-wow-duration="1s" data-wow-delay="0.5s">
      <div class="col-md-12 text-center">
        <h3>Nuestros <strong>Clientes</strong></h3>
		<div class="titleline-center"></div>
        <div class="owl-client owl-carousel owl-theme">
          <div class="item"><a href="#"><img src="images/clientes/milicic.jpg" alt="" /></a></div>
          <div class="item"><a href="#"><img src="images/clientes/rinaldi.jpg" alt="" /></a></div>
          <div class="item"><a href="#"><img src="images/clientes/werk.jpg" alt="" /></a></div>
          <div class="item"><a href="#"><img src="images/clientes/trevi.jpg" alt="" /></a></div>
          <div class="item"><a href="#"><img src="images/clientes/pecam.jpg" alt="" /></a></div>
        </div>
      </div>
      <!-- end .col-md-12 --> 
    </div>
    <!-- end .row -->
	
  </div>
  
  
  <div class="mb-150" id="contacto"></div>
  <!-- end .mb-150 --> 
  <footer id="footer">
    <div class="container">
      <div class="row">
        <div class="col-md-3">
          <div class="footer-about clearfix"> <a href="index-2.html"><img src="images/logo-footer.png" alt="" /></a>
            <p>Óga porá es una empresa constructora encabeza por Gerardo Rodas que ofrece prestaciones que le permiten brindar soluciones constructivas y de ingenieria desde hace mas de 40 años en Rosario , Buenos Aires y Santa Fe trabajando para varias reparticiones municipales en obras civiles e industriales, de infraestructura urbana , regional, portuarias ..</p>
          </div>
          <!-- end .footer-about --> 
        </div>
        <!-- end .col-md-3 -->
        
        <div class="col-md-6">
        
        </div>
        <!-- end .col-md-3 -->
        
        <div class="col-md-3">
          <div class="footer-tooltip">Estamos en contacto!
            <div class="footer-tooltip-arrow"></div>
          </div>
          <!-- end .footer-tooltip -->
          
          <h4>Contactanos</h4>
          <div class="titleline-footer"></div>
          <!-- end .titleline-footer -->
          <ul class="footer-list">
            <li><i class="fa fa-map-marker"></i><span>Direccion:</span><br>
              Colon 1545, Rosario, Santa Fe</li>
            <li><i class="fa fa-phone"></i><span>Telefonos:</span><br>
              (0341)-153051985<br/>(0341)-2431688</li>
            <li><i class="fa fa-envelope"></i><span>E-mail:</span><br>
              <a href="mailto:#">mail@example.com</a></li>
          </ul>
        </div>
        <!-- end .col-md-3 --> 
      </div>
      <!-- end .row --> 
    </div>
    <!-- end .container --> 
  </footer>
  <!-- end #footer --> 
  
  <!-- Copyright
================================================== -->
  <div id="copyright">
    <div class="container">
      <div class="row">
        <div class="col-md-8">
          <p>&copy; 2015 OgaPora. Todos los derechos reservados.</p>
        </div>
        <!-- end .col-md-8 -->
      </div>
      <!-- end .row --> 
    </div>
    <!-- end .container --> 
  </div>
  <!-- end #copyright --> 
  <a href="#" class="back-to-top">Back to Top</a> </div>
<!-- end .boxed-layout --> 

<!-- Java Script
================================================== --> 
<script src="js/jquery-1.11.2.min.js"></script> 
<script src="js/jquery-migrate-1.2.1.min.js"></script> 
<script src="js/bootstrap.min.js"></script> 
<script src="rs-plugin/js/jquery.themepunch.tools.min.js"></script> 
<script src="rs-plugin/js/jquery.themepunch.revolution.min.js"></script> 
<script src="js/plugins.js"></script> 
<script src="js/custom.js"></script> 
<script src="js/scrolling-nav.js"></script>
<script src="js/jquery.easing.min.js"></script>



<!--<script src="jquery.zaccordion/js/jquery.zaccordion.min.js"></script>-->
<script src="PgwSlider-master/pgwslider.js"></script>
<script>


$(document).ready(function() {
    $('.pgwSlider').pgwSlider();
    
    
});

//$(document).ready(function() {
//	$("#splash").zAccordion({
//		timeout: 4500,
//		speed: 500,
//		slideClass: 'slide',
//		animationStart: function () {
//			$('#splash').find('li.slide-previous div').fadeOut();
//		},
//		animationComplete: function () {
//			$('#splash').find('li.slide-open div').fadeIn();
//		},
//		buildComplete: function () {
//			$('#splash').find('li.slide-closed div').css('display', 'none');
//			$('#splash').find('li.slide-open div').fadeIn();
//		},
//		startingSlide: 1,
//		slideWidth: 600,
//		width: 900,
//		height: 310
//	});
//});


</script>

</body>
</html>