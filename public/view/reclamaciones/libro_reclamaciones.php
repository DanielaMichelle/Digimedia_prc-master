<!DOCTYPE html>
<html lang="en">

<?php
$title = '.:: DigiMedia ::.';

$fileCSS    = ['libro_reclamaciones', 'bootstrap'];
$fileJS     = ['libro_reclamaciones'];

include_once './public/include/html_head.php';
?>


<body>

    <div class="contDigi">
        <div class="contDigiImg">
            <img src="./public/img/logo_footer.webp" alt="Img digimedia">
        </div>
        <div class="contText">
            <h1 style="font-weight: 600;">Libro de Reclamaciones</h1>
        </div>
    </div>

    <div class="contTextBookReclam">
        <div class="conTextInfo">
            <p class="separteTextInfo">
                Conforme está establecido en el Código de Protección y
                Defensa del Consumidor contamos con un
                Libro de Reclamaciones Virtual a tu disposición.
            </p>
            <p class="separteTextInfo">
                Debes de tener en cuenta que tus reclamos conforme a ley
                deben ser resueltos en un plazo no mayor a
                30 días, pudiendo extenderse el plazo cuando la naturaleza
                del reclamo lo acredite. Art. 24.1 Ley 29571.
            </p>
            <p class="separteTextInfo">
                Razón Social: DIGIMEDIA MARKETING S.A.C.
                RUC: 20605116559
            </p>

            <form class="row mt-5" id="form-datos">
                <div class="col-md-6">
                    <label for class="form-label">Nombre</label>
                    <input type="text" class="form-control" id="nombre" name="nombre">
                </div>

                <div class="col-md-6">
                    <label for class="form-label">Apellido</label>
                    <input type="text" class="form-control" id="apellido" name="apellido">
                </div>

                <div class="col-md-6">
                    <label for="documento" class="form-label">Documento</label>
                    <select id="documento" name="documento" class="form-select">
                        <option></option>
                        <option>Dni</option>
                        <option>RUC</option>
                        <option>CE</option>
                        <option>PTP</option>
                        <option>Otros</option>
                    </select>
                </div>

                <div class="col-md-6">
                    <label for class="form-label">Numero de documento</label>
                    <input type="text" class="form-control" id="numero-documento" name="numero-documento">
                </div>

                <div class="col-md-6">
                    <label for class="form-label">Correo electronico</label>
                    <input type="email" class="form-control" id="email" name="email">
                </div>

                <div class="col-md-6">
                    <label for class="form-label">Celular</label>
                    <input type="text" class="form-control" id="celular" name="celular">
                </div>

                <div class="col-md-4 mx-auto">
                    <label for class="form-label">Direccion</label>
                    <input type="text" class="form-control" id="direccion" name="direccion">
                </div>

                <div class="col-md-4 mx-auto">
                    <label for class="form-label">Distrito</label>
                    <input type="text" class="form-control" id="distrito" name="distrito">
                </div>

                <div class="col-md-4 mx-auto">
                    <label for class="form-label">Ciudad</label>
                    <input type="text" class="form-control" id="ciudad" name="ciudad">
                </div>

                <div class="col-md-4 mx-auto">
                    <label for class="form-label">Tipo de reclamo</label>
                    <select id="tipo-reclamo" name="tipo-reclamo" class="form-select">
                        <option></option>
                        <option>Queja</option>
                        <option>Reclamo</option>
                    </select>
                </div>

                <div class="col-md-4 mx-auto">
                    <label for class="form-label">Servicio contratado</label>
                    <input type="text" class="form-control" id="servicio-contratado" name="servicio-contratado">
                </div>

                <div class="mt-3">
                    <label for class="form-label">¿Cual es tu reclamo?</label>
                    <textarea class="form-control" rows="5" id="cual-reclamo-person"
                        name="cual-reclamo-person"></textarea>
                </div>

                <div class="form-check mt-5">
                    <input class="form-check-input" type="checkbox" id="check-reclamo-form" name="check-reclamo-form">
                    <label class="form-check-label">
                        Soy consciente que la formulación del reclamo no
                        impide acudir a otras vías de solución de
                        controversias
                        ni es requisito previo para interponer una denuncia
                        ante el INDECOPI. *El proveedor deberá dar respuesta
                        al reclamo en un plazo no mayor a treinta (30) días
                        calendario, pudiendo ampliar el plazo hasta por
                        treinta (30) días más, previa comunicación al
                        consumidor.
                    </label>
                </div>

                <div class="form-check mt-2">
                    <input class="form-check-input" type="checkbox" id="acepta-politica-privacidad"
                        name="acepta-politica-privacida">
                    <label class="form-check-label">Acepto la 'pólitica de privacidad'</label>
                </div>

                <div class="mt-3 mb-4">
                    <button type="submit" class="btn btn-primary">Enviar</button>
                </div>

            </form>
        </div>
    </div>

    

</body>

</html>