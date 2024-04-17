<style>
    .modal2 {
        width: 40rem;
        height: auto;
        background-color: tomato;
        position: fixed;
        top: 50%;
        left: 50%;
        transform: translate(-50%, -45%);
        z-index: 100;
        /* display: grid; */
        grid-template-columns: 3fr 4fr;
        background-image: linear-gradient(to bottom, #0095ff, #3a89f6, #537cec, #656ee0, #7460d2, #8957cb, #9b4cc1, #ab3fb6, #c533ac, #dc24a0, #ef1390, #ff037f);
        border-radius: 12px;
        display: none;
    }

    .modal2--image-container {
        background-color: #0392fc;
        position: relative;
        border-radius: 12px 0px 12px 12px;
        overflow: hidden;
    }

    .modal2--image-container span {
        position: absolute;
        bottom: 0;
        right: 0;
        color: white;
        font-size: 2rem;
        line-height: 2rem;
        font-weight: 700;
        text-align: end;
        padding-right: 24px;
        padding-bottom: 40px;
        text-transform: uppercase;
    }

    .modal2--image-container figure {
        width: 100%;
        height: 100%;
        background-color: #7460d2;

        img {
            width: 100%;
            height: 100%;
        }
    }

    .modal2--image-container .icon {
        position: absolute;
        width: 4rem;
        margin-top: 1rem;
        margin-left: 1rem;
    }

    .modal2--form-container {
        display: flex;
        flex-direction: column;
        align-items: center;
        justify-content: center;
        gap: 2rem;
        padding: 2rem;
    }

    .modal2--form-container .modal-close-button {
        color: #eceef2;
        position: absolute;
        top: 0;
        right: 0;
        padding: 20px;
        cursor: pointer;
    }

    .modal2--form-container__title {
        text-transform: uppercase;
        display: flex;
        flex-direction: column;
        color: white;
        text-align: center;
    }

    .modal2--form-container__title span:nth-child(1) {
        font-size: 2rem;
        line-height: 2.5rem;
    }

    .modal2--form-container__title span:nth-child(2) {
        font-size: 2rem;
        line-height: 2.5rem;
        font-weight: 700;
    }

    .modal2--form-container__title span:nth-child(3) {
        font-size: 3rem;
        font-weight: 800;
        line-height: 3rem;
    }

    .modal2--form-container form {
        color: white;
        font-family: "Poppins", sans-serif;
        font-style: normal;
        display: flex;
        flex-direction: column;
        gap: 2rem;
    }

    .modal2--form-container form label {
        padding-left: 8px;
        font-size: 14px;
    }

    .modal2--form-container form .form-inputs {
        width: 84%;
        margin: 0 auto;
    }

    .modal2--form-container form .form-inputs input {
        height: 30px;
    }

    .modal2--form-container form button {
        background-color: #0095FF;
        color: white;
        text-transform: uppercase;
        font-size: 36px;
        padding: 10px 16px;
        border-radius: 20px;
        font-weight: 800;
        border: none;
        letter-spacing: 1px;
        cursor: pointer;
    }

    @media (max-width: 687px) {
        .modal2 {
            width: 90%;
        }

        .modal2--image-container span {
            font-size: 5vw;
            line-height: 5vw;
            padding-right: 2vw;
            padding-bottom: 6vw;
        }

        .modal2--form-container {
            gap: 1rem;
        }

        .modal2--form-container__title span:nth-child(1) {
            font-size: 5vw;
            line-height: 5vw;
        }

        .modal2--form-container__title span:nth-child(2) {
            font-size: 5vw;
            line-height: 5.5vw;
        }

        .modal2--form-container__title span:nth-child(3) {
            font-size: 7vw;
            line-height: 7vw;
        }

        .modal2--form-container form {
            gap: 1rem;
        }

        .modal2--form-container form .form-inputs input {
            height: 5vw;
        }

        .modal2--form-container form label {
            padding-left: 8px;
            font-size: 2vw;
        }

        .modal2--form-container form button {
            font-size: 5vw;
        }

    }

    @media (max-width: 435px) {

        .modal2--form-container {
            padding: 1rem 2rem;
        }

        .modal2--image-container span {
            padding-bottom: 5vw;
        }

        .modal2--image-container .icon {
            width: 3rem;
        }

        .modal2--form-container__title span:nth-child(1) {
            font-size: 4vw;
            line-height: 4vw;
        }

        .modal2--form-container__title span:nth-child(2) {
            font-size: 4vw;
            line-height: 4.5vw;
        }

        .modal2--form-container__title span:nth-child(3) {
            font-size: 6vw;
            line-height: 6vw;
        }

        .modal2--form-container form .form-inputs input {
            height: 5vw;
        }

        .modal2--form-container form .form-inputs .form-group {
            line-height: 12px;
        }

        .modal2--form-container form button {
            font-size: 4vw;
        }

    }

    @media (max-width: 320px) {
        .modal2--form-container form button {
            font-size: 4vw;
            padding: 5px;
            width: 115%;
            position: relative;
            left: -6px;
        }
    }
</style>

<div class="modal2" id="modal2_desarrollo">
    <div class="modal2--image-container">
        <img class="icon" src="public/img/logo_digimedia_color.webp" alt="Digimedia Icon">
        <span>¡Destaca tu negocio!</span>
        <figure>
            <img id="service1-modal2--image" src="./public/img/modal2/modal2-desarrollo3.webp" alt="Descripción de la imagen">
        </figure>
    </div>

    <div class="modal2--form-container">
        <i class="fa-solid fa-x modal-close-button" id="close-button"></i>
        <div class="modal2--form-container__title">
            <span>Obtén ahora</span>
            <span>Una Asesoría</span>
            <span>¡Gratis!</span>
        </div>

        <form id="formMain" method="post">
            <div class="form-inputs">
                <!--Nombre-->
                <div class="form-group">
                    <label for="name">Nombre</label>
                    <input type="text" class="form-control" name="name" id="name2">
                </div>

                <!--Apellido-->
                <div class="form-group">
                    <label for="lastName">Apellido</label>
                    <input type="text" class="form-control" name="lastName" id="lastName2">
                </div>

                <!--Correo-->
                <div class="form-group">
                    <label for="email">Correo</label>
                    <input type="text" class="form-control" name="email" id="email2">
                </div>

            </div>
            <button type="submit" class="go-button" name="submit">Hazlo ya</button>
        </form>

    </div>
</div>

<script>
    const modal = document.getElementById('modal2_desarrollo');
    const anuncioServicio = document.querySelector("#anuncio-servicio");
    const closeBtn = document.querySelector("#close-button");
    const objReg = {
        gmail: /^[\w\.-]+@(gmail|outlook|hotmail|ucsm|senati)\.(com|edu.pe|pe)$/
    };

    // cambio de imagen de hero en base al ancho de pantalla
    let widthScreenModal2Servicio1 = window.innerWidth;
    const imgModal2Servivio1 = document.querySelector("#service1-modal2--image");
    console.log(widthScreenModal2Servicio1);
    if (widthScreenModal2Servicio1 <= 430) {
        imgModal2Servivio1.setAttribute('src', './public/img/modal2/modal2-desarrollo3-mobile.webp');
    } else {
        imgModal2Servivio1.setAttribute('src', './public/img/modal2/modal2-desarrollo3.webp');
    }

    // Abrir modal
    let options = {
        threshold: 0.01,
    };
    let ejecutado = false;
    let observer = new IntersectionObserver(function(entries) {
        for (const entry of entries) {
            if (entry.isIntersecting && !ejecutado) {
                modal.style.display = "grid";
                ejecutado = true; // Marcar como ejecutado
            }
        }
    }, options);
    observer.observe(anuncioServicio);


    // Cerrar modal click afuera
    document.addEventListener('click', function(event) {
        if (!modal.contains(event.target)) {
            modal.style.display = "none";
        }
    });

    // Cerrar modal click X
    closeBtn.addEventListener('click', function() {
        modal.style.display = "none";
    })

    validateData();

    function validateData() {
        const formMain = document.querySelector("#modal2_desarrollo .modal2--form-container #formMain");
        formMain.addEventListener("submit", (e) => {
            e.preventDefault();
            data();
        })
    }

    function data() {
        const nameInput = document.querySelector("#modal2_desarrollo .modal2--form-container #name2");
        const lastNameInput = document.querySelector("#modal2_desarrollo .modal2--form-container #lastName2");
        const emailInput = document.querySelector("#modal2_desarrollo .modal2--form-container #email2");
        const email = emailInput.value.trim();
        const emailValido = objReg.gmail.test(email);

        if (nameInput.value === '') alert('El nombre no debe estar vacío');
        if (lastNameInput.value === '') alert('El apellido no debe estar vacío');
        if (!emailValido) alert("Debe de ingresar un correo válido.");
        if (nameInput.value != '' && lastNameInput.value != '' && emailValido) {
            modal.style.display = "none";
            catchData(nameInput, lastNameInput, emailInput);
            enviarDatosCorreo(emailInput.value);
            cleanData(nameInput, lastNameInput, emailInput);
        }
    }

    function catchData(name, lastName, email) {
        const form = new FormData();
        form.append('name', name.value)
        form.append('lastName', lastName.value)
        form.append('email', email.value)

        enviandoDatosServer(form)
    }

    // Enviando datos al servidor:
    function enviandoDatosServer(form) {
        fetch("./app/trigger/modal-desing.php?action=ADD", {
                method: 'POST',
                body: form
            })
            .then(res => res.json())
            .then(console.log)
            .catch(err => console.log(err))
    }

    function cleanData(name, lastName, email) {
        name.value = "";
        lastName.value = "";
        email.value = "";
    }

    
    // Función para guardar los datos en el localStorage (Correo)
    function guardarDatosEnLocalStorageCorreo(data) {
        localStorage.setItem("correoData", JSON.stringify(data));
    }

    // Función para obtener la dirección de correo del localStorage (Correo)
    function obtenerCorreoDelLocalStorage() {
        const data = localStorage.getItem("correoData");
        return data ? JSON.parse(data).correo : null;
    }

    // Función para obtener los datos del localStorage (Correo)
    function obtenerDatosDelLocalStorageCorreo() {
        const data = localStorage.getItem("correoData");
        return data ? JSON.parse(data) : null;
    }

    function enviarDatosCorreo(email) {
        const emailUser = email;

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

        // Verificar si hay mensajes pendientes en el localStorage (correo)
        const storedDataEmail = obtenerDatosDelLocalStorageCorreo();
        const sentMessagesEmail = storedDataEmail ? storedDataEmail.sentMessages || [] : [];

        if (sentMessagesEmail.length >= 1 && sentMessagesEmail.length < 3) {
            alert("Debes esperar a que se completen los mensajes de correo antes de enviar otro formulario.");
            return;
        }

        // Si no hay mensajes pendientes, permitir el envío del formulario
        submit();
    });

    // Llamar a la función para enviar los mensajes de WhatsApp cuando se cargue la página
    window.onload = function() {
        // Obtener el correo del formulario desde el LocalStorage
        const storedEmail = obtenerCorreoDelLocalStorage();
        console.log(storedEmail);

        // Verificar si se recuperó un correo válido desde el LocalStorage
        const storedDataEmail = obtenerDatosDelLocalStorageCorreo();
        const sentMessagesEmail = storedDataEmail ? storedDataEmail.sentMessages || [] : [];
        if (storedEmail && storedEmail.trim() !== "" && sentMessagesEmail.length < 3) {
            // Llamar a la función para enviar los mensajes de WhatsApp con el número recuperado
            enviarDatosCorreo(storedEmail);
        } else {
            console.log("correo no válido o ya se han enviado los mensajes.");
        }
    };


</script>