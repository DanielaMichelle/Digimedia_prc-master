<?php

require_once '../../config/db.php';
require_once '../controller/usuarios.php';
require_once '../model/usuarios.php';
require_once '../db/db.php';


$action = isset($_GET['action']) ? $_GET['action'] : null;

if ($action == 'GET') {
    echo json_encode(ControllerUsuarios::get());
   

} else if ($action == 'ADD') {

    if (isset($_POST['usuario'], $_POST['contrasena'])) {
        $usuario = $_POST['usuario'];
        $contrasena = $_POST['contrasena'];
        $nombre = $_POST['nombre'];

        $controller = new ControllerUsuarios();
        echo json_encode($controller->add($usuario, $contrasena, $nombre));
        header("location: http://localhost/Digimedia_prc-master/public/view/secciones-admin/modal-usuario.php");
    } else {
        echo json_encode('Faltan parámetros en la solicitud.');
    }

}



// echo json_encode($_POST);
