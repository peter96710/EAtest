<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Event_Actor extends Model
{
    use HasFactory;
    protected $table = 'event_actors';

    protected $fillable = ['event_id', 'actor_id'];

    public function event(){
        return $this->hasOne(Event::class, 'id', 'event_id');
    }
    public function actor(){
        return $this->hasOne(Actor::class, 'id', 'actor_id');
    }
}
