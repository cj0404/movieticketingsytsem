<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Showtime;

class ShowtimeController extends Controller
{
    public function index()
    {
        $showtimes = Showtime::with(['movie', 'tickets'])->get();
        return view('showtimes.index', compact('showtimes'));
    }
}

