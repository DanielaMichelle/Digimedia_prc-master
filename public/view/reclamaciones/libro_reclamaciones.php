<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link
            href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css"
            rel="stylesheet"
            integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC"
            crossorigin="anonymous">
        <link rel="stylesheet" href="../../css/libro_reclamaciones.css">
        <title>Libro de reclamaciones</title>
    </head>
    <body>

        <div class="contDigi">
            <div class="contDigiImg">
                <img src="../logo_footer.webp" alt>
            </div>
            <div class="contText">
                <h1>Terminos y condiciones</h1>
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

                <form class="row mt-5">
                    <div class="col-md-6">
                        <label for class="form-label">Nombre</label>
                        <input type="email" class="form-control">
                    </div>
    
                    <div class="col-md-6">
                        <label for class="form-label">Apellido</label>
                        <input type="text" class="form-control">
                    </div>
    
                    <div class="col-md-6">
                        <label for="documento"
                            class="form-label">Documento</label>
                        <select id="documento" class="form-select">
                            <option>Dni</option>
                            <option>RUC</option>
                            <option>CE</option>
                            <option>PTP</option>
                            <option>Otros</option>
                        </select>
                    </div>
    
                    <div class="col-md-6">
                        <label for class="form-label">Numero de
                            documento</label>
                        <input type="text" class="form-control">
                    </div>
    
                    <div class="col-md-6">
                        <label for class="form-label">Correo electronico</label>
                        <input type="email" class="form-control">
                    </div>
    
                    <div class="col-md-6">
                        <label for class="form-label">Celular</label>
                        <input type="number" class="form-control">
                    </div>
    
                    <div class="col-md-4 mx-auto">
                        <label for class="form-label">Direccion</label>
                        <input type="number" class="form-control">
                    </div>
    
                    <div class="col-md-4 mx-auto">
                        <label for class="form-label">Distrito</label>
                        <input type="number" class="form-control">
                    </div>
    
                    <div class="col-md-4 mx-auto">
                        <label for class="form-label">Ciudad</label>
                        <input type="number" class="form-control">
                    </div>
    
                    <div class="col-md-4 mx-auto">
                        <label for class="form-label">Tipo de reclamo</label>
                        <select id class="form-select">
                            <option>Queja</option>
                            <option>Reclamo</option>
                        </select>
                    </div>
    
                    <div class="col-md-4 mx-auto">
                        <label for class="form-label">Servicio
                            contratado</label>
                        <input type="text" class="form-control">
                    </div>
    
                    <div class="mt-3">
                        <label for class="form-label">¿Cual es tu
                            reclamo?</label>
                        <textarea class="form-control" id rows="5"></textarea>
                    </div>
    
                    <div class="form-check mt-5">
                        <input class="form-check-input" type="checkbox" value
                            id>
                        <label class="form-check-label" for>
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
                        <input class="form-check-input" type="checkbox" value
                            id>
                        <label class="form-check-label" for>Acepto la
                            'pólitica de privacidad'</label>
                    </div>
    
                    <div class="mt-3 mb-4">
                        <button type="button"
                            class="btn btn-primary">Enviar</button>
                    </div>
    
                </form>


            </div>
        </div>



    </body>
</html>