<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Movie;

class HomeController extends Controller
{
    //
    public function index()
    {
        $movies = Movie::withCount('showtimes')->latest()->take(6)->get();
        return view('welcome', compact('movies'));
    }
}
