<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Movie;

class MovieController extends Controller
{
    public function index()
    {

        $movies = Movie::with(['showtimes.tickets'])->paginate(10);
        return view('movies.index', compact('movies'));
    }

    public function show($id)
    {
        $movie = Movie::with('showtimes.tickets')->findOrFail($id);
        return view('movies.show', compact('movie'));
    }
}
