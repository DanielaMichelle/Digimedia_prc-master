<?php

    if($_SERVER['REQUEST_METHOD'] !== 'POST') {
        exit(json_encode(null));
    }

    use PHPMailer\PHPMailer\PHPMailer;
    use PHPMailer\PHPMailer\Exception;  

    require 'PHPMailer/Exception.php';
    require 'PHPMailer/PHPMailer.php';
    require 'PHPMailer/SMTP.php';   

    $email      = $_POST['email'];
    $title      = $_POST['title'];
    $subject    = $_POST['subject'];
    $body       = $_POST['body'];
    
    $mail = new PHPMailer(true);

    try {
        $mail->SMTPDebug = 0;                                      
        $mail->isSMTP();                                           
        $mail->Host       = 'mail.digimediamkt.com';                     
        $mail->SMTPAuth   = true;   

        //dara correo:
        $mail->Username   = 'digi.mediamkt@gmail.com';                    
        $mail->Password   = 'Digimedia2024@.#';                               
        $mail->SMTPSecure =  'ssl';  //ssl o tls
        $mail->Port       = 465;                                   

        $mail->setFrom('digi.mediamkt@gmail.com', $title);
        $mail->addAddress($email);     

        $mail->isHTML(true);  

        $mail->Subject  = $subject;
        $mail->Body     = $body;

        $mail->send();

        echo json_encode([
            "status" => true,
            "message" => "Mensaje Enviado Correctamente",
        ]); 
        
    } catch (Exception $e) {

        echo json_encode([
            "status" => false,
            "message" => $mail->ErrorInfo,
        ]); 
    }


// echo json_encode($_POST);