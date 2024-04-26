<?php

$valor = 1;
        
// Validar y procesar el valor recibido
if($valor == 0){
    require_once("../secciones-admin/modal-reader.php");
} elseif($valor == 1){
    require_once("../secciones-admin/modal-usuario.php");
}
// Verificar si se recibieron datos en la solicitud POST
/*if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // Verificar si se recibió el valor
    if (isset($_POST['valor'])) {
        // Obtener el valor enviado desde JavaScript
        $valor = $_POST['valor'];
        
        // Validar y procesar el valor recibido
        if($valor == 0){
            require_once("../secciones-admin/modal-reader.php");
        } elseif($valor == 1){
            require_once("../secciones-admin/modal-usuario.php");
        } else {
            // Manejar cualquier otro caso o valor no válido
            echo json_encode(['mensaje' => 'Datos procesados en PHP con éxito']);
        }
    } else {
        // Si no se recibió el valor esperado, devolver un error
        http_response_code(400); // Bad Request
        echo json_encode(['error' => 'No se recibió el valor esperado']);
    }
} else {
    // Si no se recibió una solicitud POST, devolver un error
    http_response_code(405); // Method Not Allowed
    echo json_encode(['error' => 'Se esperaba una solicitud POST']);
}*/
?>







