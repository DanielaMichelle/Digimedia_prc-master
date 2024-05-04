<!DOCTYPE html>
<html lang="en">

<style>
    * {
        margin: 0;
        padding: 0;
        box-sizing: border-box;
    }

    .hero {
        width: 100%;
        height: 100vh;
        position: relative;
        overflow: hidden;
        background: linear-gradient(to right, rgb(167 41 189 / 62%), rgb(170 43 193 / .62), rgb(249 54 204 / .5)), url(./public/img/hero-image3.webp);
        background-repeat: no-repeat;
        font-family: "Poppins", sans-serif;
        font-style: normal;
        background-position-y: center;
        background-size: cover
    }

    /* hero Redes Sociales */
    .hero .hero-media {
        list-style: none;
        display: flex;
        flex-direction: column;
        padding: 0;
        justify-self: flex-end;
        padding-right: 6rem;
        gap: 16px;
    }

    .hero .hero-media .social-icon-hero {
        color: #ffffff;
    }

    .hero .hero-media .social-icon-hero .fa-brands {
        font-size: 2rem;
        cursor: pointer;
        transition: transform 0.3s;
    }

    .hero .hero-media .social-icon-hero .fa-brands:hover {
        transform: scale(1.3);
    }

    @media screen and (max-width:768px) {
        .hero {
            background: linear-gradient(to right, rgb(167 41 189 / 62%), rgb(170 43 193 / .62), rgb(249 54 204 / .5)), url(./public/img/hero-image3-tablet.webp);
            background-repeat: no-repeat;
            background-position: center;
            background-position-y: 3rem
        }

        /* Hero Redes Sociales */
        .hero .hero-media {
            padding-right: 10vw;
        }
    }

    @media screen and (max-width:426px) {
        .hero {
            height: 85vh;
            background: linear-gradient(to right, rgb(167 41 189 / 62%), rgb(170 43 193 / .62), rgb(249 54 204 / .5)), url(./public/img/hero-image3-mobile2.webp);
            background-repeat: no-repeat;
            background-position: center;
            background-size: 31rem;
            background-position-y: 2rem
        }

        .hero .hero-media .social-icon-hero .fa-brands {
            font-size: 22px;
        }

        /* Hero Redes Sociales */
        .hero .hero-media {
            display: flex;
            flex-direction: row;
            padding-right: 0;
            justify-self: center;
        }
    }


</style>

<?php
//I'm the God Dog
$fileCSS    = ['style', 'inicio-minified', 'bootstrap-index', 'header', 'section-minified'];
include_once './public/include/html_head_index.php';
?>

<link rel="preload" href="./public/css/footer.css" as="style" onload="this.onload=null;this.rel='stylesheet'">
        <noscript><link rel="stylesheet" href="./public/css/footer.css"></noscript>

<body>
    <?php include_once './public/assets/header.php' ?>

    <!-- Hero -->
    <section class="hero" loading="lazy">
        <div class="container-hero">
            <div class="hero-text">
                <h1>¿No sabes por dónde empezar?</h1>
                <p>Contáctanos e impulsa tu presencia en la web con una <span>asesoría gratuita</span></p>
                <button class="hero-buttom">Comienza hoy mismo</button>
            </div>
            <ul class="hero-media">
                <li class="nav-item">
                    <a class="social-icon-hero" target="_blank" href="https://pe.linkedin.com/in/digimedia-marketing?trk=public_post_feed-actor-name" title="Linkedin!" aria-label="Nuestro Linkedin.."><i id="hero-icon-linkeding" class="fa-brands fa-linkedin-in"></i></a>
                </li>
                <li class="nav-item">
                    <a class="social-icon-hero" target="_blank" href="https://www.instagram.com/digimediamkt/" title="Instagram!" aria-label="Nuestro Instagram.."><i id="hero-icon-instagram" class="fa-brands fa-instagram"></i></a>
                </li>
                <li class="nav-item">
                    <a class="social-icon-hero" target="_blank" href="https://www.youtube.com/@digimediamarketing2636" title="Youtube!" aria-label="Nuestro Youtube.."><i id="hero-icon-youtube" class="fa-brands fa-youtube"></i></a>
                </li>
                <li class="nav-item">
                    <a class="social-icon-hero" target="_blank" href="https://www.facebook.com/DigiMedia.Marketing1" title="Facebook!" aria-label="Nuestro Facebook.."><i id="hero-icon-facebook" class="fa-brands fa-facebook"></i></a>
                </li>
            </ul>
        </div>
    </section>

    <!-- modal principal -->
    <?php include_once './public/include/modal_main.php' ?>

    <!-- Nuestros Servicios -->
    <section class="nuestros-servicios">
        <div class="nuestros-servicios-text">
            <div class="nuestros-servicios-text-top">
                <h2>Nuestros Servicios</h2>
                <p>Digimedia es una empresa de marketing digital, que se enfoca en potenciar tu emprendimiento a nivel
                    online. Además, le brinda a tu emprendimiento estrategias que ayuden a cumplir los objetivos de
                    manera eficaz. Somos un grupo de personas comprometidas con el desarrollo de cada marca que nos
                    contacta.</p>
            </div>
            <div class="nuestros-servicios-text-bottom interactivo-top">
                <span class="nuestros-servicios-text-interactivo"></span>
                <figure class="nuestros-servicios-img-interactivo">
                    <img src="" alt="desarrollo y diseño web">
                </figure>
            </div>
        </div>

        <div class="nuestros-servicios-secciones">
            <div class="seccion diseno-desarrollo-web">
                <h3>Diseño y Desarrollo Web</h3>
                <p>*La creación de una experiencia web óptima mediante la presentación organizada de contenido.*</p>
                <a href="servicios/diseno-desarrollo-web/1" aria-label="Visita el area de diseño y desarrollo web!">
                    <i class="fa-solid fa-angle-right"></i>
                </a>
            </div>

            <div class="seccion gestion-redes-sociales">
                <h3>Gestión de Redes Sociales</h3>
                <p>*La optimización estratégica para impacto, alcance y presencia de una marca.*</p>
                <a href="servicios/gestion-redes-sociales/2" aria-label="Visita la seccion de Gestion de redes sociales!">
                    <i class="fa-solid fa-angle-right"></i>
                </a>
            </div>

            <div class="seccion marketing-gestion-digital">
                <h3>Marketing y Gestión Digital</h3>
                <p>*La ampliación de alcance y fortalecimiento de relaciones con clientes en línea.*</p>
                <a href="servicios/marketing-gestion-digital/3" aria-label="Visita nuestra area de Marketing y gestion digital">
                    <i class="fa-solid fa-angle-right"></i>
                </a>
            </div>

            <div class="seccion branding-diseno">
                <h3>Branding y Diseño</h3>
                <p>*La unión de estos genera experiencias memorables, conexión emocional y diferenciación de otros.*</p>
                <a href="servicios/brading-desing/4" aria-label="Visita la seccion de brading y diseño">
                    <i class="fa-solid fa-angle-right"></i>
                </a>
            </div>
        </div>

        <div class="nuestros-servicios-text-bottom interactivo-bottom">
            <p class="nuestros-servicios-text-interactivo">bottom</p>
            <figure class="nuestros-servicios-img-interactivo">
                <img src="" alt="desarrollo y diseño web">
            </figure>
        </div>

    </section>

    <!-- php include_once './public/include/section_message.php' -->

    <!-- Anuncio contacto -->
    <div class="con-anun3" style="background: linear-gradient(to right,#0199FE,#672BB7);">
        <div class="parrafos1">
            <h5 class="title-go" style="text-shadow:rgba(0, 0, 0, 0.4) 0px 4px 5px;"><Big><Big>¿Quieres iniciarte en el
                        mundo digital?</Big></Big></h5>
            <div class="pt-3"></div>
            <p><b>En DIGIMEDIA te ayudamos a emprender o hacer crecer tu negocio.</b></p>
        </div>
        <!-- <div class="pt-3"></div> -->
        <div class="bota1">

            <a href="contacto.php" class="boton__2" style="box-shadow:rgba(0, 0, 0, 0.4) 0px 4px 5px;text-decoration: none; 
                "><b>Contactar</b></a>
        </div>
        <div class="pt-3"></div>
    </div>

    <!-- Panel de horario y whatsapp -->
    <div class="botones-contacto botones-contacto--main-page">
        <div onclick="window.scrollTo(0, 0)" class="flecha-arriba">
            <i class="fa-solid fa-up-long"></i>
        </div>
        <div class="whatsapp">
            <a href="https://wa.me/51936910425" aria-label="Comunicate con nosotros!" title="Comunicate con nosotros!" target="_blank">
                <i class="fa-brands fa-whatsapp"></i>
            </a>
        </div>
    </div>


    <?php include_once './public/include/section_maps.php' ?>
    <script src="./public/js/interactividad-minified.js" async></script>
    <?php include_once './public/assets/footer.php' ?>

</body>

</html>