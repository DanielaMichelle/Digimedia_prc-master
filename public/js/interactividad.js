
// PAGINA PRINCIPAL
// Ciculos de "Nuestros servicios"
const disenoDesarrolloWebCircle = document.querySelector(".nuestros-servicios .diseno-desarrollo-web");
const gestionRedesSocialesCircle = document.querySelector(".nuestros-servicios .gestion-redes-sociales");
const marketingGestionDigitalCircle = document.querySelector(".nuestros-servicios .marketing-gestion-digital");
const brandingDisenoCircle = document.querySelector(".nuestros-servicios .branding-diseno");

// Texto e imagen interactiva de "Nuestros servicios"
const constinerServicioMain = document.querySelector(".nuestros-servicios-text-bottom");
const textoServicioMain = document.querySelector(".nuestros-servicios-text-interactivo");
const imgServicioMain = document.querySelector(".nuestros-servicios-img-interactivo IMG");

// Ancho de la pantalla
var anchoPagina = window.innerWidth;

if (anchoPagina >= 984) {
    disenoDesarrolloWebCircle.addEventListener("mouseover", () => {
        constinerServicioMain.style.display = "block";
        textoServicioMain.textContent = "*La creación de una experiencia web óptima mediante la presentación organizada de contenido.*";
        imgServicioMain.src = './public/img/servis_wepb/services1/desarrollo-diseno-nuestros-servicios.webp';
    })

    gestionRedesSocialesCircle.addEventListener("mouseover", () => {
        constinerServicioMain.style.display = "block";
        textoServicioMain.textContent = "*La optimización estratégica para impacto, alcance y presencia de una marca.*";
        imgServicioMain.src = "./public/img/servis_wepb/services2/gestion-redes-sociales-nuestros-servicios.webp";
    })

    marketingGestionDigitalCircle.addEventListener("mouseover", () => {
        constinerServicioMain.style.display = "block";
        textoServicioMain.textContent = "*La ampliación de alcance y fortalecimiento de relaciones con clientes en línea.*";
        imgServicioMain.src = "./public/img/servis_wepb/services3/marketing-gestion-digital-nuestros-servicios.webp";
    })

    brandingDisenoCircle.addEventListener("mouseover", () => {
        constinerServicioMain.style.display = "block";
        textoServicioMain.textContent = "*La unión de estos genera experiencias memorables, conexión emocional y diferenciación de otros.*";
        imgServicioMain.src = "./public/img/servis_wepb/services4/branding-diseno-nuestros-servicios.webp";
    })

} else {
    constinerServicioMain.style.display = "none";
}


// Interactividad de botones
const panelHorario = document.querySelector(".botones-contacto .horario");
const horarioBtn = document.querySelector(".botones-contacto .horario figure");

horarioBtn.addEventListener("click", () => {
    panelHorario.classList.toggle("horario--cerrado");
    panelHorario.classList.toggle("horario--abierto");
})