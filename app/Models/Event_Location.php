<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Event_Location extends Model
{
    use HasFactory;

    protected $fillable = ['event_id', 'location_id'];

    public function event(){
        return $this->hasOne(Event::class, 'id', 'event_id');
    }
    public function location(){
        return $this->hasOne(Location::class, 'id', 'location_id');
    }
}
