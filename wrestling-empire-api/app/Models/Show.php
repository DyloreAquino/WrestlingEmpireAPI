<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Show extends Model
{
    /** @use HasFactory<\Database\Factories\ShowFactory> */
    use HasFactory;

    /** Returns the events that this show has. */
    public function events() {
        return $this->hasMany(Event::class);
    }

    /** Returns the territory that this show belongs to. */
    public function territory() {
        return $this->belongsTo(Territory::class);
    }

    /** Returns the promotion that this show belongs to. */
    public function promotion() {
        return $this->belongsTo(Promotion::class);
    }
}
