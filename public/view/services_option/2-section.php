<style>
    .firts_section {
        width: 100%;
        background: transparent;
        display: flex;
        justify-content: center;

        padding: 0 70px;
    }

    .content_section {
        width: 60%;

        display: flex;
        flex-direction: column;
        justify-content: center;
        align-items: center;


    }

    .content_section>h3 {
        font-family: "Poppins", sans-serif;
        font-weight: 600;
        font-style: normal;
        color: #FF66C4;
        padding: 19px;
        font-size: 2.4vw;
    }

    .content_section>p {
        font-family: "Open Sans", sans-serif;
        font-weight: 400;
        font-style: normal;
        text-align: center;
        padding: 8px;
        font-size: 1.4vw;
    }

    @media (min-width:820px) AND (max-width: 1020px) {

        .content_section {
            width: 70%;
        }

        .content_section>h3 {
            font-size: 4vw;
        }

        .content_section>p {
            font-size: 1.9vw;
        }


        .firts_section {
            padding: 0 50px;
        }



        #slider {

            height: auto;
            position: relative;
            height: 500px;
        }

        #slides {

            padding: 0 30px;
            width: 600px;
            position: relative;
            top: 75px;
            height: 500px;
        }

        #overflow {

            padding: 0;
            position: relative;

            height: 500px;
            top: 0px;


        }

        .grid_item {

            position: relative;
            top: -25px;
        }
    }

    @media (min-width:600px) AND (max-width:820px) {
        .content_section {
            width: 70%;
        }

        .content_section>h3 {
            font-size: 3.5vw;
        }

        .content_section>p {
            font-size: 2.3vw;
        }

        .content_section {
            width: 95%;
        }

        #slider {

            height: auto;
            position: relative;
            height: 500px;
        }

        #slides {

            padding: 0 30px;
            width: 600px;
            position: relative;
            top: 75px;
            height: 500px;
        }

        #overflow {

            padding: 0;
            position: relative;

            height: 500px;
            top: 0px;


        }

        .grid_item {

            position: relative;
            top: -25px;
        }
    }

    @media (min-width:380px) AND (max-width: 600px) {

        .content_section {
            width: 100%;
        }

        .content_section>h3 {
            font-size: 4.7vw;
        }

        .content_section>p {
            font-size: 3.2vw;
        }

        .firts_section {
            padding: 0 50px;
        }


        #slider {

            height: auto;
            position: relative;
            height: 500px;
        }

        #slides {

            padding: 0 30px;
            width: 600px;
            position: relative;
            top: 75px;
            height: 500px;
        }

        #overflow {

            padding: 0;
            position: relative;

            height: 500px;
            top: -30px;


        }

        .grid_item {

            position: relative;
            top: -25px;
        }
    }

    @media (min-width:0px) AND (max-width:380px) {
        .content_section {
            width: 100%;
            height: 100%;


        }

        .firts_section {
            padding: 0 35px;
        }

        .content_section>h3 {
            font-size: 5vw;
        }

        .content_section>p {
            font-size: 4vw;
        }

        #slider {

            height: auto;
            position: relative;
            height: 370px;
        }

        #slides {

            padding: 0 30px;

            position: relative;
            top: 75px;
            height: 370px;
        }

        #overflow {

            padding: 0;
            position: relative;

            height: 370px;
            top: -30px;


        }

        .grid_item {

            position: relative;
            top: -25px;
        }

    }
    #slider{
        font-size: 16px;
    }
    .container_grid {
        display: grid;
        grid-template-columns: repeat(auto-fill, 23%);
        width: 100%;
        padding: 40px 0;
        justify-content: center;

    }

    .grid_item {
        height: 460px;
        display: flex;
        flex-direction: column;
        justify-content: center;
        position: relative;


    }
    .bossly{
        position: absolute;
        background: transparent;
        width: 100%;
        text-align: center;
        display: flex;
        justify-content: center;
        height: 100%;
    }
    
    .img_div {
        z-index: 3;
        width: 130px;
        /* ajusta el tamaño según sea necesario */
        height: 130px;
        
        /* ajusta el tamaño según sea necesario */
        border-radius: 50%;
        background: #FF66C4;
        overflow: hidden;
        
        transition: transform 1s ease-in-out, background 2s ease-in-out;
        z-index: 100;
        display: flex;
        justify-content: center;
        align-items: center;
        margin: 0;

    }

    .basel::before {
        content: '';
        position: absolute;
        margin: auto;
        width: 80px;
        height: 80px;

        background-image: url('./public/img/servis_wepb/services2/icon2_1.webp');
        background-size: contain;
        background-position: center;
        background-repeat: no-repeat;
        z-index: -1;
    }

    .basel2::before {
        content: '';
        position: absolute;
        margin: auto;
        width: 80px;
        height: 80px;

        background-image: url('./public/img/servis_wepb/services2/icon2_2.webp');
        background-size: contain;
        background-position: center;
        background-repeat: no-repeat;
        z-index: -1;
    }

    .basel3::before {
        content: '';
        position: absolute;
        margin: auto;
        width: 80px;
        height: 80px;

        background-image: url('./public/img/servis_wepb/services2/icon2_3.webp');
        background-size: contain;
        background-position: center;
        background-repeat: no-repeat;
        z-index: -1;
    }

    .basel4::before {
        content: '';
        position: absolute;
        margin: auto;
        width: 80px;
        height: 80px;

        background-image: url('./public/img/servis_wepb/services2/icon2_4.webp');
        background-size: contain;
        background-position: center;
        background-repeat: no-repeat;
        z-index: -1;
    }

    .descripcion_div {
        width: 85%;
        height: 88%;
        border: 1px solid black;
        margin: auto;
        transition: transform 1s;
        display: flex;
        justify-content: center;
        align-items: end;

    }

    .bossly:hover~.descripcion_div {
        color: black;
    }
    
    

    .descripcion_div:hover {
        background: linear-gradient(to bottom, #FF037F, #7B22B3);
        /* background: linear-gradient(135deg, #d0d0d0, #505050); */
    }

    .textos {
        width: 100%;
        height: 71%;
        background: transparent;
        text-align: center;
        padding: 2% 13px;
        font-size: 1vw;
        display: flex;
        flex-direction: column;
        /* justify-content: space-between; */
    }

    .textos h4 {
        background: transparent;
        font-family: "Open Sans", sans-serif;
    }

    .textos p {
        background: transparent;
        position: relative;
        font-size: .8em;
        top: -40px;
        font-family: "Open Sans", sans-serif;
        margin-top: 3rem;
    }

    .hovered {
        transform: translateY(-15px);
        color: white;
        cursor: pointer;
    }




    @media (min-width:600px) AND (max-width:820px) {
        .container_grid {
            display: grid;
            grid-template-columns: repeat(auto-fill, 20%);
            width: 100%;
            padding-bottom: 20px;
        }
        
        .grid_item {
            height: 480px;
            position: relative;
            top: 3%;
            
        }
        

        .textos {
            background: transparent;
            justify-content: space-around;
            margin: 0;
        }

        .textos h4 {
            background: transparent;
            font-size: 2.7vw;
        }

        .textos p {
            position: relative;
            font-size: 1.5vw;
            top: -37px;
        }

        .descripcion_div {
            height: 74%;
        }

        

        #slider {
            margin: 0;
            max-width: 100%;
            text-align: center;
            background: transparent;
            display: flex;
            flex-direction: column;
            justify-content: center;
            position: relative;
        }

        #slider input[type=radio] {
            display: none;
        }

        #slider label {
            cursor: pointer;
            text-decoration: none;
        }

        #slides {
            width: 80%;
            margin: auto;
            background: transparent;
            position: relative;
            z-index: 1;
        }

        #overflow {
            width: 100%;
            overflow: hidden;
            background: transparent;
        }

        #slide1:checked~#slides .container_grid {
            margin-left: 0;
        }

        #slide2:checked~#slides .container_grid {
            margin-left: -50%;
        }

        #slide3:checked~#slides .container_grid {
            margin-left: -100%;
        }


        #slides .container_grid {
            transition: margin-left 800ms cubic-bezier(0.770, 0.000, 0.175, 1.000);
            width: 250%;

        }

        #slides .grid_item {
            float: left;
            background: transparent;
        }

        #controls {
            width: 100%;
            margin: -130 0 0 0;
            height: 50px;
            position: relative;
            z-index: 3;
        }

        #controls label {
            height: 50px;
            width: 50px;
            transition: opacity 0.2s ease-out;
            
        }

        #controls label:hover {
            opacity: 1;
        }

        #slide1:checked~#controls label:nth-child(2),
        #slide2:checked~#controls label:nth-child(3),
        #slide3:checked~#controls label:nth-child(4),
        #slide4:checked~#controls label:nth-child(1) {
            background: url("./public/img/lob.png") no-repeat;

            background-size: 50px;

            display: flex;
            z-index: 100;
            position: absolute;
            right: 0;
            top: -200px;
        }

        #slide1:checked~#controls label:nth-last-child(1),
        #slide2:checked~#controls label:nth-last-child(4),
        #slide3:checked~#controls label:nth-last-child(3),
        #slide4:checked~#controls label:nth-last-child(2) {
            background: url("./public/img/motes.png") no-repeat;
            background-size: 50px;
            display: flex;
            z-index: 100;
            position: absolute;
            left: 0;
            top: -200px;
        }

        #bulets {
            margin: 100px 0 0;
            text-align: center;
        }

        #bulets label {
            display: none;
            width: 10px;
            height: 10px;
            border-radius: 100%;
            margin: 0 10px;
            background: black;
        }

        #slide1:checked~#bulets label:nth-child(1),
        #slide2:checked~#bulets label:nth-child(2),
        #slide3:checked~#bulets label:nth-child(3),
        #slide4:checked~#bulets label:nth-child(4) {
            background: #2100E8;
        }


    }

    @media (min-width:600px) AND (max-width:680px) {
        .img_div {
            left: 24%;
            right: 27%;
        }
    }

    @media (min-width:680px) AND (max-width:820px) {
        .img_div {
            left: 28%;
            right: 32%;
        }
    }

    @media (min-width:820px) AND (max-width:1150px) {
        .container_grid {
            display: grid;
            grid-template-columns: repeat(auto-fill, 10%);
            width: 100%;
           
        }
        .grid_item {
            height: 430px;
            position: relative;
            top: 3%;
            
        }
        .img_div {
            
            top: -.1%;
            
       
            width: 120px;
            /* ajusta el tamaño según sea necesario */
            height: 120px;
        
        
        }

        .textos {
            background: transparent;
            /* padding: 2%;

            margin: 0; */
        }

        .textos h4 {
            background: transparent;
            font-size: 2.2vw;
        }

        .textos p {
            font-size: 1.1vw;
        }

        #slider {
            margin: 0;
            max-width: 100%;
            text-align: center;
            background: transparent;
            display: flex;
            flex-direction: column;
            justify-content: center;
            position: relative;
            
        }

        #slider input[type=radio] {
            display: none;
        }

        #slider label {
            cursor: pointer;
            text-decoration: none;
        }

        #slides {
            width: 90%;
            
            margin: auto;
            background: transparent;
            position: relative;
            z-index: 1;
        }

        #overflow {
            width: 100%;
            overflow: hidden;
            background: transparent;
            
        }

        #slide1:checked~#slides .container_grid {
            margin-left: 0;
        }

        #slide2:checked~#slides .container_grid {
            margin-left: -32%;
        }

        #slides .container_grid {
            transition: margin-left 800ms cubic-bezier(0.770, 0.000, 0.175, 1.000);
            width: 330%;

        }

        #slides .grid_item {
            float: left;
            background: transparent;
        }

        #controls {
            width: 100%;
            margin: -130 0 0 0;
            height: 50px;
            position: relative;
            z-index: 3;
        }

        #controls label {
            height: 50px;
            width: 50px;
            transition: opacity 0.2s ease-out;
            
        }

        #controls label:hover {
            opacity: 1;
        }

        #slide1:checked~#controls label:nth-child(2),
        #slide2:checked~#controls label:nth-child(3),
        #slide3:checked~#controls label:nth-child(4),
        #slide4:checked~#controls label:nth-child(1) {
            background: url("./public/img/lob.png") no-repeat;

            background-size: 50px;

            display: flex;
            z-index: 100;
            position: absolute;
            right: 0;
            top: -250px;
        }

        #slide1:checked~#controls label:nth-last-child(1),
        #slide2:checked~#controls label:nth-last-child(4),
        #slide3:checked~#controls label:nth-last-child(3),
        #slide4:checked~#controls label:nth-last-child(2) {
            background: url("./public/img/motes.png") no-repeat;
            background-size: 50px;
            display: flex;
            z-index: 100;
            position: absolute;
            left: 5px;
            top: -250px;
        }

        #bulets {
            margin: 100px 0 0;
            text-align: center;
        }

        #bulets label {
            display: none;
            width: 10px;
            height: 10px;
            border-radius: 100%;
            margin: 0 10px;
            background: black;
        }

        #slide1:checked~#bulets label:nth-child(1),
        #slide2:checked~#bulets label:nth-child(2),
        #slide3:checked~#bulets label:nth-child(3),
        #slide4:checked~#bulets label:nth-child(4) {
            background: #2100E8;
        }
    }

    @media (min-width:820px) AND (max-width:930px) {
        .img_div {
            left: 25%;
            right: 27%;
            top: -.1%;
        }
    }

    @media (min-width:930px) AND (max-width:1020px) {
        .img_div {
            left: 28%;
            right: 27%;
        }
    }

    @media (min-width:1020px) AND (max-width:1200px) {
        .img_div {
            left: 24%;
            right: 27%;
        }
    }

    @media (min-width:380px) AND (max-width:600px) {
        .container_grid {
            display: grid;
            grid-template-columns: repeat(auto-fill, 25%);
            width: 100%;
            padding: 40px 0;
            justify-content: center;


        }
        .img_div{
            top: 1%;
        }
        .grid_item {
            
            position: relative;
            top: 3%;
        }

        .textos {
            background: transparent;
            padding: 2%;

            margin: 0;
        }

        .textos h4 {
            background: transparent;
            font-size: 4vw;
        }

        .textos p {
            font-size: 2.7vw;
            position: relative;
            align-self: flex-end;
            top: -45px;
        }

        .grid_item {
            height: 450px;
            display: flex;
            flex-direction: column;
            justify-content: center;
            position: relative;


        }

        #slider {
            margin: 0;

            max-width: 100%;
            text-align: center;
            background: transparent;
            display: flex;
            flex-direction: column;
            justify-content: center;
            position: relative;
        }

        #slider input[type=radio] {
            display: none;
        }

        #slider label {
            cursor: pointer;
            text-decoration: none;
        }

        #slides {
            width: 80%;
            padding: 30px;

            /* border: 4px solid black;*/
            margin: auto;
            background: transparent;
            position: relative;
            z-index: 1;
        }

        #overflow {
            width: 100%;
            overflow: hidden;
            background: transparent;
        }

        #slide1:checked~#slides .container_grid {
            margin-left: 0;
        }

        #slide2:checked~#slides .container_grid {
            margin-left: -100%;
        }

        #slide3:checked~#slides .container_grid {
            margin-left: -200%;
        }

        #slide4:checked~#slides .container_grid {
            margin-left: -300%;
        }

        #slides .container_grid {
            transition: margin-left 800ms cubic-bezier(0.770, 0.000, 0.175, 1.000);
            width: 400%;

        }

        #slides .grid_item {
            float: left;
            background: transparent;
        }

        #controls {
            width: 100%;
            margin: 0 0 0 0;
            height: 50px;
            position: relative;
            z-index: 3;
        }

        #controls label {
            height: 50px;
            width: 50px;
            transition: opacity 0.2s ease-out;
           

        }

        #controls label:hover {
            opacity: 1;
        }

        #slide1:checked~#controls label:nth-child(2),
        #slide2:checked~#controls label:nth-child(3),
        #slide3:checked~#controls label:nth-child(4),
        #slide4:checked~#controls label:nth-child(1) {
            background: url("./public/img/lob.png") no-repeat;

            background-size: 50px;

            display: flex;
            z-index: 100;
            position: absolute;
            right: 0;
            top: -250px;
        }

        #slide1:checked~#controls label:nth-last-child(1),
        #slide2:checked~#controls label:nth-last-child(4),
        #slide3:checked~#controls label:nth-last-child(3),
        #slide4:checked~#controls label:nth-last-child(2) {
            background: url("./public/img/motes.png") no-repeat;
            background-size: 50px;
            display: flex;
            z-index: 100;
            position: absolute;
            left: 0;
            top: -250px;
        }

        #bulets {
            margin: 100px 0 0;
            text-align: center;
        }

        #bulets label {
            display: none;
            width: 10px;
            height: 10px;
            border-radius: 100%;
            margin: 0 10px;
            background: black;
        }

        #slide1:checked~#bulets label:nth-child(1),
        #slide2:checked~#bulets label:nth-child(2),
        #slide3:checked~#bulets label:nth-child(3),
        #slide4:checked~#bulets label:nth-child(4) {
            background: #2100E8;
        }
    }

    @media (min-width:285px) AND (max-width:380px) {
        .container_grid {
            display: grid;
            grid-template-columns: repeat(auto-fill, 25%);
            width: 100%;
            padding: 40px 0;
            justify-content: center;


        }
        .img_div{
            top: 1%;
            width: 110px;
            height: 110px;
        }
        .grid_item {
            padding-bottom: 30px;
            position: relative;
            top: -2%;
        }

        .textos {
            background: transparent;
            padding: 2%;

            margin: 0;
        }

        .textos h4 {
            background: transparent;
            font-size: 4vw;
        }

        .textos p {
            font-size: 2.4vw;
            position: relative;
            align-self: flex-end;
            top: -45px;
        }

        .grid_item {
            height: 450px;
            display: flex;
            flex-direction: column;
            justify-content: center;
            position: relative;


        }

        #slider {
            margin: 0;

            max-width: 100%;
            text-align: center;
            background: transparent;
            display: flex;
            flex-direction: column;
            justify-content: center;
            position: relative;
        }

        #slider input[type=radio] {
            display: none;
        }

        #slider label {
            cursor: pointer;
            text-decoration: none;
        }

        #slides {
            width: 80%;
            padding: 30px;

            /* border: 4px solid black;*/
            margin: auto;
            background: transparent;
            position: relative;
            z-index: 1;
        }

        #overflow {
            width: 100%;
            overflow: hidden;
            background: transparent;
        }

        #slide1:checked~#slides .container_grid {
            margin-left: 0;
        }

        #slide2:checked~#slides .container_grid {
            margin-left: -100%;
        }

        #slide3:checked~#slides .container_grid {
            margin-left: -200%;
        }

        #slide4:checked~#slides .container_grid {
            margin-left: -300%;
        }

        #slides .container_grid {
            transition: margin-left 800ms cubic-bezier(0.770, 0.000, 0.175, 1.000);
            width: 400%;

        }

        #slides .grid_item {
            float: left;
            background: transparent;
        }

        #controls {
            width: 100%;
            margin: 0 0 0 0;
            height: 50px;
            position: relative;
            z-index: 3;
        }

        #controls label {
            height: 50px;
            width: 50px;
            transition: opacity 0.2s ease-out;
            

        }

        #controls label:hover {
            opacity: 1;
        }

        #slide1:checked~#controls label:nth-child(2),
        #slide2:checked~#controls label:nth-child(3),
        #slide3:checked~#controls label:nth-child(4),
        #slide4:checked~#controls label:nth-child(1) {
            background: url("./public/img/lob.png") no-repeat;

            background-size: 50px;

            display: flex;
            z-index: 100;
            position: absolute;
            right: 0;
            top: -150px;
        }

        #slide1:checked~#controls label:nth-last-child(1),
        #slide2:checked~#controls label:nth-last-child(4),
        #slide3:checked~#controls label:nth-last-child(3),
        #slide4:checked~#controls label:nth-last-child(2) {
            background: url("./public/img/motes.png") no-repeat;
            background-size: 50px;
            display: flex;
            z-index: 100;
            position: absolute;
            left: 0;
            top: -150px;
        }

        #bulets {
            margin: 100px 0 0;
            text-align: center;
        }

        #bulets label {
            display: none;
            width: 10px;
            height: 10px;
            border-radius: 100%;
            margin: 0 10px;
            background: black;
        }

        #slide1:checked~#bulets label:nth-child(1),
        #slide2:checked~#bulets label:nth-child(2),
        #slide3:checked~#bulets label:nth-child(3),
        #slide4:checked~#bulets label:nth-child(4) {
            background: #2100E8;
        }
    }
    @media (min-width:0px) AND (max-width:285px) {
        .container_grid {
            display: grid;
            grid-template-columns: repeat(auto-fill, 25%);
            width: 100%;
            padding: 40px 0;
            justify-content: center;


        }
        .bossly{
            top: 2%;
        }
        .img_div{
            top: 1%;
            width: 90px;
            height: 90px;
        }
        .grid_item {
            padding-bottom: 30px;
            position: relative;
            top: -2%;
        }

        .textos {
            background: transparent;
            padding: 2%;

            margin: 0;
        }

        .textos h4 {
            background: transparent;
            font-size: 4vw;
        }

        .textos p {
            font-size: 2.7vw;
            position: relative;
            align-self: flex-end;
            top: -45px;
        }

        .grid_item {
            height: 450px;
            display: flex;
            flex-direction: column;
            justify-content: center;
            position: relative;


        }

        #slider {
            margin: 0;

            max-width: 100%;
            text-align: center;
            background: transparent;
            display: flex;
            flex-direction: column;
            justify-content: center;
            position: relative;
        }

        #slider input[type=radio] {
            display: none;
        }

        #slider label {
            cursor: pointer;
            text-decoration: none;
        }

        #slides {
            width: 80%;
            padding: 30px;

            /* border: 4px solid black;*/
            margin: auto;
            background: transparent;
            position: relative;
            z-index: 1;
        }

        #overflow {
            width: 100%;
            overflow: hidden;
            background: transparent;
        }

        #slide1:checked~#slides .container_grid {
            margin-left: 0;
        }

        #slide2:checked~#slides .container_grid {
            margin-left: -100%;
        }

        #slide3:checked~#slides .container_grid {
            margin-left: -200%;
        }

        #slide4:checked~#slides .container_grid {
            margin-left: -300%;
        }

        #slides .container_grid {
            transition: margin-left 800ms cubic-bezier(0.770, 0.000, 0.175, 1.000);
            width: 400%;

        }

        #slides .grid_item {
            float: left;
            background: transparent;
        }

        #controls {
            width: 100%;
            margin: 0 0 0 0;
            height: 50px;
            position: relative;
            z-index: 3;
        }

        #controls label {
            height: 50px;
            width: 50px;
            transition: opacity 0.2s ease-out;
            

        }

        #controls label:hover {
            opacity: 1;
        }

        #slide1:checked~#controls label:nth-child(2),
        #slide2:checked~#controls label:nth-child(3),
        #slide3:checked~#controls label:nth-child(4),
        #slide4:checked~#controls label:nth-child(1) {
            background: url("./public/img/lob.png") no-repeat;

            background-size: 50px;

            display: flex;
            z-index: 100;
            position: absolute;
            right: 0;
            top: -150px;
        }

        #slide1:checked~#controls label:nth-last-child(1),
        #slide2:checked~#controls label:nth-last-child(4),
        #slide3:checked~#controls label:nth-last-child(3),
        #slide4:checked~#controls label:nth-last-child(2) {
            background: url("./public/img/motes.png") no-repeat;
            background-size: 50px;
            display: flex;
            z-index: 100;
            position: absolute;
            left: 0;
            top: -150px;
        }

        #bulets {
            margin: 100px 0 0;
            text-align: center;
        }

        #bulets label {
            display: none;
            width: 10px;
            height: 10px;
            border-radius: 100%;
            margin: 0 10px;
            background: black;
        }

        #slide1:checked~#bulets label:nth-child(1),
        #slide2:checked~#bulets label:nth-child(2),
        #slide3:checked~#bulets label:nth-child(3),
        #slide4:checked~#bulets label:nth-child(4) {
            background: #2100E8;
        }
    }

    @media (min-width:500px) AND (max-width:600px) {
        .img_div {
            left: 32%;
            right: 32%;
        }
    }

    @media (min-width:350px) AND (max-width:500px) {
        .img_div {
            left: 29%;
            right: 32%;
        }
    }

    @media (min-width:0px) AND (max-width:380px) {
        .img_div {
            left: 23%;
            right: 32%;
        }

        .grid_item {
            height: 390px;
            display: flex;
            flex-direction: column;
            justify-content: center;
            position: relative;


        }
    }

    @media (min-width:0px) AND (max-width:478px) {
        .descripcion_div {
            height: 70%;
        }
    }
</style>
<section class="firts_section" id="metros_locs2">
    <div class="content_section">
        <h3 id="titulo">Gestión de Redes Sociales</h3>
        <p id="Relleno">
            La gestión de redes sociales es el proceso de administrar
            y optimizar la presencia de una marca en plataformas como Facebook,
            Instagram, Twitter, etc.
        </p>
        <p>
            Ayuda a tu marca a crear una voz consistente, interactuar con tu audiencia,
            aumentar el compromiso y la visibilidad, así como impulsar el tráfico y las
            conversiones hacia tu negocio.
        </p>
    </div>
</section>

</section>

<section id="slider">
    <input type='radio' name="slider" id="slide1" checked hidden />
    <input type='radio' name="slider" id="slide2" hidden />
    <input type='radio' name="slider" id="slide3" hidden />
    <input type='radio' name="slider" id="slide4" hidden />
    <div id="slides" style="font-size: 100%;">
        <div id="overflow" style="font-size: 100%;">
            <section class="container_grid" style="font-size: 100%;">
                <div class="grid_item" style="font-size: 100%;">
                    <div class="bossly"><div class="img_div elemento basel"></div></div>
                    <div class="descripcion_div elemento" style="font-size: 100%;">
                        <div class="textos" style="font-size: 100%;">
                            <h4>PLANIFICACIÓN Y CRONOGRAMA</h4>

                            <p>
                                La planificación y el cronograma en la
                                gestión de redes sociales implican definir
                                estrategias, establecer objetivos y crear
                                un calendario de publicaciones. Esto
                                ayuda a organizar y ejecutar de manera
                                efectiva las actividades en las
                                plataformas sociales.
                            </p>


                        </div>
                    </div>
                </div>
                <div class="grid_item" style="font-size: 100%;">
                    <div class="bossly"><div class="img_div elemento2 basel2"></div></div>
                    <div class="descripcion_div elemento2" style="font-size: 100%;">
                        <div class="textos" style="font-size: 100%;">
                            <h4>PRODUCCIÓN DE
                                PAUTAS</h4>

                            <p>
                                La producción de pautas implica la
                                creación de directrices claras y
                                específicas para el contenido y la
                                interacción en redes sociales, que
                                aseguren coherencia, calidad y alineación
                                con los objetivos de la marca.
                            </p>
                        </div>
                    </div>
                </div>
                <div class="grid_item" style="font-size: 100%;">
                    <div class="bossly"><div class="img_div elemento3 basel3"></div></div>
                    <div class="descripcion_div elemento3" style="font-size: 100%;">
                        <div class="textos" style="font-size: 100%;">
                            <h4>DISEÑO DE
                                PAUTAS</h4>
                            <p>El diseño de pautas implica la creación de
                                documentos visuales que detallan la
                                identidad de la marca, la voz y el tono a
                                utilizar en las redes sociales, así como las
                                pautas para la creación y publicación de
                                contenido, garantizando consistencia y
                                coherencia en la comunicación de la
                                marca</p>
                        </div>
                    </div>
                </div>
                <div class="grid_item" style="font-size: 100%;">
                    <div class="bossly"><div class="img_div elemento4 basel4" ></div></div>
                    <div class="descripcion_div elemento4" style="font-size: 100%;">
                        <div class="textos" style="font-size: 100%;">
                            <h4>DISEÑO UX Y UI</h4>
                            <p>El diseño UX y UI colaboran para crear productos
                                digitales que no solo sean visualmente atractivos, sino también
                                fáciles de usar y que ofrezcan una experiencia satisfactoria para
                                el usuario.</p>
                        </div>
                    </div>
                </div>
            </section>
        </div>
    </div>
    <div id="controls" style="font-size: 100%;">
        <label for="slide1"></label>
        <label for="slide2"></label>
        <label for="slide3"></label>
        <label for="slide4"></label>
    </div>
    <div id="bulets" style="font-size: 100%;">
        <label for="slide1"></label>
        <label for="slide2"></label>
        <label for="slide3"></label>
        <label for="slide4"></label>
    </div>

</section>


<script>
    document.addEventListener("DOMContentLoaded", function() {
        // Función para agregar la clase 'hovered' al elemento
        function addHoverClass(event) {
            var imgDiv = event.currentTarget.querySelector('.img_div');
            var descripcionDiv = event.currentTarget.querySelector('.descripcion_div');
            imgDiv.classList.add("hovered");
            descripcionDiv.classList.add("hovered");
        }

        // Función para eliminar la clase 'hovered' del elemento
        function removeHoverClass(event) {
            var imgDiv = event.currentTarget.querySelector('.img_div');
            var descripcionDiv = event.currentTarget.querySelector('.descripcion_div');
            imgDiv.classList.remove("hovered");
            descripcionDiv.classList.remove("hovered");
        }

        // Obtener todos los elementos con la clase 'grid_item'
        var gridItems = document.querySelectorAll(".grid_item");

        // Iterar sobre cada elemento y agregar eventos de mouseover y mouseout
        gridItems.forEach(function(gridItem) {
            gridItem.addEventListener("mouseover", addHoverClass);
            gridItem.addEventListener("mouseout", removeHoverClass);
        });
    });

</script>