<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>.:: DigiMedia ::.</title>
    <link rel="shortcut icon" href="./public/img/logo.png" type="image/x-icon">
    <meta name="description" content="Digimedia un mundo innovador">
    <link rel="stylesheet" href="./public/css/index.css">
    <link rel="stylesheet" href="./public/css/style.css">
    <link rel="stylesheet" href="./public/css/inicio.css">
    <link rel="stylesheet" href="./public/css/header.css">
    <link rel="stylesheet" href="./public/css/footer.css">
    <link rel="stylesheet" href="./public/css/section.css">

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    <!-- Stylos Css propios -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css">
    <!-- Fuente Poppins -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap"
        rel="stylesheet">
    <!-- Fuente Open Sans -->
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans:ital,wght@0,300..800;1,300..800&display=swap"
        rel="stylesheet">

    <!-- Google tag (gtag.js) -->
    <script async src="https://www.googletagmanager.com/gtag/js?id=UA-143365030-1"></script>
    <script>
        window.dataLayer = window.dataLayer || [];
        function gtag() { dataLayer.push(arguments); }
        gtag('js', new Date());

        gtag('config', 'UA-143365030-1');
    </script>


</head>

<body>
    <?php include_once './public/assets/header.php' ?>

    <!-- Hero -->
    <section class="hero">
        <div class="container-hero">
            <div class="hero-text">
                <h1>¿No sabes por dónde empezar?</h1>
                <p>Contáctanos e impulsa tu presencia en la web con una <span>asesoría gratuita</span></p>
                <button class="hero-buttom">Comienza hoy mismo</button>
            </div>
            <ul class="hero-media">
                <li class="nav-item">
                    <a class="social-icon-hero" target="_blank"
                        href="https://pe.linkedin.com/in/digimedia-marketing?trk=public_post_feed-actor-name"
                        title="Linkedin!" aria-label="Nuestro Linkedin.."><i id="hero-icon-linkeding"
                            class="fa-brands fa-linkedin-in"></i></a>
                </li>
                <li class="nav-item">
                    <a class="social-icon-hero" target="_blank" href="https://www.instagram.com/digimediamkt/"
                        title="Instagram!" aria-label="Nuestro Instagram.."><i id="hero-icon-instagram"
                            class="fa-brands fa-instagram"></i></a>
                </li>
                <li class="nav-item">
                    <a class="social-icon-hero" target="_blank" href="https://www.youtube.com/@digimediamarketing2636"
                        title="Youtube!" aria-label="Nuestro Youtube.."><i id="hero-icon-youtube"
                            class="fa-brands fa-youtube"></i></a>
                </li>
                <li class="nav-item">
                    <a class="social-icon-hero" target="_blank" href="https://www.facebook.com/DigiMedia.Marketing1"
                        title="Facebook!" aria-label="Nuestro Facebook.."><i id="hero-icon-facebook"
                            class="fa-brands fa-facebook"></i></a>
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
            <div class="nuestros-servicios-text-bottom">
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
                <a href="servicios/diseno-desarrollo-web/1">
                    <i class="fa-solid fa-angle-right"></i>
                </a>
            </div>

            <div class="seccion gestion-redes-sociales">
                <h3>Gestión de Redes Sociales</h3>
                <p>*La optimización estratégica para impacto, alcance y presencia de una marca.*</p>
                <a href="servicios/gestion-redes-sociales/2">
                    <i class="fa-solid fa-angle-right"></i>
                </a>
            </div>

            <div class="seccion marketing-gestion-digital">
                <h3>Marketing y Gestión Digital</h3>
                <p>*La ampliación de alcance y fortalecimiento de relaciones con clientes en línea.*</p>
                <a href="servicios/marketing-gestion-digital/3">
                    <i class="fa-solid fa-angle-right"></i>
                </a>
            </div>

            <div class="seccion branding-diseno">
                <h3>Branding y Diseño</h3>
                <p>*La unión de estos genera experiencias memorables, conexión emocional y diferenciación de otros.*</p>
                <a href="servicios/brading-desing/4">
                    <i class="fa-solid fa-angle-right"></i>
                </a>
            </div>
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
            <a href="https://wa.me/51936910425" target="_blank">
                <i class="fa-brands fa-whatsapp"></i>
            </a>
        </div>
    </div>


    <?php include_once './public/include/section_maps.php' ?>
    <script src="./public/js/interactividad.js"></script>
    <?php include_once './public/assets/footer.php' ?>

</body>

</html>