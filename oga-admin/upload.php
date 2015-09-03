<?php
include_once 'includes/db_connect.php';
include_once 'includes/functions.php';
include_once 'includes/resizeImage.php';

sec_session_start();

$resultado = true;
$message = 'Exito';
if(login_check($mysqli) == true) 
{
    if(isset($_GET['id']))
    {
        if(isset($_GET['borrar']))
        {
            $stmt = $mysqli->prepare("SELECT img_galerias.url_img FROM img_galerias WHERE img_galerias.id = ?");
            $stmt->bind_param('s', $_GET['id']);
            $stmt->execute();
            
            /* ligar variables de resultado */
            $stmt->bind_result($url_img);

            /* obtener valor */
            $stmt->fetch();
            $stmt->close();
            //die(file_exists($url_img));
            if(file_exists("../".$url_img))
            {
                unlink("../".$url_img);
                unlink("../uploads/thumb/".$url_img);
            }

            $mysqli->query("DELETE FROM img_galerias WHERE img_galerias.id = " . $_GET['id']);
        }
        else
        {
            if(isset($_FILES['photo']['name']) && $_FILES['photo']['name'] != '')
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
                        //ruta temporal donde se aguarda la imagen antes de ser redimensionada y movida a "uploads"
                        $ruta_temp = 'uploads/temp/'.$new_file_name;
                        //ruta de los thumbs
                        $ruta_thumb = 'uploads/thumb/uploads/'.$new_file_name;

                        move_uploaded_file($_FILES['photo']['tmp_name'], '../'.$ruta_temp);

                        $newImg = new resize('../'.$ruta_temp);
                        $newImg->resizeImage(800,600);
                        $exito = $newImg->saveImage('../'.$ruta);
                        if($exito)
                        {
                            unlink('../'.$ruta_temp);
                            
                            //creo el thumb
                            $newThumb = new resize('../'.$ruta);
                            $newThumb->resizeImage(150,632,"landscape");
                            $exito = $newThumb->saveImage('../'.$ruta_thumb);
                            
                            $stmt = $mysqli->prepare("SELECT img_galerias.url_img FROM img_galerias WHERE img_galerias.id = ?");
                            $stmt->bind_param('s', $_GET['id']);
                            $stmt->execute();
                            
                            /* ligar variables de resultado */
                            $stmt->bind_result($url_img);

                            /* obtener valor */
                            $stmt->fetch();
                            $stmt->close();
                            //die(file_exists($url_img));
                            if(file_exists("../".$url_img))
                            {
                                unlink("../".$url_img);
                                unlink("../uploads/thumb/".$url_img);
                            }     

                            $stmt2 = $mysqli->prepare("UPDATE img_galerias SET url_img = ?, titulo = ?, descripcion = ? , galeria = ? WHERE id = ?");
                            $stmt2->bind_param('sssdd', $ruta, $_POST['titulo'], $_POST['desc'], $_POST['galeria'], $_GET['id']);
                            $stmt2->execute();

                            if(!$stmt2)
                            {
                                $message = 'Algo salio mal con la query a la db';
                                $valid_file = false;
                            }
                            $stmt2->close();
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
                $stmt = $mysqli->prepare("UPDATE img_galerias SET titulo = ?, descripcion = ? , galeria = ? WHERE id = ?");
                $stmt->bind_param('ssdd', $_POST['titulo'], $_POST['desc'], $_POST['galeria'], $_GET['id']);
                $stmt->execute();
            }
        }
        header('Location: admin.php');
    }
    else
    {   
        if($_POST['action'] == 'proyecto')
        {
            
        }
        else
        {
            //if they DID upload a file...
            if(isset($_FILES['photo']['name']) && $_FILES['photo']['name'] != '')
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
                                //ruta temporal donde se aguarda la imagen antes de ser redimensionada y movida a "uploads"
                                $ruta_temp = 'uploads/temp/'.$new_file_name;
                                //ruta de los thumbs
                                $ruta_thumb = 'uploads/thumb/uploads/'.$new_file_name;

                                move_uploaded_file($_FILES['photo']['tmp_name'], '../'.$ruta_temp);

                                $newImg = new resize('../'.$ruta_temp);
                                $newImg->resizeImage(800,600);
                                $exito = $newImg->saveImage('../'.$ruta);
                                if($exito)
                                {
                                    unlink('../'.$ruta_temp);

                                    //creo el thumb
                                    $newThumb = new resize('../'.$ruta);
                                    $newThumb->resizeImage(150,632,"landscape");
                                    $exito = $newThumb->saveImage('../'.$ruta_thumb);

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
        }
        header('Location: admin.php');
    }
}    
else
{ 
    echo 'You are not authorized to access this page, please login.';
}