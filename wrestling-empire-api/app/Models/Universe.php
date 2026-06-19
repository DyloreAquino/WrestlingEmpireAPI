<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Universe extends Model
{
    protected $fillable = [
        'name',
        'user_id',
        'current_promotion_id',
    ];

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function wrestlers(): HasMany
    {
        return $this->hasMany(Wrestler::class);
    }

    public function shows(): HasMany
    {
        return $this->hasMany(Show::class);
    }

    public function teams(): HasMany
    {
        return $this->hasMany(Team::class);
    }

    public function championships(): HasMany
    {
        return $this->hasMany(Championship::class);
    }

    public function events(): HasMany
    {
        return $this->hasMany(Event::class);
    }
    
    public function titleReigns(): HasMany
    {
        return $this->hasMany(TitleReign::class);
    }
}
