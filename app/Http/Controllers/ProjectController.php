<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

# Form Requests Validations
use App\Http\Requests\SaveProjectRequest;

# Models
use App\Project;

class ProjectController extends Controller
{

    public function __construct()
    {
        // $this->middleware('auth')->only('create', 'edit');
        $this->middleware('auth')->except('index', 'show');
    }


    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        // $portfolio = Project::get();
        // $portfolio = Project::OrderBy('created_at', 'DESC')->get();
        // $portfolio = Project::latest()->get();
        // $projects = Project::latest()->paginate();

        return view('projects.index', [
            'projects' => Project::latest()->paginate()
        ]);
    }

    /**
     * Display a specific resource
     *
     * @return \Illuminate\Http\Response
     */
    public function show( Project $project )
    {
        return view('projects.show', [
            'project'   => $project
        ]);
    }

    /**
     * Display a create resource view.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('projects.create', [
            'project'   => new Project
        ]);
    }

    public function store( SaveProjectRequest $request )
    {

        // $fields = request()->validate([
        //     'title' => 'required',
        //     'url' => 'required',
        //     'description' => 'required'
        // ]);

        // Project::create([
        //     'title'         => request('title'),
        //     'url'           => request('url'),
        //     'description'   => request('description')
        // ]);

        // Project::create( request()->all() );

        // Project::create( request()->only('title', 'url', 'description') );
        
        // Project::create( $fields );

        Project::create( $request->validated() );

        return redirect()->route('projects.index')->with('status', 'El proyecto fue creado con exito.');
    }

    public function edit( Project $project )
    {
        return view('projects.edit', [
            'project'   => $project
        ]);
    }

    public function update( Project $project, SaveProjectRequest $request )
    {
        
        $project->update( $request->validated() );

        return redirect()->route('projects.show', $project)->with('status', 'El proyecto fue creado con exito.');

    }

    public function destroy( Project $project )
    {
        $project->delete();

        return redirect()->route('projects.index')->with('status', 'El proyecto fue eliminado con exito.');;
    }
}
