<?php

namespace App\Http\Controllers;

use App\Models\Project;
use App\Models\Tech;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Auth;

class ProjectController extends Controller
{

        /**
     * Display a listing of the resource for home webpage.
     */
    public function home()
    {
        //
        $projects = Project::orderBy('name')->get();
        return view ('projects.home', compact('projects'));
    }

    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
        $projects = Project::orderBy('name')->get();
        return view ('projects.index', compact('projects'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
        $teches = Tech::orderBy ('name')->get();
        return view ('projects.create', compact ('teches'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //

        //dd($request);
        $image = '';
        if ($request->hasFile('image')) {
            $image = Storage::url($request->file('image')->store ('public/projects'));
        }
        $project = Project::create ([
            'name' => $request->name,
            'description' => $request->description,
            'image' => $image,
            'git' => $request->git,
            'url' => $request->url,
        ]);
       
        $project->user_id = Auth::user()->id;

        $project->teches()->attach($request->teches);
        $project->saveOrFail ();

        return redirect ()->route ('project.index');

    }

    /**
     * Display the specified resource.
     */
    public function show(Project $project)
    {
        //
        return view ('projects.show', compact ('project'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Project $project)
    {
        //
        $teches = Tech::orderBy ('name')->get();
        return view ('projects.edit', compact ('project', 'teches'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Project $project)
    {
        //
        //dd($request);
       
            $project->name = $request->name;
            $project->description = $request->description;
            $project->git = $request->git;
            $project->url = $request->url;

       
        $image = '';
        if ($request->hasFile('image')) {
            $image = Storage::url($request->file('image')->store ('public/projects'));
            $project->image = $image;
        }
        
        $project->teches()->sync($request->teches);
        $project->saveOrFail ();

        return redirect ()->route ('project.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Project $project)
    {
        //
        $project->teches()->detach();
        $project->deleteOrFail ();

        return redirect()->route ('project.index');
    }
}
