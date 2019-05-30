<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;

class Leader extends Model
{
    use Notifiable;

    protected $fillable = [
        'first_name', 'last_name', 'email_address', 'contact_number', 'home_address', 'image', 'percentage', 'schedules',
    ];

}
