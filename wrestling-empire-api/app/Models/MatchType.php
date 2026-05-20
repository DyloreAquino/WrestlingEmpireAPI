<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class MatchType extends Model
{
    /** @use HasFactory<\Database\Factories\MatchTypeFactory> */
    use HasFactory;

    /** Returns the events that has this match type. */
    public function events() {
        return $this->hasMany(Event::class);
    }
}
