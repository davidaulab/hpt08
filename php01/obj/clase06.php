<?php

include "docentePracticas.php";

$elNuevoProfesor = new DocentePracticas(14, "Nuevo profesor");

var_dump ($elNuevoProfesor);

echo "\nEstá en el año " . $elNuevoProfesor->getYear ();
//Docente::$instance = new Docente(999, 'UN NOMBRE');
var_dump ($elNuevoProfesor->getInstance());
?>