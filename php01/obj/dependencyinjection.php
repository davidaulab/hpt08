<?php 

class Comensal {
    public $edad;
    public $id;
    public function getEdad () { return $this->edad;}
    public function __construct ($id = 0, $edad = 5) {
        $this->edad = $edad;
        $this->id = $id;
    }
}

class Mesa {
    public $comensales = [];

    public function setComensal ($comensal) {
        $this->comensales[] = $comensal;
    }

    public function setEdadComensal ($id, $edad) {

        if ((is_object($id) ) && (get_class($id) == 'Comensal')) {
            $id->edad = $edad;
        }
        else {
            for ($i = 0; $i < count($this->comensales); $i++) {
                if ($this->comensales[$i]->id == $id) {
                    $this->comensales[$i]->edad = $edad;
                }
            }
        }

    }
}
$mesa = new Mesa ();
for ($i = 1; $i < 4; $i++) {
    $comensal = new Comensal ($i, rand(18, 65));
    $mesa->setComensal ($comensal);
}

var_dump ($mesa);
$mesa->setEdadComensal(2, 80);
$mesa->setEdadComensal($mesa->comensales[0], 70);

var_dump ($mesa);
