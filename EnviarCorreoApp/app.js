const form = document.querySelector("#form");
const emailData = document.querySelector("#email");

form.addEventListener("submit", (e) => {
  e.preventDefault();
  enviarEmail(emailData.value);
});

function enviarEmail(correo) {
  let sentMessages = [];

  const storedData = localStorage.getItem("correoData");
  if (storedData) {
    sentMessages = JSON.parse(storedData).sentMessages || [];
  }

  if (sentMessages.length >= 1 && sentMessages.length < 3) {
    alert(
      "Debe esperar a que se completen los mensajes de correo antes de enviar otro formulario."
    );
    return;
  }

  enviarMensajeCorreo(correo, 0, sentMessages);

  setTimeout(() => {
    enviarMensajeCorreo(correo, 1, sentMessages);
  }, 20000);

  setTimeout(() => {
    enviarMensajeCorreo(correo, 2, sentMessages);
    localStorage.removeItem("correoData");
  }, 40000);
}

// Función para enviar un mensaje de correo y actualizar el localStorage
function enviarMensajeCorreo(correo, index, sentMessages) {
  console.log("Enviando mensaje", index + 1, "a:", correo);

  const message = {
    correo: correo,
    time: new Date().getTime(),
  };
  sentMessages.push(message);
  localStorage.setItem(
    "correoData",
    JSON.stringify({ sentMessages: sentMessages })
  );

  // Llamar a la función para enviar el correo electrónico al servidor
  enviarEmailAjax(correo);
}

// Variable para verificar si se ha recibido la respuesta del servidor Gmail
let gmailResponseReceived = false;

// Función para enviar el correo electrónico al servidor
function enviarEmailAjax(correo) {
  const body = new FormData();
  const id_ser = 1;
  body.append("id_ser", id_ser);
  body.append("email", correo);

  // Enviar la solicitud POST al servidor
  fetch("./message/Controller/process.php", {
    method: "POST",
    body: body,
  })
    .then((response) => response.text()) // Convertir la respuesta a texto
    .then((data) => {
      // Verificar si la respuesta del servidor Gmail ya ha sido recibida
      if (!gmailResponseReceived) {
        // Mostrar la respuesta del servidor Gmail solo si no ha sido recibida antes
        console.log("Respuesta del servidor Gmail:", data);
        // Marcar que se ha recibido la respuesta del servidor Gmail
        gmailResponseReceived = true;
      }
    })
    .catch((error) => {
      // Manejar cualquier error que ocurra durante la solicitud
      console.error("Error al enviar el formulario a Gmail:", error);
    });
}

// Llamar a la función para enviar los correos electrónicos cuando se cargue la página
window.onload = function () {
  const storedData = localStorage.getItem("correoData");
  if (storedData) {
    const sentMessages = JSON.parse(storedData).sentMessages || [];
    if (sentMessages.length === 0) {
      console.log("No hay mensajes pendientes de correo.");
    } else {
      sentMessages.forEach((message, index) => {
        console.log("Reenviando mensaje", index + 1, "a:", message.correo);
      });
    }
  } else {
    console.log("No hay datos de correo almacenados en el localStorage.");
  }
};
