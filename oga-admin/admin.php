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
}
</style>

<?php 

$imgGaleria1 = getGalery($mysqli, '1');
$imgGaleria2 = getGalery($mysqli, '2');


?>

</head>
<body>
<?php    
if(login_check($mysqli) == true) 
{?>
    <div class="container" style="background-color: white; margin-top: 10%">
        <h5>Nuevas Imagenes</h5>
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
                        <option value="1">1</option>
                        <option value="2">2</option>
                    </select>
                </div>
                <button type="submit" class="btn btn-success">Agregar</button>
            </form>
        
    </div>
    
    <div class="container" style="background-color: white; margin-top: 10%">
        <h5>Imagenes galeria 1</h5>
        <?php foreach ($imgGaleria1 as $img){?>
        <form class="form-inline" enctype="multipart/form-data" method="POST" action="upload.php?id=<?php echo $img['id']?>">
            <div class="form-group">
                <label>Imagen: </label>
                <input type="file" accept="file_extension|image" value="<?php echo $img['url_img']?>" class="form-control" name="photo">
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
                ?>
                <div class="form-group">
                    <label >Galer&iacute;a: </label>
                    <select name="galeria">
                        <option value="1" <?php echo $sel1?>>1</option>
                        <option value="2" <?php echo $sel2?>>2</option>
                    </select>
                </div>
                <button type="submit" class="btn btn-success">Editar</button>
                <button type="button" onclick="borrar(this.form)" class="btn btn-danger">Borrar</button>
            </form>
        <?php }?>
    </div>
    
    <div class="container" style="background-color: white; margin-top: 10%">
        <h5>Imagenes galeria 2</h5>
        <?php foreach ($imgGaleria2 as $img){?>
        <form class="form-inline" enctype="multipart/form-data" method="POST" action="upload.php?id=<?php echo $img['id']?>">
            <div class="form-group">
                <label>Imagen: </label>
                <input type="file" accept="file_extension|image" value="<?php echo $img['url_img']?>" class="form-control" name="photo">
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
                ?>
                <div class="form-group">
                    <label >Galer&iacute;a: </label>
                    <select name="galeria">
                        <option value="1" <?php echo $sel1?>>1</option>
                        <option value="2" <?php echo $sel2?>>2</option>
                    </select>
                </div>
                <button type="submit" class="btn btn-success">Editar</button>
                <button type="button" onclick="borrar(this.form)" class="btn btn-danger">Borrar</button>
            </form>
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
