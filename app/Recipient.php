<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Recipient extends Model
{
    protected $fillable = [
        'first_name', 'last_name', 'location', 'blood_type', 'birthday'
    ];
}
