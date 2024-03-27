<?php

require_once '../../config/db.php';
require_once '../controller/libroReclamacion.php';
require_once '../model/libroReclamacion.php';
require_once '../db/db.php';


$action = isset($_GET['action']) ? $_GET['action'] : null;

if ($action == 'GET') {
    echo json_encode(ControllerlibroReclamacion::get());


} else if ($action == 'ADD') {

    if (
        isset(
        $_POST['nombre'],
        $_POST['apellido'],
        $_POST['documento'],
        $_POST['numeroDocumento'],
        $_POST['email'],
        $_POST['celular'],
        $_POST['direccion'],
        $_POST['distrito'],
        $_POST['ciudad'],
        $_POST['tipoReclamo'],
        $_POST['servicioContratado'],
        $_POST['reclamoPerson'],
        $_POST['checkReclamoForm'],
        $_POST['aceptaPoliticaPrivacidad']
    )
    ) {

        $nombre = $_POST['nombre'];
        $apellido = $_POST['apellido'];
        $documento = $_POST['documento'];

        $numeroDocumento = $_POST['numeroDocumento'];
        $email = $_POST['email'];
        $celular = $_POST['celular'];

        $direccion = $_POST['direccion'];
        $distrito = $_POST['distrito'];
        $ciudad = $_POST['ciudad'];

        $tipoReclamo = $_POST['tipoReclamo'];
        $servicioContratado = $_POST['servicioContratado'];
        $reclamoPerson = $_POST['reclamoPerson'];

        $checkReclamoForm = $_POST['checkReclamoForm'];
        $aceptaPoliticaPrivacidad = $_POST['aceptaPoliticaPrivacidad'];


        $controller = new ControllerlibroReclamacion();
        echo json_encode($controller->add(
            $nombre,
            $apellido,
            $documento,
            $numeroDocumento,
            $email,
            $celular,
            $direccion,
            $distrito,
            $ciudad,
            $tipoReclamo,
            $servicioContratado,
            $reclamoPerson,
            $checkReclamoForm,
            $aceptaPoliticaPrivacidad
        )
        );

    } else if ($action == 'DELETE') {
        $id = isset($_GET['id']) ? $_GET['id'] : null;
        if ($id) {
            echo json_encode(ControllerlibroReclamacion::delete($id));
        } else {
            echo json_encode(["error" => "No se proporcionó el ID del elemento a eliminar"]);
        }
    } else {
        echo json_encode('Faltan parámetros en la solicitud.');
    }

}


// echo json_encode($_POST);
