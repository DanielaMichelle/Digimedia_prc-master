<!DOCTYPE html>
<html lang="en">
<?php

$fileCSS    = ['index', 'style', 'inicio', 'header', 'footer', 'servicios', 'section', 'mas-servicios'];
include_once './public/include/html_services.php';
?>

<body>
    <?php include_once './public/assets/header.php' ?>

    <?php

    $servicio = isset($_GET['id']) ? $_GET['id'] : 1;
    if (is_file("./public/view/servicios/{$servicio}.php"))
        require_once "./public/view/servicios/{$servicio}.php";
    else
        require_once "./public/view/servicios/1.php";
    ?>

    <!-- modales servicios -->
    <?php
    $servicio = isset($_GET['id']) ? $_GET['id'] : 1;
    if (is_file("./public/view/modales/{$servicio}-modal.php"))
        require_once "./public/view/modales/{$servicio}-modal.php";
    else
        require_once "./public/view/modales/1-modal.php";
    ?>

    <?php
    $servicio = isset($_GET['id']) ? $_GET['id'] : 1;
    if (is_file("./public/view/services_option/{$servicio}-section.php"))
        require_once "./public/view/services_option/{$servicio}-section.php";
    else
        require_once "./public/view/services_option/1-section.php";
    ?>

    <div class="con-anun5" id="anuncio-servicio">
        <div class="no-search">
            <h5 class="title-nosearch">¿No encontraste lo que<br> buscabas?</h5>
            <div class="pt-3"></div>
            <p class="anuncio-servicio__text" style="font-size: 24px; line-height:normal;"><b>Tenemos más servicios para ti</b></p>
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
                <tr class="services-continer">
                    <td class="desarrollo">
                        <div style="border-radius: 50px;" class="cards-nosearch" title="MARKETING Y GESTIÓN DIGITAL">
                            <img style="border-radius: 50px;" class="card-imagenosearch" href="marketing-digital.php" src="./public/img/mas-servicios-desarrollo3.webp" alt="2 (1).webp" fetchpriority="high">
                            <p class=" " style="font-size:20px; line-height:normal;">
                                <span style="color:#059EFF;" class="">
                                    <a href="servicios/diseno-desarrollo-web/1" target="_self" class="">
                                        <span style="font-size:20px;">
                                            <center><span style="font-family:avenir-lt-w01_85-heavy1475544,sans-serif; letter-spacing:0.05em; "><b class="seconds-titlenosearch">DISEÑO Y DESARROLLO WEB</b></span></center>
                                        </span>
                                    </a>
                                </span>
                            </p>
                        </div>
                    </td>
                    <td class="gestion">
                        <div style="border-radius: 50px;" class="cards-nosearch" title="GESTIÓN DE REDES SOCIALES">
                            <img style="border-radius: 50px;" class="card-imagenosearch" href="rd-sociales.php" src="./public/img/gestion-redes3.webp" alt="2 (1).webp" fetchpriority="high">
                            <p style="font-size:20px; line-height:normal;">
                                <span style="color:#059EFF;" class="">
                                    <a href="servicios/gestion-redes-sociales/2" target="_self" class="">
                                        <span style="font-size:20px;">
                                            <center><span style="font-family:avenir-lt-w01_85-heavy1475544,sans-serif; letter-spacing:0.05em; "><b class="seconds-titlenosearch">GESTIÓN DE REDES
                                                        SOCIALES</b></span></center>
                                        </span>
                                    </a>
                                </span>
                            </p>
                        </div>
                    </td>
                    <td class="branding">
                        <div style="border-radius: 50px;" class="cards-nosearch" title="BRANDING Y DISEÑO">
                            <img style="border-radius: 50px;" class="card-imagenosearch" href="branding.php" src="./public/img/branding3.webp" alt="2 (1).webp" fetchpriority="high">
                            <p class=" " style="font-size:20px; line-height:normal;">
                                <span style="color:#059EFF;">
                                    <a href="servicios/brading-desing/4" target="_self" class="">
                                        <span style="font-size:20px;">
                                            <center><span style="font-family:avenir-lt-w01_85-heavy1475544,sans-serif; letter-spacing:0.05em;"><b class="seconds-titlenosearch">BRANDING Y DISEÑO</b></span>
                                            </center>
                                        </span>
                                    </a>
                                </span>
                            </p>
                        </div>
                    </td>
                    <td class="marketing">
                        <div style="border-radius: 50px;" class="cards-nosearch" title="MARKETING Y GESTIÓN DIGITAL">
                            <img style="border-radius: 50px;" class="card-imagenosearch" href="marketing-digital.php" src="./public/img/marketing_gestion3.webp" alt="2 (1).webp" fetchpriority="high">
                            <p class=" " style="font-size:20px; line-height:normal;">
                                <span style="color:#059EFF;" class="">
                                    <a href="servicios/marketing-gestion-digital/3" target="_self" class="">
                                        <span style="font-size:20px;">
                                            <center><span style="font-family:avenir-lt-w01_85-heavy1475544,sans-serif; letter-spacing:0.05em; "><b class="seconds-titlenosearch">MARKETING Y GESTIÓN
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
            <a href="https://wa.me/51936910425" target="_blank">
                <i class="fa-brands fa-whatsapp"></i>
            </a>
        </div>
    </div>

    <!-- segundos modales servicios  -->
    <?php
    $servicio = isset($_GET['id']) && ($_GET['id'] == '1' || $_GET['id'] == '2' || $_GET['id'] == '3' || $_GET['id'] == '4') ? $_GET['id'] : null;
    $ruta_modal = $servicio ? "./public/view/modales/{$servicio}-modal-2.php" : null;
    if ($ruta_modal && is_file($ruta_modal)) {
        require_once $ruta_modal;
    }
    ?>
    <?php include_once './public/assets/footer.php' ?>

</body>

</html>