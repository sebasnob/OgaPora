<?php
include_once 'includes/db_connect.php';
include_once 'includes/functions.php';
    
sec_session_start();
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
        <link href='http://fonts.googleapis.com/css?family=Raleway:400,100,900,800,600,500,700,300,200' rel='stylesheet' type='text/css'>
        
        <link rel="stylesheet" href="../css/bootstrap.css">
        <link rel="stylesheet" href="../rs-plugin/css/settings.css" media="screen" />
        <link rel="stylesheet" href="../fonts/font-awesome/css/font-awesome.min.css">
        <link rel="stylesheet" href="../css/plugins.css" />
        <link rel="stylesheet" href="../css/style.css" />
        <link rel="stylesheet" href="../css/scrolling-nav.css" />
        
        <script src="../js/jquery-1.11.2.min.js"></script> 
        <script src="../js/jquery-migrate-1.2.1.min.js"></script> 
        <script src="../js/bootstrap.min.js"></script> 
        <script src="../rs-plugin/js/jquery.themepunch.tools.min.js"></script> 
        <script src="../rs-plugin/js/jquery.themepunch.revolution.min.js"></script> 
        <script src="../js/plugins.js"></script> 
        <script src="../js/custom.js"></script> 
        <script src="../js/scrolling-nav.js"></script>
        <script src="../js/jquery.easing.min.js"></script>
        
        <script src="js/sha512.js"></script> 
        <script src="js/forms.js"></script> 
        
        <style>
            body {
                background-image: url("../images/slider/slider1.jpg");
                background-repeat: no-repeat;
                background-color: rgba(128, 128, 128, 0.4);
                background-attachment: fixed;
                background-size: cover;
                min-height: 2000px;
            }
            
            .btn-file {
                position: relative;
                overflow: hidden;
            }
            .btn-file input[type=file] {
                position: absolute;
                top: 0;
                right: 0;
                min-width: 100%;
                min-height: 100%;
                font-size: 100px;
                text-align: right;
                filter: alpha(opacity=0);
                opacity: 0;
                outline: none;
                background: white;
                cursor: inherit;
                display: block;
            }
            .col-md-4{
                border: 1px solid;
            }
            .img-admin{
                height: 100px;
                width: 150px;
            }
        </style>
        
<?php 

if($_GET['id_proyecto'] == ''){
    header('location: admin.php');
    exit;
}
$proyecto = getProyecto($mysqli, $_GET['id_proyecto']);
$imgGaleria3 = getGaleryProyectos($mysqli, $_GET['id_proyecto']);

?>
        
    </head>
    <body>
<?php    
if(login_check($mysqli) == true) 
{?>
        <div class="container" style="background-color: white; margin-top: 10%; padding: 1%">
            <h1>Proyecto: <?php echo $proyecto['titulo']?></h1>
            <h2>Agregar Imagenes</h2>
            <div class="col-md-4">
                <form class="form-inline" enctype="multipart/form-data" method="POST" action="upload.php">
                    <input type="hidden" value="<?php echo $_GET['id_proyecto']?>" name="id_proyecto" id="id_proyecto" />
                    <div class="form-group">
                        <label>Imagen: </label>
                        <input type="file" accept="file_extension|image" class="form-control" name="photo" autofocus>
                    </div>
                    <div class="form-group">
                        <label >T&iacute;tulo: </label>
                        <input type="text" class="form-control" name="titulo" id="titulo">
                    </div>
                    <div class="form-group">
                        <label >Descripci&oacute;n: </label>
                        <textarea   
                                    rows="3" 
                                    cols="50" 
                                    name="desc" 
                                    class="form-control" 
                                    id="desc" 
                                    style="width:100%;"
                                    required><?php echo $img['descripcion']?></textarea>
                    </div>

                    <button type="submit" class="btn btn-success">Agregar</button>
                </form>
            </div>
        </div>
            
        <div class="container" style="background-color: white; margin-top: 10%; padding: 1%">

        <?php foreach ($imgGaleria3 as $img){?>
            <div class="col-md-4">
                <form class="form-inline" enctype="multipart/form-data" method="POST" action="upload.php?id_imagen=<?php echo $img['id']?>">
                    <input type="hidden" value="<?php echo $_GET['id_proyecto']?>" name="id_proyecto" id="id_proyecto" />
                    <div class="form-group">
                        <label>
                            <?php 
                                $urlImg = "../images/sin_imagen.jpg";
                                
                                if($img['url_img'] != null && $img['url_img'] != '')
                                {
                                    $urlImg = "../uploads/proyectos/thumb/".$img['url_img']; 
                                }
                            ?>
                            <img class="img-admin" src="<?php echo $urlImg?>" />
                        </label>
                        <span class="btn btn-primary btn-file">
                            Seleccionar Imagen<input type="file" accept="file_extension|image" name="photo">
                        </span>    
                    </div>
                    <div class="form-group">
                        <label >T&iacute;tulo: </label>
                        <input type="text" class="form-control" value="<?php echo $img['titulo']?>" name="titulo" id="titulo">
                    </div>
                    <div class="form-group">
                        <label >Descripci&oacute;n: </label>
                        <textarea   
                                    rows="3" 
                                    cols="50" 
                                    name="desc" 
                                    class="form-control" 
                                    id="desc" 
                                    style="width:100%;"
                                    required><?php echo $img['descripcion']?></textarea>
                    </div>

                    <div>
                        <button type="button" onclick="update(this.form)" class="btn btn-success">Editar</button>
                        <button type="button" onclick="borrar(this.form)" class="btn btn-danger">Borrar</button>
                    </div>    
                </form>
            </div>
        <?php }?>
            <div class="col-md-12" style="margin: 1%">
                <a class="btn btn-info" value="volver" href="admin.php">volver</a>
            </div>    
        </div>
<?php
}
else 
{ 
    echo 'You are not authorized to access this page, please login.';
}
?>
<script>
    function goBack() {
        window.history.back();
    }
</script>
<body>
