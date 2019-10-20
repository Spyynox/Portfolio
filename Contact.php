<?php
       // from the form
       $name = trim(strip_tags($_POST['name']));
       $email = trim(strip_tags($_POST['email']));
       $Object = trim(strip_tags($_POST['Object']));
       $message = htmlentities($_POST['message']);

       // set here
       $subject = "Contact form submitted!";
       $to = 'maxime.mbiya-kiaku@supinternet.fr';

       $body = <<<HTML
$message
HTML;

       $headers = "From: $email\r\n";
       $headers .= "Content-type: text/html\r\n";

       // send the email
       mail($to, $subject, $body, $headers);

       // redirect afterwords, if needed
       header('Location: true.html');
?>