<style>
.main-container{
    position: fixed;
    top: 52%;
    left: 50%;
    transform: translate(-50%,-50%);
    height: 83vh;
    width: 60%;
    overflow: hidden;
    z-index: 10000;
    display: grid;
    grid-template-columns: repeat(2,40% 60%);
    grid-template-rows: repeat(1,1fr);
    border-radius: 20px;
    border: .4px solid black;
    
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
    width: 40%;
    
}
.h3_postion .h3{
    font-size: 2.5vw;
    text-align: center;
    color: white;
    font-weight: 800;
}
.grid-item-modal:first-child::before{
    content: '';
    width: 40%;
    height: 107.5%;
    position: absolute;
    background: linear-gradient(rgba(255,255,255,0),rgba(0,0,0,0.8));
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
    font-size: 2.5vw;
    color: white;
    margin: 0;
    font-weight: 700;
    margin-top: 7%;
    
}
.top h3{
    
    text-align: center;
    font-size: 2vw;
    color: white;
}

.medium h2{
    text-align: center;
    font-size: 5.5vw;
    color: white;
    margin: 0;
    font-weight: 900;
}

.bottom-2 h3{
    text-align: center;
    font-size: 2.5vw;
    color: white;
    font-weight: 900;
}
.bottom{
    
    width: 100%;
    height: 69%;
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
    
    
}
.form_in label{
    margin-left: 8px;
    color: white;
    font-size: 1.2vw;
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
    font-size: 3.3vw;
    padding: 2px 40px;
    font-weight: 900;
    border-radius: 20px;
    box-shadow: 1px 0px 0px 0px white;
}
@media (min-width:860px) AND (max-width:980px){
    .main-container{
        width: 70%; 
        height: 430px;
    }
    .h3_postion .h3{
        font-size: 3vw;

    }
    
}
@media (min-width:650px) AND (max-width:860px){
    .main-container{
        width: 80%; 
        height: 420px;
    }
    .h3_postion .h3{
        font-size: 3.5vw;

    }
    .medium h2{
        font-size: 6vw;
    }
   
}
@media (min-width:500px) AND (max-width:650px){
    .main-container{
        width: 95%; 
        height: 370px;
    }
    .form_in input{
        border-radius: 10px ;
        padding: 2px;
        font-size: 2vw;
    
    }
   
    .form_in label{
        font-size: 2.5vw;
    }
    #form_en button{
        font-size: 4vw;
    }
    .top h4{
        font-size: 3.5vw;
    }
    .top h3{
        font-size: 3.1vw;
    }
    .medium h2{
        font-size: 8vw;
    }

    .bottom-2 h3{
        font-size: 3.5vw;
    }
    .h3_postion .h3{
        font-size: 4vw;

    }
    
}
@media (min-width:380px) AND (max-width:500px){
    .main-container{
        width: 95%; 
        height: 330px;
    }
    .bottom{
    
        width: 100%;
        height: 69%;
        
        
    }
    .form_in input{
        border-radius: 10px ;
        padding: 2px;
        font-size: 2.2vw;
    
    }
   
    .form_in label{
        font-size: 2.5vw;
    }
    #form_en button{
        font-size: 4vw;
    }
    .top h4{
        font-size: 3.5vw;
    }
    .top h3{
        font-size: 3.1vw;
    }
    .medium h2{
        font-size: 8.3vw;
    }

    .bottom-2 h3{
        font-size: 3.5vw;
    }
    .h3_postion .h3{
        font-size: 4vw;

    }
    .h3_postion{
        bottom: 5%;  
    }
}
@media (min-width:280px) AND (max-width:380px){
    .main-container{
        width: 95%; 
        height: 300px;
    }
    .bottom{
    
        width: 100%;
        height: 69%;
       
        
    }
    .form_in input{
        border-radius: 10px ;
        padding: 2px;
        font-size: 2.5vw;
    
    }
    
    .form_in label{
        font-size: 2.5vw;
    }
    #form_en button{
        font-size: 4.5vw;
    }
    .top h4{
        font-size: 4.3vw;
    }
    .top h3{
        font-size: 3.8vw;
    }
    .medium h2{
        font-size: 7.3vw;
    }

    .bottom-2 h3{
        font-size: 4.3vw;
    }
    .h3_postion .h3{
        font-size: 4vw;

    }
    .h3_postion{
        bottom: 5%;  
    }
    
}
@media (min-width:0px) AND (max-width:280px){
    .main-container{
        width: 95%; 
        height: 250px;
    }
    .bottom{
    
        width: 100%;
        height: 69%;
       
        
    }
    .form_in input{
        border-radius: 10px ;
        padding: 2px;
        font-size: 2.5vw;
    
    }
    
    .form_in label{
        font-size: 2.5vw;
    }
    #form_en button{
        font-size: 3.5vw;
    }
    .top h4{
        font-size: 4.3vw;
    }
    .medium h2{
        font-size:7.3vw;
    }

    .bottom-2 h3{
        font-size: 4.3vw;
    }
    .h3_postion .h3{
        font-size: 4vw;

    }
    .h3_postion{
        bottom: 5%;  
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






</style>

<section class="overflow_lo oculto_des"></section>
<section class="main-container oculto_des">
    <div class="main-container-div1 grid-item-modal">
        <img src="./public/img/modal2/dgservis.jpg"/>
        <div class="h3_postion"><h3 class="h3">¡HAZ CRECER TUS REDES! </h3></div>
    </div>
    <div class="main-container-div1 grid-item-modal">
        <div class="mantainer">
            <div class="manta">
                <div class="top"><h4>SOLO POR</h4><h3>ACCEDE A UNA</h3></div>
                <div class="medium"><h2>HOY</h2></div>
            </div>
            
            <div class="bottom-2"><h3>! ASESORIA GRATIS ¡</h3></div>
            
            <div class="bottom">
                <form>
                    <div class="form_in">
                        <label>Nombre</label>
                        <input type="text"/>
                        <label>Apellido</label>
                        <input type="text"/>
                        <label>Correo</label>
                        <input type="text"/>
                    </div>
                    <div id="form_en">
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

    document.addEventListener('DOMContentLoaded', function() {
        //overflow.addEventListener('click',touch_display);
        console.log("Prueba des mentir");
        
        overflow_los.addEventListener('click',touchOverflowdes);

        window.addEventListener('scroll',scrollmedn);
    
        
    });
    function touchOverflowdes(){
        overflow_los.classList.add('oculto_des')
        container_des.classList.add('oculto_des')   
    }
    function scrollmedn(){
      var ventasSection = document.getElementById('metros_locs2');
      
      
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
   
    
</script>
