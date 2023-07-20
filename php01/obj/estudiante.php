<?php 
require_once "persona.php";

final class Estudiante extends Persona {
    private $edicion;
    private static $numEst = 0;

    public static function getNumEst () {
        return self::$numEst;
    }

    public function __construct($id, $nombre)
    {
           parent::__construct($id, $nombre);
           $this->poblacion = "Sin definir"; 
           self::$numEst++;
    }    
    public function setEdicion ($edicion) {
        if ($this->edicion == null) {
            $this->edicion = $edicion;
        }
        else {
            echo "\nYa tiene asignada edición\n";
        }
        
    }
    public function getEdicion () {
        return $this->edicion;
    }
    function __toString () {
        parent::miMetodo ();
        return "\nPaso por toString de estudiante\n" . parent::__toString()  ; // operador :: Paamayim Nekudotayim
    }
    public function __destruct()
    {
        self::$numEst--;
        parent::__destruct();
    }
}  
/*
() -> funciones built-in o de usuario
[] -> arrays
{} -> bloques (clases, funciones, if, while, for, ....)

*/