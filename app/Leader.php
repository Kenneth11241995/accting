<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Leader extends Model
{

    protected $fillable = [
        'leader_id', 'first_name', 'last_name', 'email_address', 'contact_number', 'home_address', 'image', 'percentage', 'schedules',
    ];

}
