<?php

if($_SERVER['REQUEST_METHOD'] !== 'POST') {
    exit(json_encode(null));
}

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;

require './PHPMailer/Exception.php';
require './PHPMailer/PHPMailer.php';
require './PHPMailer/SMTP.php';


$email      = $_POST['email'];
$title      = $_POST['title'];
$subject    = $_POST['subject'];
$body ="Mensaje de practica 332";
// $body       = $_POST['body'];

$mail = new PHPMailer(true);
try {

     //$mail->SMTPDebug = 1;  
    $mail->isSMTP();                                            
    // $mail->Host       = 'mail.digimediamkt.com';
    $mail->Host       = 'mail.ghx.umd.mybluehost.me';                    
    $mail->SMTPAuth   = true;                                   
    $mail->Username   = 'pruebadigi@ghx.umd.mybluehost.me';                     
    $mail->Password   = 'ventasDIGI2023';                               
    $mail->SMTPSecure = 'ssl';          
    $mail->Port       = 465;                                    

    $mail->SMTPOptions = array(
        'ssl' => array(
            'verify_peer' => false,
            'verify_peer_name' => false,
            'allow_self_signed' => true
        )
    );
    
    //Recipients
    $mail->setFrom('pruebadigi@ghx.umd.mybluehost.me', $title);
    $mail->addAddress($email);     

 

    //Attachments
    // imagen adjunta
   // $mail->addAttachment('/tmp/image.jpg');    //Optional name

    //Content
    $mail->isHTML(true);                                  //Set email format to HTML
    $mail->Subject =  $subject;
    $mail->Body    = $body;

    $mail->send();
    echo json_encode([
        "status" => true,
        "message" => "Mensaje Enviado Correctamente",
    ]); 
} 
    
    catch (Exception $e) {
        echo json_encode([
            "status" => false,
            "message" => $mail->ErrorInfo,
        ]); 

    }