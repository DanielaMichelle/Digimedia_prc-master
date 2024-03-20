<style>
.firts_section{
    width: 100%;
    width: red;
    display: flex;
    justify-content: center;
    align-content: end;
    padding: 70px;
}

.content_section{
    width: 60%;
    display: flex;
    flex-direction: column;
    justify-content: center;
    align-items: center;
}
.content_section > h3{
    font-family:"Poppins", sans-serif;
    font-weight: 600;
    font-style: normal;
    color: #50B0E6;
    padding: 19px;
    font-size: 2.4vw;
}
.content_section > p{
    font-family:"Open Sans", sans-serif;
    font-weight: 400;
    font-style: normal;
    text-align: center;
    padding: 8px;
    font-size: 1.4vw;
}
@media (min-width:700px) AND (max-width: 1000px){

.content_section{
    width: 75%;
}
.content_section > h3{
    font-size: 3.3vw;
}
.content_section > p{
    font-size: 1.9vw;
}
}
@media (min-width:0px) AND (max-width: 700px){

    .content_section{
        width: 95%;
    }
    .content_section > h3{
        font-size: 4.7vw;
    }
    .content_section > p{
        font-size: 3.2vw;
    }
}

.container_grid{
    display: grid;
    grid-template-columns: repeat(auto-fill,25%);
    width: 100%;
    padding: 40px 0;
    justify-content: center;

}
.grid_item{
    height: 400px;
    display: flex;
    flex-direction: column;
    justify-content: center;
    position: relative;


}
.img_div{
    position: absolute;
    width: 11vw;
    height: 20vh;
    border-radius: 50%;
    background: #50B0E6;
    top: 0;
    left: 27%;
    right: 27%;
    transition: transform 1s ease-in-out, background 2s ease-in-out;
    z-index: 10;
    
}
.descripcion_div{
    width: 85%;
    height: 70%;
    border: 1px solid black;
    margin: auto;
    transition: transform 1s ;
}

.hovered {
    transform: translateY(-15px);;
    background: linear-gradient(to bottom,#0095FF,#2100E8);
    
}
#slider{
    margin: 0;
    
    max-width: 100%;
    text-align: center;
    background: yellow;
    display: flex;
    flex-direction: column;
    justify-content: center;
    position: relative;
}
#slider input[type=radio]{
    display: none;
}
#slider label{
    cursor: pointer;
    text-decoration: none;
}
#slides{
    width: 85%;
    padding: 30px;
    border: 4px solid black;
    margin: auto;
    background: greenyellow;
    position: relative;
    z-index: 1;
}
#overflow{
    width: 100%;
    overflow: hidden;
    background: sandybrown;
}
#slide1:checked ~ #slides .container_grid{
    margin-left: 0;
}
#slide2:checked ~ #slides .container_grid{
    margin-left: -100%;
}
#slide3:checked ~ #slides .container_grid{
    margin-left: -200%;
}
#slide4:checked ~ #slides .container_grid{
    margin-left: -300%;
}
#slides .container_grid{
    transition: margin-left 800ms cubic-bezier(0.770, 0.000, 0.175, 1.000);
    width: 400%;
    line-height: 0;
}

#slides .grid_item{
    float: left;
    background: red;
}
#controls{
    width: 100%;
    margin: -130 0 0 0;
    height: 50px;
    position: relative;
    z-index: 3;
}
#controls label{
    height: 50px;
    width: 50px;
    transition: opacity 0.2s ease-out;
    opacity: .4;
}
#controls label:hover{
    opacity: 1;
}
#slide1:checked ~ #controls label:nth-child(2),
#slide2:checked ~ #controls label:nth-child(3),
#slide3:checked ~ #controls label:nth-child(4),
#slide4:checked ~ #controls label:nth-child(1)
{
    background: url(https://cdn-icons-png.flaticon.com/512/271/271228.png) no-repeat;
    
    background-size: 50px;
    
    display: flex;
    z-index: 100;
    position: absolute;
    right: 0;
    top: -300px;
}
#slide1:checked ~ #controls label:nth-last-child(1),
#slide2:checked ~ #controls label:nth-last-child(4),
#slide3:checked ~ #controls label:nth-last-child(3),
#slide4:checked ~ #controls label:nth-last-child(2)
{
    background: url(https://cdn-icons-png.flaticon.com/512/271/271220.png) no-repeat;
    background-size: 50px;
    display: flex;
    z-index: 100;
    position: absolute;
    left: 0;
    top: -300px;
}

#bulets{
    margin: 100px 0 0;
    text-align: center;
}
#bulets label{
    display: inline-block;
    width: 10px;
    height: 10px;
    border-radius: 100%;
    margin: 0 10px;
    background: black;
}

#slide1:checked ~ #bulets label:nth-child(1),
#slide2:checked ~ #bulets label:nth-child(2),
#slide3:checked ~ #bulets label:nth-child(3),
#slide4:checked ~ #bulets label:nth-child(4)
{
   background: #2100E8;
}


</style>
<section class="firts_section">
    <div class="content_section">
        <h3 id="titulo">Diseño y Desarollo Web</h3>
        <p id="Relleno">
        Consiste en la habilidad de presentar contenido de manera organizada 
        en una página web con el objetivo de brindar una experiencia óptima al usuario.
        </p>
        <p>El diseño se centra en la estética visual, mientras que el desarrollo se dedica
         a la construcción y programación del sitio web. Ambos aspectos colaboran 
         estrechamente para asegurar el éxito del sitio web

        </p>
    </div>


</section>

<section id="slider">
    <input type='radio'  name="slider" id="slide1" checked />
    <input type='radio'  name="slider" id="slide2"  />
    <input type='radio'  name="slider" id="slide3" />
    <input type='radio'  name="slider" id="slide4"  />
    <div id="slides">
        <div id="overflow">
            <section class="container_grid">
                <div class="grid_item">
                    <div class="img_div elemento"></div>
                    <div class="descripcion_div elemento"></div>
                </div>
                <div class="grid_item">
                    <div class="img_div elemento2"></div>
                    <div class="descripcion_div elemento2"></div>
                </div>
                <div class="grid_item">
                    <div class="img_div elemento3"></div>
                    <div class="descripcion_div elemento3"></div>
                </div>
                <div class="grid_item">
                    <div class="img_div elemento4"></div>
                    <div class="descripcion_div elemento4"></div>
                </div>
            </section>
        </div>
    </div>
    <div id="controls">
        <label for="slide1" ></label>
        <label for="slide2" ></label>
        <label for="slide3" ></label>
        <label for="slide4" ></label>
    </div>
    <div id="bulets">
        <label for="slide1" ></label>
        <label for="slide2" ></label>
        <label for="slide3" ></label>
        <label for="slide4" ></label>
    </div>
    
</section>


<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script>
    $(document).ready(function(){
        $(".elemento").hover(function(){
            $(".elemento").addClass("hovered");
        }, function(){
            $(".elemento").removeClass("hovered");
        });
        $(".elemento2").hover(function(){
            $(".elemento2").addClass("hovered");
        }, function(){
            $(".elemento2").removeClass("hovered");
        });
        $(".elemento3").hover(function(){
            $(".elemento3").addClass("hovered");
        }, function(){
            $(".elemento3").removeClass("hovered");
        });
        $(".elemento4").hover(function(){
            $(".elemento4").addClass("hovered");
        }, function(){
            $(".elemento4").removeClass("hovered");
        });
    });
</script>