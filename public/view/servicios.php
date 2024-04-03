<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>.:: DigiMedia ::.</title>

    <!-- Base URL -->
    <base href="http://localhost/Web_desing_DigimediaPKT/Digimedia_prc-master/">
    <!-- <base href="https://www.digimediamkt.com/"> -->


    <link rel="shortcut icon" href="./public/img/logo.png" type="image/x-icon">
    <meta name="description" content="Nuestros servicios">
    <link rel="stylesheet" href="./public/css/index.css">
    <link rel="stylesheet" href="./public/css/style.css">
    <link rel="stylesheet" href="./public/css/inicio.css">
    <link rel="stylesheet" href="./public/css/header.css">
    <link rel="stylesheet" href="./public/css/footer.css">
    <link rel="stylesheet" href="./public/css/servicios.css">
    <link rel="stylesheet" href="./public/css/section.css">
    <link rel="stylesheet" href="./public/css/mas-servicios.css">


    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=Open+Sans:ital,wght@0,300..800;1,300..800&family=Poppins:ital,wght@0,400;0,500;1,500&display=swap"
        rel="stylesheet">
    <!-- Stylos Css propios -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css">
</head>

<body>
    <?php include_once './public/assets/header.php' ?>

    <?php 

        $servicio = isset($_GET['id']) ? $_GET['id'] : 1;
        if(is_file("./public/view/servicios/{$servicio}.php")) require_once "./public/view/servicios/{$servicio}.php";
        else require_once "./public/view/servicios/1.php"; 
    ?>

    <!-- modales servicios -->
    <?php 
        $servicio = isset($_GET['id']) ? $_GET['id'] : 1;
        if(is_file("./public/view/modales/{$servicio}-modal.php")) require_once "./public/view/modales/{$servicio}-modal.php";
        else require_once "./public/view/modales/1-modal.php"; 
    ?>
    <!-- segundos modales servicios  -->
    <?php 
         $servicio = isset($_GET['id']) && ($_GET['id'] == '2' || $_GET['id'] == '3') ? $_GET['id'] : null;
            #lalala
         $ruta_modal = $servicio ? "./public/view/modales/{$servicio}-modal-2.php" : null; 
         if ($ruta_modal && is_file($ruta_modal)) {
             require_once $ruta_modal;
         }
    ?>
    <?php 
        $servicio = isset($_GET['id']) ? $_GET['id'] : 1;
        if(is_file("./public/view/services_option/{$servicio}-section.php")) require_once "./public/view/services_option/{$servicio}-section.php";
        else require_once "./public/view/services_option/1-section.php"; 
    ?>

    <div class="con-anun5" id="anuncio-servicio">
        <div class="no-search">
            <h5 class="title-nosearch">¿No encontraste lo que<br> buscabas?</h5>
            <div class="pt-3"></div>
            <p style="font-size: 24px; line-height:normal;"><b>Tenemos más servicios para ti</b></p>
        </div>
        <table class="table-nosearch">
            <thead>
                <th class="col-2"></th>
                <th class="col-3"></th>
                <th class="col-0.5"></th>
                <th class="col-3"></th>
                <th class="col-0.5"></th>
                <th class="col-3"></th>
            </thead>
            <tbody>
                <tr>
                    <td></td>
                    <td>
                        <div style="border-radius: 50px;" class="cards-nosearch" title="GESTIÓN DE REDES SOCIALES">
                            <img style="border-radius: 50px;" class="card-imagenosearch" href="rd-sociales.php"
                                src="./public/img/gestion_redes.webp" alt="2 (1).webp" fetchpriority="high">
                            <p style="font-size:20px; line-height:normal;">
                                <span style="color:#059EFF;" class="">
                                    <a href="servicios/gestion-redes-sociales/2" target="_self" class="">
                                        <span style="font-size:20px;">
                                            <center><span
                                                    style="font-family:avenir-lt-w01_85-heavy1475544,sans-serif; letter-spacing:0.05em; "><b
                                                        class="seconds-titlenosearch">GESTIÓN DE REDES
                                                        SOCIALES</b></span></center>
                                        </span>
                                    </a>
                                </span>
                            </p>
                        </div>
                    </td>
                    <td></td>
                    <td>
                        <div style="border-radius: 50px;" class="cards-nosearch" title="BRANDING Y DISEÑO">
                            <img style="border-radius: 50px;" class="card-imagenosearch" href="branding.php"
                                src="./public/img/branding.webp" alt="2 (1).webp" fetchpriority="high">
                            <p class=" " style="font-size:20px; line-height:normal;">
                                <span style="color:#059EFF;">
                                    <a href="servicios/brading-desing/4" target="_self" class="">
                                        <span style="font-size:20px;">
                                            <center><span
                                                    style="font-family:avenir-lt-w01_85-heavy1475544,sans-serif; letter-spacing:0.05em;"><b
                                                        class="seconds-titlenosearch">BRANDING Y DISEÑO</b></span>
                                            </center>
                                        </span>
                                    </a>
                                </span>
                            </p>
                        </div>
                    </td>
                    <td></td>
                    <td>
                        <div style="border-radius: 50px;" class="cards-nosearch" title="MARKETING Y GESTIÓN DIGITAL">
                            <img style="border-radius: 50px;" class="card-imagenosearch" href="marketing-digital.php"
                                src="./public/img/marketing_gestion.webp" alt="2 (1).webp" fetchpriority="high">
                            <p class=" " style="font-size:20px; line-height:normal;">
                                <span style="color:#059EFF;" class="">
                                    <a href="servicios/marketing-gestion-digital/3" target="_self" class="">
                                        <span style="font-size:20px;">
                                            <center><span
                                                    style="font-family:avenir-lt-w01_85-heavy1475544,sans-serif; letter-spacing:0.05em; "><b
                                                        class="seconds-titlenosearch">MARKETING Y GESTIÓN
                                                        DIGITAL</b></span></center>
                                        </span>
                                    </a>
                                </span>
                            </p>
                        </div>
                    </td>
                </tr>
            </tbody>
        </table>
    </div>

    <?php include_once './public/include/section_maps.php' ?>

    <!-- Panel de horario y whatsapp -->
    <div class="botones-contacto botones-contacto--main-page">
        <div onclick="window.scrollTo(0, 0)" class="flecha-arriba">
            <i class="fa-solid fa-up-long"></i>
        </div>
        <div class="whatsapp">
            <a href="https://wa.me/51999351599" target="_blank">
                <i class="fa-brands fa-whatsapp"></i>
            </a>
        </div>
    </div>
    
    <?php include_once './public/assets/footer.php' ?>

    <!-- Modal 2 -->
     <?php 
        $servicio = isset($_GET['id']) ? $_GET['id'] : 1;
        if(is_file("./public/view/modales2/{$servicio}-modal.php")) require_once "./public/view/modales2/{$servicio}-modal.php";
        else require_once "./public/view/modales2/1-modal.php"; 
    ?>

</body>

</html>