<?php
// require ReCaptcha class
require('recaptcha-master/src/autoload.php');
require_once("../admin/connection.php");
$connection = new connection;

// configure
$from = 'brendarychter@gmail.com';
$sendTo = $_POST["email"];
$subject = 'Blink App - ¡Gracias :)!';
$fields = array('name' => 'Name', 'phone' => 'Phone', 'email' => 'Email', 'message' => 'Message'); // array variable name => Text to appear in the email

/*get session language!!!*/
$okMessage = 'Gracias :) ¡En breve nos estaremos comunicando con vos!';

/*$okMessage = 'Contact form successfully submitted. Thank you, I will get back to you soon!';*/
$errorMessage = 'Se produjo un error. Por favor, intente m&aacute;s tarde';
/*$errorMessage = 'There was an error while submitting the form. Please try again later';*/
$recaptchaSecret = '6Le78ScUAAAAALWRRZshuqD2iwNqp2m4ENHMIhvT';

// let's do the sending
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


        /*Rename base*/
        $query = "insert into contact (name, phone, mail, message, active) values ('$name','$phone','$mail', '$message', 'true')";

        mysqli_query($connection->connected, $query);

        $emailText = "Gracias por tus comentarios";

        /*sacar para cambiar con phpmailer*/
        foreach ($_POST as $key => $value) {

            if (isset($fields[$key])) {
                $emailText .= "$fields[$key]: $value\n";
            }
        }

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
