<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Show extends Model
{
    /** @use HasFactory<\Database\Factories\ShowFactory> */
    use HasFactory;

    protected $fillable = [
        'universe_id',
        'name',
        'year',
        'month',
        'week',
        'type',
        'territory_id',
        'promotion_id'
    ];

    /** Returns the universe this show belongs to. */
    public function universe() {
        return $this->belongsTo(Universe::class);
    }

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
