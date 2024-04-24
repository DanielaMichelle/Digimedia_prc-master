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
        <h1>Seccion: Usuarios</h1>

        <div class="">
            <form action="../../../app/trigger/modal-usuario.php?action=ADD" method="post">
               <div class="col-md-3">
                    <div class="mb-3">
                        <label for="nombre">Nombre</label>
                        <input type="text" name="nombre" id="nombre" class="form-control" required>
                    </div>

                    <div class="mb-3">
                        <label for="usuario">Usuario</label>
                        <input type="text" name="usuario" id="usuario" class="form-control" required>
                    </div>

                    <div class="mb-3">
                        <label for="contrasena">Password</label>
                        <input type="password" name="contrasena" id="contrasena" class="form-control" required>
                    </div>

                    <div class="mb-3">
                        <input type="submit" name="submit" id="submit" class="btn btn-primary">
                    </div>
               </div>
            </form>
        </div>


        <div class="content-table">

            <table id="example" class="table table-striped" style="width:100%">
                <thead>
                    <tr>
                        <th scope="col">ID</th>
                        <th scope="col">NOMBRE</th>
                        <th scope="col">USUARIO</th>
                    </tr>
                </thead>
                <tbody id="tableBody"></tbody>
            </table>

        </div>
    </main>



    <script>



        const tableBody = document.getElementById('tableBody');

        const dataRender = () => {
            fetch('../../../app/trigger/modal-usuario.php?action=GET')
                .then(res => res.json())
                .then((Data = []) => {

                    tableBody.innerHTML = Data.map(data => {
                        return `
                <tr data-id="${data.id}">
                    <td>${data.id}</td>
                    <td>${data.nombre}</td>
                    <td>${data.usuario}</td>
                </tr>
            `
                    }).join('')

                })
        };

        dataRender();


    </script>


    <?php require_once ("../utils/enlacesDatatables.php"); ?>

    <!-- Script para el sidebar -->
    <script type="module" src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.esm.js"></script>
    <script nomodule src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.js"></script>
    <script src="../../js/js-admin.js"></script>
</body>

</html>