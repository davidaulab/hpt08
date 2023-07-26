<?php

// 1:Crea programas de operaciones con dos variables (suma, resta, etc).

$var1 = 1;
$var2 = 2;

$total = $suma1 + $suma2;
echo($total);

$total1 = $suma1 - $suma2;
echo($total1);

$total2 = $suma1 * $suma2;
echo($total2);

$total3 = $suma1 / $suma2;
echo($total3);

// 2:Crear un array e imprimir un elemento del array.

$array = array("Atun", "Queso", "Pan");
echo $array[2];

// 3:Crear un array de arrays e imprimir un elemento del array

$multiarray = array(
              array(1, 2, 3), 
              array(4, 5, 6),
              array(7, 8, 9)
            );
echo $multiarray[1][1];

// 4:Crear un programa que imprima los primeros 10 números.

for ($i = 1; $i <= 10; $i++){
    echo $i;
}

// 5:Crear un programa que sume los primeros 10 números.

$var = 0;

for ($i = 1; $i <= 10; $i++){
    $var += $i;
}

echo $var;


// 6:Crear un programa que imprima X números random.

$x = 10;

for ($i = 0; $i < $x; $i++){
    $numero = rand();
    echo $numero;
}

// 7:Encapsular en funciones los ejercicios 5 y 6.

function ejercicio5(){
    $var = 0;
    for ($i = 1; $i <= 10; $i++){
        $var += $i;
    }
    return $var;
}

function ejercicio6(){
    $x = 10;
    $numero = array();

    for ($i = 0; $i < $x; $i++){
        $numero[] = rand();
    }

    return $numero;
}


// 8:Crear una función que imprima X valores random en el intervarlo 0 - X.

$valor = 10;

function random($valor){
    for($i = 1; $i <= 10; $i++){
        $numero = rand(0, $valor);
        echo $numero;
    }
}

echo random($valor);

// 9:Crear una función que dado un numero imprima solo los valores pares.

function pares($valor){
    for($i = 1; $i <= $valor; $i++){
        if ($i%2 == 0){
            echo $i;
        }
    }
}

echo pares($valor);

// 10:Crear una función que dado un número x imprima solo los valores impares.

function impares($valor){
    for($i = 1; $i <= $valor; $i++){
        if ($i%2 == 1){
            echo $i;
        }
    }
}

echo pares($valor);

// 11:Considerando las funciones de antes (pares e impares), crear una función que tenga como limite un numero dado n y como
//segundo parámetro un valor booleano que: si es true imprime los pares y si es false imprime los impares.

$pares = array();
$impares = array();

function paresimpares(&$pares, &$impares){
    for($i = 1; $i <= 10; $i++){
        if($i%2 == 0){
            $pares[] = $i;
        } else{
            $impares[] = $i;
        }
    }
}

paresimpares($pares, $impares);

echo "Pares:";
for ($i = 0; $i < count($pares); $i++) {
    echo $pares[$i];
}

echo "\nImpares:";
for ($i = 0; $i < count($impares); $i++) {
    echo $impares[$i];
}

?>