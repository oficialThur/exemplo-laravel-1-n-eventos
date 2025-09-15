<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class EventDetail extends Model
{
    protected $fillable = [
        'event_id', 'regulation', 'map_url',
    ];

    public function event()
    {
        return $this->belongsTo(Event::class);
    }
}
