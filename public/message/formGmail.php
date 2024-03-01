

<?php
header('Content-Type: text/html; charset=utf-8');




//require './public/view/libreria/PHPMailer-PHPMailer-2128d99/get_oauth_token.php';


if($_POST){
    $id= $_POST["id_ser"];
    $email = $_POST["email"];

    $imagenes_main = ["https://blogger.googleusercontent.com/img/b/R29vZ2xl/AVvXsEj72Ga0skRjXoSA4lfHicy1rVJ0kd5DcCKq7Tj8LAhtap-6L4lrRsnoD85TRihXDx1OWE3BdIhRz1j5IJEidAzv1du5Ya5VQBLBAxuGEG9xuK6v4gjpP9jB3dA6otzZXV3j1vxXkdvrpto8i2l3HtzNjmaTWaeX_-Mb0G6jGCifbxBt5Jzyr_fEoZgL7xhQ/s16000/flyer-modal-1-1.jpg",
    'https://blogger.googleusercontent.com/img/b/R29vZ2xl/AVvXsEggZAozhvwXsX_KVF_unYAOXhUspbAuw03Gkouv51yzLaGHdmhzW-0nw63eD99WV7nywIIUBcy75xO2XCWG3KxosXfty7Kr0XUOpWeMXzNYaNhasB4j6sQQogbEsxvlfhrOXSgYmjv67ioEGowFeV2tl6-b568yNZVXvSaqHmZDcwpPb5bwm-MJPXoKvid7/s16000/flyer-modal-1-2.jpg',
    'https://blogger.googleusercontent.com/img/b/R29vZ2xl/AVvXsEhovmlEgV271V1uhTZBHYgNiPVC1wWYQimBUX4cCEs9ozmaVKOQPFT1ZDP5SUs-cnVgttagVS985vwePSAwRRJyFslHtwkY900Ll4aKpjh1wK40CYayhsBqJy4DI_Y1zI9INeQTXwGlfBDGXAlgvMaY-lMMtu5jcRZM2Q_Dcl-CCP8NtAQWuSRGNX2WRHlj/s16000/flyer-modal-1-3.jpg',
    'https://blogger.googleusercontent.com/img/b/R29vZ2xl/AVvXsEiZTZrnY2A4K0McC6bFqIwChjlYcFsBVjaL-4gVzl87zajaE32egRRBKmIWQ4sfxu3j3MWpvNyXIfbyGpSjw9VS1rFwxMmqREpt0ka-uVimP5wF7o7143ir50K5_AKyJ5ZWvTXKg7_1kh61reKojmQiX6Lr2QkmM6r_1GFPXb2HRGFlYH-SSi5UUEfqOc5S/s16000/flyer-modal-2-1.jpg'];

    $title = ["¡IMPULSA TU ÉXITO ONLINE CON DIGIMEDIA! 🌐",
    "¡POTENCIA TU NEGOCIO DIGITAL CON DIGIMEDIA!  📈",
    "¡CRECE TU NEGOCIO CON DIGIMEDIA!📈",
    "¡DESTACA TU NEGOCIO DIGITAL CON DIGIMEDIA!🙌🏼"];

    
    $menssage = ["¿Estás cansado de enfrentar problemas con tu sitio web que afectan el crecimiento de tu negocio?  En Digimedia, no solo creamos sitios web, ¡forjamos plataformas de impacto! 📈.                       
    
    ¿Por qué elegir nuestro servicio de desarrollo web? 🚀
    
    📌Diseño impactante con resultados asombrosos
    📌Experiencia del usuario que deja huella
    
    Estamos emocionados de ser tu socio en tu próximo éxito online. Si estás listo para un desarrollo web que marque la diferencia, ¡contáctanos ahora! 
    ",
    "¿Tus redes sociales no generan interacciones? En DigiMedia, estamos comprometidos en potenciar tu presencia en línea a través de la gestión de redes sociales. Al confiarnos la administración de tus plataformas digitales, experimentarás un aumento significativo en la visibilidad y participación de tu marca. 
    
    Nuestros beneficios exclusivos:
    
    - 🚀 Potenciación de tu presencia digital.
    - 🚀 Contenido estratégico y de valor.
    
    ¡Transformemos juntos tu presencia digital! ¡Háznoslo saber! 
    ",
    "En DigiMedia Marketing, estamos comprometidos en el mejor desarrollo en marketing  digital. Tendremos el placer de armar estrategias que promuevan tu marca a través de diferentes entornos digitales.
    
    ¿Las estrategias que planteas no logran los objetivos de tu empresa?, entonces adquiere nuestro servicio con beneficios exclusivos🙌: 
    <br>
    📌Mejorar tu visibilidad online
    📌Vínculo de lealtad con los clientes 
                      
    ¡No te quedes atrás en la era digital y transforma tu marca con soluciones innovadoras! Contáctanos y que comience tu presencia digital.
    ",
    "¿Sientes que tu negocio no se diferencia del resto? ¡Haz que tu marca sea inolvidable !  
    En DigiMedia, estamos preparados para llevar la identidad de tu marca a otro nivel. Somos especialistas en crear diseños irresistibles y branding cautivador.
    Adquiere nuestros beneficios exclusivos 🚀:               
    
    📌Diferenciación y Reconocimiento
    Prepárate para darle un giro a tu negocio con todos nuestros beneficios . ¡Contacte con nosotros !
    "];
    $mensaje2 = nl2br($menssage[$id-1]);
    $mensages_main = "
    
    <!DOCTYPE html>
    <html>
    <head>
        <title>Ejemplo</title>
        <meta charset=\"UTF-8\">
        <meta name=\"viewport\" content=\"width=device-width, initial-scale=1.0\">
        <style>
        @media only screen and (max-width: 600px) {
            table[width=\"70%\"] {
                width: 90% !important; /* Cambia el ancho del contenedor al 90% en dispositivos móviles */
            }
        }
        </style>
    </head>
    <body>
        <table width=\"100%\" border=\"0\" cellspacing=\"0\" cellpadding=\"0\">
            <tr>
                <td align=\"center\">
                    <table border=\"0\" cellspacing=\"0\" cellpadding=\"0\" style=\"background: rgb(228, 236, 237); width: 70%; box-shadow: 1px 2px 3px 2px black;\">
                        <tr>
                            <td align=\"center\">
                                <h1 style=\"color: rgb(20, 20, 18); font-size: 3vw; margin-top: 0;padding: 5%;\">".$title[$id-1]."</h1>
                                <p style=\"font-size: 2vw; padding: 5%; text-align: left;\">".$mensaje2."</p>
                                <img src=".$imagenes_main[$id-1]." style=\"width: 90%; height: auto;\">
                            </td>
                        </tr>
                    </table>
                </td>
            </tr>
        </table>
    </body>    
    </html>
    "
    ;
    
    

    $asunto = $title[$id-1];
    $msg = $mensages_main;

    $header = "From: noreply@example.com\r\n";
    $header .= "X-Mailer: PHP/" . phpversion() . " \r\n";
    $header .= "Mime-Version: 1.0 \r\n";
    $header .= "Content-Type: text/html";
    

    $mail = mail($email, $asunto, $msg, $header);
    if($mail){
        echo "\n he esperado ".$email;
    } else {
        echo "\n Error al enviar el correo, y por aver esperado 5";
    }
}


?>

