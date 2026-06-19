<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Team extends Model
{
    /** @use HasFactory<\Database\Factories\TeamFactory> */
    use HasFactory;

    protected $fillable = [
        'universe_id',
        'name',
        'year_start',
        'month_start',
        'week_start',
        'year_end',
        'month_end',
        'week_end'
    ];

    /** Returns the universe this team belongs to. */
    public function universe() {
        return $this->belongsTo(Universe::class);
    }

    /** Return all wrestlers part of this team */
    public function wrestlers() {
        return $this->belongsToMany(Wrestler::class);
    }
}
