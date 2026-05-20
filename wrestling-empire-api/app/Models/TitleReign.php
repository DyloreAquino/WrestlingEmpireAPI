<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TitleReign extends Model
{
    /** @use HasFactory<\Database\Factories\TitleReignFactory> */
    use HasFactory;

    /** Returns the wrestler/s holding this title reign.
     * Supports tag team champions.
     */
    public function wrestlers() {
        return $this->belongsToMany(Wrestler::class);
    }

    /** Returns the championship for this title reign. */
    public function championship() {
        return $this->belongsTo(Championship::class);
    }
}
