const objRegex_lost = {
  pass: /^(?=.*\d{6,})\S+$/,
};
document.addEventListener("DOMContentLoaded", function () {
  dataRender();
  waitToGo();
  waitToGoUpdate();
});
function waitToGo() {
  const formMain = document.querySelector("#form-admin2");
  formMain.addEventListener("submit", (e) => {
    console.log("Boton activado");
    e.preventDefault();
    validarData("name", "usuario", "pass", "#servicio", "ADD");
  });
}
function waitToGoUpdate() {
  const formMain = document.querySelector("#form-admin3");
  formMain.addEventListener("submit", (e) => {
    console.log("Boton activado Update");
    e.preventDefault();
    validarData("name2", "usuario2", "pass2", "#servicio2", "UPDATE");
  });
}
function validarData(na, use, pas, ser, tipe) {
  const name = document.getElementById(na);
  const user = document.getElementById(use);
  const pasor = document.getElementById(pas);
  const ServisOptions = document.querySelector(ser);
  const idm = document.querySelector(".inputText");

  //var valor = parrafo.textContent;
  //const idm = document.
  const passTrue = objRegex_lost.pass.test(pasor.value);

  if (name.value === "") alert("El nombre no debe estar vacio");

  if (ServisOptions.value === "") alert("Seleccione un servicio");

  if (user.value === "") alert("Coloca Un Usuario");

  if (!passTrue)
    alert("Contraseña mal Digitada. Asegurese de colocar mas de 6 caracteres.");

  if (
    name.value != "" &&
    user.value != "" &&
    ServisOptions.value != "" &&
    passTrue
  ) {
    alert("Todos los campos son correctos." + tipe);
    if (tipe == "ADD") {
      catchDate(name, user, pasor, ServisOptions, tipe);
      cleanDate(name, user, pasor, ServisOptions);
    } else if (tipe == "UPDATE") {
      catchDateUp(idm, name, user, pasor, ServisOptions, tipe);
      modificarYCerrarModal();
    }
  }
}

function cleanDate(n, u, p, s) {
  n.value = "";
  u.value = "";
  p.value = "";
  s.value = "";
}

function catchDate(n, u, p, s, tipe) {
  const body = new FormData();
  body.append("name", n.value);
  body.append("user", u.value);
  body.append("pass", p.value);
  body.append("rol", s.value);

  sentDataToServerSide(body, tipe);
}
function modificarYCerrarModal() {
  var modal = document.getElementById("staticBackdrop_2");
  var modalInstance = bootstrap.Modal.getInstance(modal);
  modalInstance.hide();
}
function catchDateUp(i, n, u, p, s, tipe) {
  const body = new FormData();
  body.append("id", i.textContent);
  body.append("name", n.value);
  body.append("user", u.value);
  body.append("pass", p.value);
  body.append("rol", s.value);

  sentDataToServerSide(body, tipe);
}
function sentDataToServerSide(form, tipe) {
  fetch(`../../../app/trigger/modal-usuario.php?action=${tipe}`, {
    method: "POST",
    body: form,
  })
    .then((res) => res.json())
    .then((res) => {
      dataRender();
      console.log(res);
    })
    .catch((err) => console.log(err));
}

const tableBody = document.getElementById("tableBody");

tableBody.addEventListener("click", (e) => {
  const button = e.target.closest("button");

  if (button) {
    const tr = button.closest("tr");

    const id = tr.getAttribute("data-id");
    const action = button.getAttribute("data-action");

    if (action == "eliminar") {
      let condicion = confirm("Desea Continuar?");
      if (condicion) {
        tr.remove();

        fetch(`../../../app/trigger/modal-usuario.php?action=DELETE&id=${id}`)
          .then((res) => res.json())
          .then(console.log);
      }
    }
  }
});
const dataRender = () => {
  fetch("../../../app/trigger/modal-usuario.php?action=GET")
    .then((res) => res.json())
    .then((Data = []) => {
      tableBody.innerHTML = Data.map((data) => {
        return `
        <tr data-id="${data.id}">
            <td>${data.id}</td>
            <td>${data.nombre}</td>
            <td>${data.usuario}</td>
            <td>${data.rol}</td>
            <td><button data-action="eliminar" class="btnEliminar"  style="border:none;margin-right:50px;" aria-describedby="eliminar"><i class="fa-solid fa-trash" style="color: #65e6cc;"></i></button>
            <button data-action="editar" type="button" class="btn mb-3 btnEditar btn-show" data-bs-toggle="modal" data-bs-target="#staticBackdrop_2" style="border:none;" aria-describedby="editar"><i class="fa-solid fa-pen-to-square" style="color: #e6659d;"></i></button></td>
        </tr>
    `;
      }).join("");
      document.querySelectorAll(".btnEditar").forEach((btn) => {
        btn.addEventListener("click", () => {
          // Lógica para editar la fila
          const rowId = btn.closest("tr").getAttribute("data-id");
          console.log(rowId);
          const bodyFats = new FormData();
          bodyFats.append("id", rowId);
          fetch("../../../app/trigger/modal-usuario.php?action=Mostrar", {
            method: "POST",
            body: bodyFats,
          })
            .then((res) => res.json())
            .then((Data = []) => {
              Data.map((data) => {
                console.log(data.rol);
                console.log(data.id);
                console.log(data.contrasena);
                console.log(data.usuario);
                console.log(data.nombre);
                const ServisOptions = document.querySelector(".selectorDmi");
                const ids = document.querySelector(".inputText");
                const names = document.getElementById("name2");
                const user = document.getElementById("usuario2");
                const passw = document.getElementById("pass2");

                ServisOptions.value = data.rol;
                ids.textContent = data.id;
                names.value = data.nombre;
                user.value = data.usuario;
                passw.value = data.contrasena;
                /*const textos = [];
                            let i =0;
                            celdas.forEach(celda => {
                                console.log(celda.textContent);
                                textos[i] = celda.textContent;
                                i++;
                                // Aquí puedes hacer lo que necesites con el contenido de cada celda
                            });
                            
                            console.log(textos)
                            document.querySelectorAll('.inputText').forEach(parrafo => {
                                parrafo.textContent = textos[0];
                                ; // Asignar el valor que desees aquí
                            });
                            let e = 1;
                            document.querySelectorAll('.clase-input').forEach(input => {
                                input.value = textos[e];
                                e++; // Asignar el valor que desees aquí
                            });*/
              });
            })
            .catch((error) => {
              // Manejas cualquier error que ocurra durante la solicitud fetch
              console.error("Error al obtener los datos:", error);
            });

          const fila = document.querySelector(`tr[data-id="${rowId}"]`);

          // Acceder a los td de esa fila
          const celdas = fila.querySelectorAll("td");

          // Recorrer las celdas y acceder a su contenido
          /*const textos = [];
                    let i =0;
                    celdas.forEach(celda => {
                        console.log(celda.textContent);
                        textos[i] = celda.textContent;
                        i++;
                        // Aquí puedes hacer lo que necesites con el contenido de cada celda
                    });
                    
                    console.log(textos)
                    document.querySelectorAll('.inputText').forEach(parrafo => {
                        parrafo.textContent = textos[0];
                        ; // Asignar el valor que desees aquí
                    });
                    let e = 1;
                    document.querySelectorAll('.clase-input').forEach(input => {
                        input.value = textos[e];
                        e++; // Asignar el valor que desees aquí
                    });
                    const ServisOptions = document.querySelector(".selectorDmi");
                   
                    ServisOptions.value = textos[3];
                    */
          // Llamar a una función para editar la fila con el ID `rowId`
        });
      });
    });
};

dataRender();
