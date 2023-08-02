<?php

namespace App\Http\Controllers;


use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class BarController extends Controller
{
    //


    public function index (Request $request) {

        $bares = DB::table('bars')->get();

        //dd($bares);
        return view ('bars.index', compact('bares'));
    }

    public function show ($id) {

        $bar = DB::table('bars')->find($id);

        //dd($bar);

        if ($bar == null  ) {
            return redirect ()->route ('bars.index')->with('code', '304')->with ('message', 'Bar no encontrado, prueba con uno de estos.');
        }
        return view ('bars.show', compact('bar'));
    }

    public function create () {

        return view ('bars.create');
    }
    public function store (Request $request) {

        //dd ($request);

        DB::table('bars')->insert(['name' => $request->name, 'description' => $request->description]);

        return redirect ()->route ('bars.index')->with ('code', '0')->with('message', 'Bar guardado correctamente');
    }
}
