

<?php
header('Content-Type: text/html; charset=utf-8');




//require './public/view/libreria/PHPMailer-PHPMailer-2128d99/get_oauth_token.php';

$imagenes_main = [
    // Desarrollo y Diseño
    [
        "https://blogger.googleusercontent.com/img/b/R29vZ2xl/AVvXsEj72Ga0skRjXoSA4lfHicy1rVJ0kd5DcCKq7Tj8LAhtap-6L4lrRsnoD85TRihXDx1OWE3BdIhRz1j5IJEidAzv1du5Ya5VQBLBAxuGEG9xuK6v4gjpP9jB3dA6otzZXV3j1vxXkdvrpto8i2l3HtzNjmaTWaeX_-Mb0G6jGCifbxBt5Jzyr_fEoZgL7xhQ/s16000/flyer-modal-1-1.jpg",
        "https://blogger.googleusercontent.com/img/b/R29vZ2xl/AVvXsEggZAozhvwXsX_KVF_unYAOXhUspbAuw03Gkouv51yzLaGHdmhzW-0nw63eD99WV7nywIIUBcy75xO2XCWG3KxosXfty7Kr0XUOpWeMXzNYaNhasB4j6sQQogbEsxvlfhrOXSgYmjv67ioEGowFeV2tl6-b568yNZVXvSaqHmZDcwpPb5bwm-MJPXoKvid7/s16000/flyer-modal-1-2.jpg",
        "https://blogger.googleusercontent.com/img/b/R29vZ2xl/AVvXsEhovmlEgV271V1uhTZBHYgNiPVC1wWYQimBUX4cCEs9ozmaVKOQPFT1ZDP5SUs-cnVgttagVS985vwePSAwRRJyFslHtwkY900Ll4aKpjh1wK40CYayhsBqJy4DI_Y1zI9INeQTXwGlfBDGXAlgvMaY-lMMtu5jcRZM2Q_Dcl-CCP8NtAQWuSRGNX2WRHlj/s16000/flyer-modal-1-3.jpg"
    ],
    // Gestión de Redes Sociales
    [
        "https://blogger.googleusercontent.com/img/b/R29vZ2xl/AVvXsEiZTZrnY2A4K0McC6bFqIwChjlYcFsBVjaL-4gVzl87zajaE32egRRBKmIWQ4sfxu3j3MWpvNyXIfbyGpSjw9VS1rFwxMmqREpt0ka-uVimP5wF7o7143ir50K5_AKyJ5ZWvTXKg7_1kh61reKojmQiX6Lr2QkmM6r_1GFPXb2HRGFlYH-SSi5UUEfqOc5S/s16000/flyer-modal-2-1.jpg",
        "https://blogger.googleusercontent.com/img/b/R29vZ2xl/AVvXsEh_C0U0tfOZT92qeRr10AXjBfv2vytcekdRjiS_5lVJWii7PQ8Re6Pmi1sGX8K1FPyLO1KHS2txlW_2QP4AoCXWr6HEE6KEPLZriUVAubZnD-g4TS5PHDxXnOuBDyk06r5hEd0_koX0Wgaz5upF_fp1hAeRGwDkHCLP03dAM8Wf-01GhZ8Xp-KYFCrBuImA/s16000/flyer-modal-2-2.jpg",
        "https://blogger.googleusercontent.com/img/b/R29vZ2xl/AVvXsEgPmzYChZBt2sCjeZTDtVRvTRmss3MS7nt8vbXMDcBZnUCz-fRfXThAla14Vvgg4My4qKQP8CPyj5hfbEMVXihUr931XQB1EsMvG1x81ifR4RE7hDuaYdfO5EfnsqkCrgglyXj4MlPaxyZpmvr8nZ9ZfYled6CqCzrp_tm2UJFL3p9pBbpzTugpMWEDOiSp/s16000/flyer-modal-2-3.jpg",
    ],
    // Marketing y Gestión Digital
    [
        "https://blogger.googleusercontent.com/img/b/R29vZ2xl/AVvXsEg092QZpO6nk2lCpzY4OoufMEqQ4t-4Cd6a2ZzPY1SKNRb40qJeU3dlHEdaFtnZTTZUbX1kbn3TXZ9Z4eVzgJTflVTsQBqZbd2yFnHUTHhtXGzLOm3G7AR5bQVVoGEU8dLJLxSBgLeuFv1YEzy-wtCy2QCUyAoSWRL4Ckc5a9b9XlJ62WmAU_zJG4z4e-Om/s16000/flyer-modal-3-1.jpg",
        "https://blogger.googleusercontent.com/img/b/R29vZ2xl/AVvXsEjtreOOM1Y5NhyImyUSZ2VABJ7cJJz6ZIIV5wU87hCWEo35dY06KfKe6ouLUJpEGXscUfVwdTqom57OkynHHJc5EL0BzSmhnanSTTH6hbgrJRXVpqqQQ1t-QDFBN25m_4SzEeHZQUsdA5gaQlrZFic6yvsFu44lrXDr-8yHgG7qG21q0tEAgvg2a7yXrBDI/s16000/flyer-modal-3-2.jpg",
        "https://blogger.googleusercontent.com/img/b/R29vZ2xl/AVvXsEgvG2owRjMlCU0lJuon4pDZhNj6-VsJIIDoHCFcTWyQAy7srnlkRxXJjoTB6eCQHXauDqLOeJ2VcJ6F6-5SiuoCBLcZvTpfPu3UQcg53yJmdKGaJqa-zJQTYptfztA1bpJgPzGNi_aP2BA2qpZ809flOkxkmA7rxZlE-jI87UhJtc8c2BQnUj_UeoSikvxj/s16000/flyer-modal-3-3.jpg",
    ],
    // Branding y Diseño
    [
        "https://blogger.googleusercontent.com/img/b/R29vZ2xl/AVvXsEiq1Ug8AXStj8VhqjcBk_cptFzr5u1Ue_07ENc-nFqZvyHhuK0VJTxkF5VDs5A7fb5pTUrJFGw5t1WtkHPvXbxxIz5lOM6MUfb6a2XNVlmXpClZ-ujoblAL8tAQgfQyglAisTFmbRB4AVGBP3Mzde0wrNdZD93BjGoBdiP-4ZOlTnHDZ7LVhJqr-ehL73mo/s16000/flyer-modal-4-1.jpg",
        "https://blogger.googleusercontent.com/img/b/R29vZ2xl/AVvXsEh8p8zKOLYq9AULleN9EOvk9PybKHES_p7bpEuGrSEh90q7ubLAAVKYPjPtQF2aBMoSQK2V1MiO9tNV32jSViZfdkJDTRE9B1i5uND7NCj79Cnm8rRJ1xl5FSIED85E_D2I5gLUiX0mxosKJJdEUheiacMsjPXKEV8M8A7G8pT8plpPsCrfv4OkygHLLMNw/s16000/flyer-modal-4-2.jpg",
        "https://blogger.googleusercontent.com/img/b/R29vZ2xl/AVvXsEgU0x4yrurrYawAgqDVER5cePp69tExxF5JtYRKNWxFXPaAcKdZE-bMoiIZtfMDhM97R9U4MPELvxub8iHeTulwSx2ClJpz4MKd6URFHl_Cz0I4QnfoF-3Is1ZR4nZz9YrTdEyAxO19F4rI6Ft9gtIPhKuBfHqnvwCcffQYCn_zItT_sbfB-y4_t1_ThQyK/s16000/flyer-modal-4-3.jpg",
    ]
];

$title = [
    // Desarrollo y Diseño
    [
        "_*¡IMPULSA TU ÉXITO ONLINE CON DIGIMEDIA!*_ 🌐",
        "*¡FORTALECE TU PRESENCIA EN LÍNEA 💻!*",
        "*¡MAXIMIZA TU PRESENCIA ONLINE!* 💻"
    ],
    // Gestión de Redes Sociales
    [
        "_*¡POTENCIA TU NEGOCIO DIGITAL CON DIGIMEDIA!*_  📈", 
        "*¡SUMÉRGETE EN EL MUNDO DIGITAL! 📱!*", 
        "*¡AUMENTA TU PRESENCIA EN LAS REDES Y CONQUISTA NUEVAS AUDIENCIAS CON NOSOTROS! 💻🚀* "
    ],
    // Marketing y Gestión Digital
    [
        "_*¡CRECE TU NEGOCIO CON DIGIMEDIA!📈*_", 
        "*¡INNOVA EN TUS ESTRATEGIAS DIGITALES!*", 
        "*¡Aprovecha los beneficios del mundo digital! 👩🏻💻🖥 * "
    ],
    // Branding y Diseño
    [
        "_*¡DESTACA TU NEGOCIO DIGITAL CON DIGIMEDIA!*_ 🙌🏼", 
        "*¡MARCA LA DIFERENCIA! 😉*", 
        "**¡TEN UNA IDENTIDAD ÚNICA! 😉*"
    ]
];


$menssage = [
    // Desarrollo y Diseño
    [
        "¿Estás cansado de enfrentar problemas con tu sitio web que afectan el crecimiento de tu negocio?  En Digimedia, no solo creamos sitios web, ¡forjamos plataformas de impacto! 📈.
                                
        ¿Por qué elegir nuestro servicio de desarrollo web? 🚀
        📌Diseño impactante con resultados asombrosos
        📌Experiencia del usuario que deja huella
                            
        *Estamos emocionados de ser tu socio en tu próximo éxito online. Si estás listo para un desarrollo web que marque la diferencia, ¡contáctanos ahora!*",

        "¿Quieres hacer *crecer tus ventas* en el mundo digital? En Digimedia te garantizamos el mejor servicio de diseño y desarrollo web para que puedas potenciarte en el mundo digital con nuestros beneficios exclusivos 🙌🏼:
            
        - Aumento de visibilidad y tráfico web.
        - Sitios web altamente personalizados con herramientas seguras.",

        "*¿Deseas una página más interactiva y didáctica?*🤯 en Digimedia te ayudaremos impulsar tu éxito digital con beneficios exclusivos:
                        
        1️⃣ Aumento de visibilidad y tráfico web garantizado.
        2️⃣ Experiencia del usuario excepcional que convierte visitantes en clientes leales.
                                    
        ¡Construye una plataforma de impacto con nosotros y haz que tu negocio brille en la web!🚀"
    ],
    // Gestión de Redes Sociales
    [
        "¿Tus redes sociales no generan interacciones? En DigiMedia, estamos comprometidos en potenciar tu presencia en línea a través de la *gestión de redes sociales*. Al confiarnos la administración de tus plataformas digitales, experimentarás un aumento significativo en la visibilidad y participación de tu marca.                     
                
        Nuestros *beneficios exclusivos*:
        🚀 Potenciación de tu presencia digital.
        🚀 Contenido estratégico y de valor.
                                
        *¡Transformemos juntos tu presencia digital! ¡Háznoslo saber!*",

        "¿Quieres tener contenido de calidad? Deja la gestión de tus redes sociales en manos expertas con Digimedia y haz crecer tu negocio de la mejor manera con nuestros beneficios exclusivos 📈.
                
        - Planificación y organización de contenidos.
        - Análisis de resultados con informes mensuales.",
        
        "¿Buscas contenido de alto impacto? Confía en los especialistas de Digimedia Marketing para gestionar tus redes sociales y lleva tu negocio al siguiente nivel con nuestro servicio de Gestión Redes Sociales.
                
        *✅ Diseño estratégico y calendario de contenido en redes.*
        *✅ Análisis de desempeño con reportes mensuales y más!!*"
    ],
    // Marketing y Gestión Digital
    [
        "En DigiMedia Marketing, estamos comprometidos en el mejor desarrollo en *marketing  digital*. Tendremos el placer de armar estrategias que promuevan tu marca a través de diferentes entornos digitales.
                
        ¿Las estrategias que planteas no logran los objetivos de tu empresa?, entonces adquiere nuestro servicio con *beneficios exclusivos*🙌:
                
        📌Mejorar tu visibilidad online
        📌Vínculo de lealtad con los clientes 
                            
        *¡No te quedes atrás en la era digital y transforma tu marca con soluciones innovadoras! Contáctanos y que comience tu presencia digital.",
        
        
        "¿Quieres tener las mejores estrategias online de marketing? 
        En Digimedia somos expertos dominando el mundo digital y juntos potenciaremos tu presencia digital. 
                
        Con nosotros podrás:
        -Vínculo de lealtad con los clientes 
        -Desarrollar publicidad en línea",
        
        
        "¿Quieres tener las mejores estrategias de marketing digital? 💻 Obtén mayores ganancias digitalizando tu negocio junto a Digimedia Marketing💰📈. Con el servicio de marketing y gestión digital podrás tener: 
                
        ✅ Estrategias digitales personalizadas.
        ✅ Mejor rendimiento de tu presupuesto.
                
        Comunícate con nosotros/responde este mensaje para obtener más información y comienza a ver resultados. "
    ],
    // Branding y Diseño
    [
        "¿Sientes que tu negocio no se diferencia del resto? ¡Haz que tu marca sea inolvidable!  
        En DigiMedia, estamos preparados para llevar la identidad de tu marca a otro nivel. Somos especialistas en crear *diseños irresistibles y branding* cautivador.
                                
        Adquiere nuestros beneficios exclusivos 🚀:               
        📌 Diferenciación y Reconocimiento
                                
        *Prepárate para darle un giro a tu negocio con todos nuestros beneficios ¡Contacte con nosotros!*",
        
        
        "¿Quieres destacar entre tu competencia? Con Digimedia podrás tener una marca sólida gracias a nuestro servicio de Branding y diseño que te ayudarán a ser reconocida entre tus clientes 🚀.
                
        - Desarrollo en identidad visual de tu marca
        - Originalidad en conceptos de marca",
        
        
        "En Digimedia garantizamos crear experiencias visuales impactante y memorables para que puedas conectar con tu audiencia, nuestro servicio de Branding y diseño que te ayudarán a lograr esto 🚀
                
        Nuestros beneficios:
                
        - Originalidad en conceptos de marca 
        - Construcción de confianza y credibilidad
                
        ¡Sé parte del mundo digital y potencia tu marca con nosotros! 🙌🏼"
    ]
];




function SendMessage($menssage, $imagenes_main, $title)
{
    $mensaje2 = nl2br($menssage);
    $mensages_main = "
        
        

        <!DOCTYPE html
        PUBLIC \"-//W3C//DTD XHTML 1.0 Transitional//EN\" \"http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd\">
        <html dir=\"ltr\" xmlns=\"http://www.w3.org/1999/xhtml\" xmlns:o=\"urn:schemas-microsoft-com:office:office\" lang=\"und\"
        style=\"padding:0;Margin:0\">

        <head>
        <meta charset=\"UTF-8\">
        <meta content=\"width=device-width, initial-scale=1\" name=\"viewport\">
        <meta name=\"x-apple-disable-message-reformatting\">
        <meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge\">
        <meta content=\"telephone=no\" name=\"format-detection\">
        <title>Email-DigiMedia</title><!--[if (mso 16)]>
            <style type=\"text/css\">
            a {text-decoration: none;}
            </style>
            <![endif]--><!--[if gte mso 9]><style>sup { font-size: 100% !important; }</style><![endif]--><!--[if gte mso 9]>
        <xml>
            <o:OfficeDocumentSettings>
            <o:AllowPNG></o:AllowPNG>
            <o:PixelsPerInch>96</o:PixelsPerInch>
            </o:OfficeDocumentSettings>
        </xml>
        <![endif]--><!--[if !mso]>
        <link href=\"https://fonts.googleapis.com/css?family=Roboto:400,400i,700,700i\" rel=\"stylesheet\"><!--<![endif]-->

        <style type=\"text/css\">
            #outlook a {
            padding: 0;
            }

            .ExternalClass {
            width: 100%;
            }

            .ExternalClass,
            .ExternalClass p,
            .ExternalClass span,
            .ExternalClass font,
            .ExternalClass td,
            .ExternalClass div {
            line-height: 100%;
            }

            .es-button {
            mso-style-priority: 100 !important;
            text-decoration: none !important;
            }

            a[x-apple-data-detectors] {
            color: inherit !important;
            text-decoration: none !important;
            font-size: inherit !important;
            font-family: inherit !important;
            font-weight: inherit !important;
            line-height: inherit !important;
            }

            .es-desk-hidden {
            display: none;
            float: left;
            overflow: hidden;
            width: 0;
            max-height: 0;
            line-height: 0;
            mso-hide: all;
            }

            .es-button-border:hover a.es-button,
            .es-button-border:hover button.es-button {
            background: #3498db !important;
            }

            .es-button-border:hover {
            border-color: #42d159 #42d159 #42d159 #42d159 !important;
            background: #3498db !important;
            }

            td .es-button-border:hover a.es-button-1713563321876 {
            background: #C302AD !important;
            }

            td .es-button-border-1713563321902:hover {
            background: #C302AD !important;
            }

            @media only screen and (max-width:600px) {

            p,
            ul li,
            ol li,
            a {
                line-height: 150% !important
            }

            h1,
            h2,
            h3,
            h1 a,
            h2 a,
            h3 a {
                line-height: 120% !important
            }

            h1 {
                font-size: 26px !important;
                text-align: center
            }

            h2 {
                font-size: 24px !important;
                text-align: center
            }

            h3 {
                font-size: 20px !important;
                text-align: center
            }

            .es-header-body h1 a,
            .es-content-body h1 a,
            .es-footer-body h1 a {
                font-size: 26px !important
            }

            .es-header-body h2 a,
            .es-content-body h2 a,
            .es-footer-body h2 a {
                font-size: 24px !important
            }

            .es-header-body h3 a,
            .es-content-body h3 a,
            .es-footer-body h3 a {
                font-size: 20px !important
            }

            .es-menu td a {
                font-size: 13px !important
            }

            .es-header-body p,
            .es-header-body ul li,
            .es-header-body ol li,
            .es-header-body a {
                font-size: 13px !important
            }

            .es-content-body p,
            .es-content-body ul li,
            .es-content-body ol li,
            .es-content-body a {
                font-size: 14px !important
            }

            .es-footer-body p,
            .es-footer-body ul li,
            .es-footer-body ol li,
            .es-footer-body a {
                font-size: 13px !important
            }

            .es-infoblock p,
            .es-infoblock ul li,
            .es-infoblock ol li,
            .es-infoblock a {
                font-size: 11px !important
            }

            *[class=\"gmail-fix\"] {
                display: none !important
            }

            .es-m-txt-c,
            .es-m-txt-c h1,
            .es-m-txt-c h2,
            .es-m-txt-c h3 {
                text-align: center !important
            }

            .es-m-txt-r,
            .es-m-txt-r h1,
            .es-m-txt-r h2,
            .es-m-txt-r h3 {
                text-align: right !important
            }

            .es-m-txt-l,
            .es-m-txt-l h1,
            .es-m-txt-l h2,
            .es-m-txt-l h3 {
                text-align: left !important
            }

            .es-m-txt-r img,
            .es-m-txt-c img,
            .es-m-txt-l img {
                display: inline !important
            }

            .es-button-border {
                display: block !important
            }

            a.es-button,
            button.es-button {
                font-size: 14px !important;
                display: block !important;
                border-left-width: 0px !important;
                border-right-width: 0px !important
            }

            .es-btn-fw {
                border-width: 10px 0px !important;
                text-align: center !important
            }

            .es-adaptive table,
            .es-btn-fw,
            .es-btn-fw-brdr,
            .es-left,
            .es-right {
                width: 100% !important
            }

            .es-content table,
            .es-header table,
            .es-footer table,
            .es-content,
            .es-footer,
            .es-header {
                width: 100% !important;
                max-width: 600px !important
            }

            .es-adapt-td {
                display: block !important;
                width: 100% !important
            }

            .adapt-img {
                width: 100% !important;
                height: auto !important
            }

            .es-m-p0 {
                padding: 0px !important
            }

            .es-m-p0r {
                padding-right: 0px !important
            }

            .es-m-p0l {
                padding-left: 0px !important
            }

            .es-m-p0t {
                padding-top: 0px !important
            }

            .es-m-p0b {
                padding-bottom: 0 !important
            }

            .es-m-p20b {
                padding-bottom: 20px !important
            }

            .es-mobile-hidden,
            .es-hidden {
                display: none !important
            }

            tr.es-desk-hidden,
            td.es-desk-hidden,
            table.es-desk-hidden {
                width: auto !important;
                overflow: visible !important;
                float: none !important;
                max-height: inherit !important;
                line-height: inherit !important
            }

            tr.es-desk-hidden {
                display: table-row !important
            }

            table.es-desk-hidden {
                display: table !important
            }

            td.es-desk-menu-hidden {
                display: table-cell !important
            }

            .es-menu td {
                width: 1% !important
            }

            table.es-table-not-adapt,
            .esd-block-html table {
                width: auto !important
            }

            table.es-social {
                display: inline-block !important
            }

            table.es-social td {
                display: inline-block !important
            }

            .es-desk-hidden {
                display: table-row !important;
                width: auto !important;
                overflow: visible !important;
                max-height: inherit !important
            }
            }

            @media screen and (max-width:384px) {
            .mail-message-content {
                width: 414px !important
            }
            }
        </style>
        </head>

        <body
        style=\"width:100%;font-family:roboto, 'helvetica neue', helvetica, arial, sans-serif;-webkit-text-size-adjust:100%;-ms-text-size-adjust:100%;padding:0;Margin:0\">
        <div dir=\"ltr\" class=\"es-wrapper-color\" lang=\"und\" style=\"background-color:#F6F6F6\"><!--[if gte mso 9]>
                    <v:background xmlns:v=\"urn:schemas-microsoft-com:vml\" fill=\"t\">
                        <v:fill type=\"tile\" color=\"#f6f6f6\"></v:fill>
                    </v:background>
                <![endif]-->
            <table class=\"es-wrapper\" width=\"100%\" cellspacing=\"0\" cellpadding=\"0\"
            style=\"mso-table-lspace:0pt;mso-table-rspace:0pt;border-collapse:collapse;border-spacing:0px;padding:0;Margin:0;width:100%;height:100%;background-repeat:repeat;background-position:center top;background-color:#F6F6F6\">
            <tr style=\"border-collapse:collapse\">
                <td valign=\"top\" style=\"padding:0;Margin:0\">
                <table cellpadding=\"0\" cellspacing=\"0\" class=\"es-content\" align=\"center\"
                    style=\"mso-table-lspace:0pt;mso-table-rspace:0pt;border-collapse:collapse;border-spacing:0px;table-layout:fixed !important;width:100%\">
                    <tr style=\"border-collapse:collapse\">
                    <td align=\"center\" style=\"padding:0;Margin:0\">
                        <table bgcolor=\"transparent\" class=\"es-content-body\" align=\"center\" cellpadding=\"0\" cellspacing=\"0\"
                        style=\"mso-table-lspace:0pt;mso-table-rspace:0pt;border-collapse:collapse;border-spacing:0px;background-color:transparent;width:600px\">
                        <tr style=\"border-collapse:collapse\">
                            <td align=\"left\"
                            style=\"Margin:0;padding-top:10px;padding-bottom:10px;padding-left:20px;padding-right:20px\">
                            <table cellpadding=\"0\" cellspacing=\"0\" width=\"100%\"
                                style=\"mso-table-lspace:0pt;mso-table-rspace:0pt;border-collapse:collapse;border-spacing:0px\">
                                <tr style=\"border-collapse:collapse\">
                                <td align=\"center\" valign=\"top\" style=\"padding:0;Margin:0;width:560px\">
                                    <table cellpadding=\"0\" cellspacing=\"0\" width=\"100%\"
                                    style=\"mso-table-lspace:0pt;mso-table-rspace:0pt;border-collapse:collapse;border-spacing:0px\">
                                    <tr style=\"border-collapse:collapse\">
                                        <td class=\"es-infoblock es-m-txt-c\" align=\"left\"
                                        style=\"padding:0;Margin:0;line-height:14px;font-size:12px;color:#CCCCCC\">
                                        <p
                                            style=\"Margin:0;-webkit-text-size-adjust:none;-ms-text-size-adjust:none;mso-line-height-rule:exactly;font-family:roboto, 'helvetica neue', helvetica, arial, sans-serif;line-height:14px;color:#CCCCCC;font-size:12px\">
                                            <br></p>
                                        </td>
                                    </tr>
                                    </table>
                                </td>
                                </tr>
                            </table>
                            </td>
                        </tr>
                        </table>
                    </td>
                    </tr>
                </table>
                <table class=\"es-content\" cellspacing=\"0\" cellpadding=\"0\" align=\"center\"
                    style=\"mso-table-lspace:0pt;mso-table-rspace:0pt;border-collapse:collapse;border-spacing:0px;table-layout:fixed !important;width:100%\">
                    <tr style=\"border-collapse:collapse\">
                    <td align=\"center\" style=\"padding:0;Margin:0\">
                        <table class=\"es-content-body\"
                        style=\"mso-table-lspace:0pt;mso-table-rspace:0pt;border-collapse:collapse;border-spacing:0px;background-color:transparent;width:600px\"
                        cellspacing=\"0\" cellpadding=\"0\" bgcolor=\"transparent\" align=\"center\">
                        <tr style=\"border-collapse:collapse\">
                            <td align=\"left\"
                            style=\"Margin:0;padding-top:15px;padding-bottom:15px;padding-left:20px;padding-right:20px\">
                            <table width=\"100%\" cellspacing=\"0\" cellpadding=\"0\"
                                style=\"mso-table-lspace:0pt;mso-table-rspace:0pt;border-collapse:collapse;border-spacing:0px\">
                                <tr style=\"border-collapse:collapse\">
                                <td valign=\"top\" align=\"center\" style=\"padding:0;Margin:0;width:560px\">
                                    <table width=\"100%\" cellspacing=\"0\" cellpadding=\"0\"
                                    style=\"mso-table-lspace:0pt;mso-table-rspace:0pt;border-collapse:collapse;border-spacing:0px\">
                                    <tr style=\"border-collapse:collapse\">
                                        <td align=\"center\" style=\"padding:0;Margin:0;font-size:0px\"><a target=\"_blank\"
                                            href=\"https://www.digimediamkt.com/\"
                                            style=\"-webkit-text-size-adjust:none;-ms-text-size-adjust:none;mso-line-height-rule:exactly;text-decoration:underline;color:#2CB543;font-size:14px\"><img
                                            src=\"https://blogger.googleusercontent.com/img/a/AVvXsEjcmc7kSTRsnel32Fyg5rV8z28_DaZ2Ico4pYiVFWbgyKf22Slq9XolsU5iqEZ0oWxic9KGcBtpluSw983ziDUsL0BvGuLiVc8zYgI4bNYuBgkGlI3_BfCMxJrA1ux_MwBpJwz9bIN5KTIIcywFk4tuN-Q6nBbKQVQYi_dF_kDb6hTzV7Ke-k4a35wohz4C=w655-h169\"
                                            alt=\"Logo Digimedia\"
                                            style=\"display:block;border:0;outline:none;text-decoration:none;-ms-interpolation-mode:bicubic\"
                                            width=\"189\" title=\"Logo Digimedia\"></a></td>
                                    </tr>
                                    </table>
                                </td>
                                </tr>
                            </table>
                            </td>
                        </tr>
                        </table>
                    </td>
                    </tr>
                </table>
                <table class=\"es-content\" cellspacing=\"0\" cellpadding=\"0\" align=\"center\"
                    style=\"mso-table-lspace:0pt;mso-table-rspace:0pt;border-collapse:collapse;border-spacing:0px;table-layout:fixed !important;width:100%\">
                    <tr style=\"border-collapse:collapse\">
                    <td align=\"center\" style=\"padding:0;Margin:0\">
                        <table class=\"es-content-body\"
                        style=\"mso-table-lspace:0pt;mso-table-rspace:0pt;border-collapse:collapse;border-spacing:0px;background-color:transparent;width:600px\"
                        cellspacing=\"0\" cellpadding=\"0\" bgcolor=\"transparent\" align=\"center\">
                        <tr style=\"border-collapse:collapse\">
                            <td align=\"left\" bgcolor=\"#ffffff\"
                            style=\"padding:0;Margin:0;padding-bottom:15px;background-color:#ffffff\">
                            <table width=\"100%\" cellspacing=\"0\" cellpadding=\"0\"
                                style=\"mso-table-lspace:0pt;mso-table-rspace:0pt;border-collapse:collapse;border-spacing:0px\">
                                <tr style=\"border-collapse:collapse\">
                                <td valign=\"top\" align=\"center\" style=\"padding:0;Margin:0;width:600px\">
                                    <table
                                    style=\"mso-table-lspace:0pt;mso-table-rspace:0pt;border-collapse:separate;border-spacing:0px;background-position:center bottom;background-color:#ffffff;border-radius:5px\"
                                    width=\"100%\" cellspacing=\"0\" cellpadding=\"0\" bgcolor=\"#ffffff\">
                                    <tr style=\"border-collapse:collapse\">
                                        <td class=\"es-m-txt-l\" align=\"left\"
                                        style=\"Margin:0;padding-bottom:5px;padding-top:20px;padding-left:20px;padding-right:20px\">
                                        <h2
                                            style=\"Margin:0;line-height:26px;mso-line-height-rule:exactly;font-family:roboto, 'helvetica neue', helvetica, arial, sans-serif;font-size:22px;font-style:normal;font-weight:normal;color:#a601b8\">
                                            <strong>".$title."</strong></h2>
                                        </td>
                                    </tr>
                                    <tr style=\"border-collapse:collapse\">
                                        ".$mensaje2."
                                    </tr>
                                    </table>
                                </td>
                                </tr>
                            </table>
                            </td>
                        </tr>
                        </table>
                    </td>
                    </tr>
                </table>
                <table class=\"es-footer\" cellspacing=\"0\" cellpadding=\"0\" align=\"center\"
                    style=\"mso-table-lspace:0pt;mso-table-rspace:0pt;border-collapse:collapse;border-spacing:0px;table-layout:fixed !important;width:100%;background-color:transparent;background-repeat:repeat;background-position:center top\">
                    <tr style=\"border-collapse:collapse\">
                    <td align=\"center\" style=\"padding:0;Margin:0\">
                        <table class=\"es-footer-body\"
                        style=\"mso-table-lspace:0pt;mso-table-rspace:0pt;border-collapse:collapse;border-spacing:0px;background-color:transparent;width:600px\"
                        cellspacing=\"0\" cellpadding=\"0\" bgcolor=\"#FFFFFF\" align=\"center\">
                        <tr style=\"border-collapse:collapse\">
                            <td align=\"left\" bgcolor=\"#ffffff\"
                            style=\"Margin:0;padding-top:5px;padding-bottom:20px;padding-left:20px;padding-right:20px;background-color:#ffffff\">
                            <table cellspacing=\"0\" cellpadding=\"0\" width=\"100%\"
                                style=\"mso-table-lspace:0pt;mso-table-rspace:0pt;border-collapse:collapse;border-spacing:0px\">
                                <tr style=\"border-collapse:collapse\">
                                <td valign=\"top\" align=\"center\" style=\"padding:0;Margin:0;width:560px\">
                                    <table
                                    style=\"mso-table-lspace:0pt;mso-table-rspace:0pt;border-collapse:collapse;border-spacing:0px;background-position:center top\"
                                    width=\"100%\" cellspacing=\"0\" cellpadding=\"0\">
                                    <tr style=\"border-collapse:collapse\">
                                        <td align=\"center\" style=\"padding:0;Margin:0;font-size:0px\"><img class=\"adapt-img\"
                                            src=". $imagenes_main ."
                                            alt
                                            style=\"display:block;border:0;outline:none;text-decoration:none;-ms-interpolation-mode:bicubic\"
                                            width=\"560\"></td>
                                    </tr>
                                    </table>
                                </td>
                                </tr>
                            </table>
                            </td>
                        </tr>
                        </table>
                    </td>
                    </tr>
                </table>
                <table class=\"es-footer\" cellspacing=\"0\" cellpadding=\"0\" align=\"center\"
                    style=\"mso-table-lspace:0pt;mso-table-rspace:0pt;border-collapse:collapse;border-spacing:0px;table-layout:fixed !important;width:100%;background-color:transparent;background-repeat:repeat;background-position:center top\">
                    <tr style=\"border-collapse:collapse\">
                    <td align=\"center\" style=\"padding:0;Margin:0\">
                        <table class=\"es-footer-body\"
                        style=\"mso-table-lspace:0pt;mso-table-rspace:0pt;border-collapse:collapse;border-spacing:0px;background-color:transparent;width:600px\"
                        cellspacing=\"0\" cellpadding=\"0\" bgcolor=\"#FFFFFF\" align=\"center\">
                        <tr style=\"border-collapse:collapse\">
                            <td align=\"left\" bgcolor=\"#ffffff\" style=\"padding:0;Margin:0;background-color:#ffffff\">
                            <table cellspacing=\"0\" cellpadding=\"0\" width=\"100%\"
                                style=\"mso-table-lspace:0pt;mso-table-rspace:0pt;border-collapse:collapse;border-spacing:0px\">
                                <tr style=\"border-collapse:collapse\">
                                <td valign=\"top\" align=\"center\" style=\"padding:0;Margin:0;width:600px\">
                                    <table
                                    style=\"mso-table-lspace:0pt;mso-table-rspace:0pt;border-collapse:collapse;border-spacing:0px;background-position:center top\"
                                    width=\"100%\" cellspacing=\"0\" cellpadding=\"0\">
                                    <tr style=\"border-collapse:collapse\">
                                        <td align=\"left\"
                                        style=\"Margin:0;padding-top:10px;padding-bottom:10px;padding-left:20px;padding-right:20px\">
                                        <span class=\"es-button-border-1713563321902 es-button-border\"
                                            style=\"border-style:solid;border-color:#2cb543;background:#a601b8;border-width:0px;display:inline-block;border-radius:7px;width:auto\"><a
                                            href=\"https://www.digimediamkt.com/\" class=\"es-button es-button-1713563321876\"
                                            target=\"_blank\"
                                            style=\"mso-style-priority:100 !important;text-decoration:none;-webkit-text-size-adjust:none;-ms-text-size-adjust:none;mso-line-height-rule:exactly;color:#FFFFFF;font-size:18px;display:inline-block;background:#a601b8;border-radius:7px;font-family:roboto, 'helvetica neue', helvetica, arial, sans-serif;font-weight:normal;font-style:normal;line-height:22px;width:auto;text-align:center;padding:10px 25px 10px 25px;mso-padding-alt:0;mso-border-alt:10px solid #a601b8\">Contáctanos</a></span>
                                        </td>
                                    </tr>
                                    <tr style=\"border-collapse:collapse\">
                                        <td class=\"es-m-txt-c\" align=\"left\"
                                        style=\"Margin:0;padding-top:10px;padding-bottom:10px;padding-left:20px;padding-right:20px\">
                                        <p
                                            style=\"Margin:0;-webkit-text-size-adjust:none;-ms-text-size-adjust:none;mso-line-height-rule:exactly;font-family:roboto, 'helvetica neue', helvetica, arial, sans-serif;line-height:21px;color:#999999;font-size:14px\">
                                            <strong>Gracias por elegir a<span style=\"color:#a601b8\"> DIGI</span><span
                                                style=\"color:#3865E3\">MEDIA.</span></strong></p>
                                        </td>
                                    </tr>
                                    </table>
                                </td>
                                </tr>
                            </table>
                            </td>
                        </tr>
                        </table>
                    </td>
                    </tr>
                </table>
                <table class=\"es-footer\" cellspacing=\"0\" cellpadding=\"0\" align=\"center\"
                    style=\"mso-table-lspace:0pt;mso-table-rspace:0pt;border-collapse:collapse;border-spacing:0px;table-layout:fixed !important;width:100%;background-color:transparent;background-repeat:repeat;background-position:center top\">
                    <tr style=\"border-collapse:collapse\">
                    <td align=\"center\" style=\"padding:0;Margin:0\">
                        <table class=\"es-footer-body\"
                        style=\"mso-table-lspace:0pt;mso-table-rspace:0pt;border-collapse:collapse;border-spacing:0px;background-color:transparent;width:600px\"
                        cellspacing=\"0\" cellpadding=\"0\" bgcolor=\"#FFFFFF\" align=\"center\">
                        <tr style=\"border-collapse:collapse\">
                            <td
                            style=\"Margin:0;padding-top:5px;padding-bottom:20px;padding-left:20px;padding-right:20px;background-color:transparent\"
                            bgcolor=\"transparent\" align=\"left\">
                            <!--[if mso]><table style=\"width:560px\" cellpadding=\"0\" cellspacing=\"0\"><tr><td style=\"width:270px\" valign=\"top\"><![endif]-->
                            <table class=\"es-left\" cellspacing=\"0\" cellpadding=\"0\" align=\"left\"
                                style=\"mso-table-lspace:0pt;mso-table-rspace:0pt;border-collapse:collapse;border-spacing:0px;float:left\">
                                <tr style=\"border-collapse:collapse\">
                                <td valign=\"top\" align=\"center\" style=\"padding:0;Margin:0;width:270px\">
                                    <table
                                    style=\"mso-table-lspace:0pt;mso-table-rspace:0pt;border-collapse:collapse;border-spacing:0px;background-position:center top\"
                                    width=\"100%\" cellspacing=\"0\" cellpadding=\"0\">
                                    <tr style=\"border-collapse:collapse\">
                                        <td class=\"es-m-txt-c\" align=\"left\"
                                        style=\"padding:0;Margin:0;padding-top:5px;padding-bottom:15px\">
                                        <p
                                            style=\"Margin:0;-webkit-text-size-adjust:none;-ms-text-size-adjust:none;mso-line-height-rule:exactly;font-family:roboto, 'helvetica neue', helvetica, arial, sans-serif;line-height:14px;color:#999999;font-size:14px\">
                                            <br></p>
                                        <p
                                            style=\"Margin:0;-webkit-text-size-adjust:none;-ms-text-size-adjust:none;mso-line-height-rule:exactly;font-family:roboto, 'helvetica neue', helvetica, arial, sans-serif;line-height:14px;color:#999999;font-size:14px\">
                                            Síguenos en nuestras Redes Oficiales</p>
                                        </td>
                                    </tr>
                                    </table>
                                </td>
                                </tr>
                            </table>
                            <!--[if mso]></td><td style=\"width:20px\"></td><td style=\"width:270px\" valign=\"top\"><![endif]-->
                            <table class=\"es-right\" cellspacing=\"0\" cellpadding=\"0\" align=\"right\"
                                style=\"mso-table-lspace:0pt;mso-table-rspace:0pt;border-collapse:collapse;border-spacing:0px;float:right\">
                                <tr style=\"border-collapse:collapse\">
                                <td align=\"left\" style=\"padding:0;Margin:0;width:270px\">
                                    <table
                                    style=\"mso-table-lspace:0pt;mso-table-rspace:0pt;border-collapse:collapse;border-spacing:0px;background-position:center top\"
                                    width=\"100%\" cellspacing=\"0\" cellpadding=\"0\">
                                    <tr style=\"border-collapse:collapse\">
                                        <td class=\"es-m-txt-c\" align=\"right\"
                                        style=\"padding:0;Margin:0;padding-top:5px;padding-bottom:5px;font-size:0\">
                                        <table class=\"es-table-not-adapt es-social\" cellspacing=\"0\" cellpadding=\"0\"
                                            style=\"mso-table-lspace:0pt;mso-table-rspace:0pt;border-collapse:collapse;border-spacing:0px\">
                                            <tr style=\"border-collapse:collapse\">
                                            <td valign=\"top\" align=\"center\" style=\"padding:0;Margin:0;padding-right:10px\"><a
                                                target=\"_blank\" href=\"https://www.facebook.com/DigiMedia.Marketing1\"
                                                style=\"-webkit-text-size-adjust:none;-ms-text-size-adjust:none;mso-line-height-rule:exactly;text-decoration:underline;color:#FFFFFF;font-size:14px\"><img
                                                    title=\"Facebook\"
                                                    src=\"https://fiinfrl.stripocdn.email/content/assets/img/social-icons/logo-colored/facebook-logo-colored.png\"
                                                    alt=\"Fb\" width=\"32\" height=\"32\"
                                                    style=\"display:block;border:0;outline:none;text-decoration:none;-ms-interpolation-mode:bicubic\"></a>
                                            </td>
                                            <td valign=\"top\" align=\"center\" style=\"padding:0;Margin:0;padding-right:10px\"><a
                                                target=\"_blank\" href=\"https://www.instagram.com/digimediamkt/\"
                                                style=\"-webkit-text-size-adjust:none;-ms-text-size-adjust:none;mso-line-height-rule:exactly;text-decoration:underline;color:#FFFFFF;font-size:14px\"><img
                                                    title=\"Instagram\"
                                                    src=\"https://fiinfrl.stripocdn.email/content/assets/img/social-icons/logo-colored/instagram-logo-colored.png\"
                                                    alt=\"Inst\" width=\"32\" height=\"32\"
                                                    style=\"display:block;border:0;outline:none;text-decoration:none;-ms-interpolation-mode:bicubic\"></a>
                                            </td>
                                            <td valign=\"top\" align=\"center\" style=\"padding:0;Margin:0;padding-right:10px\"><a
                                                target=\"_blank\" href=\"https://www.linkedin.com/in/digimedia-marketing/\"
                                                style=\"-webkit-text-size-adjust:none;-ms-text-size-adjust:none;mso-line-height-rule:exactly;text-decoration:underline;color:#FFFFFF;font-size:14px\"><img
                                                    title=\"LinkedIn\"
                                                    src=\"https://fiinfrl.stripocdn.email/content/assets/img/social-icons/logo-colored/linkedin-logo-colored.png\"
                                                    alt=\"In\" width=\"32\" height=\"32\"
                                                    style=\"display:block;border:0;outline:none;text-decoration:none;-ms-interpolation-mode:bicubic\"></a>
                                            </td>
                                            <td valign=\"top\" align=\"center\" style=\"padding:0;Margin:0\"><a target=\"_blank\"
                                                href=\"https://www.youtube.com/@digimediamarketing2636\"
                                                style=\"-webkit-text-size-adjust:none;-ms-text-size-adjust:none;mso-line-height-rule:exactly;text-decoration:underline;color:#FFFFFF;font-size:14px\"><img
                                                    title=\"YouTube\"
                                                    src=\"https://fiinfrl.stripocdn.email/content/assets/img/social-icons/logo-colored/youtube-logo-colored.png\"
                                                    alt=\"Yt\" width=\"32\" height=\"32\"
                                                    style=\"display:block;border:0;outline:none;text-decoration:none;-ms-interpolation-mode:bicubic\"></a>
                                            </td>
                                            </tr>
                                        </table>
                                        </td>
                                    </tr>
                                    </table>
                                </td>
                                </tr>
                            </table><!--[if mso]></td></tr></table><![endif]-->
                            </td>
                        </tr>
                        </table>
                    </td>
                    </tr>
                </table>
                </td>
            </tr>
            </table>
        </div>
        </body>

        </html>
        ";

    return $mensages_main;
}

/* Lo esta en el cuerpo del Mensaje eras esto:
 <td align=\"left\"
                                        style=\"padding:0;Margin:0;padding-top:10px;padding-left:20px;padding-right:20px\">
                                        <!-- <p
                                            style=\"Margin:0;-webkit-text-size-adjust:none;-ms-text-size-adjust:none;mso-line-height-rule:exactly;font-family:roboto, 'helvetica neue', helvetica, arial, sans-serif;line-height:17px;color:#3F3D3D;font-size:14px\">
                                            Hola, <strong><span style=\"color:#a601b8\">|FNAME|</span></strong></p>
                                        <p
                                            style=\"Margin:0;-webkit-text-size-adjust:none;-ms-text-size-adjust:none;mso-line-height-rule:exactly;font-family:roboto, 'helvetica neue', helvetica, arial, sans-serif;line-height:17px;color:#3F3D3D;font-size:14px\">
                                            <br></p> -->
                                        <p
                                            style=\"Margin:0;-webkit-text-size-adjust:none;-ms-text-size-adjust:none;mso-line-height-rule:exactly;font-family:roboto, 'helvetica neue', helvetica, arial, sans-serif;line-height:17px;color:#3F3D3D;font-size:14px\">
                                            ¿Deseas una página más<strong><span style=\"color:#3865e3\"> interactiva y
                                                didáctica</span></strong>?<br><br>En <strong><span
                                                style=\"color:#a601b8\">DIGI</span><span
                                                style=\"color:#3865e3\">MEDIA</span></strong>&nbsp;te ayudaremos<span
                                            style=\"color:#a601b8\"> <strong>impulsar tu éxito</strong></span> digital con
                                            beneficios exclusivos:</p>
                                        <ol>
                                            <li
                                            style=\"-webkit-text-size-adjust:none;-ms-text-size-adjust:none;mso-line-height-rule:exactly;font-family:roboto, 'helvetica neue', helvetica, arial, sans-serif;line-height:17px;Margin-bottom:15px;margin-left:0;color:#3F3D3D;font-size:14px\">
                                            <p
                                                style=\"Margin:0;-webkit-text-size-adjust:none;-ms-text-size-adjust:none;mso-line-height-rule:exactly;font-family:roboto, 'helvetica neue', helvetica, arial, sans-serif;line-height:17px;color:#3F3D3D;font-size:14px\">
                                                Aumento de visibilidad y tráfico web garantizado.</p>
                                            </li>
                                            <li
                                            style=\"-webkit-text-size-adjust:none;-ms-text-size-adjust:none;mso-line-height-rule:exactly;font-family:roboto, 'helvetica neue', helvetica, arial, sans-serif;line-height:17px;Margin-bottom:15px;margin-left:0;color:#3F3D3D;font-size:14px\">
                                            <p
                                                style=\"Margin:0;-webkit-text-size-adjust:none;-ms-text-size-adjust:none;mso-line-height-rule:exactly;font-family:roboto, 'helvetica neue', helvetica, arial, sans-serif;line-height:17px;color:#3F3D3D;font-size:14px\">
                                                Experiencia del usuario excepcional que convierte<span style=\"color:#3865E3\">
                                                </span>visitantes en clientes leales.</p>
                                            </li>
                                        </ol>
                                        <p
                                            style=\"Margin:0;-webkit-text-size-adjust:none;-ms-text-size-adjust:none;mso-line-height-rule:exactly;font-family:roboto, 'helvetica neue', helvetica, arial, sans-serif;line-height:17px;color:#3F3D3D;font-size:14px\">
                                            ¡Construye una plataforma de impacto con nosotros y <span
                                            style=\"color:#a601b8\"><strong>haz que tu negocio</strong></span> <strong><span
                                                style=\"color:#a601b8\">brille en la WEB</span></strong>!</p>
                                        </td>*/

?>



