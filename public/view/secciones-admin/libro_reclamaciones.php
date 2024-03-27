<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/5.3.0/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdn.datatables.net/1.13.7/css/dataTables.bootstrap5.min.css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.2/css/all.css"
        integrity="sha384-oS3vJWv+0UjzBfQzYUhtDYW+Pj2yciDJxpsK1OYPAYjqT085Qq/1cq5FLXAZQ7Ay" crossorigin="anonymous">

    <title>.:: DigiMedia ::.</title>
</head>

<body>

    <?php include_once ('../navbar-admin/navbar.php'); ?>

    <div style="display: grid; gap:25px; padding: 15px">
        <table id="exampleTable" class="table table-striped" style="width:100%">
            <thead>
                <tr>
                    <th scope="col">ID</th>
                    <th scope="col">NOMBRE</th>
                    <th scope="col">APELLIDO</th>
                    <th scope="col">DOCUMENTO</th>
                    <th scope="col">NUMERO DE DOCUMENTO</th>
                    <th scope="col">EMAIL</th>
                    <th scope="col">CELULAR</th>
                    <th scope="col">DIRECION</th>
                    <th scope="col">DISTRITO</th>
                    <th scope="col">CIUDAD</th>
                    <th scope="col">TIPO DE RECLAMACION</th>
                    <th scope="col">SERVICIO CONTRATADO</th>
                    <th scope="col">RECLAMO PERSONA</th>
                    <th scope="col">ACEPTAR TERMINOS 1</th>
                    <th scope="col">ACEPTAR TERMINO 2</th>
                    <th scope="col">ACCION</th>
                </tr>
            </thead>
            <tbody id="tableBody"></tbody>
        </table>
    </div>



    <script>

        const tableBody = document.getElementById('tableBody');

        const dataRender = () => {
            fetch('../../../app/trigger/libroReclamacion.php?action=GET')
                .then(res => res.json())
                .then((Data = []) => {

                    tableBody.innerHTML = Data.map(data => {
                        return `
                <tr data-id="${data.idReclamacion}">
                    <td>${data.idReclamacion}</td>
                    <td>${data.nombre}</td>
                    <td>${data.apellido}</td>
                    <td>${data.documento}</td>
                    <td>${data.numeroDocumento}</td>
                    <td>${data.email}</td>
                    <td>${data.celular}</td>
                    <td>${data.direccion}</td>
                    <td>${data.distrito}</td>
                    <td>${data.ciudad}</td>
                    <td>${data.tipoReclamo}</td>
                    <td>${data.servicioContratado}</td>
                    <td>${data.reclamoPerson}</td>
                    <td>${data.checkReclamoForm}</td>
                    <td>${data.aceptaPoliticaPrivacidad}</td>
                </tr>
            `
                    }).join('')

                })
        };
        dataRender();




    </script>


    <script src="https://code.jquery.com/jquery-3.7.0.js"></script>
    <script src="https://cdn.datatables.net/1.13.7/js/jquery.dataTables.min.js"></script>
    <script src="https://cdn.datatables.net/1.13.7/js/dataTables.bootstrap5.min.js"></script>

    <!--Este link contiene datos importantes de datatables:v-->
    <script type="text/javascript" src="../../utils/datatables/datatables.min.js"></script>

    <!--No colocar los enlaces de los botones de datatables ya el mismo lo integra por su cuenta-->
    <script src="../../js/datosDatatables.js"></script>

</body>

</html>