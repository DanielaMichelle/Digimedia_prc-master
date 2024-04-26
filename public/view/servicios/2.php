<section class="hero_dising hero-servicios">
    <div class="lara"><img rel="preload" as="image" class="hero-social-media-img" src="./public/img/redes-sociales-banner3.webp" alt=""></div>
    <div class="container-hero">
        <div>
            <h1>Gestión de redes sociales</h1>
        </div>
    </div>
</section>

<script>
    // cambio de imagen de hero en base al ancho de pantalla
    let widthScreenToService2 = window.innerWidth;
    const imgSocialMediaHero = document.querySelector(".hero-social-media-img");
    if (widthScreenToService2 <= 426) {
        imgSocialMediaHero.setAttribute('src', './public/img/redes-sociales-banner3-mobile.webp');
    } else if (widthScreenToService2 > 426 && widthScreenToService2 <= 768) {
        imgSocialMediaHero.setAttribute('src', './public/img/redes-sociales-banner3-tablet.webp');
    } else {
        imgSocialMediaHero.setAttribute('src', './public/img/redes-sociales-banner3.webp');
    }
</script>

<?php
include "controll.php";
?>