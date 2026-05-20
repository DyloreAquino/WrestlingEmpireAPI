<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Stipulation extends Model
{
    /** @use HasFactory<\Database\Factories\StipulationFactory> */
    use HasFactory;

    /** Returns the events including this match stipulation. */
    public function events() {
        return $this->belongsToMany(Event::class);
    }
}
