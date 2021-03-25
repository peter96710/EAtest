<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Event extends Model
{
    use HasFactory;
    use SoftDeletes;

    public function location(){
        return $this->hasOne(Location::class, 'id', 'location_id');
    }
    public function event_actor()
    {
        return $this->hasMany(Event_Actor::class);
    }
    public function ticket()
    {
        return $this->hasMany(Ticket::class);
    }
}
