<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

class Nonpaiduser extends Authenticatable
{
    use Notifiable;

    protected $guard = 'nonpaiduser';

    protected $fillable = [
        'name', 'email', 'password','phone_number',
    ];

    protected $hidden = [
        'password', 'remember_token',
    ];
}
