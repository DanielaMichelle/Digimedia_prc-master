<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <?php require_once ("../utils/enlacesCss.php"); ?>
    <link rel="stylesheet" href="../../css/desing-admin.css">
    <title>.:: Digimedia ::.</title>
</head>

<body>
    <?php require_once ("../utils/sidebar.php"); ?>

    <main>
        <h1>Seccion: BRANDING AND DESIGN</h1>

        <div class="content-table">

            <table id="example" class="table table-striped" style="width:100%">
                <thead>
                    <tr>
                        <th scope="col">ID</th>
                        <th scope="col">NOMBRE</th>
                        <th scope="col">TELEFONO</th>
                        <th scope="col">EMAIL</th>
                    </tr>
                </thead>
                <tbody id="tableBody"></tbody>
            </table>

        </div>
    </main>



    <script>

        const tableBody = document.getElementById('tableBody');

        const dataRender = () => {
            fetch('../../../app/trigger/person5.php?action=GET')
                .then(res => res.json())
                .then((Data = []) => {

                    tableBody.innerHTML = Data.map(data => {
                        return `
                <tr data-id="${data.id}">
                    <td>${data.id}</td>
                    <td>${data.nombre}</td>
                    <td>${data.email}</td>
                    <td>${data.telefono}</td>
                </tr>
            `
                    }).join('')

                })
        };

        dataRender();


    </script>


    <?php require_once ("../utils/enlacesDatatables.php"); ?>
    <script src="../../js/js-admin.js"></script>
</body>

</html>