<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Wrestler extends Model
{
    /** @use HasFactory<\Database\Factories\WrestlerFactory> */
    use HasFactory;

    /** Returns the events that this wrestler participated in. 
     * Pivot: shows the finish type and if this wrestler was the winner.
    */
    public function events() {
        return $this->belongsToMany(Event::class);
    }

    /** Returns all the shows that this wrestler appeared in. */
    public function shows() {
         return Show::whereIn('id', $this->events()->pluck('show_id'));
    }

    /** Returns the territory this wrestler belongs to. */
    public function territory() {
        return $this->belongsTo(Territory::class);
    }

    /** Returns the promotion this wrestler belongs to. */
    public function promotion() {
        return $this->belongsTo(Promotion::class);
    }

    /** Returns the manager of this wrestler. */
    public function manager() {
        return $this->belongsTo(Wrestler::class, 'manager_id');
    }

    /** Returns the wrestler being managed. */
    public function managee() {
        return $this->hasOne(Wrestler::class, 'manager_id');
    }

    /** Returns the wrestler being managed. */
    public function partner() {
        return $this->belongsTo(Wrestler::class, 'partner_id');
    }

    /** Returns the story friend of this wrestler. */
    public function storyFriend() {
        return $this->belongsTo(Wrestler::class, 'story_friend_id');
    }

    /** Returns the story enemy of this wrestler. */
    public function storyEnemy() {
        return $this->belongsTo(Wrestler::class, 'story_enemy_id');
    }

    /** Returns the real friend of this wrestler. */
    public function realFriend() {
        return $this->belongsTo(Wrestler::class, 'real_friend_id');
    }

    /** Returns the real enemy of this wrestler. */
    public function realEnemy() {
        return $this->belongsTo(Wrestler::class, 'real_enemy_id');
    }

    /** Returns the title reigns of this wrestler. */
    public function titleReigns() {
        return $this->belongsToMany(TitleReign::class);
    }

    /** Returns the teams this wrestler belongs/belonged to. */
    public function teams() {
        return $this->belongsToMany(Team::class);
    }
}
