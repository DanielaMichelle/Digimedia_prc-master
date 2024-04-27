<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <?php require_once ("../utils/enlacesCss.php"); ?>
    <link rel="stylesheet" href="../../css/desing-admin.css">
    <title>.:: Digimedia ::.</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    
</head>

<body>
    <script src="https://kit.fontawesome.com/0ee4e706bf.js" crossorigin="anonymous"></script>
    <?php require_once ("../utils/sidebar.php"); ?>

    <main>
        <h1>Seccion: Usuarios</h1>

        

        <!-- Iniciao-->
       <!-- Button trigger modal -->
        <button type="button" class="btn mb-3 btn-primary btn-show" data-bs-toggle="modal" data-bs-target="#staticBackdrop">
        Crear Usuario
        </button>

        <!-- Modal -->
        <div class="modal fade" id="staticBackdrop" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered "> <!-- Agregamos la clase 'modal-sm' para reducir el tamaño del modal -->
                <div class="modal-content">
                    <div class="modal-header">
                        <h1 class="modal-title fs-5 " id="staticBackdropLabel">Registrar Usuario</h1>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                        <div class="container">
                            <form id="form-admin2" method="post">
                                <div class="row">
                                    <div class="col-md-12">
                                        <div class="mb-3">
                                            <label for="nombre" class="form-label">Nombre</label>
                                            <input type="text" name="name" id="name" class="form-control" required>
                                        </div>
                                        <div class="mb-3">
                                            <label for="usuario" class="form-label">Usuario</label>
                                            <input type="text" name="usuario" id="usuario" class="form-control" required>
                                        </div>
                                        <div class="mb-3">
                                            <label for="contrasena" class="form-label">Password</label>
                                            <input type="password" name="pass" id="pass" class="form-control" required>
                                        </div>
                                        <div class="mb-3">
                                            <label for="servicio" class="form-label">Rol</label>
                                            <select class="form-select" name="servicio" id="servicio">
                                                <option selected disabled value="">Selecciona</option>
                                                <option value="Administrador">Administrador</option>
                                                <option value="Usuario">Usuario</option>
                                            </select>
                                        </div>
                                    </div>
                                </div>
                                <div class="mb-3 d-flex justify-content-center">
                                    <div class="btn-group" role="group" aria-label="Botones de acción">
                                        <input type="submit" value="Agregar" name="submit" id="submit1" class="btn btn-primary btn-lg mx-2">
                                        <input type="submit" value="Cancelar" name="submit" id="submit2" class="btn btn-danger btn-lg mx-2" data-bs-dismiss="modal"> <!-- Agregamos 'data-bs-dismiss="modal"' para cerrar el modal -->
                                    </div>
                                </div>


                                
                            </form>
                        </div>
                    </div>
                    
                </div>
            </div>
        </div>

         <!-- Modal -->
        <div class="modal fade" id="staticBackdrop_2" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered "> <!-- Agregamos la clase 'modal-sm' para reducir el tamaño del modal -->
                <div class="modal-content">
                    <div class="modal-header">
                        <div class="d-flex align-items-center"> <!-- Utilizamos d-flex para hacer que los elementos se comporten como flexbox y align-items-center para alinear verticalmente -->
                            <h1 class="modal-title fs-5" id="staticBackdropLabel">id :</h1>
                            <p class="mb-0 ms-3 fs-5 inputText">762</p> <!-- Agregamos ms-2 para un pequeño margen a la izquierda -->
                        </div>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                        <div class="container">
                            <form id="form-admin3" method="post">
                                <div class="row">
                                    <div class="col-md-12">
                                        <div class="mb-3">
                                            <label for="nombre" class="form-label">Nombre</label>
                                            <input type="text" name="name" id="name2" class="form-control" required>
                                        </div>
                                        <div class="mb-3">
                                            <label for="usuario" class="form-label">Usuario</label>
                                            <input type="text" name="usuario" id="usuario2" class="form-control" required>
                                        </div>
                                        <div class="mb-3">
                                            <label for="contrasena" class="form-label">Password</label>
                                            <input type="password" name="pass" id="pass2" class="form-control" required>
                                        </div>
                                        <div class="mb-3">
                                            <label for="servicio" class="form-label">Rol</label>
                                            <select class="form-select selectorDmi" name="servicio" id="servicio2">
                                                <option selected disabled value="">Selecciona</option>
                                                <option value="Administrador">Administrador</option>
                                                <option value="Usuario">Usuario</option>
                                            </select>
                                        </div>
                                    </div>
                                </div>
                                <div class="mb-3 d-flex justify-content-center">
                                    <div class="btn-group" role="group" aria-label="Botones de acción">
                                        <input type="submit" value="Modificar" name="submit" id="submit4" class="btn btn-primary btn-lg mx-2">
                                        <button type="button" class="btn btn-danger btn-lg mx-2" data-bs-dismiss="modal">Cancelar</button> <!-- Cambiamos <input> por <button> y agregamos 'type="button"' -->
                                    </div>
                                </div>


                                
                            </form>
                        </div>
                    </div>
                    
                </div>
            </div>
        </div>



        <!-- No tocar-->
        <div class="content-table">

            <table id="example" class="table table-striped" style="width:100%">
                <thead>
                    <tr>
                        <th scope="col">ID</th>
                        <th scope="col">NOMBRE</th>
                        <th scope="col">USUARIO</th>
                        <th scope="col">ROL</th>
                        <th scope="col">OPCIONES</th>
                    </tr>
                </thead>
                <tbody id="tableBody"></tbody>
            </table>

        </div>
    </main>
<?php require_once ("../utils/enlacesDatatables.php"); ?>

    <!-- Script para el sidebar -->
    <script type="module" src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.esm.js"></script>
    <script nomodule src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.js"></script>
    <script src="../../js/js-admin.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
    <script src="../../../public/js/viewInteractiveUser.js"></script>
    
</body>

</html>
