<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Ticket;

class TicketController extends Controller
{
    public function index()
    {
        $tickets = Ticket::with('showtime.movie')->latest()->paginate(20);
        return view('tickets.index', compact('tickets'));
    }
}
