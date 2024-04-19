<style>
    .contenedor-form {
        position: fixed;
        display: none;
        align-items: center;
        justify-content: center;
        transform: translate(-50%, -50%);
        top: 52%;
        left: 50%;
        z-index: 4000;
        background: rgba(255, 0, 128, 0.8);


        justify-content: space-between;
        border-radius: 40px;
        padding: 20px;



    }

    .btn-cerrar {

        position: absolute;
        right: 10px;
        top: 7px;
        background-color: #DF1A82;
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

    .resgistration-style__frase h2 {
        color: white;
        font-size: 2vw;
    }

    .btn-cerrar i {
        display: flex;
        justify-content: right;
        cursor: pointer;



    }

    .resgistration-style__anum {
        color: black;
        font-size: 1.3vw;
        text-align: center;
    }

    .letrero {
        background: transparent;

        width: 400px;
        padding: 2px;
        text-align: center;


    }

    .letrero h2 {
        color: white;
        padding: 2px 2px;
        font-size: 2.1vw;
        text-shadow: -1px -1px 0 #000,
            1px -1px 0 #000,
            -1px 1px 0 #000,
            1px 1px 0 #000;

    }

    /* my code */
    .resgistration-style {


        display: flex;
        background: transparent;
        flex-direction: column;
        justify-content: center;
        align-items: center;
    }

    .resgistration-style__div>img {
        width: 250px;
        height: 240px;
        padding: 10px;
        background: white;
        border-radius: 20px;
    }

    .registration-form.inactive {
        display: none;
    }


    .desktop-contact.inactive {
        display: none;
    }




    .form-group input {
        border: 1.6px solid #df76d5;
        font-size: 1vw;
        border-bottom-left-radius: 20px;
        border-bottom-right-radius: 20px;
        border-top-left-radius: 20px;
        border-top-right-radius: 20px;
        margin-bottom: 5px;


    }


    .form-group textarea {
        resize: none;
        border: 10px solid #df76d5;
    }


    .form-group label {
        color: white;
        font-weight: 500;
        font-size: 1.4vw;
        margin-bottom: 8px;
    }

    .registration-form {

        margin: -40px 5px 6px;
    }

    .registration-form form {


        /*position: fixed;*/




        opacity: 1;


        padding: 30px;


        border-radius: 20px 20px 0 0;
        height: auto;
        width: 350px;

        margin: 5px 10px;
    }







    .go-button {
        background: rgba(0, 155, 255, 2);
        width: 100%;
        color: white;
        font-family: Arial, Helvetica, sans-serif;
        font-weight: 500;
        border-radius: 3px;
        cursor: pointer;
        padding: 5px 7px;
        border: none;
        font-size: 1.7vw;
        margin-top: 20px;
        border-bottom-left-radius: 20px;
        border-bottom-right-radius: 20px;
        border-top-left-radius: 20px;
        border-top-right-radius: 20px;
    }

    .btn-mobile {
        top: 562px;
        display: flex;
        justify-content: flex-end;
        position: fixed;
        opacity: 0;
    }


    .btn-mobile.inactive {
        display: none;
    }


    .btn-mobile button {
        width: 75px;
        height: 75px;
        border-radius: 40px;
        background: #FF0080;
    }

    .btn-mobile button img {
        width: 45px;
        height: 45px;
    }

    .ocultar {
        display: block;
    }

    .letrero-movil {
        display: none;
    }

    @media only screen and (max-width: 913px) {
        .contenedor-form {
            width: 75%;
            justify-content: center;
            display: flex;
            flex-direction: column;
            height: auto;
            padding-bottom: 10px;
        }

        .ocultar {
            display: none;
        }

        /*
        .desktop-contact {
            display: none;
        }*/

        .btn-mobile {
            right: 4%;
            opacity: 1;
        }

        .resgistration-style {
            display: none;
        }

        .registration-form {
            width: 100%;
            height: 80%;
            position: relative;
            bottom: 0;
            background: transparent;
            padding: 0;
            top: 0;

        }

        .registration-form form {
            background: transparent;
            width: 100%;
            height: 100%;
        }

        .registration-form label {
            font-size: 2.3vw;
        }

        .registration-form input {
            font-size: 2.3vw;
            width: 100%;
        }

        .go-button {
            width: 95%;
            font-size: 2.4vw;
        }

        .letrero-movil {
            display: block;


            width: 100%;
            color: white;
            font-weight: 100;
            text-align: center;
        }

        .letrero-movil h2 {
            font-size: 4vw;
        }

        .btn-cerrar {
            top: -5px;
            right: -6px;
            z-index: 95000;
            width: 34px;
            height: 34px;
        }



    }



    .overflow {
        z-index: 3000;
        background-color: rgba(0, 0, 0, 0.5);
        width: 100%;
        height: 100%;
        display: none;
        position: fixed;
        top: 0;
        left: 0;
        right: 0;
        bottom: 0;
    }
</style>

<section class="overflow ocultar"></section>
<div class="contenedor-form">
    <div class="btn-cerrar">
        <i class="fa solid fa-xmark fa-lg"></i>
    </div>
    <div class="letrero-movil">
        <h2>¡EXPLOTA EL CONTENIDO DE TUS REDES!</h2>
    </div>
    <section class="resgistration-style">
        <div class="letrero">
            <h2>¡EXPLOTA EL CONTENIDO DE TUS REDES!</h2>
        </div>
        <figure class="resgistration-style__div">
            <img src="./public/img/fu_2.webp" />
        </figure>
        <div class="resgistration-style__frase">
            <h2>¡Primera asesoría <blond>gratis!</blond>
            </h2>
        </div>

    </section>

    <div class="registration-form data-FormMarketing-modal">
        <p class="text-success text-center"></p>
        <form id="formMain" method="post">

            <!--//Nombre//-->
            <div class="form-group">
                <label for="name">NOMBRE COMPLETO</label>
                <input type="text" class="form-control" placeholder="Ingresar Nombre Completo" name="name" id="name">
                <p class="err-msg"></p>
            </div>
            <!--//Telefono//-->
            <div class="form-group">
                <label for="phone">TELÉFONO</label>
                <input type="text" class="form-control" placeholder="Ingresar Telefono Personal" name="phone" id="phone">
                <p class="err-msg"></p>
            </div>
            <!--//Correo//-->
            <div class="form-group">
                <label for="email">CORREO ELECTRÓNICO</label>
                <input type="text" class="form-control" placeholder="Ingresar Correo" name="email" id="email">
                <p class="err-msg"></p>
            </div>
            <input type="text" value="<?php echo $_GET["id"]; ?>" name="id_ser" hidden />
            <button type="submit" class="go-button" name="submit">¡Crea impacto!</button>
        </form>
    </div>
    <div class="desktop-contact inactive">
        <h5>Contactanos</h5>
        <i class="fa-solid fa-minus" style="color: #ffffff;"></i>
    </div>
</div>


<script src="./public/js/mensajesWhatsappEmail.js"></script>
<script>
    //const desktopContact = document.querySelector('.desktop-contact');
    const contenedorForm = document.querySelector('.contenedor-form');
    const btnCerrar = document.querySelector('.btn-cerrar');
    //const mobile = document.querySelector('.btn-mobile')
    const ocultar = document.querySelector(".ocultar");
    const overflow = document.querySelector(".overflow");
    const btnSubmit = document.querySelector('.go-button');
    const btnAbrir = document.querySelector('.manipulacion .bota1');

    const objRegex = {
        telefono: /^9\d{2}\d{3}\d{3}$/, //validar que tenga 9 caracteres y que esten todos juntos
        gmail: /^[\w\.-]+@(gmail|outlook|hotmail|ucsm|senati)\.(com|edu.pe|pe)$/ //validar la estructura de un correo electrónico
    };

    // Al principio modal novisible
    contenedorForm.style.display = 'none';

    btnCerrar.addEventListener('click', toggleCerarForm);
    overflow.addEventListener('click', touch_display);

    function touch_display() {
        ocultar.style.display = "none";
        contenedorForm.style.display = "none";
        document.body.style.overflowY = "auto";
    }


    function toggleCerarForm() {
        contenedorForm.style.display = "none";
        document.body.style.overflowY = "auto";

        ocultar.style.display = "none";
    }

    // Abre el modal al pulsar un botón 
    btnAbrir.addEventListener('click', () => {
        if (localStorage.getItem("whatsappData")) {
            contenedorForm.style.display = 'none';
            overflow.style.display = 'none';
        } else {
            contenedorForm.style.display = 'flex';
            overflow.style.display = 'block';
            validarDatos();
        }
    });

    //De aqui para abajo validas todos los campos del formulario con expresiones regulares
    function validarDatos() {
        const formMain = document.querySelector("#formMain");
        formMain.addEventListener("submit", (e) => {
            e.preventDefault();
            datos();

        })
    }

    function datos() {

        const nombreInput = document.querySelector('.data-FormMarketing-modal #name');
        const telefonoInput = document.querySelector('.data-FormMarketing-modal #phone');
        const emailInput = document.querySelector('.data-FormMarketing-modal #email');

        // Hacer que los 9 números esten juntos
        const telefono = telefonoInput.value.replace(/\s/g, '');
        const email = emailInput.value.trim();

        const telefonoValido = objRegex.telefono.test(telefono);
        const emailValido = objRegex.gmail.test(email);


        if (nombreInput.value === '') alert('El nombre no debe estar vacio')

        if (!telefonoValido) alert("El número de teléfono debe incluir 9 dígitos")

        if (!emailValido) alert("Debe de ingresar un correo valido.")

        if (nombreInput.value != '' && telefonoValido && emailValido) {
            alert("Todos los campos son correctos.")
            toggleCerarForm();
            agarrandoDatos(nombreInput, telefonoInput, emailInput);
            envioDatosWhatsApp(telefono, 2);
            enviarDatosCorreo(emailInput.value, 2);
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
</script>