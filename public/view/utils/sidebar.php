<div class="menu">
    <ion-icon name="menu-outline"></ion-icon>
    <ion-icon name="close-outline"></ion-icon>
</div>

<div class="barra-lateral">
    <div>
        <div class="nombre-pagina">
            <ion-icon id="cloud" name="bar-chart-outline"></ion-icon>
            <span>Digimedia</span>
        </div>
        <button class="boton" id="logout">
            <ion-icon name="cloud-download-outline"></ion-icon>
            <span>Cerrar sesion</span>
        </button>
    </div>

    <nav class="navegacion">
        <ul>
            <li>
                <a id="inbox" href="/Digimedia_prc-master/intranet.php">
                    <ion-icon name="star-outline"></ion-icon>
                    <span>Section Main</span>
                </a>
            </li>
            <li>
                <a href="/Digimedia_prc-master/public/view/secciones-admin/conocer-personas.php">
                    <ion-icon name="duplicate-outline"></ion-icon>
                    <span>Meeting people</span>
                </a>
            </li>
            <li>
                <a href="/Digimedia_prc-master/public/view/secciones-admin/potenciar-web.php">
                    <ion-icon name="duplicate-outline"></ion-icon>
                    <span>Boost your website</span>
                </a>
            </li>
            <li>
                <a href="/Digimedia_prc-master/public/view/secciones-admin/person-campanas.php">
                    <ion-icon name="duplicate-outline"></ion-icon>
                    <span>Exploit content</span>
                </a>
            </li>
            <li>
                <a href="/Digimedia_prc-master/public/view/secciones-admin/contenido-redes.php">
                    <ion-icon name="duplicate-outline"></ion-icon>
                    <span>Elevate campaigns</span>
                </a>
            </li>
            <li>
                <a href="/Digimedia_prc-master/public/view/secciones-admin/disenar-camino-futuro.php">
                    <ion-icon name="duplicate-outline"></ion-icon>
                    <span>Design your path</span>
                </a>
            </li>
            <li>
                <a href="/Digimedia_prc-master/public/view/secciones-admin/libro_reclamaciones.php">
                    <ion-icon name="duplicate-outline"></ion-icon>
                    <span>Terms and reclaims</span>
                </a>
            </li>
            <li>
                <a href="/Digimedia_prc-master/public/view/secciones-admin/modal-branding.php">
                    <ion-icon name="duplicate-outline"></ion-icon>
                    <span>Modal branding</span>
                </a>
            </li>
            <li>
                <a href="/Digimedia_prc-master/public/view/secciones-admin/modal-desing.php">
                    <ion-icon name="duplicate-outline"></ion-icon>
                    <span>Modal desing</span>
                </a>
            </li>
            <li>
                <a href="/Digimedia_prc-master/public/view/secciones-admin/modal-gestion.php">
                    <ion-icon name="duplicate-outline"></ion-icon>
                    <span>Modal gestion</span>
                </a>
            </li>
            <li>
                <a href="/Digimedia_prc-master/public/view/secciones-admin/modal-marketing.php">
                    <ion-icon name="duplicate-outline"></ion-icon>
                    <span>Modal marketing</span>
                </a>
            </li>
            <li>
                <a id="enlace">
                    <ion-icon name="duplicate-outline"></ion-icon>
                    <span>Usuarios</span>
                </a>
            </li>
        </ul>
    </nav>

    <div>
        <div class="linea"></div>

        <div class="modo-oscuro">
            <div class="info">
                <ion-icon name="moon-outline"></ion-icon>
                <span>Dark Mode</span>
            </div>
            <div class="switch">
                <div class="base">
                    <div class="circulo">

                    </div>
                </div>
            </div>
        </div>

        <div class="usuario">
            <img src="/Digimedia_prc-master/public/img/user-admin.png" alt="" height="50px">
            <div class="info-usuario">
                <div class="nombre-email">
                <!-- Nombre admin: -->
                    <span class="nombre">Bienvenido</span>
                    <span class="email">Administrador</span> 
                </div>
                <ion-icon name="ellipsis-vertical-outline"></ion-icon>
            </div>
        </div>
    </div>

</div>
<script>
    const emailLober = document.querySelector(".email");
    var valor = localStorage.getItem('rol');
    let enla = document.getElementById('enlace')
    function dose(){
        
        let namesdf = "";
        if(valor==1){
            enla.setAttribute("href", "/Digimedia_prc-master/public/view/secciones-admin/modal-usuario.php");
            namesdf = "Administrador Alegre";
        }else{
            enla.setAttribute("href", "/Digimedia_prc-master/public/view/secciones-admin/modal-reader.php");
            namesdf = "Usuario";
        }
        emailLober.textContent = namesdf;

    }
    dose();
  
</script>
<!-- Tu código HTML aquí... -->






