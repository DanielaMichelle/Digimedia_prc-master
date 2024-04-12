<section class="hero_dising hero-servicios">
    <div class="lara"><img class="hero-desarrollo-img" src="./public/img/ds_web2.webp" alt="Diseno y desarrollo"></div>
    <div class="container-hero">
        <div>
            <h1>Diseño y desarrollo web</h1>
        </div>
    </div>
</section>

<section class="con-anun3 anuncio-diseno-desarrollo">
    <h2>Consolida tu presencia web, diseña con nosotros tu página web</h2>
    <div class="bota1">
        <a href="#" title="¡Contactanos!" class="boton__2" onclick="return false;">Incrementa tus ventas</a>
    </div>
</section>

<script>
const mensajesDisenoDesarrollo = [{
        mensaje: "Consolida tu presencia web, diseña con nosotros tu página web",
        mensajeBtn: "Incrementa tus ventas",
    },
    {
        mensaje: "Transforma tu sitio web en una experiencia única",
        mensajeBtn: "¡Descubre cómo!",
    },
    {
        mensaje: "Dale vida a tu sitio web con diseño profesional",
        mensajeBtn: "¡Aumenta tu éxito!",
    },
];

const cambiarMensajeDisenoDesarrollo = () => {
    // Obtener elementos donde se mostrarán los elementos
    var mensajeP = document.querySelector(".anuncio-diseno-desarrollo h2");
    var mensajeBtn = document.querySelector(
        ".anuncio-diseno-desarrollo .bota1 a"
    );

    // Generar un número aleatorio para seleccionar un objeto de mensajes
    var indiceAleatorio = Math.floor(
        Math.random() * mensajesDisenoDesarrollo.length
    );

    // Mostrar el primer mensaje aleatorio en el elemento p
    mensajeP.textContent = mensajesDisenoDesarrollo[indiceAleatorio].mensaje;

    // Mostrar el primer mensaje aleatorio en el elemento btn
    mensajeBtn.textContent = mensajesDisenoDesarrollo[indiceAleatorio].mensajeBtn;
};

document.addEventListener("DOMContentLoaded", () => {
    cambiarMensajeDisenoDesarrollo();
});

// cambio de imagen de hero en base al ancho de pantalla
let widthScreenToService1 = window.innerWidth;
const imgDesarrolloHero = document.querySelector(".hero-desarrollo-img");
if (widthScreenToService1 <= 426) {
    imgDesarrolloHero.setAttribute('src', './public/img/ds_web2-mobile.webp');
}  else if  (widthScreenToService1 > 426 && widthScreenToService1 <= 768) {
    imgDesarrolloHero.setAttribute('src', './public/img/ds_web2-tablet.webp');
} else {
    imgDesarrolloHero.setAttribute('src', './public/img/ds_web2.webp');
}


</script>