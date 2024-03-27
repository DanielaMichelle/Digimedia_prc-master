<section class="hero_dising hero-servicios">
    <div class="lara"><img src="./public/img/branding.webp" alt=""></div>
    <div class="container-hero">
        <div>
            <h1>Branding y diseño</h1>
        </div>
    </div>
</section>

<section class="con-anun3 anuncio-branding-diseno">
    <h2>Descubre como impulsar tu marca al siguiente nivel</h2>
    <h2>Ofrecemos la primera asesoría</h2>
    <span>Gratis</span>
    <div class="bota1">
        <a href="contacto.php" title="¡Contactanos!" class="boton__2">Incrementa tus ventas</a>
    </div>
</section>

<script>
const mensajesBrandingDiseno = [{
        mensaje1: "Descubre como impulsar tu marca al siguiente nivel",
        mensaje2: "Ofrecemos la primera asesoría",
        mensajeSpan: "Gratis",
        mensajeBtn: "¡Empieza ahora!",
    },
    {
        mensaje1: "Dale vida a tu marca con nuestros expertos en diseño",
        mensaje2: "Primera asesoría",
        mensajeSpan: "Gratis",
        mensajeBtn: "¡Comienza ahora!",
    },
    {
        mensaje1: "Conecta de manera creativa e innovadora con tu audiencia",
        mensaje2: "",
        mensajeSpan: "",
        mensajeBtn: "¡CONTÁCTANOS!",
    },
];

const cambiarMensajeBrandingDiseno = () => {
    // Obtener elementos donde se mostrarán los elementos
    var mensajeP1 = document.querySelector(
        ".anuncio-branding-diseno h2:first-child"
    );
    var mensajeP2 = document.querySelector(
        ".anuncio-branding-diseno h2:nth-child(2)"
    );

    var mensajeSpan = document.querySelector(".anuncio-branding-diseno span");
    var mensajeBtn = document.querySelector(".anuncio-branding-diseno .bota1 a");

    // Generar un número aleatorio para seleccionar un objeto de mensajes
    var indiceAleatorio = Math.floor(
        Math.random() * mensajesBrandingDiseno.length
    );

    // Mostrar el primer y segundo  mensaje aleatorio en el elemento p
    mensajeP1.textContent = mensajesBrandingDiseno[indiceAleatorio].mensaje1;
    mensajeP2.textContent = mensajesBrandingDiseno[indiceAleatorio].mensaje2;

    // Mostrar el primer mensaje aleatorio en el elemento span
    mensajeSpan.textContent = mensajesBrandingDiseno[indiceAleatorio].mensajeSpan;

    // Mostrar el primer mensaje aleatorio en el elemento btn
    mensajeBtn.textContent = mensajesBrandingDiseno[indiceAleatorio].mensajeBtn;
};

document.addEventListener("DOMContentLoaded", () => {
    cambiarMensajeBrandingDiseno();
});
</script>