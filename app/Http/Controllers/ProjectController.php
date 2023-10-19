<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;

class ProjectController extends Controller
{
    public function index()
    {
        $data = File::json(storage_path('data/home.json'));
        $projects = File::json(storage_path('data/projects.json'));
        return view('project', compact(['data', 'projects']));
    }

    public function details(Request $request, $id)
    {
        $projectsDetail = null;
        $data = File::json(storage_path('data/home.json'));
        $projects = File::json(storage_path('data/projects.json'));
        foreach ($projects as $project) {
            if ($project['id'] == $id) {
                $projectsDetail = $project;
            }
        }
        return view('project-details', compact(['data', 'projectsDetail']));
    }
}
