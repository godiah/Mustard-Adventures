<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Subscriber extends Model
{
    //
    protected $fillable = [
        'email',
        'status',
        'verification_token',
        'verified_at',
    ];

    protected $table = 'subscribers';
}
