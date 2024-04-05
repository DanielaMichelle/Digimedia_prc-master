<style>
.modal-main-background {
    background-color: rgba(0, 0, 0, 0.5);
    width: 100vw;
    height: 100vh;
    position: fixed;
    top: 0;
    z-index: 1050;
    justify-content: center;
    align-items: center;
    display: none;
}

.modal-main {
    background-color: rgb(177 13 98);
    color: white;
    padding: 2rem 3rem;
    border-radius: 40px;
    text-align: center;
    position: relative;
    width: 65vw;
    padding-right: 5vw
}

.modal-main .modal-main-content {
    display: grid;
    grid-template-columns: 1fr 1fr;
}

.modal-main .btn-cerrar {
    position: absolute;
    right: 25px;
    top: 25px;
    background-color: rgb(239 21 150);
    width: 40px;
    height: 40px;
    display: grid;
    align-items: center;
    justify-content: center;
    border-radius: 50%;
    border: 3px solid white;

    i {
        font-size: x-large;
    }

    i:hover {
        cursor: pointer;
    }
}

.modal-main h3 {
    font-size: 2vw;
    font-weight: bold;
    font-family: "DM Sans", sans-serif;
    text-shadow: -1px -1px 0 #000, 1px -1px 0 #000, -1px 1px 0 #000, 1px 1px 0 #000;
    font-weight: 1000;
    font-style: normal;
    margin-bottom: 1rem;
}

.modal-main .modal-main-title-mobile {
    display: none;
}

.modal-main p {
    font-size: 2vw;
    font-style: italic;
    position: relative;
}

.modal-main .modal-main-form {
    justify-content: center;
    display: flex;
    flex-direction: column;
    padding-top: 3rem;
}


.modal-main .form-inputs {
    display: flex;
    flex-direction: column;
    justify-content: center;
    align-items: center;
}

.modal-main .form-inputs .form-group {
    text-align: start;
    width: 90%;
}

.modal-main .form-inputs .form-group input {
    padding: 14px 24px;
    border: none;
    border-radius: 50px;
}

.modal-main .form-inputs .form-group input::placeholder {
    color: rgb(77 76 76);
    font-size: 14px;
    position: absolute;
    top: 50%;
    transform: translateY(-50%);
}

.modal-main .form-inputs .form-group label {
    font-size: 14px;
    text-transform: uppercase;
    font-weight: 100;
    letter-spacing: 3px;
    padding-left: 12px;
    margin-bottom: 4px;
}

.modal-main button {
    font-size: 16px;
    margin: 1rem auto;
    padding: 0 50px;
    width: fit-content;
    border: none;
    color: white;
    font-weight: 600;
    border-radius: 50px;
    background: rgb(25 135 232);
    height: 49px;
    margin-top: 12px;
    margin-bottom: 28px;
}

.modal-main button:hover {
    cursor: pointer;
}

.modal-main .modal-main-image {
    width: 100%;
    justify-content: center;
    display: flex;
    flex-direction: column;
    align-items: center;
    margin-bottom: 0;

}

.modal-main .modal-main-image img {
    width: 60%;
    height: 50%;
}

.modal-main .modal-main-image figcaption {
    margin-top: 1rem;
    font-size: 20px;
    text-transform: uppercase;
}

.modal-main .modal-main-image figcaption span {
    font-weight: bold;
    text-decoration: underline;
}

@media (max-width: 1024px) {

    .modal-main {
        padding: 1rem;
        width: 80vw;
    }

    .modal-main .modal-main-form {
        padding-top: 2rem;
    }

    .modal-main h3 {
        font-size: 2vw;
        padding: 1.3vw;
        padding: 0;
    }

    .modal-main p {
        font-size: 3vw;
        font-size: 18px;
    }

    .modal-main button {
        font-size: 16px;
        padding: 0 50px;
        height: 43px;
        margin-bottom: 12px;
        margin-top: 12px;

    }

    .modal-main .form-inputs {
        row-gap: 0vw;
    }

    .modal-main .form-inputs .form-group {
        text-align: start;
        width: 90%;
        height: 76px;
    }

    .modal-main .form-inputs .form-group label {
        font-size: 12px;
    }

    .modal-main .form-inputs .form-group input,
    .modal-main .form-inputs .form-group .dropdown a {
        padding: 0px 24px;
        height: 43px;
    }

    .modal-main .form-inputs .form-group input::placeholder {
        font-size: 12px;
        position: absolute;
        top: 50%;
        transform: translateY(-50%);
    }

    .modal-main .form-inputs .form-group label {
        margin-bottom: 4px;
    }

    .modal-main .form-inputs .form-group .dropdown a,
    .modal-main .form-inputs .form-group .dropdown ul li a {
        font-size: 12px;
    }

    .modal-main .modal-main-image figcaption {
        font-size: 2vw;
    }
}

@media (max-width: 768px) {

    .modal-main {
        width: 70vw;
        padding: 1rem;
    }

    .modal-main .modal-main-form {
        padding-top: 0;
    }

    .modal-main .modal-main-content {
        grid-template-columns: 1fr;
    }

    .modal-main .modal-main-image {
        display: none;
    }

    .modal-main .form-inputs {
        gap: 0;
        grid-template-columns: 1fr;
    }

    .modal-main .form-inputs .form-group input {
        height: 36px;
    }

    .modal-main button {
        height: 36px;
        padding: 0 25px;
        margin-bottom: 12px;
        margin-top: 12px;
        font-size: 16px;
    }

    .modal-main .modal-main-title-mobile {
        display: block;
        font-size: 3vw;
        font-weight: bold;
        font-family: "DM Sans", sans-serif;
        text-shadow: -1px -1px 0 #000, 1px -1px 0 #000, -1px 1px 0 #000, 1px 1px 0 #000;
        font-weight: 1000;
        font-style: normal;
        margin-bottom: 2vw;
        margin-top: 3vw;
    }

    .modal-main .btn-cerrar {
        right: -10px;
        top: -10px;
    }

    .modal-main .form-inputs .form-group input::placeholder {
        font-size: 10px;
    }

    .modal-main .form-inputs .form-group label {
        font-size: 10px;
    }
}

@media (max-width: 425px) {
    .modal-main {
        border-radius: 15px;
    }

    .modal-main .modal-main-title-mobile {
        font-size: 4.5vw;
        margin-top: 4.5vw;
    }

    .modal-main .form-inputs .form-group label {
        font-size: 8px;
    }

    .modal-main .form-inputs .form-group input {
        padding: 12px 24px;
        height: 36px;
    }

    .modal-main .form-inputs {
        gap: 0rem;
    }

    .modal-main button {
        margin-top: 12px;
        font-size: 14px;
    }
}
</style>

<div class="modal-main-background">
    <div class="modal-main">
        <figure class="btn-cerrar">
            <i class="fa solid fa-xmark fa-lg"></i>
        </figure>
        <!-- <h3>¡DISEÑA TU CAMINO HACIA EL ÉXITO!</h3> -->
        <div class="modal-main-content">
            <h3 class="modal-main-title-mobile">¡DISEÑA TU CAMINO HACIA EL ÉXITO!</h3>

            <figure class="modal-main-image">
                <h3>¡DISEÑA TU CAMINO HACIA EL ÉXITO!</h3>

                <img src="./public/img/modal-img-4.jpeg" alt="modal diseno y desarrollo">
                <figcaption>¡Primera asesoría <span>GRATIS!</span></figcaption>
            </figure>

            <form class="modal-main-form" id="formMain" method="post">
                <div class="form-inputs">
                    <!--//Nombre//-->
                    <div class="form-group">
                        <label for="name">Nombre Completo</label>
                        <input type="text" class="form-control" placeholder="Jimena Vásquez" name="name" id="name">
                        <p class="err-msg"></p>
                    </div>

                    <!--//Correo//-->
                    <div class="form-group">
                        <label for="email">Correo Electrónico</label>
                        <input type="text" class="form-control" placeholder="hola@sitioincreible.com.ar" name="email"
                            id="email">
                        <p class="err-msg"></p>
                    </div>

                    <!--//Telefono//-->
                    <div class="form-group">
                        <label for="phone">Teléfono</label>
                        <input type="text" class="form-control" placeholder="987654321" name="phone" id="phone">
                        <p class="err-msg"></p>
                    </div>
                </div>
                <input type="text" value="<?php echo $_GET["id"]; ?>" name="id_ser" hidden />
                <button type="submit" class="go-button" name="submit">¡Sé la diferencia!</button>
            </form>


        </div>
    </div>
</div>

<script src="./public/js/mensajesWhatsapp.js"></script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script>
const btnCerrar = document.querySelector('.btn-cerrar');
const modalContainer = document.querySelector('.modal-main-background')
const btnAbrir = document.querySelector('.anuncio-branding-diseno .bota1');
const objRegex = {
    telefono: /^9\d{2}\d{3}\d{3}$/, //validar que tenga 9 caracteres y que esten todos juntos
    gmail: /^[\w\.-]+@(gmail|outlook|hotmail|ucsm|senati)\.(com|edu.pe|pe)$/ //validar la estructura de un correo electrónico
};


// Abre el modal al pulsar un botón 
btnAbrir.addEventListener('click', () => {
    if (localStorage.getItem("whatsappData")) {
        modalContainer.style.display = 'none';
    } else {
        setTimeout(() => {
            modalContainer.style.display = 'flex';
            validarDatos();
        }, 1000); // 1000 milisegundos = 1 segundos
    }
});


// Agregar evento al botón de cerrar
btnCerrar.addEventListener('click', () => {
    console.log("clickeaste");
    modalContainer.style.display = 'none';
});


// Agregar evento al botón de cerrar
btnCerrar.addEventListener('click', () => {
    console.log("clickeaste");
    modalContainer.style.display = 'none';
});

function validarDatos() {
    const formMain = document.querySelector("#formMain");
    formMain.addEventListener("submit", (e) => {
        e.preventDefault();
        datos();
    })
}

function datos() {

    const nombreInput = document.getElementById('name');
    const telefonoInput = document.getElementById('phone');
    const emailInput = document.getElementById('email');

    // Hacer que los 9 números esten juntos
    const telefono = telefonoInput.value.replace(/\s/g, '');
    const email = emailInput.value.trim();

    const telefonoValido = objRegex.telefono.test(telefono);
    const emailValido = objRegex.gmail.test(email);


    if (nombreInput.value === '') alert('El nombre no debe estar vacio')

    if (!telefonoValido) alert("El número de teléfono debe incluir 9 dígitos")

    if (!emailValido) alert("Debe de ingresar un correo valido.")

    if (nombreInput.value != '' && telefonoValido && emailValido) {
        // alert("Todos los campos son correctos.");
        modalContainer.style.display = 'none';
        agarrandoDatos(nombreInput, telefonoInput, emailInput);
        envioDatosWhatsApp(telefono);
        enviarEmailAjax();
        limpiarDatos(nombreInput, telefonoInput, emailInput);
    }
}

function limpiarDatos(nombre, telefono, email) {
    nombre.value = "";
    telefono.value = "";
    email.value = "";
}

function agarrandoDatos(nombre, telefono, email) {
    const form = new FormData();
    form.append('nombre', nombre.value)
    form.append('telefono', telefono.value)
    form.append('email', email.value)

    enviandoDatosServer(form)
}

//Enviando datos al servidor:
function enviandoDatosServer(form) {
    fetch("./app/trigger/person5.php?action=ADD", {
            method: 'POST',
            body: form
        })
        .then(res => res.json())
        .then(console.log)
        .catch(err => console.log(err))
}




// Función para guardar los datos en el localStorage
function guardarDatosEnLocalStorage(data) {
    localStorage.setItem("whatsappData", JSON.stringify(data));
}

// Función para obtener el número de teléfono del localStorage
function obtenerNumeroTelefonoDelLocalStorage() {
    const data = localStorage.getItem("whatsappData");
    return data ? JSON.parse(data).phoneNumber : null;
}

// Función para obtener los datos del localStorage
function obtenerDatosDelLocalStorage() {
    const data = localStorage.getItem("whatsappData");
    return data ? JSON.parse(data) : null;
}

// Función para enviar los mensajes de WhatsApp
function envioDatosWhatsApp(num) {
    const phone = "51" + num;
    console.log("Enviando... mensajes a WhatsApp para el número:", phone);

    // Definir los intervalos de tiempo entre cada mensaje en milisegundos
    const intervalos = [0, 5000, 10000]; // Intervalos entre el primer, segundo y tercer mensaje

    // Función para enviar un mensaje y actualizar el localStorage
    function enviarMensaje(index) {
        sendWsApi(mensajesWtsp[3][index], imagenesWtsp[3][index], phone);
        console.log("Mensaje", index + 1, "enviado.");
        sentMessages.push({
            index,
            time: new Date().getTime()
        });
        guardarDatosEnLocalStorage({
            phoneNumber: num,
            sentMessages: sentMessages
        });

        // Si se ha enviado el tercer mensaje, eliminar los datos del localStorage
        if (index === 2) {
            console.log("Eliminando localStorage después de enviar todos los mensajes.");
            localStorage.removeItem("whatsappData");
        }
    }

    // Función para verificar y enviar el siguiente mensaje
    function enviarSiguienteMensaje() {
        if (messageIndex < mensajesWtsp[0].length) {
            enviarMensaje(messageIndex);
            messageIndex++;
            setTimeout(enviarSiguienteMensaje, intervalos[messageIndex]);
        }
    }

    // Verificar si hay mensajes pendientes en el localStorage y continuar enviándolos
    const storedData = obtenerDatosDelLocalStorage();
    const sentMessages = storedData ? storedData.sentMessages || [] : [];
    let messageIndex = sentMessages.length; // Indica el índice del siguiente mensaje a enviar

    // Si no hay mensajes pendientes, enviar el primer mensaje
    if (messageIndex === 0) {
        enviarSiguienteMensaje();
    } else {
        // Si hay mensajes pendientes, reanudar el envío desde el próximo mensaje
        setTimeout(enviarSiguienteMensaje, intervalos[messageIndex]);
    }
}


// Evento para controlar el envío del formulario
document.getElementById('formMain').addEventListener('submit', function(event) {
    event.preventDefault(); // Evitar el envío del formulario por defecto

    // Verificar si hay mensajes pendientes en el localStorage
    const storedData = obtenerDatosDelLocalStorage();
    const sentMessages = storedData ? storedData.sentMessages || [] : [];
    if (sentMessages.length >= 1 && sentMessages.length < 3) {
        alert("Debes esperar a que se completen los mensajes de WhatsApp antes de enviar otro formulario.");
        return;
    }

    // Si no hay mensajes pendientes, permitir el envío del formulario
    this.submit();
});


// Llamar a la función para enviar los mensajes de WhatsApp cuando se cargue la página
window.onload = function() {
    // Obtener el número de teléfono del formulario desde el LocalStorage
    const storedPhoneNumber = obtenerNumeroTelefonoDelLocalStorage();

    // Verificar si se recuperó un número de teléfono válido desde el LocalStorage
    const storedData = obtenerDatosDelLocalStorage();
    const sentMessages = storedData ? storedData.sentMessages || [] : [];
    if (storedPhoneNumber && storedPhoneNumber.trim() !== "" && sentMessages.length < 3) {
        // Llamar a la función para enviar los mensajes de WhatsApp con el número recuperado
        envioDatosWhatsApp(storedPhoneNumber);
    } else {
        console.error("Número de teléfono no válido o ya se han enviado los mensajes.");
    }
};



function enviarEmailAjax() {
    var url = window.location.href;

// Extraer el valor después de "servicios/"
    const id_ser  = url.split('servicios/gestion-redes-sociales/')[1];

    const email = document.getElementById('email').value;


    var datos = new FormData();
    datos.append("id_ser", id_ser);
    datos.append("email", email);



    $.ajax({
        url: "./public/message/Controller/process.php",
        method: "POST",
        data: datos,
        cache: false,
        contentType: false,
        processData: false,
        success: function(respuesta) {
            console.log("Respuesta", respuesta);
            if (respuesta.trim().toLowerCase() === "correctocorrectocorrecto") {
                alert("Email Enviado");

            } else {
                alert("ocurrio un error " + respuesta);
            }
        }
    })
}
</script>