<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Project;

class ProjectController extends Controller
{
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

    public function show( Project $project )
    {
        return view('projects.show', [
            'project'   => $project
        ]);
    }
}
