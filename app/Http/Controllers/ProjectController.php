<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Project;

class ProjecteController extends Controller
{
    public function index()
    {
        $projects = Project::all();

        return view('pages.projects', compact('projects'));
    }
}

