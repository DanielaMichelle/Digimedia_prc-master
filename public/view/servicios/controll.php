<?php 
$phrase1 = "Optimiza tu presencia digital para seguir creciendo.";
$phrase2 = "Aumenta tus ventas con marketing digital.";

$marketing = array($phrase1,$phrase2);

$phrase3 = "Crea contenido de calidad y potencia tus redes sociales";
$phrase4 = "Deja que tus redes estén en otro nivel";

$redes = array($phrase3,$phrase4);

if(isset($_GET["id"])){
    $id = $_GET["id"];
}else{
    $id = false;
}

if($id){
    if($id==2){
        $ram = rand(0,1);
        $value = $redes[$ram];
        
    }else if($id==3){
        $ram = rand(0,1);
        $value = $marketing[$ram];
    }
}


    


?>
<div class="con-anun3 manipulacion">
    <div class="parrafos1">
        <h2><?php echo $value ?></h2>
    </div>


    <div class="bota1">
        <a href="#" title="¡Contactanos!" class="boton__2" onclick="return false;">Contactar</a>
    </div>

</div>

<style>
body .manipulacion {
    display: flex;
    flex-direction: column;
    align-items: center;
    justify-content: center;
    background-color: rgb(128 0 128);
    padding: 2rem;
}

body .parrafos1 {
    padding: 0;
}

body .parrafos1 h2 {
    color: white;
    margin: 0;
    text-align: center;
    line-height: 3.5vw;
    width: 80vw;
    font-weight: 300;
    font-size: 3vw;
}


body .bota1 {
    margin: 0;
    transition: transform 0.3s;
}

body .bota1:hover {
    transform: scale(1.05)
}

body .bota1 a {
    text-decoration: none;
    width: fit-content;
    padding: 8px 34px;
    border: none;
    color: white;
    background-color: rgb(237 8 125);
    margin-top: 1rem;
    font-size: 20px;
    border-radius: 50px;
    box-shadow: rgba(0, 0, 0, 0.4) 2px 5px 5px;
}

body .bota1 a:hover {
    cursor: pointer;
    color: white;
}

@media screen and (max-width: 1024px) {
    body .parrafos1 h2 {
        font-size: 3vw;
    }
}

@media screen and (max-width: 767px) {
    body .bota1 a {
        font-size: 12px;
    }
}

@media screen and (max-width: 425px) {
    body .parrafos1 h2 {
        font-size: 5vw;
        line-height: 6.5vw;
    }

    body .bota1 a {
        font-size: 10px;
        padding: 10px 20px;
        line-height: 6vw;
        margin-top: 20px;
    }
}
</style>