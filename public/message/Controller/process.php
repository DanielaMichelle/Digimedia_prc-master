<?php

require_once './controllEmail.php';

//require '../libMail/vendor/autoload.php';
require '../PHPMailer/Exception.php';
require '../PHPMailer/PHPMailer.php';
require '../PHPMailer/SMTP.php';

include '../Controller/info_desk.php';

$idServicio= $_POST["id_servicio"];
$index = $_POST["index"];
$email = $_POST["email"];

$mensaje = SendMessage($menssage[$idServicio][$index],$imagenes_main[$idServicio][$index],$title[$idServicio][$index]);
$respuesta = mainController::funcionName($title[$idServicio][$index],$email,$mensaje);
echo $respuesta;

// if(isset($_POST["service"])){
//     $trol = $_POST["service"];
//     switch ($trol){
//         case "0":
//             $id = 1;
//             break;
//         case "1":
//             $id = 2;
//             break;
//         case "2":
//             $id = 3;
//             break;
//         case "3":
//             $id = 4;
//             break;
//         case "Desing y desarrollo web":
//             $id = 1;
//             break;
//         case "Gestion de redes sociales":
//             $id = 2;
//             break;
//         case "Marketing Digital":
//             $id = 3;
//             break;
//         case "Branding y desing":
//             $id = 4;
//             break;
//     }
// }

    
        
        
    

        


    /*$token = "instance79397";
    $instance_id= "gc1e82fuaqq7r1s6";
    $client = new UltraMsg\WhatsAppApi($token,$instance_id);*/



    

