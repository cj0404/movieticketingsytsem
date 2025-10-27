<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Showtime;

class ShowtimeController extends Controller
{
    public function index()
    {
        $showtimes = Showtime::with('movie','tickets')->orderBy('schedule')->paginate(15);
        return view('showtimes.index', compact('showtimes'));
    }

    public function show($id)
    {
        $showtime = Showtime::with('movie','tickets')->findOrFail($id);
        return view('showtimes.show', compact('showtime'));
    }
}
