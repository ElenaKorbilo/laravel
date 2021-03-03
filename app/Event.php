<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use App\User;
use App\Sport;

class Event extends Model
{
    use HasFactory;

    /*
        Get the user that owns the Event
        
        @return \Illuminate\Database\Eloquent\Relations\BelongsTo
        */
    public function user()
    {
        return $this->belongsTo(User::class, 'foreign_key', 'other_key');
    }

    public function sports()
    {
        
        return $this->belongsToMany(Sport::class, 'user_event_table', 'user_id', 'event_id');
 
    }
}
