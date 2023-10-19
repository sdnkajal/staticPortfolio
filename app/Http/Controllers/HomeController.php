<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;

class HomeController extends Controller
{
    public function __invoke(Request $request)
    {
        $data = File::json(storage_path('data/home.json'));
        return view('home', compact('data'));
    }
}
