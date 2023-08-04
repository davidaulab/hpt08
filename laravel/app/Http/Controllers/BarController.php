<?php

namespace App\Http\Controllers;


use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

use App\Http\Requests\BarRequest;
use Illuminate\Support\Facades\Storage;

class BarController extends Controller
{
    //

    // LISTADO
    public function index (Request $request) {

        $bares = DB::table('bars')->get();

        //dd($bares);
        return view ('bars.index', compact('bares'));
    }
    // DETALLE
    public function show ($id) {

        $bar = DB::table('bars')->find($id);

        //dd($bar);

        if ($bar == null  ) {
            return redirect ()->route ('bars.index')->with('code', '304')->with ('message', 'Bar no encontrado, prueba con uno de estos.');
        }
        return view ('bars.show', compact('bar'));
    }
    // ALTA
    public function create () {

        return view ('bars.create');
    }
    public function store (BarRequest $request) {

        //dd ($request);
        $image = '';
        if ($request->hasFile('image')) {
            $image = Storage::url($request->file('image')->store('public/bars'));
        }
        DB::table('bars')->insert([
                'name'          => $request->name,
                'description'   => $request->description,
                'image'         => $image//
            ]);

        return redirect ()->route ('bars.index')->with ('code', '0')->with('message', 'Bar guardado correctamente');
    }
    // MODIFICAR
    public function edit ($id) {
        $bar = DB::table('bars')->find($id);
        if ($bar == null  ) {
            return redirect ()->route ('bars.index')->with('code', '304')->with ('message', 'Bar no encontrado, prueba con uno de estos.');
        }
        return view ('bars.edit', compact('bar'));
    }

    public function update (BarRequest $request, $id) {
       // dd ($request);
        $image = '';
        if ($request->hasFile('image')) {
            $image = Storage::url($request->file('image')->store('public/bars'));
        }
        DB::table('bars')->where('id', $id)->update ([
                'name'          => $request->name,
                'description'   => $request->description,
                'image'         => $image//
            ]);

        return redirect ()->route ('bars.index')->with ('code', '0')->with('message', 'Bar actualizado correctamente');
    }
    // BORRAR
    public function delete ($id) {
        DB::table('bars')->delete($id);
        return redirect ()->route ('bars.index')->with ('code', '0')->with('message', 'Bar eliminado correctamente');
    }

}
