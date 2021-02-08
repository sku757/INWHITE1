<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Profile extends Model
{
    protected $guarded = [];

    protected $casts = [
        'rang' => 'array',
        'roles' => 'array',
        'contacts' => 'array'
    ];

    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
