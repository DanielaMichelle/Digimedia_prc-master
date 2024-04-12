<!DOCTYPE html>
<html lang="en">
<?php

$fileCSS    = ['index', 'style', 'inicio', 'header', 'footer', 'nosotros', 'section'];
include_once './public/include/html_head.php';
?>

<body>
    <?php include_once './public/assets/header.php' ?>

    <section class="principal">
        <main>
            <h1>¿Quiénes somos?</h1>
            <p>Digimedia es una empresa de marketing digital, que se enfoca en potenciar tu emprendimiento a nivel online. Además, le brinda a tu emprendimiento estrategias que ayuden a cumplir los objetivos de manera eficaz. Somos un grupo de personas comprometidas con el desarrollo de cada marca que nos contacta.</p>
        </main>
    </section>



    <section class="mision_vision">

        <div class="cont1">
            <div class="cont1_img">
                <img src="./public/img/nosotros/nosotros-img1.webp" alt="misión">
            </div>
            <div class="cont1_data">
                <div>
                    <h1>Misión</h1>
                    <p>Ser aliado de los emprendimientos en su posicionamiento digital; mediante la generación de contenido estratégico que garantice el cumplimiento de los objetivos planteados.</p>
                </div>
            </div>
        </div>

        <div class="cont2">
            <div class="cont2_data">
                <div>
                    <h1>Visión</h1>
                    <p>Liderar la transformación digital de las PYME en el Perú; estableciendo vínculos sólidos entre nuestros clientes y sus respectivas audiencias.</p>
                </div>
            </div>
            <div class="cont2_img">
                <img src="./public/img/nosotros/nosotros-img2.webp" alt="visión">
            </div>
        </div>
    </section>

    <section class="CONTENEDOR_VALORES">
        <div class="conten">
            <section id="titulo">
                <h1>Valores</h1>
            </section>

            <section id="valores">
                <article class="valores1">
                    <p>En DigiMedia, creemos firmemente que nuestros valores son fundamentales para el éxito y nos
                        orientan en todas nuestras decisiones y acciones.</p>
                </article>
            </section>

            <div class="container container_LETRAS_VALORES">

                <div class="img">
                    <img src="./public/img/nos_responsabilidad.webp" width="100%" height="100%" loading="lazy"
                        title="Nuestra responsabilidad." alt="Img no encontrada.."
                        style="width: 85px; height: 85px; object-fit: cover; object-position: 50% 50%;"
                        fetchpriority="high" />
                    <div class="tit">
                        <b>
                            <p>Responsabilidad</p>
                        </b>
                    </div>
                    <div class="con">
                        <p class="a"> Nos esforzamos por ser responsables con
                            nuestros clientes, personal y el
                            medio
                            ambiente.</p>
                    </div>
                </div>

                <div class="img">
                    <img src="./public/img/nos_innovacion.webp" width="100%" height="100%" loading="lazy"
                        title="Nuestra Innovación." alt="Img no encontrada.."
                        style="width: 85px; height: 85px; object-fit: cover; object-position: 50% 50%;"
                        fetchpriority="high" />
                    <div class="tit">
                        <b>
                            <p>Innovación</p>
                        </b>
                    </div>
                    <div class="con">
                        <p class="b">Creemos en la importancia de pensar
                            fuera
                            de la caja y ser pioneros en la implementación
                            de
                            soluciones innovadoras.</p>
                    </div>
                </div>

                <div class="img">
                    <img src="./public/img/nos_adaptavilidad.webp" width="100%" height="100%" loading="lazy"
                        title="¡Adaptavilidad!" alt="Img no encontrada.."
                        style="width: 85px; height: 85px; object-fit: cover; object-position: 50% 50%;"
                        fetchpriority="high" />
                    <div class="tit">
                        <b>
                            <p>Adaptabilidad</p>
                        </b>
                    </div>
                    <div class="con">
                        <p class="c">Somos flexibles y estamos dispuestos a
                            aprender y cambiar para tener éxito en un
                            entorno en
                            constante cambio.</p>
                    </div>
                </div>

                <div class="img">
                    <img src="./public/img/nos_trabajo.webp" width="100%" height="100%" loading="lazy"
                        title="¡Adaptavilidad!" alt="Img no encontrada.."
                        style="width: 85px; height: 85px; object-fit: cover; object-position: 50% 50%;"
                        fetchpriority="high" />
                    <div class="tit">
                        <b>
                            <p>Trabajo en equipo</p>
                        </b>
                    </div>
                    <div class="con">
                        <p class="e">Fomentamos un ambiente de colaboración
                            y
                            apoyo en el que todos puedan prosperar y
                            alcanzar su
                            máximo potencial.</p>
                    </div>
                </div>

                <div class="img">
                    <img src="./public/img/nos_compromiso.webp" width="100%" height="100%" loading="lazy"
                        title="¡Nuestro Compromiso!" alt="Img no encontrada.."
                        style="width: 85px; height: 85px; object-fit: cover; object-position: 50% 50%;"
                        fetchpriority="high" />
                    <div class="tit">
                        <b>
                            <p>Compromiso</p>
                        </b>
                    </div>
                    <div class="con">
                        <p class="f">Estamos comprometidos con nuestro
                            trabajo y
                            con lograr un impacto positivo en la comunidad.</p>
                    </div>
                </div>
            </div>

        </div>

    </section>

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

    <?php include_once './public/assets/footer.php' ?>


</body>

</html>