<?php

require_once './controllEmail.php';

//require '../libMail/vendor/autoload.php';
require '../PHPMailer/Exception.php';
require '../PHPMailer/PHPMailer.php';
require '../PHPMailer/SMTP.php';

include '../Controller/info_desk.php';
$id= $_POST["id_ser"];

if(isset($_POST["service"])){
    $trol = $_POST["service"];
    switch ($trol){
        case "diseño":
            $id = 1;
            break;
        case "redes":
            $id = 2;
            break;
        case "marketing":
            $id = 3;
            break;
        case "branding":
            $id = 4;
            break;
    }
}
$mesa1 = SendMessage($menssage[0][$id-1],$imagenes_main[0][$id-1],$title[0][$id-1]);
$mesa2 = SendMessage($menssage[1][$id-1],$imagenes_main[1][$id-1],$title[1][$id-1]);
$mesa3 = SendMessage($menssage[2][$id-1],$imagenes_main[2][$id-1],$title[2][$id-1]);


    
        //$name = $_POST["sub"];
$email = $_POST["email"];
        //$phone = $_POST["message"];
       // $id = $_POST["id_ser"];
        
$respuesta = mainController::funcionName($title[0][$id-1],$email,$mesa1);
$respuesta2 = mainController::funcionName($title[1][$id-1],$email,$mesa2);
$respuesta3 = mainController::funcionName($title[2][$id-1],$email,$mesa3);
echo $respuesta;
    
        
        
    

        


    /*$token = "instance79397";
    $instance_id= "gc1e82fuaqq7r1s6";
    $client = new UltraMsg\WhatsAppApi($token,$instance_id);*/



    
