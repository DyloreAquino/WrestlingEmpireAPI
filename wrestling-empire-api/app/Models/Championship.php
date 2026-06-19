<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Championship extends Model
{
    /** @use HasFactory<\Database\Factories\ChampionshipFactory> */
    use HasFactory;

    protected $fillable = [
        'universe_id',
        'name',
        'division',
        'promotion_id',
    ];

    /** Returns the universe this championship belongs to. */
    public function universe() {
        return $this->belongsTo(Universe::class);
    }

    /** Returns the title reigns of this championship. */
    public function titleReigns() {
        return $this->hasMany(TitleReign::class);
    }

    /** Returns the promotion this championship belongs to. */
    public function promotion() {
        return $this->belongsTo(Promotion::class);
    }

    /** Returns the current holder of the championship. */
    public function currentReign() {
        return $this->hasOne(TitleReign::class)->whereNull('year_end');
    }   
}
