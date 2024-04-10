<header>
    <!-- NUEVOOO -->
    <div>
        <a class="navbar-brand" href="index.php">
            <img src="./public/img/logoblanco2.webp" loading="lazy" class="logoimagen" title="¡Digimedia!" width="100%"
                height="100%" alt="Img no encontrada">
        </a>
    </div>
    <input type="checkbox" id="btn-menu">
    <label for="btn-menu" class="icon-menu"><i class="fa-solid fa-bars" style="color: #FFFFFF;"></i></label>
    <nav class="menu" style="font-size: 100%;">
        <ul class="vacios" style="font-size: 100%;">
            <!--<div class="btn_close" style="font-size: 100%;">
                <button class="close-modal" style="color: white;">&times;</button>
            </div>-->
            <input type="checkbox" id="btn-menu_lose" >
            <label for="btn-menu_lose" class="icon-menu_close close-modal">
                <i class="fa-solid fa-xmark" style="color: #fcfcfc;"></i>
            </label>
            <div class="doresilaba">
                <div class="navbar-brand" >
                    <img src="./public/img/logoblanco.png" loading="lazy" class="logoimagen" title="¡Digimedia!" width="100%"
                        height="100%" alt="Img no encontrada">
                </div>
            </div>
            <li><a href="index.php" title="Home">Home</a></li>
            <li class="submenu"><a  title="Servicios">Servicios<i class="fa-solid fa-chevron-down"
                        style="color: #FFFFFF;"></i></a>
                <ul>
                    <li><a href="servicios/diseno-desarrollo-web/1" title="Diseño y Desarrollo Web">Diseño y
                            Desarrollo
                            Web</a></li>
                    <li><a href="servicios/gestion-redes-sociales/2" title="Gestión de Redes Sociales">Gestión de Redes
                            Sociales</a></li>
                    <li><a href="servicios/marketing-gestion-digital/3" title="Marketing y Gestión Digital">Marketing y
                            Gestión Digital</a></li>
                    <li><a href="servicios/brading-desing/4" title="Branding y Diseño">Branding
                            y Diseño</a></li>
                </ul>
            </li>
            <li><a href="nosotros.php" title="Nosotros">Nosotros</a></li>
            <li class="submenu"><a  title="Saber mas..">More<i class="fa-solid fa-chevron-down" title="Mas.."
                        style="color: #FFFFFF;"></i></a>
                <ul>
                    <li><a href="contacto.php" title="Contactanos">Contáctanos</a></li>
                    <li><a href="preguntas.php" title="FAQ">FAQ</a></li>
                </ul>
            </li>
            <li><a href="login.php" title="Login">Login</a></li>
        </ul>
    </nav>
</header>
<script src="https://kit.fontawesome.com/0ee4e706bf.js" crossorigin="anonymous"></script>
<script>

    const cer_12 = document.querySelector(".close-modal");
    const menu_123 = document.querySelector('.menu');
    const lodis_1234 = document.getElementById('btn-menu');

    document.addEventListener('DOMContentLoaded',function(){
        menu_123.classList.remove('lost_con');
        cer_12.addEventListener('click',close_1234)
        lodis_1234.addEventListener('click',close_1234_2)
    })

    function close_1234(){
        menu_123.classList.add('lost_con')
        desmarcarCheckbox();
    }
    function close_1234_2(){
        menu_123.classList.remove('lost_con')

        
    }
    function desmarcarCheckbox() {
        lodis_1234.checked = false;
    }

</script>