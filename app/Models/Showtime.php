<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Showtime extends Model
{
    /** @use HasFactory<\Database\Factories\ShowtimeFactory> */
    use HasFactory;

    protected $fillable = ['movie_id','schedule','hall_number'];

    public function movie()
    {
        return $this->belongsTo(Movie::class);
    }

    public function tickets()
    {
        return $this->hasMany(Ticket::class);
    }
}
