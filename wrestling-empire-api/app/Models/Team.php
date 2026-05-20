<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Team extends Model
{
    /** @use HasFactory<\Database\Factories\TeamFactory> */
    use HasFactory;

    /** Return all wrestlers part of this team */
    public function wrestlers() {
        return $this->belongsToMany(Wrestler::class);
    }
}
