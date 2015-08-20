<?php
include_once 'includes/db_connect.php';
include_once 'includes/functions.php';
    
sec_session_start();

$resultado = true;
if(login_check($mysqli) == true) 
{
    if(isset($_GET['id']))
    {
        if(isset($_GET['borrar']))
        {
            $mysqli->query("DELETE FROM img_galerias WHERE img_galerias.id = " . $_GET['id']);
        }
        else
        {
            if($_FILES['photo']['name'])
            {
                //if no errors...
                if(!$_FILES['photo']['error'])
                {
                    $valid_file = true;
                        //now is the time to modify the future file name and validate the file
                        $new_file_name = strtolower($_FILES['photo']['name']); //rename file
                        if($_FILES['photo']['size'] > (6144000)) //can't be larger than 6 MB
                        {
                            $valid_file = false;
                            $message = 'Oops!  Your file\'s size is to large.';
                        }

                        $pos = strpos($_FILES['photo']['type'], "image");
                        if ($pos === FALSE)
                        {
                            $valid_file = false;
                            $message = 'Oops!  El archivo no es una imagen.';
                        }

                        //if the file has passed the test
                        if($valid_file)
                        {
                            //move it to where we want it to be
                            $ruta = 'uploads/'.$new_file_name;
                            $exito = move_uploaded_file($_FILES['photo']['tmp_name'], '../'.$ruta);
                            if($exito)
                            {

                                $resultado = $mysqli->query("SELECT * FROM img_galerias WHERE img_galerias.id = " . $_GET['id']);
                                while ($fila = $resultado->fetch_assoc()) 
                                {
                                    if(file_exists($fila['url_img']))
                                    {
                                        unlink($fila['url_img']);
                                    }
                                }     
                                $resutl = $mysqli->query("UPDATE img_galerias SET (titulo, descripcion, url_img, galeria) VALUES ('{$_POST['titulo']}', '{$_POST['desc']}', '{$ruta}', '{$_POST['galeria']}') WHERE id = " . $_GET['id']);

                                if($resutl)
                                {
                                    $message = 'Congratulations!  Your file was accepted.';
                                } 
                                else
                                {
                                    $message = 'Algo salio mal con la query a la db';
                                    $valid_file = false;
                                }
                            }
                            else
                            {
                                $message = 'Error moviendo el archivo';
                                $valid_file = false;
                            }                        
                        }
                    $resultado = $valid_file;
                }
                //if there is an error...
                else
                {
                        //set that to be the returned message
                        $message = 'Ooops!  Your upload triggered the following error:  '.$_FILES['photo']['error'];
                }
            }
            else
            {
                $resutl = $mysqli->query("UPDATE img_galerias SET (titulo, descripcion, galeria) VALUES ('{$_POST['titulo']}', '{$_POST['desc']}', '{$_POST['galeria']}') WHERE id = " . $_GET['id']);
            }
        }
        header('Location: admin.php');
    }
    else
    {    
        //if they DID upload a file...
        if($_FILES['photo']['name'])
        {
                //if no errors...
                if(!$_FILES['photo']['error'])
                {
                    $valid_file = true;
                        //now is the time to modify the future file name and validate the file
                        $new_file_name = strtolower($_FILES['photo']['name']); //rename file
                        if($_FILES['photo']['size'] > (6144000)) //can't be larger than 6 MB
                        {
                            $valid_file = false;
                            $message = 'Oops!  Your file\'s size is to large.';
                        }

                        $pos = strpos($_FILES['photo']['type'], "image");
                        if ($pos === FALSE)
                        {
                            $valid_file = false;
                            $message = 'Oops!  El archivo no es una imagen.';
                        }

                        //if the file has passed the test
                        if($valid_file)
                        {
                            //move it to where we want it to be
                            $ruta = 'uploads/'.$new_file_name;
                            $exito = move_uploaded_file($_FILES['photo']['tmp_name'], '../'.$ruta);
                            if($exito)
                            {

                                $resutl = $mysqli->query("INSERT INTO img_galerias(titulo, descripcion, url_img, galeria) VALUES ('{$_POST['titulo']}', '{$_POST['desc']}', '{$ruta}', '{$_POST['galeria']}')");

                                if($resutl)
                                {
                                    $message = 'Congratulations!  Your file was accepted.';
                                } 
                                else
                                {
                                    $message = 'Algo salio mal con la query a la db';
                                    $valid_file = false;
                                }
                            }
                            else
                            {
                                $message = 'Error moviendo el archivo';
                                $valid_file = false;
                            }                        
                        }
                    $resultado = $valid_file;
                }
                //if there is an error...
                else
                {
                        //set that to be the returned message
                        $message = 'Ooops!  Your upload triggered the following error:  '.$_FILES['photo']['error'];
                }
        }

        header('Location: admin.php');
    }
}    
else
{ 
    echo 'You are not authorized to access this page, please login.';
}