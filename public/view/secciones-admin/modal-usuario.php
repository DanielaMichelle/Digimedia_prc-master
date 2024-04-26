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
    <script src="https://kit.fontawesome.com/0ee4e706bf.js" crossorigin="anonymous"></script>
    <?php require_once ("../utils/sidebar.php"); ?>

    <main>
        <h1>Seccion: Usuarios</h1>

        <div class="">
            <form id="form-admin2" method="post">
               <div class="col-md-3">
                    <div class="mb-3">
                        <label for="nombre">Nombre</label>
                        <input type="text" name="name" id="name" class="form-control" required>
                    </div>

                    <div class="mb-3">
                        <label for="usuario">Usuario</label>
                        <input type="text" name="usuario" id="usuario" class="form-control" required>
                    </div>

                    <div class="mb-3">
                        <label for="contrasena">Password</label>
                        <input type="password" name="pass" id="pass" class="form-control" required>
                    </div>
                    <div class="col-md-6">
                            <div class="mb-3">
                                <div class="label">Rol</div>
                                <select class="form-control" name="servicio" id="servicio">
                                    <option selected disabled value="" class="form-control">Selecciona
                                    </option>
                                    <option value="Administrador">Administrador</option>
                                    <option value="Usuario">Usuario</option>
                                </select>
                                <small></small>
                            </div>
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
                        <th scope="col">ROL</th>
                        <th scope="col">OPCIONES</th>
                    </tr>
                </thead>
                <tbody id="tableBody"></tbody>
            </table>

        </div>
    </main>



    <script>
        
        const objRegex_lost = {
            pass: /^(?=.*\d{6,})\S+$/ 
        };
        document.addEventListener('DOMContentLoaded', function () {
            dataRender();
            waitToGo() 
        });
        function waitToGo() {
            const formMain = document.querySelector("#form-admin2");
            formMain.addEventListener("submit", (e) => {
                console.log("Boton activado")
                e.preventDefault();
                validarData();
            })
        }
        function validarData() {
            const name = document.getElementById('name');
            const user = document.getElementById('usuario');
            const pasor = document.getElementById('pass');
            const ServisOptions = document.querySelector("#servicio");
            //const passw = pasor.value.trim(); 
            const passTrue = objRegex_lost.pass.test(pasor.value);

            if (name.value === '') alert('El nombre no debe estar vacio')

            if(ServisOptions.value === '') alert("Seleccione un servicio");

            if (user.value === '') alert('Coloca Un Usuario')

            if (!passTrue) alert("Contraseña mal Digitada. Asegurese de colocar mas de 6 caracteres.")


            if (name.value != '' && user.value != '' && ServisOptions.value != '' && passTrue) {
                alert("Todos los campos son correctos.")
                catchDate(name, user, pasor,ServisOptions);
                cleanDate(name, user, pasor,ServisOptions);
            }
        }


        function cleanDate(n, u, p, s) {
            n.value = "";
            u.value = "";
            p.value = "";
            s.value = "";
        }

        function catchDate(n, u, p, s) {
            const body = new FormData();
            body.append('name', n.value)
            body.append('user', u.value)
            body.append('pass', p.value)
            body.append('rol', s.value)

            sentDataToServerSide(body)
        }
        function sentDataToServerSide(form) {
        fetch("../../../app/trigger/modal-usuario.php?action=ADD", {
            method: 'POST',
            body: form
        })
            .then(res => res.json())
            .then(res =>{
                dataRender();
            })
            .catch(err => console.log(err))
        }


        const tableBody = document.getElementById('tableBody');
        

        tableBody.addEventListener('click', e => {
            const button = e.target.closest('button')

            if (button) {
                const tr = button.closest('tr')

                const id = tr.getAttribute('data-id')
                const action = button.getAttribute('data-action')

                if (action == 'eliminar') {
                    let condicion = confirm("Desea Continuar?");
                    if(condicion){
                        tr.remove()

                        fetch(`../../../app/trigger/modal-usuario.php?action=DELETE&id=${id}`)
                        .then(res => res.json())
                        .then(console.log)
                    }
                    
                }
            }
        })
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
                    <td>${data.rol}</td>
                    <td><button data-action="eliminar" class="btnEliminar"  style="border:none;margin-right:50px;" aria-describedby="eliminar"><i class="fa-solid fa-trash" style="color: #65e6cc;"></i></button>
                    <button data-action="editar" style="border:none;" aria-describedby="editar"><i class="fa-solid fa-pen-to-square" style="color: #e6659d;"></i></button></td>
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
