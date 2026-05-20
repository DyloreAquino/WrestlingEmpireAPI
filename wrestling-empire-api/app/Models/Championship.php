<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Championship extends Model
{
    /** @use HasFactory<\Database\Factories\ChampionshipFactory> */
    use HasFactory;

    /** Returns the title reigns of this championship. */
    public function title_reigns() {
        return $this->hasMany(TitleReign::class);
    }
}
