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

if($_GET['id_proyecto'] == ''){
    header('location: admin.php');
    exit;
}

    $imgGaleria3 = getGaleryProyectos($mysqli, $_GET['id_proyecto']);
    $proyecto = getProyecto($mysqli, $_GET['id_proyecto']);

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
  
  <!-- end #header -->
  <div class="clearfix"></div>
  <!-- end .clearfix --> 
  
  <div class="container">
    <div class="row wow fadeInUp" data-wow-duration="1s" data-wow-delay="0.5s">
        <div class="col-md-12 text-center">
            <h3 style="margin-top: 2%"><?php echo $proyecto['titulo']?></h3>
            <div class="titleline-center">
                
            </div>
            <div class="col-md-12" style="background-image: url(images/assets/bg-qs.jpg)">
                <img src="<?php echo $proyecto['url_img']?>" class="img-responsive" alt="" style="display: initial"/>
            </div>
            <br>
            <div class="col-md-12" style="margin: 5% 0%">
                <p><?php echo $proyecto['descripcion']?></p>
            </div>
            
        </div>
      	<?php 
            foreach ($imgGaleria3 as $img3)
            {?>
                <div class="col-md-4">
                    <h3><?php echo $img3['titulo']?></h3>
                    <img src="<?php echo $img3['url_img']?>" class="img-responsive frame" alt="" /> 
                    <h3><?php echo $img3['titulo']?></h3>
                    <p>
                        <span class="dropcap-theme"><?php echo substr($img3['descripcion'],0,1);?></span>
                        <?php echo $img3['descripcion']?>
                    </p>
                </div>
            <?php } ?> 
            <div class="col-md-12" style="margin: 1%">
                <a class="btn btn-info" value="volver" href="index.php">volver</a>
            </div> 
        <!-- end .container -->
        <div class="mb-100"></div>
    </div>
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
              <a href="mailto:#">contacto@ogapora.com</a></li>
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