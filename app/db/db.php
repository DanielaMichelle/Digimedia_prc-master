<?php
    
    class Db {
        
        private static $instancia = false;
        private static $conexion = null;

        private static function conexion () {
            self::$conexion = new mysqli(HOST, NAME, PASS, DB);
        }
        public static function queryd($query, $params = []) {
            if (self::$instancia == false) {
                self::$instancia = true;
                self::conexion();
            }
    
            try {
                $stmt  = self::$conexion->prepare($query);
    
                if (count($params) > 0) {
                    $types = str_repeat("s", count($params));
                    $stmt->bind_param($types, ...$params);
                }
    
                if ($stmt->execute()) {
                    $result = $stmt->get_result();
                    $stmt->close();
                    return [null, $result];
                }
            } catch (\Throwable $th) {
                return [$th->getMessage(), null];
            }
    
            return ["Error desconocido", null];
        }
        public static function query( $query, $params = [] ){

            if( self::$instancia == false ) {
                self::$instancia = true;
                self::conexion();
            }

            try { 
                $stmt  = self::$conexion->prepare($query);
                
                if( count( $params ) ) {
                    $types = str_repeat("s", count($params));
                    $stmt->bind_param($types, ...$params);
                }

                if($stmt->execute()) {
                    return [null, $stmt];
                }
            } catch (\Throwable $th) {
                return [$th->getMessage(), null];
            }
        }
        public static function querys($query, $params = []) {
            if (self::$instancia == false) {
                self::$instancia = true;
                self::conexion();
            }
        
            try {
                $stmt = self::$conexion->prepare($query);
        
                if (count($params)) {
                    $types = str_repeat("s", count($params));
                    $stmt->bind_param($types, ...$params);
                }
        
                if ($stmt->execute()) {
                    $result = $stmt->get_result(); 
                    $row = $result->fetch_assoc(); 
        
                    if ($row) {
                        return [null, $row['rol']];
                    } else {
                        return [null, null]; 
                    }
                }
            } catch (\Throwable $th) {
                return [$th->getMessage(), null];
            }
        }
        
    }