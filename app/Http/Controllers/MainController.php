<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Project;

class MainController extends Controller
{
    /**
     * Show the home page.
     *
     * @return Response
     */
    public function index()
    {
        //Get the projects for the portfolio
        $projects = Project::orderBy('sort')->get();

        return view('home', compact('projects'));
    }
}