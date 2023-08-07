<?php

namespace App\Http\Controllers;


use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

use App\Http\Requests\BarRequest;
use Illuminate\Support\Facades\Storage;

use App\Models\Bar;
use RuntimeException;

class BarController extends Controller
{
    //

    // LISTADO
    public function index () {
        $bares = Bar::orderBy('name')->get();
        foreach($bares as $bar) {
            if (!isset($bar->image) || ($bar->image == '')) {
                $bar->image = asset ('img/logo.png');
            }
        }
        return view ('bars.index', compact('bares'));
    }
    public function indexQB (Request $request) {

        $bares = DB::table('bars')->get();

        //dd($bares);
        return view ('bars.index', compact('bares'));
    }
    // DETALLE
    public function show (Bar $bar) {
        // $bar = Bar::findOrFail ($id);
        // dd ($bar);
        if (!isset($bar->image) || ($bar->image == '')) {
            $bar->image = asset ('img/logo.png');
        }
        return view ('bars.show', compact('bar'));
    }
    public function showQB ($id) {

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
        $image = '';
        if ($request->hasFile('image')) {
            $image = Storage::url($request->file('image')->store('public/bars'));
        }
        //dd ($image);
        $bar = Bar::create ([
            'name'          => $request->name,
            'description'   => $request->description,
            'image'         => $image
        ]);

        //dd ($bar);
        $bar->saveOrFail ();
        //dd ($request);
        return redirect ()->route ('bars.index')->with ('code', '0')->with('message', 'Bar guardado correctamente');
    }
    public function storeQB (BarRequest $request) {

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
    public function edit (Bar $bar) {
        return view ('bars.edit', compact('bar'));
    }
    public function update (BarRequest $request, Bar $bar) {
        $image = '';
        if ($request->hasFile('image')) {
            $image = Storage::url($request->file('image')->store('public/bars'));
            $bar->image = $image;
        }
        $bar->fill($request->validated());
        //dd($bar);
        $bar->saveOrFail();
        return redirect ()->route ('bars.index')->with ('code', '0')->with('message', 'Bar actualizado correctamente');

    }
    public function editQB ($id) {
        $bar = DB::table('bars')->find($id);
        if ($bar == null  ) {
            return redirect ()->route ('bars.index')->with('code', '304')->with ('message', 'Bar no encontrado, prueba con uno de estos.');
        }
        return view ('bars.edit', compact('bar'));
    }

    public function updateQB (BarRequest $request, $id) {
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
    public function delete (Bar $bar) {
        try {
            $bar->deleteOrFail();

        } catch (RuntimeException $e) {
            return redirect ()->route ('bars.index')->with ('code', '400')->with('message', 'No se ha podido eliminar el bar');

        }
        return redirect ()->route ('bars.index')->with ('code', '0')->with('message', 'Bar eliminado correctamente');
    }
    public function deleteQB ($id) {
        DB::table('bars')->delete($id);
        return redirect ()->route ('bars.index')->with ('code', '0')->with('message', 'Bar eliminado correctamente');
    }


}
