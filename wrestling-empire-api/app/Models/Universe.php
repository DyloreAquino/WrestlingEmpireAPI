<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

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
}
