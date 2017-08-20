<?php
// require ReCaptcha class
require('../global/recaptcha-master/src/autoload.php');
//require 'PHPMailer-master/PHPMailerAutoload.php';

require_once("../admin/connection.php");
$connection = new connection;

// configure
$from = 'blinkthenewapp@gmail@gmail.com';
$sendTo = $_POST["email"];
$lan = $_POST["lan"];

$fields = array('name' => 'Name', 'phone' => 'Phone', 'email' => 'Email', 'message' => 'Message'); // array variable name => Text to appear in the email

$recaptchaSecret = '6Le78ScUAAAAALWRRZshuqD2iwNqp2m4ENHMIhvT';

// let's do the sending
if ($lan == "spanish"){
    $errorMessage = 'Se produjo un error. Por favor, intente m&aacute;s tarde';

}else if ($lan == "english"){
    $errorMessage = 'There was an error while submitting the form. Please try again later';
}
try
{
    if (!empty($_POST)) {

        // validate the ReCaptcha, if something is wrong, we throw an Exception, 
        // i.e. code stops executing and goes to catch() block
        
        if (!isset($_POST['g-recaptcha-response'])) {
            throw new \Exception('ReCaptcha is not set.');
        }

        // do not forget to enter your secret key in the config above 
        // from https://www.google.com/recaptcha/admin
        
        $recaptcha = new \ReCaptcha\ReCaptcha($recaptchaSecret, new \ReCaptcha\RequestMethod\CurlPost());
        
        // we validate the ReCaptcha field together with the user's IP address
        
        $response = $recaptcha->verify($_POST['g-recaptcha-response'], $_SERVER['REMOTE_ADDR']);


        if (!$response->isSuccess()) {
            throw new \Exception('ReCaptcha was not validated.');
        }
        
        // everything went well, we can compose the message, as usually
        

        $name = $_POST["name"];
        $phone = $_POST["phone"];
        $mail = $_POST["email"];
        $message = $_POST["message"];
        $datetime = $_POST["datetime"];
        $lan = $_POST["lan"];

        if ($lan == "spanish"){
            $subject = 'Gracias :) - Blink App';
            $okMessage = 'Gracias '.$_POST["name"].' :) ¡En breve nos estaremos comunicando con vos!';
            $emailText = "Muchas gracias por contactarte con nosotros, en breve estaremos respondiendo tu consulta\nSaludos de todo el equipo de Blink App";

        }else if ($lan == "english"){
            $subject = 'Thanks :) - Blink App';
            $okMessage = 'Thanks '.$_POST["name"].' :) We will get back to you soon!';
            $emailText = "Thank you very much for contacting us, we will be answering your inquiry soon\n Greetings from the entire team of Blink App";
        }

        $query = "insert into contactos (name, phone, mail, message, active, date_time) values ('$name','$phone','$mail', '$message', 'true', '$datetime')";

        mysqli_query($connection->connected, $query);

        $headers = array('Content-Type: text/plain; charset="UTF-8";',
            'From: ' . $from,
            'Reply-To: ' . $from,
            'Return-Path: ' . $from,
        );

        mail($sendTo, $subject, $emailText, implode("\n", $headers));

        $responseArray = array('type' => 'success', 'message' => $okMessage);

    }
}
catch (\Exception $e)
{
    $responseArray = array('type' => 'danger', 'message' => $errorMessage);
}

if (!empty($_SERVER['HTTP_X_REQUESTED_WITH']) && strtolower($_SERVER['HTTP_X_REQUESTED_WITH']) == 'xmlhttprequest') {
    $encoded = json_encode($responseArray);

    header('Content-Type: application/json');

    echo $encoded;
}
else {
    echo $responseArray['message'];
}
