<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Event extends Model
{
    use HasFactory;
    use SoftDeletes;

    public function event_location()
    {
        return $this->BelongsToMany(Location::class);
    }
    public function event_actor()
    {
        return $this->BelongsToMany(Actor::class);
    }
    public function ticket()
    {
        return $this->BelongsToMany(User::class);
    }
}
