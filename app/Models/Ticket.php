<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Ticket extends Model
{
    /** @use HasFactory<\Database\Factories\TicketFactory> */
    use HasFactory;

    protected $fillable = ['showtime_id','customer_name','seat_number','price'];

    public function showtime()
    {
        return $this->belongsTo(Showtime::class);
    }
}
    