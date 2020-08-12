<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;

class PortfolioController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $portfolio = DB::table('projects')->get();

        return view('portfolio', compact('portfolio'));
    }
}
