<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Organization extends Model
{
    protected $fillable = [
        'name', 'email', 'phone', 'address',
    ];

    public function events()
    {
        return $this->hasMany(Event::class);
    }
}
