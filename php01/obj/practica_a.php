<?php 
// Password
function validpassword ($password){
    if ((strlen($password)>=5) && preg_match('/\d/', $password)){ //utilizo strlen porque sizeof/count tiene que ser en un array
        echo "\n" . "La password es valida";
    } else{
        echo "\n". "La password NO es valida";
    }

}
$password = 'Contraseña123'; //La password es valida
validpassword($password);
$password = 'holaholahola';//La password NO es valida
validpassword($password);
$password = 'hol1';
validpassword($password);//La password NO es valida

// Personas
class Persona{
    private $nombre; // Falta ;
    private $apellido; // Falta ;
    private $edad; // Falta ;


    function __construct($nombre,$apellido,$edad)
    {
        $this -> nombre = $nombre;
        $this -> apellido =$apellido;
        $this -> edad = $edad;
    }
    function saludarPublicamente() {
       // echo "Hola, soy $this->nombre $this->apellido y tengo $this->edad años." ;
        echo "Hola, soy " . $this->nombre . " " . $this->apellido ." y tengo " . $this->edad . " años." ;
      }

     private function saludarPrivadamente() {
        echo "Hola, soy $this->nombre $this->apellido y estoy saludando de forma privada.";
      }
    function __destruct()
    {

    }
}
$persona1 = new Persona ("Julia", "Martinez", 26);
$persona2 = new Persona ("Mario", "Garcia", 34);
//imprimir informacion personas
// No existen los getXXX echo 'Julia' . $persona1->getNombre().$persona1->getApellido() . $persona1->getEdad();
// No existen los getXXX echo 'Mario' . $persona2->getNombre().$persona2->getApellido() . $persona2->getEdad();
//llamo a la funcion saludar
var_dump ($persona1);
$persona1 ->saludarPublicamente();
//No se puede llamar a un método privado desde fuera de la clase, solamente a públicos $persona1 ->saludarPrivadamente();

// Cesta
$productosDisponibles = [
    "pan" => 2,
    "papas" => 1,
    "cocacola" =>3,
    "agua"=> 2,
];
function queCompro($cartera){
    for ($i=$cartera; $i=0; $i--){

    }
    $cartera = 7;
}

// ejemplo del primer ejercicio de comprar de artículos
$cartera = 7; // declaramos la variable con el importe que tenemos en la cartera
$productosComprados = []; // Creamos un array de productos comprados
foreach ($productosDisponibles as $nombre => $precio) { // recorremos los productos
    if ($precio <= $cartera) { // si me queda más dinero en la cartera de lo que cuesta el producto
        $productosComprados[] = $nombre; // lo incluyo en mi cesta
        $cartera -= $precio; // y resto el precio
    }
}

echo "\n\nMe quedan $cartera € en la cartera y he comprado: ";
var_dump ($productosComprados);