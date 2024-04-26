<section class="hero_dising hero-servicios">
    <div class="lara"><img rel="preload" as="image" class="hero-marketing-img" src="./public/img/marketing_gestion.webp" alt=""></div>
    <div class="container-hero">
        <div>
            <h1>Marketing y gestión digital</h1>
        </div>
    </div>
</section>


<script>
    // cambio de imagen de hero en base al ancho de pantalla
    let widthScreenToService3 = window.innerWidth;
    const imgSocialMediaHero = document.querySelector(".hero-marketing-img");
    if (widthScreenToService3 <= 426) {
        imgSocialMediaHero.setAttribute('src', './public/img/marketing_gestion-mobile.webp');
    } else {
        imgSocialMediaHero.setAttribute('src', './public/img/marketing_gestion.webp');
    }
</script>

<?php 
include "controll.php";
?>