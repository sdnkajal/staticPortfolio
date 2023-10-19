<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;

class ExperienceController extends Controller
{
    public function __invoke(Request $request)
    {
        $data = File::json(storage_path('data/home.json'));
        $experiences = File::json(storage_path('data/experience.json'));
        return view('experience', compact(['data', 'experiences']));
    }
}
