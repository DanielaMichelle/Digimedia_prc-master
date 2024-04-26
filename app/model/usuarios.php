<?php
class ModeloUsuarios {
    public static function insert($table, $columns, $values) {
        $columnNames = implode(',', $columns);
        $valuePlaceholders = implode(',', array_fill(0, count($values), '?'));
        $query = "INSERT INTO $table ($columnNames) VALUES ($valuePlaceholders)";
        
        return Db::query($query, $values);
    }

    public static function get(){

        [ $err, $res ] =  Db::query('SELECT * FROM usuarios'); 

        if( $err ) {
            return [];
        }

        return $res->get_result()->fetch_all(MYSQLI_ASSOC);
        
    }
    public static function rolBack($Data = []) {


        $rol =  Db::querys('SELECT rol FROM usuarios WHERE usuario = ?', [ $Data['email'] ]); 

        

        return $rol;

    }
    public static function delete($id){

        [ $err, $res ] =  Db::query('DELETE FROM usuarios WHERE id = ?', [$id]); 

        if($err) {
            return false;
        }

        return $res->affected_rows > 0;
        
    }
}
