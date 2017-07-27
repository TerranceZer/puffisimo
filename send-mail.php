<?php



if(isset($_POST['email'])) {

    // EDIT THE 2 LINES BELOW AS REQUIRED
    $email_to = "nancygomezcervantes@gmail.com";
    $email_subject = "Nuevo intento de contacto para Puffisimo.com.mx";

    function died($error) {
        // your error code can go here
        echo "Lo sentimos mucho, se ha encontrado un error en los datos envíados.";
        echo "Los errores aparecen debajo.<br /><br />";
        echo $error."<br /><br />";
        echo "Por favor corrige los errores e intenta nuevamente.<br /><br />";
        die();
    }


    // validation expected data exists
    if(!isset($_POST['name']) ||
        !isset($_POST['email']) ||
        !isset($_POST['message'])) {
        died('No todos los campos fueron llenados.');
    }



    $first_name = $_POST['name']; // required
    $email_from = $_POST['email']; // required
    $comments = $_POST['message']; // required

    $error_message = "";
    $email_exp = '/^[A-Za-z0-9._%-]+@[A-Za-z0-9.-]+\.[A-Za-z]{2,4}$/';

  if(!preg_match($email_exp,$email_from)) {
    $error_message .= 'La dirección de correo eletrónico parece no ser válida.<br />';
  }

    $string_exp = "/^[A-Za-z .'-]+$/";

  if(!preg_match($string_exp,$first_name)) {
    $error_message .= 'El nombre que has proporcionado parece no ser válido.<br />';
  }

  if(strlen($comments) < 2) {
    $error_message .= 'El mensaje que has proporcionado es demasiado corto.<br />';
  }

  if(strlen($error_message) > 0) {
    died($error_message);
  }

    $email_message = "Detalles de la información de contacto a continuación:\n\n";


    function clean_string($string) {
      $bad = array("content-type","bcc:","to:","cc:","href");
      return str_replace($bad,"",$string);
    }



    $email_message .= "First Name: ".clean_string($first_name)."\n";
    $email_message .= "Email: ".clean_string($email_from)."\n";
    $email_message .= "Comments: ".clean_string($comments)."\n";
$email_contacto = "contacto@puffisimo.com.mx";
// create email headers
$headers = 'From: '.$email_contacto."\r\n".
'Reply-To: '.$email_from."\r\n" .
'X-Mailer: PHP/' . phpversion();
@mail($email_to, $email_subject, $email_message, $headers);
?>

<!-- include your own success html here -->

Gracias por contactarnos, en breve nos comunicaremos contigo.



<?php

}
?>
