<!DOCTYPE html>
<html lang="en">
<?php

$fileCSS    = ['index', 'style', 'inicio', 'header', 'footer', 'section', 'contactos'];
include_once './public/include/html_head.php';
?>

<body>
    <?php include_once './public/assets/header.php' ?>

    <section class="contacto">

        <div class="contacto--map__title">
            <h2>¡Queremos conocerte!</h2>
            <p>Cuéntanos cómo te podemos ayudar</p>

            <div class="contacto--map__container">
                <span class="message">Encuentranos en el mapa</span>
                <div class="map map--contact">
                    <?php include './public/include/section_maps.php' ?>
                </div>
                <div class="map-bottom">
                    <span class="address">Jr. Paruro 1401, Lima 15001</span>
                    <div>
                        <figure>
                            <img src="./public/img/flecha-como-llegar.webp" alt="cómo llegar">
                        </figure>
                        <a target="_blank"
                            href="https://maps.google.com/maps/dir//DigiMedia+Marketing-+Agencia+de+Marketing+Digital+para+PYMES+y+emprendimientos+en+Per%C3%BA+Jr.+Paruro+1401+Lima+15001/@-12.0574029,-77.025502,16z/data=!4m5!4m4!1m0!1m2!1m1!1s0x9105c981108188a1:0x2bce3907b5bcb3ec">Cómo
                            llegar</a>
                    </div>
                </div>
            </div>
        </div>

        <div class="container-form">
            <div class="col-lg-11">
                <form action="" method="post" id="formulario">
                    <div class="row">
                        <div class="col-md-6">
                            <div class="mb-3">
                                <div class="label">Nombre Completo</div>
                                <input type="text" class="form-control" name="nombre" id="nombre"
                                    placeholder="Nombres y Apellidos">
                                <small></small>
                            </div>
                        </div>

                        <div class="col-md-6">
                            <div class="mb-3">
                                <div class="label">Email</div>
                                <input type="email" class="form-control" name="emailPerson" id="emailPerson"
                                    placeholder="Email">
                                <small></small>
                            </div>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-md-6">
                            <div class="mb-3">
                                <div class="label">Servicio</div>
                                <select class="form-control" name="servicio" id="servicio">
                                    <option selected disabled value="" class="form-control">Selecciona
                                    </option>
                                    <option value="Marketing Digital">Marketing Digital</option>
                                    <option value="Imagen Corporativa">Imagen Corporativa</option>
                                    <option value="Gestión De Redes Sociales">Gestión De Redes Sociales</option>
                                    <option value="Crea Tu Marca">Crea Tu Marca</option>
                                    <option value="Diseño web">Diseño web</option>
                                    <option value="Diseño Grafico">Diseño Grafico</option>
                                </select>
                                <small></small>
                            </div>
                        </div>

                        <div class="col-md-6">
                            <div class="mb-3">
                                <div class="label">Número</div>
                                <input type="text" class="form-control" name="numero" id="numero"
                                    placeholder="Teléfono (9 dígitos)">
                                <small></small>
                            </div>
                        </div>
                    </div>

                    <div class="mb-3">
                        <div class="label">Mensaje</div>
                        <textarea name="mensaje" class="form-control" id="mensaje" cols="30" rows="4"
                            placeholder="Escríbenos aquí"></textarea>
                        <small></small>
                    </div>

                    <div class="dist" id="con">
                        <div>
                            <input type="hidden" name="emailMarck" value="no" id="email">
                            <input class="checkbox" type="checkbox" name="emailMarck" value="si" id="email">
                            <label for="email">Email Marketing</label>
                        </div>

                        <div>
                            <input type="hidden" name="new" value="no" id="new">
                            <input type="checkbox" name="new" value="si" id="new">
                            <label for="new">News & Updates Emails</label>
                        </div>

                        <div>
                            <input type="hidden" name="production" value="no" id="production">
                            <input type="checkbox" name="production" value="si" id="production">
                            <label for="production">Production Process Emails</label>
                        </div>
                    </div>

                    <div class="" id="ps"></div>
                    <input type="submit" value="Enviar" class="enviar">
                </form>
            </div>
        </div>
    </section>

    <?php include_once './public/assets/footer.php' ?>

    <!-- Panel de horario y whatsapp -->
    <div class="botones-contacto">
        <div class="horario horario--cerrado">
            <figure>
                <i class="fa-solid fa-calendar"></i>
            </figure>
            <div class="horario--text">
                <span>Horario</span>
                <div class="horario--container">
                    <div>
                        <p>Lunes - Viernes</p>
                        <span>8:00 am - 8:00 pm</span>
                    </div>
                    <div>
                        <p>Lunes - Viernes</p>
                        <span>8:00 am - 8:00 pm</span>
                    </div>
                </div>
            </div>
        </div>

        <div class="whatsapp">
            <a href="https://wa.me/51936910425" target="_blank">
                <i class="fa-brands fa-whatsapp"></i>
            </a>
        </div>
    </div>

    </div>

    <script>
        const form = document.querySelector("#formulario");

        form.addEventListener("submit", (e) => {
            e.preventDefault();
            validarCampos();
        });

        function validarNumero(numero) {
            // Validar que el campo "numero" tenga solo números y exactamente 9 dígitos, empezando por 9
            return /^9\d{8}$/.test(numero);
        }

        function validarCampos() {
            // Obtener valores de los campos
            const nombre = document.querySelector("#nombre").value.trim();
            const numero = document.querySelector("#numero").value.trim();
            const emailPerson = document.querySelector("#emailPerson").value.trim();
            const servicio = document.querySelector("#servicio").value.trim();
            const mensaje = document.querySelector("#mensaje").value.trim();

            // Verificar campos obligatorios
            if (!nombre || !numero || !emailPerson || !servicio || !mensaje) {
                alert("Debe rellenar todos los campos obligatorios.");
                return;
            }

            // Validar el campo "numero"
            if (!validarNumero(numero)) {
                alert("El campo número debe tener exactamente 9 dígitos numéricos y comenzar con el número 9.");
                return;
            }

            const formData = new FormData();


            // Agregar valores al FormData
            formData.append('nombre', nombre);
            formData.append('numero', numero);
            formData.append('email', emailPerson);
            formData.append('servicio', servicio);
            formData.append('mensaje', mensaje);

            // Agregar campos adicionales
            formData.append('emailMarck', obtenerValorCheckbox("emailMarck"));
            formData.append('new', obtenerValorCheckbox("new"));
            formData.append('production', obtenerValorCheckbox("production"));

            formData.append('estado', 0);

            enviarFormData(formData);
        }

        function vaciarDatos() {
            const nombre = document.querySelector("#nombre").value = "";
            const numero = document.querySelector("#numero").value = "";
            const emailPerson = document.querySelector("#emailPerson").value = "";
            const servicio = document.querySelector("#servicio").value = "";
            const mensaje = document.querySelector("#mensaje").value = "";
        }

        function obtenerValorCheckbox(nombreCheckbox) {
            const checkbox = document.querySelector(`input[name='${nombreCheckbox}']`);
            return checkbox.checked ? 'si' : 'no';
        }

        //ESTO TE LLEVA LOS DATOS AL SERVER Y LE PONE COMO NOMBRE ADD
        function enviarFormData(formData) {
            fetch("./app/trigger/intranet.php?action=ADD", {
                method: "POST",
                body: formData
            })
                .then(res => res.json())
                .then(data => {
                    alert("Datos enviados")
                    vaciarDatos();
                    console.log(data);
                })
                .catch(err => {
                    console.error("Error al enviar FormData:", err);
                });
        }

        // Interactividad de botones
        const panelHorario = document.querySelector(".botones-contacto .horario");
        const horarioBtn = document.querySelector(".botones-contacto .horario figure");

        horarioBtn.addEventListener("click", () => {
            panelHorario.classList.toggle("horario--cerrado");
            panelHorario.classList.toggle("horario--abierto");
        })


    </script>

</body>

</html>