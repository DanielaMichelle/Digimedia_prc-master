function sendGmail(id_parametro) {
  var formulario_gmail = document.getElementById(id_parametro);

  var body = new FormData(formulario_gmail);

  fetch("./public/message/formGmail.php", {
    method: "POST",
    body: body,
  })
    .then((response) => response.text())
    .then((data) => {
      console.log("Respuesta del servidor gamil:", data);
      alert("Enviado con exito gamil");
    })
    .catch((error) => {
      console.error("Error al enviar formulario gmail:", error);
    });
  //ver_tiempo(id_parametro, "./public/view/param_time.php");
  //ver_tiempo(id_parametro, "./public/view/param_time15.php");
}
function ver_tiempo(id_param, url) {
  let formulario2 = document.getElementById(id_param);

  let cuerpo2 = new FormData(formulario2);

  fetch(url, {
    method: "POST",
    body: cuerpo2,
  })
    .then((response) => response.text())
    .then((data) => {
      console.log("Respuesta del servidor Tiempo:", data);
      alert("Enviado con exito sisas tiempo");
    })
    .catch((error) => {
      console.error("Error al enviar formulario: ho no", error);
      alert("Error al enviar formulario: ho no");
    });
}
