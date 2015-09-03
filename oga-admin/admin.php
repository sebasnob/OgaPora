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

$imgGaleria1 = getGalery($mysqli, '1');
$imgGaleria2 = getGalery($mysqli, '2');
$imgGaleria3 = getGalery($mysqli, '3');

?>
        
    </head>
    <body>
<?php    
if(login_check($mysqli) == true) 
{?>
        <div class="container" style="background-color: white; margin-top: 10%; padding: 1%">
            <h2>Nuevas Imagenes</h2>
            <div class="col-md-4">
                <form class="form-inline" enctype="multipart/form-data" method="POST" action="upload.php">
                    <div class="form-group">
                        <label>Imagen: </label>
                        <input type="file" accept="file_extension|image" class="form-control" name="photo" required autofocus>
                    </div>
                    <div class="form-group">
                        <label >T&iacute;tulo: </label>
                        <input type="text" class="form-control" name="titulo" id="titulo" required>
                    </div>
                    <div class="form-group">
                        <label >Descripci&oacute;n: </label>
                        <input type="text" maxlength="600" name="desc" class="form-control" placeholder="600 caracteres máximo" id="desc" style="min-width: 190px" required>
                    </div>
                    <div class="form-group">
                        <label >Galer&iacute;a: </label>
                        <select name="galeria">
                            <option value="1">Obras Finalizadas</option>
                            <option value="2">Obras en Proceso</option>
                            <option value="3">Ventas</option>
                        </select>
                    </div>
                    <button type="submit" class="btn btn-success">Agregar</button>
                </form>
            </div>
        </div>
        
        <div class="container" style="background-color: white; margin-top: 10%; padding: 1%">
            <h3>Imagenes Obras Finalizadas</h3>
        <?php foreach ($imgGaleria1 as $img){?>
            <div class="col-md-4">
                <form class="form-inline" enctype="multipart/form-data" method="POST" action="upload.php?id=<?php echo $img['id']?>">
                    <div class="form-group">
                        <label><img class="img-admin" src="../uploads/thumb/<?=$img['url_img'];?>" /></label>
                        <span class="btn btn-primary btn-file">
                            Seleccionar Imagen<input type="file" accept="file_extension|image" name="photo">
                        </span>
                    </div>
                    <div class="form-group">
                        <label >T&iacute;tulo: </label>
                        <input type="text" class="form-control" value="<?php echo $img['titulo']?>" name="titulo" id="titulo" required>
                    </div>
                    <div class="form-group">
                        <label >Descripci&oacute;n: </label>
                        <input type="text" maxlength="600" name="desc" value="<?php echo $img['descripcion']?>"  class="form-control" placeholder="600 caracteres máximo" id="desc" style="min-width: 190px" required>
                    </div>
                    <?php 
                     $sel1 = ($img['galeria'] == '1') ? 'selected' : '';
                     $sel2 = ($img['galeria'] == '2') ? 'selected' : '';
                     $sel3 = ($img['galeria'] == '3') ? 'selected' : '';
                    ?>
                    <div class="form-group">
                        <label >Galer&iacute;a: </label>
                        <select name="galeria">
                            <option value="1" <?php echo $sel1?>>Obras Finalizadas</option>
                            <option value="2" <?php echo $sel2?>>Obras en Proceso</option>
                            <option value="3" <?php echo $sel3?>>Ventas</option>
                        </select>
                    </div>
                    <button type="submit" class="btn btn-success">Editar</button>
                    <button type="button" onclick="borrar(this.form)" class="btn btn-danger">Borrar</button>
                </form>
            </div>    
        <?php }?>
        </div>
        
        <div class="container" style="background-color: white; margin-top: 10%; padding: 1%">
            <h3>Imagenes Obras en Proceso</h3>
        <?php foreach ($imgGaleria2 as $img){?>
            <div class="col-md-4">
                <form class="form-inline" enctype="multipart/form-data" method="POST" action="upload.php?id=<?php echo $img['id']?>">
                    <div class="form-group">
                        <label><img class="img-admin" src="../uploads/thumb/<?=$img['url_img'];?>" /></label>
                        <span class="btn btn-primary btn-file">
                            Seleccionar Imagen<input type="file" accept="file_extension|image" name="photo">
                        </span>
                    </div>
                    <div class="form-group">
                        <label >T&iacute;tulo: </label>
                        <input type="text" class="form-control" value="<?php echo $img['titulo']?>" name="titulo" id="titulo" required>
                    </div>
                    <div class="form-group">
                        <label >Descripci&oacute;n: </label>
                        <input type="text" maxlength="600" name="desc" value="<?php echo $img['descripcion']?>"  class="form-control" placeholder="600 caracteres máximo" id="desc" style="min-width: 190px" required>
                    </div>
                    <?php 
                     $sel1 = ($img['galeria'] == '1') ? 'selected' : '';
                     $sel2 = ($img['galeria'] == '2') ? 'selected' : '';
                     $sel3 = ($img['galeria'] == '3') ? 'selected' : '';
                    ?>
                    <div class="form-group">
                        <label >Galer&iacute;a: </label>
                        <select name="galeria">
                            <option value="1" <?php echo $sel1?>>Obras Finalizadas</option>
                            <option value="2" <?php echo $sel2?>>Obras en Proceso</option>
                            <option value="3" <?php echo $sel3?>>Ventas</option>
                        </select>
                    </div>
                    <button type="submit" class="btn btn-success">Editar</button>
                    <button type="button" onclick="borrar(this.form)" class="btn btn-danger">Borrar</button>
                </form>
            </div>
        <?php }?>
        </div>
        
        <div class="container" style="background-color: white; margin-top: 10%; padding: 1%">
            <h3>Imagenes Ventas</h3>
        <?php foreach ($imgGaleria3 as $img){?>
            <div class="col-md-4">
                <form class="form-inline" enctype="multipart/form-data" method="POST" action="upload.php?id=<?php echo $img['id']?>">
                    <input type="hidden" value="<?php echo $img['id']?>" id="id_proyecto">
                    <div class="form-group">
                        <label><img class="img-admin" src="../uploads/thumb/<?=$img['url_img'];?>" /></label>
                        <span class="btn btn-primary btn-file">
                            Seleccionar Imagen<input type="file" accept="file_extension|image" name="photo">
                        </span>    
                    </div>
                    <div class="form-group">
                        <label >T&iacute;tulo: </label>
                        <input type="text" class="form-control" value="<?php echo $img['titulo']?>" name="titulo" id="titulo" required>
                    </div>
                    <div class="form-group">
                        <label >Descripci&oacute;n: </label>
                        <input type="text" maxlength="600" name="desc" value="<?php echo $img['descripcion']?>"  class="form-control" placeholder="600 caracteres máximo" id="desc" style="min-width: 190px" required>
                    </div>
                <?php 
                 $sel1 = ($img['galeria'] == '1') ? 'selected' : '';
                 $sel2 = ($img['galeria'] == '2') ? 'selected' : '';
                 $sel3 = ($img['galeria'] == '3') ? 'selected' : '';
                ?>
                    <div class="form-group">
                        <label >Galer&iacute;a: </label>
                        <select name="galeria">
                            <option value="1" <?php echo $sel1?>>Obras Finalizadas</option>
                            <option value="2" <?php echo $sel2?>>Obras en Proceso</option>
                            <option value="3" <?php echo $sel3?>>Ventas</option>
                        </select>
                    </div>
                    <div>
                        <button type="submit" class="btn btn-success">Editar</button>
                        <button type="button" onclick="borrar(this.form)" class="btn btn-danger">Borrar</button>
                        <a href="adminProyectos.php?id_proyecto=<?php echo $img['id']?>" class="btn btn-warning">Editar Proyecto</a>
                    </div>    
                </form>
            </div>
        <?php }?>
        </div>
<?php
}
else 
{ 
    echo 'You are not authorized to access this page, please login.';
}
?>
    <body>
