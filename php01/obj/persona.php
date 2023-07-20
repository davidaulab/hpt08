<?php

abstract class Persona {

    // Propiedades
    public $id = 0;
    public $nombre = "Sin nombre";
    protected $poblacion;

    private static $numero = 0;
    //private $cursos = ['javascript', 'php'];

    // Métodos estaticos
    public static function getNumero () {
        return self::$numero;
    }
    // Métodos
    function __construct($id, $nombre)
    {
        echo "\nCreando  " . $id . '-' . $nombre ;    
        
        self::$numero++;

        $this->id = $id;
        $this->nombre = $nombre; 

    }

    // Métodos Getter y Setter
    public function setPoblacion ($poblacion) {
        if ($this->poblacion == null) {
            $this->poblacion = $poblacion;
        }
        else {
            echo "\nLa persona ya tiene una población y no puedes cambiarla";
        }
    }
    public function getPoblacion () {
        return  $this->poblacion;
    }

    function miMetodo () {
            echo "\nSoy un Método";
    }


    function __toString () {
        return  "id: " . $this->id . " Nombre: " . $this->nombre . " Población: " . $this->poblacion;
    }
    function __destruct () {
        echo "\nPaso por el destruct de " . $this->id . "-" . $this->nombre;
        self::$numero--;
    }

}
