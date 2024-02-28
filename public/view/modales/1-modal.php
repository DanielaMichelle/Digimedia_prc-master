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
    padding-top: 3rem;
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

<div class="modal-main-background">
    <div class="modal-main">
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
                <button type="submit" class="go-button" name="submit">¡EMPIEZA YA!</button>
            </form>

            <figure class="modal-main-image">
                <img src="./public/img/img4.jpg" alt="modal diseno y desarrollo">
                <figcaption>¡TU PRIMERA ASESORíA ES <span>GRATIS!</span></figcaption>
            </figure>
        </div>
    </div>
</div>

<script>
const btnCerrar = document.querySelector('.btn-cerrar');
const modalContainer = document.querySelector('.modal-main-background')

document.addEventListener("DOMContentLoaded", mostrarModalDespuesDe5Segundos);

// Función para mostrar el modal después de 1 segundos
function mostrarModalDespuesDe5Segundos() {
    setTimeout(() => {
        modalContainer.style.display = 'flex';
        validarDatos();
    }, 1000); // 1000 milisegundos = 1 segundos
}

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
    const objRegex = {
        telefono: /^9\d{2}\s?\d{3}\s?\d{3}$/, //validar que tenga 9 caracteres
        gmail: /^[\w.-]+@gmail\.com$/ //validar la estructura de un correo electrónico
    };

    const nombreInput = document.getElementById('name');
    const telefonoInput = document.getElementById('phone');
    const emailInput = document.getElementById('email');

    const telefono = telefonoInput.value.trim();
    const email = emailInput.value.trim();

    const telefonoValido = objRegex.telefono.test(telefono);
    const emailValido = objRegex.gmail.test(email);


    if (nombreInput.value === '') alert('El nombre no debe estar vacio')

    if (!telefonoValido) alert("Debe de haber 9 digitos en el numero de telefono.")

    if (!emailValido) alert("Debe de ingresar un correo valido.")


    if (nombreInput.value != '' && telefonoValido && emailValido) {
        alert("Todos los campos son correctos.");
        modalContainer.style.display = 'none'; //////////////////////////////////////////////
        agarrandoDatos(nombreInput, telefonoInput, emailInput);
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
</script>

<script>
const formMain = document.querySelector("#formMain");

formMain.addEventListener('submit', (e) => {
    e.preventDefault();
    console.log("Mensaje enviado a whatsapp con éxito");

    const formDataWsp = new FormData();
    formDataWsp.append('phone', formMain.phone.value);
    formDataWsp.append('service', 1);
    formDataWsp.append('vez', 1);

    fetch('./public/message/whatsapp_servicios.php', {
            method: 'POST',
            body: formDataWsp
        })
        .then(res => res.json())
        .then(console.log)
        .catch(err => console.log(err))


    setTimeout(function() {
        formDataWsp.set('vez', 2);
        fetch('./public/message/whatsapp_servicios.php', {
                method: 'POST',
                body: formDataWsp
            })
            .then(res => res.json())
            .then(console.log)
            .catch(err => console.log(err))

    }, 10000); // Redirigir después de 10 segundos

    setTimeout(function() {
        formDataWsp.set('vez', 3);
        fetch('./public/message/whatsapp_servicios.php', {
                method: 'POST',
                body: formDataWsp
            })
            .then(res => res.json())
            .then(console.log)
            .catch(err => console.log(err))
    }, 20000); // Redirigir después de 15 segundos

})
</script>