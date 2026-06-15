<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Event extends Model
{
    /** @use HasFactory<\Database\Factories\EventFactory> */
    use HasFactory;

    protected $fillable = [
        'type', 
        'placement', 
        'match_type_id', 
        'championship_id', 
        'show_id',
        'notes'
    ];

    /** Returns the wrestlers participating in this event. 
     * Pivot: shows the finish type and which wrestler was the winner.
    */
    public function wrestlers() {
        return $this->belongsToMany(Wrestler::class)
            ->withPivot(['is_winner', 'finish_type']);
    }

    /** Returns the championship that this event is a match of. */
    public function championship() {
        return $this->belongsTo(Championship::class);
    }

    /** Returns the show that this event belongs to. */
    public function show() {
        return $this->belongsTo(Show::class);
    }

    /** Returns the match type of this event. */
    public function matchType() {
        return $this->belongsTo(MatchType::class);
    }

    /** Returns the match stipulations set for this event. */
    public function stipulations() {
        return $this->belongsToMany(Stipulation::class);
    }
}
