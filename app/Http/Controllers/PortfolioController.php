<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Project;

class PortfolioController extends Controller
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
        $portfolio = Project::latest()->paginate(2);

        return view('portfolio', compact('portfolio'));
    }
}
