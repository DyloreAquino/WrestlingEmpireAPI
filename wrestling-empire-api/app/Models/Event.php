<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Event extends Model
{
    /** @use HasFactory<\Database\Factories\EventFactory> */
    use HasFactory;

    /** Returns the wrestlers participating in this event. 
     * Pivot: shows the finish type and which wrestler was the winner.
    */
    public function wrestlers() {
        return $this->belongsToMany(Wrestler::class);
    }

    /** Returns the show that this event belongs to. */
    public function show() {
        return $this->belongsTo(Show::class);
    }

    /** Returns the match type of this event. */
    public function match_type() {
        return $this->belongsTo(MatchType::class);
    }

    /** Returns the finish type of this event. */
    public function finish_type() {
        return $this->belongsTo(FinishType::class);
    }

    /** Returns the match stipulations set for this event. */
    public function match_stipulation() {
        return $this->belongsToMany(Stipulation::class);
    }
}
