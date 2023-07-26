<?php

namespace App\Http\Controllers;



class BarController extends Controller
{
    //
    private static $bares =  [
        [1, 'Bar la Plaza', "El bar principal del pueblo"], // bar 1
        [2, 'La luna', "Bar en Orihuela"], // bar 1
        [8, 'Gato negro', "Bar en Orihuela playa"], // bar 1
        [10, 'Dublin', "Pub Irlandés"], // bar 1
        [16, 'Yunque', "Bar en Ponferrada"], // bar 1

    ];

    public function index () {

        return view ('bars.index', ["bares" => self::$bares]);
    }

    public function show ($id) {


        $aux = -1;
        $i = 0;
        //dd($bares[$i]);
        while (($aux < 0)  && ($i < count(self::$bares))){
            if ($id == self::$bares[$i][0]) {
                $aux = $i; /// He encontrado el bar
            }
            $i++;
        }


        if ($aux < 0) {
            return redirect ()->route ('bars.index');
        }
        return view ('bars.show', ["bar" => self::$bares[$aux]]);
    }
}
