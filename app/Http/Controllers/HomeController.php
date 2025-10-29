<?php

namespace App\Http\Controllers;

use App\Models\Movie;

class HomeController extends Controller
{
    public function index()
    {
        // Optionally, display "Now Showing" movies on the homepage
        $movies = Movie::latest()->take(5)->get(); 

        return view('welcome', compact('movies'));
    }
}

