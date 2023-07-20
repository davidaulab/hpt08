<?php

include_once "persona.php";
include_once "singleton.php";

class Docente extends Persona {
    use Singleton;
    public $materia = "Materia no especificada";

    public function __construct () {
        parent::__construct(0, '');
    }
    public function setNombre ($nombre) {
        parent::$nombre = $nombre;
    }
    public function setId ($id){
        parent::$id = $id;

    } 
}