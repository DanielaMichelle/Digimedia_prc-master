<?php
// $title = isset($title) ? $title : 'Document';
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
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
   
    <!-- ICONOS DE BOSTRAP -->
    <!-- <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css"> -->


    <!-- Fuente Poppins cdn:-->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap"
        rel="stylesheet">
    <!-- Fuente Open Sans cdn:-->
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans:ital,wght@0,300..800;1,300..800&display=swap"
        rel="stylesheet">


    <!-- Si hay valores en $fileCSS, lo recorrera y colocara cada valor en un en enlace de abajo -->
    <?php foreach ($fileCSS as $key => $filename): ?>
        <link rel="stylesheet" href="./public/css/<?= str_replace(".", "/", $filename); ?>.css">
    <?php endforeach ?>


    <!-- JS NUBE -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM"
        crossorigin="anonymous"></script>


    <!-- Servicio desing 1 GOGLE ANALITYCS-->
    <meta name="google-site-verification" content="zvd_7b2pmgLXGJTIpThKfQoqwj3g7Qp4JB42EWArIK4" />

    <!--gestion-->
    <meta name="google-site-verification" content="zvd_7b2pmgLXGJTIpThKfQoqwj3g7Qp4JB42EWArIK4" />

    <!--marketing-->
    <meta name="google-site-verification" content="zvd_7b2pmgLXGJTIpThKfQoqwj3g7Qp4JB42EWArIK4" />

    <!--Branding-->
    <meta name="google-site-verification" content="zvd_7b2pmgLXGJTIpThKfQoqwj3g7Qp4JB42EWArIK4" />


    <!-- Google tag (gtag.js) -->
    <script async src="https://www.googletagmanager.com/gtag/js?id=UA-143365030-1"></script>
    <script>
        window.dataLayer = window.dataLayer || [];

        function gtag() {
            dataLayer.push(arguments);
        }
        gtag('js', new Date());

        gtag('config', 'UA-143365030-1');
    </script>


    <!-- js local -->
    <?php foreach ($fileJS as $key => $filename): ?>
        <!-- Al colocarlo como module, puedes importar funciones y clases en otros archivos -->
        <script defer type="module" src="./public/js/<?= str_replace(".", "/", $filename); ?>.js"></script>
    <?php endforeach ?>


</head>