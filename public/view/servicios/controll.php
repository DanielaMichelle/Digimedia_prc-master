<?php 
$phrase1 = "Optimiza tu presencia digital para seguir creciendo.";
$phrase2 = "Aumenta tus ventas con marketing digital.";

$marketing = array($phrase1,$phrase2);

$phrase3 = "Crea contenido de calidad y potencial";
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
            <p><?php echo $value ?></p>
        </div>
        
        
        <div class="bota1">
            <a href="contacto.php" title="¡Contactanos!" class="boton__2" style="box-shadow:2px 3px 2px black ">Contactar</a>
        </div>
        
</div>

<style>

.manipulacion{
    background: rgb(128 0 128);
    padding: 0;
    
   
    
}
.parrafos1{
    
    padding: 15px;
    margin: 0;
    font-weight: 400;
    line-height: 48px;
    font-family: system-ui,-apple-system, "Segoe UI", Roboto, "Helvetica Neue", "Noto Sans", "Liberation Sans", Arial, sans-serif, "Apple Color Emoji", "Segoe UI Emoji", "Segoe UI Symbol", "Noto Color Emoji"
    
}

.bota1{
    
    margin-top: -20px;
    padding: 5px 20px;
}
</style>