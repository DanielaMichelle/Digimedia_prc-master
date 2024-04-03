<style>
    .modal2 {
        width: 40rem;
        height: auto;
        background-color: tomato;
        position: fixed;
        top: 50%;
        left: 50%;
        transform: translate(-50%, -45%);
        z-index: 50;
        /* display: grid; */
        grid-template-columns: 3fr 4fr;
        background-image: linear-gradient(to bottom, #ff6622, #ff513b, #ff3951, #ff2068, #ff037f);
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
        gap: 1rem;
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
        font-size: 24px;
        line-height: 30px;
        font-weight: 700;

        span {
            font-size: 40px;
        }
    }

    .modal2--form-container__title span:nth-child(2) {
        font-size: 24px;
        line-height: 24px;
    }

    .modal2--form-container__title span:nth-child(3) {
        font-size: 40px;
        font-weight: 800;
        line-height: 40px;
        padding-top: 1rem;
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
        background-color: #FF6622;
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
            font-size: 3vw;
            line-height: 3vw;

            span {
                font-size: 5vw;
            }
        }

        .modal2--form-container__title span:nth-child(2) {
            font-size: 3vw;
            line-height: 3vw;
        }

        .modal2--form-container__title span:nth-child(3) {
            font-size: 5vw;
            padding-top: 0;
            line-height: 5vw;
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

<div class="modal2" id="modal2_branding">
    <div class="modal2--image-container">
    <img class="icon" src="public/img/logo_digimedia_color.webp" alt="Digimedia Icon">
        <span>¡Diseña tu camino al éxito!</span>
        <figure>
            <img src="./public/img/modal2/modal2-branding.webp" alt="Modal 2 Desarrollo y Diseño Web">
        </figure>
    </div>

    <div class="modal2--form-container">
        <i class="fa-solid fa-x modal-close-button" id="close-button"></i>
        <div class="modal2--form-container__title">
            <span><span>Hoy</span> es tu día</span>
            <span>Tu primera consulta</span>
            <span>¡Es Gratis!</span>
        </div>

        <form id="formMain" method="post">
            <div class="form-inputs">
                <!--Nombre-->
                <div class="form-group">
                    <label for="name">Nombre</label>
                    <input type="text" class="form-control" name="name" id="name">
                </div>

                <!--Apellido-->
                <div class="form-group">
                    <label for="lastName">Apellido</label>
                    <input type="text" class="form-control" name="lastName" id="lastName">
                </div>

                <!--Correo-->
                <div class="form-group">
                    <label for="email">Correo</label>
                    <input type="text" class="form-control" name="email" id="email">
                </div>

            </div>
            <button type="submit" class="go-button" name="submit">Hazlo ya</button>
        </form>

    </div>
</div>

<script>
    const modal = document.getElementById("modal2_branding");
    const anuncioServicio = document.querySelector("#anuncio-servicio");
    const closeBtn = document.querySelector("#close-button");
    const objReg = {
        gmail: /^[\w\.-]+@(gmail|outlook|hotmail|ucsm|senati)\.(com|edu.pe|pe)$/ 
    };

    // Abrir modal
    let options = {
        threshold: 0.5,
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
            console.log("Click fuera del modal");
        }
    });

    // Cerrar modal click X
    closeBtn.addEventListener('click', function() {
        modal.style.display = "none";
    })

    validateData(); 
    function validateData() {
        const formMain = document.querySelector(".modal2--form-container #formMain");
        formMain.addEventListener("submit", (e) => {
            e.preventDefault();
            datos();
        })
    }

    function datos() {
        const nameInput = document.querySelector(".modal2--form-container #name");
        const lastNameInput = document.querySelector(".modal2--form-container #lastName");
        const emailInput = document.querySelector(".modal2--form-container #email");
        const email = emailInput.value.trim();
        const emailValido = objReg.gmail.test(email);

        if (nameInput.value === '') alert('El nombre no debe estar vacío');
        if (lastNameInput.value === '') alert('El apellido no debe estar vacío');
        if (emailInput.value === '') alert('El correo no debe estar vacío');
        if (!emailValido) alert("Debe de ingresar un correo válido.");
        if (nameInput.value != '' && lastNameInput.value != '' && emailValido) {
            modal.style.display = "none";
            agarrandoDatos(nameInput, lastNameInput, emailInput);
            enviarEmailAjax();
            limpiarDatos(nameInput, lastNameInput, emailInput);
        }
    }

    function agarrandoDatos(name, lastName, email) {
        const form = new FormData();
        form.append('name', name.value)
        form.append('lastName', lastName.value)
        form.append('email', email.value)
    }

    //Enviando datos al servidor:
    // function enviandoDatosServer(form) {
    // }

    function limpiarDatos(name, lastName, email) {
        name.value = "";
        lastName.value = "";
        email.value = "";
    }

    function enviarEmailAjax() {
        console.log("Enviando correo ...");
        // var queryString = window.location.search;
        // var parametros = new URLSearchParams(queryString);
        // const id_ser = parametros.get('id');

        // const email = document.getElementById('email').value;

        // var datos = new FormData();
        // datos.append("id_ser", id_ser);
        // datos.append("email", email);

        // $.ajax({
        //     url: "./public/message/Controller/process.php",
        //     method: "POST",
        //     data: datos,
        //     cache: false,
        //     contentType: false,
        //     processData: false,
        //     success: function(respuesta) {
        //         console.log("Respuesta", respuesta);
        //         if (respuesta.trim().toLowerCase() === "correctocorrectocorrecto") {
        //             alert("Email Enviado");

        //         } else {
        //             alert("ocurrio un error " + respuesta);
        //         }
        //     }
        // })
    }
</script>