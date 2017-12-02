<?php

namespace LifeDrops;

use Illuminate\Database\Eloquent\Model;

class Donor extends Model
{
    protected $fillable = [
        'first_name', 'last_name', 'location', 'blood_type', 'birthday'
    ];
}
