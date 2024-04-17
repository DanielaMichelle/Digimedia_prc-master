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
        background-color: rgba(194, 7, 158, 0.7);
        color: white;
        padding: 0rem 2rem;
        border-radius: 40px;
        text-align: center;
        position: relative;
        width: 60vw;
        padding-top: 3vw
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
        font-size: 4vw;
        font-weight: bold;
        font-family: "DM Sans", sans-serif;
        text-shadow: -1px -1px 0 #000, 1px -1px 0 #000, -1px 1px 0 #000, 1px 1px 0 #000;
        font-weight: 1000;
        font-style: normal;
        margin-bottom: 1rem;
        margin-top: 2rem;
    }

    .modal-main p {
        font-size: 2vw;
        font-style: italic;
        position: relative;
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
        margin-top: 1rem;
        padding: 0 50px;
        width: fit-content;
        border: none;
        color: white;
        font-weight: 600;
        border-radius: 50px;
        background: rgb(246 93 194);
        height: 49px;
        margin-top: 12px;
        margin-bottom: 28px;
    }

    .modal-main button:hover {
        cursor: pointer;
    }

    .modal-main .modal-main-image {
        width: 100%;
        display: flex;
        flex-direction: column;
        align-items: center;
        margin-bottom: 0;
        padding-top: 1rem;
    }

    .modal-main .modal-main-image img {
        width: 85%;
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
            width: 80vw;
            padding: 2rem 3rem;
        }

        .modal-main h3 {
            font-size: 4vw;
            padding: 1.3vw;
            margin: 0;
            padding: 0;
            margin-bottom: 2vw;
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
        }

        .modal-main h3 {
            font-size: 4vw;
            margin-top: 3vw;
        }

        .modal-main p {
            font-size: 16px;
        }

        .modal-main .form-inputs .form-group input::placeholder {
            font-size: 10px;
        }


        .modal-main .form-inputs .form-group .dropdown a,
        .modal-main .form-inputs .form-group .dropdown ul li a {
            font-size: 10px;
        }

        .modal-main .form-inputs .form-group label {
            font-size: 10px;
        }

        .modal-main .btn-cerrar {
            right: -10px;
            top: -10px;
        }
    }

    @media (max-width: 425px) {
        .modal-main {
            border-radius: 15px;
        }

        .modal-main h3 {
            font-size: 4.5vw;
            margin-top: 4.5vw;
        }

        .modal-main p {
            font-size: 14px;
        }

        .modal-main .form-inputs .form-group label {
            font-size: 8px;
        }

        .modal-main button {
            font-size: 14px;
        }
    }
</style>

<div class="modal-main-background modal1_desarrollo" id="modal-container">
    <div class="modal-main" id="modal1">
        <figure class="btn-cerrar">
            <i class="fa solid fa-xmark fa-lg"></i>
        </figure>
        <h3>¡Potencia tu Sitio Web!</h3>
        <div class="modal-main-content">
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
                        <input type="text" class="form-control" placeholder="hola@sitioincreible.com.ar" name="email" id="email">
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
                <button type="submit" class="go-button" name="submit">¡EMPIEZA YA!</button>
            </form>

            <figure class="modal-main-image">
                <img src="./public/img/img4-sinfondo3-2.webp" alt="modal diseno y desarrollo">
                <figcaption>¡TU PRIMERA ASESORíA ES <span>GRATIS!</span></figcaption>
            </figure>
        </div>
    </div>
</div>

<script src="./public/js/mensajesWhatsapp.js"></script>


<script>
    const btnCerrar = document.querySelector('.btn-cerrar');
    const modalContainer = document.querySelector('.modal-main-background')
    const btnAbrir = document.querySelector('.anuncio-diseno-desarrollo .bota1');
    const objRegex = {
        telefono: /^9\d{2}\d{3}\d{3}$/, //validar que tenga 9 caracteres y que esten todos juntos
        gmail: /^[\w\.-]+@(gmail|outlook|hotmail|ucsm|senati)\.(com|edu.pe|pe)$/ //validar la estructura de un correo electrónico
    };


    // Abre el modal al pulsar un botón 
    btnAbrir.addEventListener('click', () => {
        if (localStorage.getItem("whatsappData")) {
            modalContainer.style.display = 'none';
        } else {
            modalContainer.style.display = 'flex';
            validarDatos();
        }
    });

    // Agregar evento al botón de cerrar
    btnCerrar.addEventListener('click', () => {
        console.log("clickeaste");
        modalContainer.style.display = 'none';
    });


    function validarDatos() {
        const formMain = document.querySelector(".modal1_desarrollo #formMain");
        formMain.addEventListener("submit", (e) => {
            e.preventDefault();
            datos();
        })
    }

    function datos() {

        const nombreInput = document.querySelector('.modal1_desarrollo #name');
        const telefonoInput = document.querySelector('.modal1_desarrollo #phone');
        const emailInput = document.querySelector('.modal1_desarrollo #email');

        // Hacer que los 9 números esten juntos
        const telefono = telefonoInput.value.replace(/\s/g, '');
        const email = emailInput.value.trim();

        const telefonoValido = objRegex.telefono.test(telefono);
        const emailValido = objRegex.gmail.test(email);


        if (nombreInput.value === '') alert('El nombre no debe estar vacio')

        if (!telefonoValido) alert("El número de teléfono debe incluir 9 dígitos")

        if (!emailValido) alert("Debe de ingresar un correo valido.")


        if (nombreInput.value != '' && telefonoValido && emailValido) {
            // alert("Todos los campos son correctos.")
            modalContainer.style.display = 'none';
            agarrandoDatos(nombreInput, telefonoInput, emailInput);
            envioDatosWhatsApp(telefono);
            enviarDatosCorreo(emailInput);
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
        fetch("./app/trigger/person2.php?action=ADD", {
                method: 'POST',
                body: form
            })
            .then(res => res.json())
            .then(console.log)
            .catch(err => console.log(err))
    }



    // Función para guardar los datos en el localStorage (WhatsApp)
    function guardarDatosEnLocalStorage(data) {
        localStorage.setItem("whatsappData", JSON.stringify(data));
    }

    // Función para guardar los datos en el localStorage (Correo)
    function guardarDatosEnLocalStorageCorreo(data) {
        localStorage.setItem("correoData", JSON.stringify(data));
    }

    // Función para obtener el número de teléfono del localStorage (WhatsApp)
    function obtenerNumeroTelefonoDelLocalStorage() {
        const data = localStorage.getItem("whatsappData");
        return data ? JSON.parse(data).phoneNumber : null;
    }

    // Función para obtener la dirección de correo del localStorage (Correo)
    function obtenerCorreoDelLocalStorage() {
        const data = localStorage.getItem("correoData");
        return data ? JSON.parse(data).correo : null;
    }

    // Función para obtener los datos del localStorage (WhatsApp)
    function obtenerDatosDelLocalStorage() {
        const data = localStorage.getItem("whatsappData");
        return data ? JSON.parse(data) : null;
    }

    // Función para obtener los datos del localStorage (Correo)
    function obtenerDatosDelLocalStorageCorreo() {
        const data = localStorage.getItem("correoData");
        return data ? JSON.parse(data) : null;
    }

    // Función para enviar los mensajes de WhatsApp
    function envioDatosWhatsApp(num) {
        const phone = "51" + num;
        console.log("Iniciando envío de mensajes de WhatsApp para el número:", phone);

        // Definir los intervalos de tiempo entre cada mensaje en milisegundos
        // const intervalos = [0, 300000, 600000]; // Intervalos entre el primer, segundo y tercer mensaje
        const intervalos = [0, 30000, 30000];

        // Función para enviar un mensaje y actualizar el localStorage
        function enviarMensaje(index) {
            sendWsApi(mensajesWtsp[0][index], imagenesWtsp[0][index], phone);
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

    function enviarDatosCorreo(email) {

        const emailUser = email.value;


        // Definir los intervalos de tiempo entre cada mensaje en milisegundos
        // const intervalos = [0, 300000, 600000]; // Intervalos entre el primer, segundo y tercer mensaje
        const intervalos = [0, 30000, 30000];

        function enviarMensaje(index) {
            enviarEmailAjax(emailUser, index);
            sentMessages.push({
                index,
                time: new Date().getTime()
            });

            guardarDatosEnLocalStorageCorreo({
                correo: emailUser,
                sentMessages: sentMessages
            });

            // Si se ha enviado el tercer mensaje, eliminar los datos del localStorage
            if (index === 2) {
                console.log("Eliminando localStorage después de enviar todos los mensajes de correo.");
                localStorage.removeItem("correoData");
            }

        }

        const storedData = obtenerDatosDelLocalStorageCorreo();
        const sentMessages = storedData ? storedData.sentMessages || [] : [];
        let messageIndex = sentMessages.length; // Indica el índice del siguiente mensaje a enviar

        // Si no hay mensajes pendientes, enviar el primer mensaje
        if (messageIndex === 0) {
            enviarSiguienteMensaje();
        } else {
            // Si hay mensajes pendientes, reanudar el envío desde el próximo mensaje
            setTimeout(enviarSiguienteMensaje, intervalos[messageIndex]);
        }

        // Función para verificar y enviar el siguiente mensaje
        function enviarSiguienteMensaje() {

            if (messageIndex < 3) {
                enviarMensaje(messageIndex);
                messageIndex++;
                setTimeout(enviarSiguienteMensaje, intervalos[messageIndex]);
            }
        }
    }

    function enviarEmailAjax(email, index) {
        const body = new FormData();
        const emailDataModal1 = email;

        body.append("id_servicio", 0);
        body.append("index", index);


        if (obtenerDatosDelLocalStorageCorreo() === null) {
            body.append("email", emailDataModal1);
            console.log("Email:", emailDataModal1);
        } else {
            body.append("email", obtenerDatosDelLocalStorageCorreo().correo);
            console.log("Email:", obtenerDatosDelLocalStorageCorreo().correo);
        }

        // Enviar la solicitud POST al servidor
        fetch("./public/message/Controller/process.php", {
                method: "POST",
                body: body,
            })
            .then((response) => response.text()) // Convertir la respuesta a texto
            .then((data) => {
                // Manejar la respuesta del servidor
                console.log("Respuesta del servidor Gmail Es:", data);
            })
            .catch((error) => {
                // Manejar cualquier error que ocurra durante la solicitud
                console.error("Error al enviar formulario a Gmail:", error);
                alert("Email no Enviado: ", error);
            });

    }


    // Evento para controlar el envío del formulario
    document.getElementById('formMain').addEventListener('submit', function(event) {
        event.preventDefault(); // Evitar el envío del formulario por defecto

        // Verificar si hay mensajes pendientes en el localStorage (WhatsApp)
        const storedData = obtenerDatosDelLocalStorage();
        const sentMessages = storedData ? storedData.sentMessages || [] : [];

        // Verificar si hay mensajes pendientes en el localStorage (correo)
        const storedDataEmail = obtenerDatosDelLocalStorageCorreo();
        const sentMessagesEmail = storedDataEmail ? storedDataEmail.sentMessages || [] : [];

        if (sentMessages.length >= 1 && sentMessages.length < 3) {
            alert("Debes esperar a que se completen los mensajes de WhatsApp antes de enviar otro formulario.");
            return;
        }

        if (sentMessagesEmail.length >= 1 && sentMessagesEmail.length < 3) {
            alert("Debes esperar a que se completen los mensajes de correo antes de enviar otro formulario.");
            return;
        }


        // Si no hay mensajes pendientes, permitir el envío del formulario
        submit();
    });




    // Llamar a la función para enviar los mensajes de WhatsApp cuando se cargue la página
    window.onload = function() {
        console.log(localStorage.getItem("modal1"));

        // Obtener el número de teléfono del formulario desde el LocalStorage
        const storedPhoneNumber = obtenerNumeroTelefonoDelLocalStorage();

        // Obtener el correo del formulario desde el LocalStorage
        const storedEmail = obtenerCorreoDelLocalStorage();

        // Verificar si se recuperó un número de teléfono válido desde el LocalStorage
        const storedData = obtenerDatosDelLocalStorage();
        const sentMessages = storedData ? storedData.sentMessages || [] : [];
        if (storedPhoneNumber && storedPhoneNumber.trim() !== "" && sentMessages.length < 3) {
            // Llamar a la función para enviar los mensajes de WhatsApp con el número recuperado
            envioDatosWhatsApp(storedPhoneNumber);
        } else {
            console.log("Número de teléfono no válido o ya se han enviado los mensajes.");
        }

        // Verificar si se recuperó un correo válido desde el LocalStorage
        const storedDataEmail = obtenerDatosDelLocalStorage();
        const sentMessagesEmail = storedDataEmail ? storedDataEmail.sentMessages || [] : [];
        if (storedEmail && storedEmail.trim() !== "" && sentMessagesEmail.length < 3) {
            // Llamar a la función para enviar los mensajes de WhatsApp con el número recuperado
            enviarDatosCorreo(storedEmail);
        } else {
            console.log("correo no válido o ya se han enviado los mensajes.");
        }
    };
</script>