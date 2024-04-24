<?php
class ControllerUsuarios {

    public static function add($usuario, $contrasena, $nombre) {

        // Llamamos al método insert() de la clase ModeloPerson1 para insertar los datos en la base de datos
        $resultado = ModeloUsuarios::insert('usuarios', ['usuario', 'contrasena', 'nombre'], [$usuario, $contrasena, $nombre]);
        
        // Verificamos el resultado de la operación de inserción
        if ($resultado[0] === null) {
            json_encode(['status' => true, 'message' => 'Datos enviados correctamente']);
        } else {
            json_encode(['status' => false, 'message' => 'Los datos no se han enviado']);
        }
    }


    public static function get(){

        return ModeloUsuarios::get();
        
    }
}
