<?php
    
    session_start();
//Hola des
    if( isset($_SESSION['id']) ) include_once './public/view/intranet.php';
    else header('Location: login.php');