<?php

namespace LifeDrops;

use Illuminate\Database\Eloquent\Model;

class BloodBank extends Model
{
	protected $table = 'bloodbanks';
    protected $fillable = [
        'name', 'email', 'contact','location'
    ];
}
