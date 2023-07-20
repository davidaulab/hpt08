<?php

include_once "persona.php";
require_once "estudiante.php";
include_once "docente.php";

echo "\nHay " . Persona::getNumero() . " personas en clase.\n";
echo "\nHay " . Estudiante::getNumEst() . " estudiantes en clase.\n";

$alejandra = new Estudiante (12, 'Alejandra');
$veronica = new Estudiante (7, 'Verónica');
$david = new Docente (23, 'David');
$antonio = new Estudiante (0, "Antonio");
echo "\nHay " . Persona::getNumero() . " personas en clase.\n";
echo "\nHay " . Estudiante::getNumEst() . " estudiantes en clase.\n\n";

$antonio = null;
echo "\nEcho a Antonio de clase";
echo "\nHay " . Persona::getNumero() . " personas en clase.\n";
echo "Hay " . Estudiante::getNumEst() . " estudiantes en clase.\n\n";





$veronica = null;
echo "\nVerónica abandona la clase por hoy";
echo "\nHay " . Persona::getNumero() . " personas en clase.\n";
echo "Hay " . Estudiante::getNumEst() . " estudiantes en clase.\n\n";

echo $alejandra->__toString();
echo "\nVoy a asignar población\n";
//echo "\n" . $veronica->poblacion;
//echo "\nVerónica es de tipo " . gettype($veronica) . " " .get_class($veronica);
echo "\nAlejandra es de tipo " . gettype($alejandra) . " " .get_class($alejandra);
echo "\nDavid es de tipo " . gettype($david) . " " .get_class($david);

 if (($veronica != null) && (is_object($veronica)) && (get_class($veronica) == 'Estudiante')) {
    $veronica->setEdicion('HPT-08');
    $veronica->setEdicion('HFT-09');
} 

/* var_dump ($veronica);
var_dump ($alejandra);
var_dump ($david); */