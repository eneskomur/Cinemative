<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CinemaFilm extends Model
{
    use HasFactory;

    public function cinema()
    {
        return $this->belongsTo(Cinema::class);
    }

    public function film()
    {
        return $this->belongsTo(Film::class);
    }
}
