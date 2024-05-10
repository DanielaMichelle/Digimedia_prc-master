<?php
class ControllerModalDesing {

    public static function add($nombre, $apellido, $correo) {

        // Llamamos al método insert() de la clase ModeloPerson1 para insertar los datos en la base de datos
        $resultado = ModeloDesing::insert('modaldesing', ['nombre', 'apellido', 'correo'], [$nombre, $apellido, $correo]);
        
        // Verificamos el resultado de la operación de inserción
        if ($resultado[0] === null) {
            json_encode(['status' => true, 'message' => 'Datos enviados correctamente']);
        } else {
            json_encode(['status' => false, 'message' => 'Los datos no se han enviado']);
        }
    }


    public static function get(){

        return ModeloDesing::get();
        
    }
    public static function delete(){
        $id = isset($_GET['id']) ? $_GET['id'] : null;
        return ModeloDesing::delete( $id ); 
    }
}
