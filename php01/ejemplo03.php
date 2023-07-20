<?php

$texto = "       Hola %nombre%:   ";

echo "\n1- $texto -";
echo "\n2-" . trim($texto) . "-";
echo "\n3-" . rtrim($texto) . "-";
echo "\n4-" . ltrim($texto) . "-";

$nombre = "Alejandra";
echo "\n5-" . str_replace ('%NOMBRE%', $nombre, $texto);
echo "\n6-" . str_ireplace ('%NOMBRE%', $nombre, $texto);

echo "\n7-" . str_contains ($texto, 'Hola');

echo "\n8-" . strpos ($texto, 'Hola');
$miarray = [
    "a", 
    "b", 
    "c",
    "d",
    "e",
    "f",
    "g"
];

echo "\n9-'" . implode("';'", $miarray) ."'";
echo "\n10-" ;
var_dump (explode(';', "'a';'b';'c';'d';'e';'f';'g'"));

echo "\n11-" . gettype($miarray);

$num = 2.3;
$entero = 3;
$string = "3.4";

echo "\n-12 $num " . gettype($num);
echo "\n-13 $entero " . gettype($entero);
echo "\n-14 $string " . gettype($string);


echo "\n-15 $string " . gettype($string) . ' y aplico intval ' . gettype(intval($string));
echo "\n-16 $string " . gettype($string) . ' y aplico floatval ' . gettype(floatval ($string));
echo "\n-17 $string " . gettype($num) . ' y aplico strval ' . gettype(strval ($num));

$string = '2023';
echo "\n-18 $string " . gettype($string) . ' y aplico intval ' . gettype(intval($string)) . " - " . intval($string);
echo "\n Is numeric " . gettype(is_numeric("3"));
// es numero
if (is_numeric("3")) {
    echo "\n es un número";
}
else {
    echo "\nNO es un número";
}

// ((condicion) ? instrucción if true : instrucción else);
$unNumero = ((is_numeric($string)) ? intval($string) : -1);
echo "\n\n" .$unNumero;

function sumarPrimeros10Numeros (){
    $aux = 0;
    for ($i = 1; $i <= 10; $i++) {
        $aux += $i;
    }
    return $aux;
   // Nunca se ejecuta return "OTra cosa";
    
}
function imprimirRandom (&$numRandom, $maxValor = 10){
global $unNumero, $string;
echo "\nEl valor de un número es $unNumero";
$unNumero = 2025;
    for ($i = 0 ; $i < $numRandom; $i++) {
        $num = rand(1, $maxValor);
        echo "\n" . $num;
    }
    $max = 10;
}

echo "\n\n" . sumarPrimeros10Numeros ();
echo "\n\n" . sumarPrimeros10Numeros ();
echo "\n\n" . sumarPrimeros10Numeros ();
echo "\n\n" . sumarPrimeros10Numeros ();
$param = 2;
imprimirRandom ($param);
echo "\n $param";
imprimirRandom ($param, 100);
echo "\n $param";

echo "\nEl valor de un número es $unNumero";

/*
Crear una función que dado un numero imprima solo los
valores pares.

Crear una función que dado un número x imprima solo los
valores impares.

Considerando las funciones de antes (pares e impares), crear
una función que tenga como limite un numero dado n y como
segundo parámetro un valor booleano que: si es true imprime
los pares y si es false imprime los impares.
*/

function imprimirValores ($n, $pares) {

    for ($i = $n; $i >= 0; $i--) {
        if (($pares == true) && ($i % 2 === 0)) {
            echo $i . " ";
        }
        elseif (($pares == false) && ($i % 2 === 1)) {
            echo $i . " ";
        }
    }
}

function imprimirValoresUnIf ($n, $pares) {

    for ($i = $n; $i >= 0; $i--) {

        // Imprimir pares $i % 2 => false $pares => true
        // Imprimir IMpares $i % 2 => true $pares => false
        if (($i % 2) != $pares) {
        //if ((($i % 2) == 0) == $pares) {
                echo " " . $i;
        }
        
    }
}
function imprimirValoresSinIf ($n, $pares) {
    
    for ($i = (1 - $pares); $i <= $n; $i += 2) {
            echo " " . $i;
    }
}

echo "\nIMPRIMIR VALORES";
echo"\n Pares ";
imprimirValores (11, true);
echo"\n Impares ";
imprimirValores (15, false);

echo "\nIMPRIMIR VALORES UN IF ";
echo"\n Pares ";
imprimirValoresUnIf (11, true);
echo"\n Impares ";
imprimirValoresUnIf (15, false);

echo "\nIMPRIMIR VALORES SIN IF ";
echo"\n Pares ";
imprimirValoresSinIf (11, true);
echo"\n Impares ";
imprimirValoresSinIf (15, false);

// ... splat

function sumarNumeros (...$numeros) {
    $aux = 0;
    var_dump ($numeros);
    foreach ($numeros as $numero) {
        $aux += $numero;
    }
    return $aux;

}

function sumarNumerosSinSplat ($numeros) {
    $aux = 0;
    foreach ($numeros as $numero) {
        $aux += $numero;
    }
    return $aux;

}
echo "\n\nSPLAT";
echo "\n " . sumarNumeros (1,2,3);
echo "\n " . sumarNumeros (2,4,5,6,23,2,3,5);

echo "\n\nSIN SPLAT";
echo "\n " . sumarNumerosSinSplat ([1,2,3]);
echo "\n " . sumarNumerosSinSplat ([2,4,5,6,23,2,3,5]);
?>