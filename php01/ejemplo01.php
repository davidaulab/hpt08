<?php 
echo "Hola Mundo modfificado";

/*

1 - Asignación a variables
2 - Condicionales
3 - Bucles

*/

$variable;

$variable = 1 + "2";
$variable = 'uno' . 1 .  $variable;

$otravariable = "\n\nDos<br>\n\t \"$variable";
$otraVariable = 1;
$OTRAVARIABLE = "dos";

echo $variable;
echo $otravariable;

// define ('VALOR_CONST', 0.0);

const VALOR_CONSTANTE = 0.01;

echo VALOR_CONSTANTE;

print_r("\n\n" . VALOR_CONSTANTE);
echo "------\n";
var_dump("\n\n" . VALOR_CONSTANTE);

$numeros = array(0, 1);

$numeros[] = 0;
$numeros[] = 1;

$numeros[0] = 0;
$numeros[8] = 1;

$numeros = [0,1];

$numeros = [0, true, "dos"];

$matriz = [[0,1,2, 4, 5, 6], [3, 4, 5], [6,7,8, 9, 10, 11]];
/*
$matriz = array ( array(0,1,2, 4, 5, 6),array (3, 4, 5), array (6,7,8, 9, 10, 11));

$fila[] = 0;
$fila[] = 1;
$fila[] = 2;
$numeros[] = $fila;

$numeros[0][0] = 0;
$numeros[0][1] = 1;

$numeros[2][0] = 6;
*/
// [0][3][6]
// [1][4][7]
// [2][5][8]

$numeros = [0, true, "dos"];

$configuracion = [
    "pais" => "ES",
    "idioma" => "es",
    "moneda" => "Euro"
];

echo "\n\n-------------\n-------------";

echo "\n\n-------------\nVar dump\n-------------\n";
var_dump ($matriz);

echo "\n\n-------------\nPrint_r\n-------------\n";
print_r($matriz);

echo "\n\n-------------\necho\n-------------\n"; 
echo $configuracion["moneda"]; //No es posible, da warning
echo "\n" . $matriz[2][3]; 

// + - * / Módulo y exponente

echo "\nSuma: 2 + 2 = " . (2 + 2);
echo "\nResta: 2 - 2 = " . (2 - 2);
echo "\nMultiplicación: 2 * 3 = " . (2 * 3);
echo "\nDivisión: 8 / 2 = " . (8 / 2);
echo "\nDivisión: 8 / 3 = " . (8 / 3);

echo "\nMódulo (resto): 7 % 3 = " . (7 % 3);

echo "\nExponente: 8 ** 5 = " . (8 ** 5);

echo "\nRaiz: 125 ** 1/5 = " . (125 ** (1/3));
// Comparación
/*
>
<
>=
<=
==
===
!=
!==
*/

echo "\n 2 > 7 " ;
var_dump  (2 > 7);

echo "\n 2 == 2 " ;
var_dump (2 == 2);

echo "\n 2 == '2' " ;
var_dump (2 == '2');

echo "\n 2 === '2' " ;
var_dump (2 === '2');

echo "\n 2 != '2' " ;
var_dump (2 != '2');

echo "\n 2 !== '2' " ;
var_dump (2 !== '2');

// lógicos
// Y (AND) O (OR) NO (NOT)

echo "\n true & false " ;
var_dump (true & false);

echo "\n true && false " ;
var_dump (true && false);

echo "\n true | false " ;
var_dump (true | false);

echo "\n true || false " ;
var_dump (true || false);

echo "\n !true  " ;
var_dump (!true);


$matriz2 = [[0,1,2, 4, 5, 6], [3, 4, 5], [6,7,8, 9, 10, 11]];

if (false && ($matriz2[4] > 2) &&  ($matriz2[4][4] > 2)) {
    echo " existe [4][4]";
}
else {
    echo "\nNo existe [4][4] con el false por delatne \n";
}
if (($matriz2[4] > 2) & ($matriz2[4][4] > 2)) {
    echo " existe [4][4]";
}
else {
    echo "\nNo existe [4][4]";
}

echo (2 /0);

echo "algo mas";
?>
