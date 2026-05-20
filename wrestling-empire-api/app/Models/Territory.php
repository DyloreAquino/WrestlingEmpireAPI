<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Territory extends Model
{
    /** @use HasFactory<\Database\Factories\TerritoryFactory> */
    use HasFactory;

    /** Returns all wrestlers who are from this territory. */
    public function wrestlers() {
        return $this->hasMany(Wrestler::class);
    }

    /** Returns all shows which were held in this territory. */
    public function shows() {
        return $this->hasMany(Show::class);
    }
}
