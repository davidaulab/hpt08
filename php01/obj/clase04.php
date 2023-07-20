<?php

require "persona.php";

$persona1 = new Persona (10, 'Alejandra');
// echo $persona1;
//var_dump($persona1);
echo "Nombre " . $persona1->nombre . "\nId " . $persona1->id . "\nLocalidad " . $persona1->getPoblacion();

echo "\nAsigno un valor a población\n";
$persona1->setPoblacion( "Sevilla");

echo "Nombre " . $persona1->nombre . "\nId " . $persona1->id . "\nLocalidad " . $persona1->getPoblacion();


$persona2 = new Persona (7, 'Verónica');
echo "Nombre " . $persona2->nombre . "\nId " . $persona2->id . "\nLocalidad " . $persona2->getPoblacion();

echo "\nAsigno un valor a población\n";
$persona2->setPoblacion ("Córdoba");

echo "\nNombre " . $persona2->nombre . "\nId " . $persona2->id . "\nLocalidad " . $persona2->getPoblacion();
echo "\nNombre " . $persona1->nombre . "\nId " . $persona1->id . "\nLocalidad " . $persona1->getPoblacion();
echo "\n Voy a ejecutar el método ";
$persona1->miMetodo ();

//$persona1 = null;
//$persona1->poblacion = "Córdoba";
//$persona1->miMetodo ();
echo "\n\nReasigno Persona1";
$persona1 = new Persona (11, 'Alejandra 1');

$aux =  new Persona (11, 'Alejandra 1');
$persona1 = null;
$persona1 = $aux;

echo "\nNombre " . $persona1->nombre . "\nId " . $persona1->id . "\nLocalidad " . $persona1->getPoblacion();
$persona2 = 2;

$persona3 = new Persona(2023, 'David');
echo "\nL82 " . $persona3->getPoblacion ();
$persona3->setPoblacion('Ponferrada');
echo "\nL84 " . $persona3->getPoblacion ();
$persona3->setPoblacion('Ponferrada');
echo "\nL86 " . $persona3->getPoblacion ();
//$persona3->poblacion = 'Burgos';
//echo "\nL88 " . $persona3->getPoblacion ();

echo "\n\n---->  $persona3";
var_dump ($persona3);
echo "\nFin del código";
