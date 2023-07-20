<?php

include_once "docente.php";
include_once "practicas.php";

class DocentePracticas extends Docente implements Practicas {

    private $year = 1;

    public function getYear () {
        return $this->year;
    }
    public function setYear ($year){
        $this->year = $year;
    }
}
