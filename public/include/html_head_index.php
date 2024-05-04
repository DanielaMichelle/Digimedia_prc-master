<?php
    $fileCSS = isset($fileCSS) ? $fileCSS : []; 
?>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" href="public/img/logo_favi.png" type="image/x-icon">
    <meta name="description" content="Líderes innovadores en marketing digital. Conectamos tu marca con las audiencias del futuro, impulsando tu presencia online hacia el éxito." />
    <link rel="shortcut icon" href="./public/img/logo.png" type="image/x-icon">
    <title>.:: DigiMedia ::.</title>

    <!-- RUTA BASE  -->
    <base href="http://localhost/Digimedia_prc-master/">

   <!--  <script async src="https://kit.fontawesome.com/0ee4e706bf.js" crossorigin="anonymous"></script> -->

     <!-- Fuente Poppins cdn:
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap"
        rel="stylesheet">-->
    <!-- Fuente Open Sans cdn:
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans:ital,wght@0,300..800;1,300..800&display=swap"
        rel="stylesheet">-->

    <!-- image preload -->
    <link rel="preload" as="image" href="./public/img/hero-image2.webp">

    <!-- OPTIMIZAR IMAGEN MOVIL-->
    <link rel="preload" href="./public/img/hero-image3-mobile_11zon.webp" as="image" type="image/webp"  importance="high">
    <link rel="preload" href="./public/img/hero-image3-tablet.webp" as="image" type="image/webp" importance="high" >

    <!-- Si hay valores en $fileCSS, lo recorrera y colocara cada valor en un en enlace de abajo -->
    <?php foreach($fileCSS as $key => $filename) :?>
        <link rel="stylesheet" href="./public/css/<?= str_replace(".", "/", $filename) ;?>.css">
    <?php endforeach ?>


     <!-- JS NUBE -->
    <!--  -->

    <script>
        window.dataLayer = window.dataLayer || [];

        function gtag() {
            dataLayer.push(arguments);
        }
        gtag('js', new Date());

        gtag('config', 'UA-143365030-1');
    </script>
</head>
