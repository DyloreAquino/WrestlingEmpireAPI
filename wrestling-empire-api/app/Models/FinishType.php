<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class FinishType extends Model
{
    /** @use HasFactory<\Database\Factories\FinishTypeFactory> */
    use HasFactory;

    /** Returns the events with this finish type. */
    public function events() {
        return $this->hasMany(Event::class);
    }
}
