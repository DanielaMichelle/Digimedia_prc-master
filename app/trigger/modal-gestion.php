<?php

require_once '../../config/db.php';
require_once '../controller/modal-gestion.php';
require_once '../model/modal-gestion.php';
require_once '../db/db.php';


$action = isset($_GET['action']) ? $_GET['action'] : null;

if ($action == 'GET') {
    echo json_encode(ControllerModalGestion::get());
   

} else if ($action == 'ADD') {

    if (isset($_POST['nombre'], $_POST['apellido'], $_POST['correo'])) {
        $nombre = $_POST['nombre'];
        $apellido = $_POST['apellido'];
        $correo = $_POST['correo'];

        $controller = new ControllerModalGestion();
        echo json_encode($controller->add($nombre, $apellido, $correo));
    } else {
        echo json_encode('Faltan parámetros en la solicitud.');
    }

}



// echo json_encode($_POST);
