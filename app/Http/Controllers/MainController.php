<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Project;
use App\CodepenProject;

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

        //Get the codepen projects
        $codepen_projects = CodepenProject::orderBy('sort')->get();
       

        return view('home', compact('projects', 'codepen_projects'));
    }
}