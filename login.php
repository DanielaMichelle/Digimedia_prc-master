<?php
    session_start();

    if( isset($_SESSION['id']) && $_SESSION['rol']=='Administrador')  header('Location: intranet.php');
    else if(isset($_SESSION['id']) && $_SESSION['rol']=='Usuario') header('Location: intranet_user.php');
    else include_once "./public/view/login.php";
    // echo json_encode($_SESSION);