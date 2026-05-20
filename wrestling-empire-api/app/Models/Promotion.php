<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Promotion extends Model
{
    /** @use HasFactory<\Database\Factories\PromotionFactory> */
    use HasFactory;

    /** Returns all wrestlers who are from this promotion. */
    public function wrestlers() {
        return $this->hasMany(Wrestler::class);
    }

    /** Returns all shows which were held in this promotion. */
    public function shows() {
        return $this->hasMany(Show::class);
    }
}
