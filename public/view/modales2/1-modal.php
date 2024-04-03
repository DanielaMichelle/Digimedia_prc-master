<style>
    .modal2 {
        width: 40rem;
        height: auto;
        background-color: tomato;
        position: fixed;
        top: 50%;
        left: 50%;
        transform: translate(-50%, -45%);
        z-index: 50;
        display: grid;
        grid-template-columns: 3fr 4fr;
        background-image: linear-gradient(to bottom, #0095ff, #3a89f6, #537cec, #656ee0, #7460d2, #8957cb, #9b4cc1, #ab3fb6, #c533ac, #dc24a0, #ef1390, #ff037f);
        border-radius: 12px;
        /* display: none; */
    }

    .modal2--image-container {
        background-color: #0392fc;
        position: relative;
        border-radius: 12px 0px 12px 12px;
        overflow: hidden;
    }

    .modal2--image-container span {
        position: absolute;
        bottom: 0;
        right: 0;
        color: white;
        font-size: 2rem;
        line-height: 2rem;
        font-weight: 700;
        text-align: end;
        padding-right: 24px;
        padding-bottom: 40px;
        text-transform: uppercase;
    }

    .modal2--image-container figure {
        width: 100%;
        height: 100%;
        background-color: #7460d2;

        img {
            width: 100%;
            height: 100%;
        }
    }

    .modal2--image-container .icon {
        position: absolute;
        width: 4rem;
        margin-top: 1rem;
        margin-left: 1rem;
    }

    .modal2--form-container {
        display: flex;
        flex-direction: column;
        align-items: center;
        justify-content: center;
        gap: 2rem;
        padding: 2rem;
    }

    .modal2--form-container__title {
        text-transform: uppercase;
        display: flex;
        flex-direction: column;
        color: white;
        text-align: center;
    }

    .modal2--form-container__title span:nth-child(1) {
        font-size: 2rem;
        line-height: 2.5rem;
    }

    .modal2--form-container__title span:nth-child(2) {
        font-size: 2rem;
        line-height: 2.5rem;
        font-weight: 700;
    }

    .modal2--form-container__title span:nth-child(3) {
        font-size: 3rem;
        font-weight: 800;
        line-height: 3rem;
    }

    .modal2--form-container form {
        color: white;
        font-family: "Poppins", sans-serif;
        font-style: normal;
        display: flex;
        flex-direction: column;
        gap: 2rem;
    }

    .modal2--form-container form label {
        padding-left: 8px;
        font-size: 14px;
    }

    .modal2--form-container form .form-inputs {
        width: 84%;
        margin: 0 auto;
    }

    .modal2--form-container form .form-inputs input {
        height: 30px;
    }

    .modal2--form-container form button {
        background-color: #0095FF;
        color: white;
        text-transform: uppercase;
        font-size: 36px;
        padding: 10px 16px;
        border-radius: 20px;
        font-weight: 800;
        border: none;
        letter-spacing: 1px;
    }

    @media (max-width: 687px) {
        .modal2 {
            width: 90%;
        }

        .modal2--image-container span {
            font-size: 5vw;
            line-height: 5vw;
            padding-right: 2vw;
            padding-bottom: 6vw;
        }

        .modal2--form-container {
            gap: 1rem;
        }

        .modal2--form-container__title span:nth-child(1) {
            font-size: 5vw;
            line-height: 5vw;
        }

        .modal2--form-container__title span:nth-child(2) {
            font-size: 5vw;
            line-height: 5.5vw;
        }

        .modal2--form-container__title span:nth-child(3) {
            font-size: 7vw;
            line-height: 7vw;
        }

        .modal2--form-container form {
            gap: 1rem;
        }

        .modal2--form-container form .form-inputs input {
            height: 5vw;
        }

        .modal2--form-container form label {
            padding-left: 8px;
            font-size: 2vw;
        }

        .modal2--form-container form button {
            font-size: 5vw;
        }

    }

    @media (max-width: 435px) {

        .modal2--form-container {
            padding: 1rem 2rem;
        }

        .modal2--image-container span {
            padding-bottom: 5vw;
        }

        .modal2--image-container .icon {
            width: 3rem;
        }

        .modal2--form-container__title span:nth-child(1) {
            font-size: 4vw;
            line-height: 4vw;
        }

        .modal2--form-container__title span:nth-child(2) {
            font-size: 4vw;
            line-height: 4.5vw;
        }

        .modal2--form-container__title span:nth-child(3) {
            font-size: 6vw;
            line-height: 6vw;
        }

        .modal2--form-container form .form-inputs input {
            height: 5vw;
        }

        .modal2--form-container form .form-inputs .form-group {
            line-height: 12px;
        }

        .modal2--form-container form button {
            font-size: 4vw;
        }

    }

    @media (max-width: 320px) {
        .modal2--form-container form button {
            font-size: 4vw;
            padding: 5px;
            width: 115%;
            position: relative;
            left: -6px;
        }
    }
</style>

<div class="modal2" id="modal2_desarrollo">
    <div class="modal2--image-container">
        <img class="icon" src="public/img/logo_footer.webp" alt="Digimedia Icon">
        <span>¡Destaca tu negocio!</span>
        <figure>
            <img src="./public/img/modal2/modal2-desarrollo.webp" alt="Modal 2 Desarrollo y Diseño Web">
        </figure>
    </div>

    <div class="modal2--form-container">
        <div class="modal2--form-container__title">
            <span>Obtén ahora</span>
            <span>Una Asesoría</span>
            <span>¡Gratis!</span>
        </div>

        <form id="formMain" method="post">
            <div class="form-inputs">
                <!--Nombre-->
                <div class="form-group">
                    <label for="name">Nombre</label>
                    <input type="text" class="form-control" name="name" id="name">
                </div>

                <!--Apellido-->
                <div class="form-group">
                    <label for="lastName">Apellido</label>
                    <input type="text" class="form-control" name="lastName" id="lastName">
                </div>

                <!--Correo-->
                <div class="form-group">
                    <label for="email">Correo</label>
                    <input type="text" class="form-control" name="email" id="email">
                </div>

            </div>
            <button type="submit" class="go-button" name="submit">Hazlo ya</button>
        </form>

    </div>
</div>

<script>
    const modal = document.getElementById('modal2_desarrollo');
    const anuncioServicio = document.querySelector("#anuncio-servicio");

    // OPEN MODAL
    // let options = {
    //     threshold: 0.5,
    // };
    // let ejecutado = false;

    // let observer = new IntersectionObserver(function(entries) {
    //     for (const entry of entries) {
    //         if (entry.isIntersecting && !ejecutado) {
    //             console.log("entro");
    //             modal.style.display = "grid";
    //             ejecutado = true; // Marcar como ejecutado
    //         }
    //     }
    // }, options);

    // observer.observe(anuncioServicio);



    // CLOSE MODAL
    // document.addEventListener('click', function(event) {
    //     if (!modal.contains(event.target)) {
    //         modal.style.display = "none";
    //         console.log("Click fuera del modal");
    //     }
    // });
</script>