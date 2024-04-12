<style>
.main-container{
    position: fixed;
    top: 54%;
    left: 50%;
    transform: translate(-50%,-50%);
    height: 483px;
    width: 630px;
    overflow: hidden;
    z-index: 10000;
    display: grid;
    grid-template-columns: repeat(2,43% 57%);
    grid-template-rows: repeat(1,1fr);
    border-radius: 20px;
    font-size: 16px;
    
    
}
.grid-item-modal:first-child{
     
    overflow: hidden;
    
    
}   
.grid-item-modal:last-child{  
    
    background: linear-gradient(to bottom ,#FF037F,#7B22B3);  
    display: flex;
    flex-direction: column;
    padding: 10% 0;
    
}
.h3_postion{
    
    position: absolute;
    bottom: 6%;
    width: 43%;
    
}
.h3_postion .h3{
    font-size: 1.3em;
    text-align: center;
    color: white;
    font-weight: 800;
}
.grid-item-modal:first-child::before{
    content: '';
    width: 43%;
    height: 107.5%;
    position: absolute;
    background: transparent;
}  
.grid-item-modal img{
    width: 100%;
    height: 100%;
    object-fit: cover;
    object-position: 40% 60%;
    box-shadow: inset 0 10px 10px black;
    
}
.mantainer{
    width: 100%;
    height: 100%;
    background: transparent;
    display: flex;
   
    flex-direction: column;
    
}
.textoss{
    
    height: 40%;
}
.manta{
    
    display: flex;
    justify-content: center;
}
.top{
    margin-right: 6px;
    
}
.top h4{
    text-align: center;
    font-size: 1.4em;
    color: white;
    margin: 0;
    font-weight: 700;
    margin-top: 15%;
    
}
.top h3{
    
    text-align: center;
    font-size: 1em;
    color: white;
}

.medium h2{
    text-align: center;
    font-size: 3.7em;
    color: white;
    margin: 0;
    font-weight: 900;
}

.bottom-2 h3{
    text-align: center;
    font-size: 1.5em;
    color: white;
    font-weight: 900;
}
.bottom{
    
    width: 100%;
    height: 80%;
    position: relative;
    bottom: 0;
}
.bottom form{
    
    width: 100%;
    height: 100%;
}
.bottom form .form_in{
    
    width: 50%;
    margin: auto;
    display: grid;
    grid-template-columns: repeat(1,1fr);
    grid-template-rows: repeat(6,1fr);
}
.form_in input{
    border-radius: 10px ;
    padding: 2px;
    font-size: .7em;
    
    
}
.form_in label{
    margin-left: 8px;
    color: white;
    font-size: .8em;
    display: flex;
    align-items: end;
    
    
}
.bottom form #form_en{
    
    width: 100%;
    height: 37%;
    display: flex;
    justify-content: center;
    align-items: center;
    
}
#form_en button{
    background: #FF037F;
    color: white;
    font-size: 1.7em;
    padding: 6px 30px;
    font-weight: 900;
    border-radius: 10px;
    box-shadow: 1px 0px 0px 0px white;
}
.btn_close{
    position: absolute;
    top: -5px;
    right: 4px;
    color: white;
    
    
   
    
    
}
.btn_close .close-modal{
    width: 100%;
    font-size: 1.9em;
    background: transparent;
    border: none;
    text-align: left;
    position: relative;
    top: 0;
}

@media (min-width:300px) AND (max-width:600px){
    .main-container{
        height: 295px;
        width: 89%;
        font-size: 9.2px;
    }
}
@media (min-width:0px) AND (max-width:300px){
    .main-container{
        height: 250px;
        width: 96%;
        font-size: 8px;
    }
}

.overflow_lo{
    position: fixed;
    display: block;
    width: 100%;
    height: 100%;
    background: linear-gradient(rgba(255,255,255,0),rgba(0,0,0,0.8));
    z-index: 10000;
    top: 0;
}
.oculto_des{
    display: none;
}
.icon{
    position: absolute;
    top: 3%;
    left: 4%;
    width: 4.8em;
    height: 3.3em;
}





</style>

<section class="overflow_lo oculto_des"></section>
<section class="main-container oculto_des">
    <img class="icon" src="public/img/logo_digimedia_color.webp" alt="Digimedia Icon">
    <div class="main-container-div1 grid-item-modal" style="font-size: 100%;">
        
        <img src="./public/img/modal2/dgservis.jpg"/>
        <div class="h3_postion" style="font-size: 100%;"><h3 class="h3">¡HAZ CRECER TUS REDES! </h3></div>
    </div>
    <div class="main-container-div1 grid-item-modal" style="font-size: 100%;">
        <div class="btn_close" style="font-size: 100%;"><button class="close-modal" style="color: white;">&times;</button></div>
        <div class="mantainer" style="font-size: 100%;">
            <div class="textoss" style="font-size: 100%;">
                <div class="manta" style="font-size: 100%;">
                    <div class="top" style="font-size: 100%;"><h4>SOLO POR</h4><h3>ACCEDE A UNA</h3></div>
                    <div class="medium" style="font-size: 100%;"><h2>HOY</h2></div>
                </div>
                <div class="bottom-2" style="font-size: 100%;"><h3>! ASESORIA GRATIS ¡</h3></div>
            </div>
            
            <div class="bottom" style="font-size: 100%;">
                <form id="formMain_lost" style="font-size: 100%;">
                    <div class="form_in" style="font-size: 100%;">
                        <label>Nombre</label>
                        <input type="text" id="name_lost"/>
                        <label>Apellido</label>
                        <input type="text" id="lastName"/>
                        <label>Correo</label>
                        <input type="text" id="email_lost"/>
                    </div>
                    <div id="form_en" style="font-size: 100%;">
                        <button type="submit">HAZLO YA</button>
                    </div>
                    
                </form>
            </div>
        </div>
    </div>
</section>

<script>
    const overflow_los = document.querySelector('.overflow_lo');
    const container_des = document.querySelector('.main-container')
    let  modalMostrado = false;
    const btnCerrarLa = document.querySelector('.close-modal');
    const objRegex_lost = {
        gmail: /^[\w\.-]+@(gmail|outlook|hotmail|ucsm|senati)\.(com|edu.pe|pe)$/ //validar la estructura de un correo electrónico
    };


    document.addEventListener('DOMContentLoaded', function() {
        //overflow.addEventListener('click',touch_display);
        console.log("Prueba des mentir");
        
        overflow_los.addEventListener('click',touchOverflowdes);
        
        btnCerrarLa.addEventListener('click', () => {
            overflow_los.classList.add('oculto_des')
            container_des.classList.add('oculto_des')
        });

        window.addEventListener('scroll',scrollmedn);
        validarDatos_lost()
    
        
    });
    function validarDatos_lost() {
        const formMain = document.querySelector("#formMain_lost");
        formMain.addEventListener("submit", (e) => {
            e.preventDefault();
            datos_lost();
        })
    }
    function datos_lost() {
        const nombreInput = document.getElementById('name_lost');
        const lastNInput = document.getElementById('lastName');
        const emailInput = document.getElementById('email_lost');


        const email = emailInput.value.trim(); 
        const emailValido = objRegex_lost.gmail.test(email);


        if (nombreInput.value === '') alert('El nombre no debe estar vacio')

        if (lastNInput.value === '') alert('El apellido no debe estar vacio')


        if (!emailValido) alert("Debe de ingresar un correo valido.")


        if (nombreInput.value != '' && lastNInput.value != '' && emailValido) {
             alert("Todos los campos son correctos.")
            overflow_los.classList.add('oculto_des')
            container_des.classList.add('oculto_des')  
            //modalContainer.style.display = 'none';
            agarrandoDatos(nombreInput, lastNInput, emailInput);
            //envioDatosWhatsApp(telefono);
            enviarEmailAjax(email);
            limpiarDatos(nombreInput, lastNInput, emailInput);
        }
    }

    function limpiarDatos(nombre, apellido, correo) {
        nombre.value = "";
        apellido.value = "";
        correo.value = "";
    }

    function agarrandoDatos(nombre, apellido, correo) {
        const form = new FormData();
        form.append('name', nombre.value)
        form.append('lastName', apellido.value)
        form.append('email', correo.value)

        enviandoDatosServer(form)
    }

    //Enviando datos al servidor:
    function enviandoDatosServer(form) {
        fetch("./app/trigger/modal-gestion.php?action=ADD", {
            method: 'POST',
            body: form
        })
            .then(res => res.json())
            .then(console.log)
            .catch(err => console.log(err))
    }
    
    
    function touchOverflowdes(){
        overflow_los.classList.add('oculto_des')
        container_des.classList.add('oculto_des')   
    }
    
    function scrollmedn(){
      var ventasSection = document.getElementById('anuncio-servicio');
      
      
      var scrollPosition = window.scrollY;
      var ventasSectionPosition = ventasSection.offsetTop;
      var windowHeight = window.innerHeight;
      
      // Si el usuario ha llegado a la sección de ventas
      if (scrollPosition > (ventasSectionPosition - windowHeight / 2) && !modalMostrado) {
        // Muestra el anuncio
        overflow_los.classList.remove('oculto_des');
        container_des.classList.remove('oculto_des');
        modalMostrado = true;
      } else {
        // Oculta el anuncio si el usuario se desplaza hacia arriba
        //anuncio.style.display = 'none';
      }
    
    }
   

    function enviarEmailAjax(email) {
        
        const body = new FormData();
        const emailDataModal2_2 = email.value;
        var url = window.location.href;
        const id_ser  = url.split('servicios/gestion-redes-sociales/')[1];
        body.append("id_ser", id_ser);
        body.append("email", emailDataModal2_2);
        // Enviar la solicitud POST al servidor
        fetch("./public/message/Controller/process.php", {
            method: "POST",
            body: body,
        })
            .then((response) => response.text()) // Convertir la respuesta a texto
            .then((data) => {
            // Manejar la respuesta del servidor
            console.log("Respuesta del servidor Gmail Es:", data);
            alert("Enviado con éxito a Gmail");
            })
            .catch((error) => {
            // Manejar cualquier error que ocurra durante la solicitud
            console.error("Error al enviar formulario a Gmail:", error);
            alert("Email no Enviado: ", error);
            });
    }
</script>
