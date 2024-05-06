<?php
// $title  = isset($title) ? $title : 'Document';
/*Si hay archivos css y js damelos, sino hay entonces coloca un arreglo vacio*/
$fileCSS = isset($fileCSS) ? $fileCSS : [];
$fileJS = isset($fileJS) ? $fileJS : [];
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

    <!-- Css de la nube, osea cdn: -->
    <!-- <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous" defer> -->
    <!-- <link rel="stylesheet" href="./public/css/bootstrap.css"> -->

    <!-- <link rel="preload" as="font" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css"> -->

    <script async src="https://kit.fontawesome.com/0ee4e706bf.js" crossorigin="anonymous"></script>

    <!-- Fuente Poppins cdn:-->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;600;700;800;900&display=swap" rel="stylesheet">
    <!-- Fuente Open Sans cdn:-->
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans:ital,wght@0,300..800;1,300..800&display=swap" rel="stylesheet">

    <!-- image preload -->
    <link rel="preload" as="image" href="./public/img/hero-image2.webp">

    <!-- OPTIMIZAR IMAGEN MOVIL-->
    <link rel="preload" href="./public/img/hero-image3-mobile2.webp" as="image" type="image/webp" importance="high">
    <link rel="preload" href="./public/img/hero-image3-tablet.webp" as="image" type="image/webp" importance="high">

    <!-- Si hay valores en $fileCSS, lo recorrera y colocara cada valor en un en enlace de abajo -->
    <?php foreach ($fileCSS as $key => $filename) : ?>
        <link rel="stylesheet" href="./public/css/<?= str_replace(".", "/", $filename) ;?>.css">
    <?php endforeach ?>


    

    <!-- JS NUBE -->
    <script async src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

    <!-- GOGGLE ANALITYCS -->
    <script>
        window.dataLayer = window.dataLayer || [];

        function gtag() {
            dataLayer.push(arguments);
        }
        gtag('js', new Date());

        gtag('config', 'UA-143365030-1');
    </script>


    <!-- js local -->
    <?php foreach ($fileJS as $key => $filename) : ?>
        <!-- Al colocarlo como module, puedes importar funciones y clases en otros archivos -->
        <script async type="module" src="./public/js/<?= str_replace(".", "/", $filename); ?>.js"></script>
    <?php endforeach ?>


</head>