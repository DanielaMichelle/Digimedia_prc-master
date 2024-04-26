<?php

require_once '../../config/db.php';
require_once '../controller/usuarios.php';
require_once '../model/usuarios.php';
require_once '../db/db.php';


$action = isset($_GET['action']) ? $_GET['action'] : null;

if ($action == 'GET') {
    echo json_encode(ControllerUsuarios::get());
   

} else if ($action == 'ADD') {

    if (isset($_POST['user'], $_POST['pass'])) {
        $usuario = $_POST['user'];
        $contrasena = $_POST['pass'];
        $nombre = $_POST['name'];
        $rol = $_POST['rol'];
        

        

        $controller = new ControllerUsuarios();
        echo json_encode($controller->add($usuario, $contrasena, $nombre,$rol));
        //header("location: http://localhost/Digimedia_prc-master/public/view/secciones-admin/modal-usuario.php");
    } else {
        echo json_encode('Faltan parámetros en la solicitud.');
    }

}else if( $action == 'DELETE' ) {
    echo json_encode( ControllerUsuarios::delete() );
} 



// echo json_encode($_POST);
