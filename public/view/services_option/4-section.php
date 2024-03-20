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
    color: #FF8616;
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



</style>
<section class="firts_section">
    <div class="content_section">
        <h3 id="titulo">Branding y Diseño</h3>
        <p id="Relleno">
        Juntos, crean una experiencia coherente y memorable para los clientes, construyendo
         una conexión emocional y diferenciando la marca en el mercado.
        </p>
        <p>
        Mientras que el branding establece la identidad, valores y personalidad de la marca,
         el diseño se encarga de transmitir estos elementos de manera visual a través 
         de elementos como el logo, los colores, la tipografía y el estilo gráfico.

        </p>
    </div>
</section>