<?php
include_once 'includes/db_connect.php';
include_once 'includes/functions.php';
 
sec_session_start();
 
if (login_check($mysqli) == true) {
    $logged = 'in';
} else {
    $logged = 'out';
}
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
                background-size: cover;
            }
            .form-signin
            {
                max-width: 330px;
                padding: 15px;
                margin: 0 auto;
            }
            .form-signin .form-signin-heading, .form-signin .checkbox
            {
                margin-bottom: 10px;
            }
            .form-signin .checkbox
            {
                font-weight: normal;
            }
            .form-signin .form-control
            {
                position: relative;
                font-size: 16px;
                height: auto;
                padding: 10px;
                -webkit-box-sizing: border-box;
                -moz-box-sizing: border-box;
                box-sizing: border-box;
            }
            .form-signin .form-control:focus
            {
                z-index: 2;
            }
            .form-signin input[type="text"]
            {
                margin-bottom: -1px;
                border-bottom-left-radius: 0;
                border-bottom-right-radius: 0;
            }
            .form-signin input[type="password"]
            {
                margin-bottom: 10px;
                border-top-left-radius: 0;
                border-top-right-radius: 0;
            }
            .account-wall
            {
                margin-top: 20px;
                padding: 40px 0px 20px 0px;
                background-color: #f7f7f7;
                -moz-box-shadow: 0px 2px 2px rgba(0, 0, 0, 0.3);
                -webkit-box-shadow: 0px 2px 2px rgba(0, 0, 0, 0.3);
                box-shadow: 0px 2px 2px rgba(0, 0, 0, 0.3);
            }
            .login-title
            {
                color: #555;
                font-size: 28px;
                font-weight: 800;
                display: block;
            }
            .profile-img
            {
                width: 96px;
                height: 96px;
                margin: 0 auto 10px;
                display: block;
                -moz-border-radius: 50%;
                -webkit-border-radius: 50%;
                border-radius: 50%;
            }
            .need-help
            {
                margin-top: 10px;
            }
            .new-account
            {
                display: block;
                margin-top: 10px;
            }
            
        </style>
    </head>
    
    
    <body>
        <div class="container">
            <div class="row">
                <div class="col-sm-6 col-md-4 col-md-offset-4">
                    <div class="account-wall">
                        <form class="form-signin" method="POST" action="includes/process_login.php">
                            <?php
                                if (isset($_GET['error'])) 
                                {
                                    echo '<p class="error">email o password incorrecto</p>';
                                }
                                ?>
                            <input type="text" name="email" class="form-control" placeholder="email" required autofocus>
                            <input type="password" name="password" id="password" class="form-control" placeholder="contraseña" required>
                            <button class="btn btn-lg btn-primary btn-block" 
                                    type="button" 
                                    onclick="formhash(this.form, this.form.password);">
                                Ingresar
                            </button>
                    </div>
                </div>
            </div>
    </body>
</html>

