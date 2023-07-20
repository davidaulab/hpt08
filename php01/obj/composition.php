<?php 

class Comensal {
    public $edad;
    public function getEdad () { return $this->edad;}
    public function __construct ($edad = 5) {
        $this->edad = $edad;
    }
}
class Menu {
    public $cliente;
    public function setComensal ($comensal) { $this->cliente = $comensal;}
    public function getComensal () { return $this->cliente;}
    public function __construct ($cliente) {
        $this->cliente = $cliente;
    }
}
class Restaurante {
    public $menu;
    public function setMenu ($menu) { $this->menu = $menu; return $this;}
    public function getMenu () { return $this->menu;}
}


$miComensal = new Comensal ();
$miComensal->edad = 20;
$miMenu = new Menu ($miComensal);
$miMenu->setComensal($miComensal);
$miRestaurante = new Restaurante ();
$miRestaurante->setMenu($miMenu);

$miComensal = null;
$miMenu = null;
// Sin Composition: Acceder a la edad del comensar a partir de mi menú
$auxMenu = $miRestaurante->getMenu ();
$aux = $auxMenu->getComensal();
echo "\n Sin composition: " .$aux->getEdad ();
// CON Composition: Acceder a la edad del comensar a partir de mi menú
echo "\n Con composition: " . $miRestaurante -> setMenu(new Menu (new Comensal(21)))
                                            -> setMenu(new Menu (new Comensal(21)))
                                            -> setMenu(new Menu (new Comensal(21)))
                                            -> setMenu(new Menu (new Comensal(21)))
                                            -> setMenu(new Menu (new Comensal(21)))
                                            -> setMenu(new Menu (new Comensal(21)))
                                            -> setMenu(new Menu (new Comensal(21)))
                                            -> setMenu(new Menu (new Comensal(21)))
                                            -> setMenu(new Menu (new Comensal(21)))
                                            -> setMenu(new Menu (new Comensal(21)))
                                            -> setMenu(new Menu (new Comensal(21)))
                                            -> setMenu(new Menu (new Comensal(21)))
                                            -> getMenu()
                                            -> getComensal()
                                            -> getEdad(); 

                                         //   var_dump ($aux);