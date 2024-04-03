<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <?php require_once("./public/view/utils/enlacesCss.php");?>
    <link rel="stylesheet" href="./public/css/desing-admin.css">
    <title>Seccion 1</title>
</head>

<body>
    <?php require_once ("./public/view/utils/sidebar.php"); ?>

    <main >
        <h1>Contenido de la seccion 1</h1>

        <div class="content-table">
        <table id="example" class="table table-striped" style="width:100%">
            <thead>
                <tr>
                    <th scope="col">id</th>
                    <th scope="col">First</th>
                    <th scope="col">Last</th>
                    <th scope="col">Last</th>
                    <th scope="col">1</th>
                    <th scope="col">casi nunca nadie dice</th>
                    <th scope="col">3</th>
                    <th scope="col">4</th>
                    <th scope="col">5</th>
                    <th scope="col">6</th>
                    <th scope="col">7</th>
                    <th scope="col">Lorem ipsum dolor sit amet.</th>
                    <th scope="col">9</th>
                    <th scope="col">10</th>
                    <th scope="col">10</th>
                    <th scope="col">10</th>
                    <th scope="col">caca de cacas gaaa</th>
                    <th scope="col">10</th>
                    <th scope="col">10</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <th>1</th>
                    <td>Mark</td>
                    <td>Otto</td>
                    <td>Otto</td>
                    <td>@mdo</td>
                    <td>@mdo</td>
                    <td>@mdo</td>
                    <td>@mdo</td>
                    <td>@mdo</td>
                    <td>Lorem ipsum dolor sit amet consectetur adipisicing elit. Facilis, inventore</td>
                    <td>@mdo</td>
                    <td>@mdo</td>
                    <td>@mdo</td>
                    <td>@mdo</td>
                    <td>@mdo</td>
                    <td>@mdo</td>
                    <td>@mdo</td>
                    <td>@mdo</td>
                    <td>@mdo</td>
                </tr>

            </tbody>
        </table>
        </div>

    </main>






    <?php require_once("./public/view/utils/enlacesDatatables.php");?>

    <!-- Script para el sidebar -->
    <script type="module" src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.esm.js"></script>
    <script nomodule src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.js"></script>
    <script src="/sidebar_tabla/js/script.js"></script>
</body>

</html>