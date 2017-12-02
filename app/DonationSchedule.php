<?php

namespace LifeDrops;

use Illuminate\Database\Eloquent\Model;

class DonationSchedule extends Model
{
	protected $table = 'donationschedules';	
    protected $fillable = [
        'donor_id', 'desired_schedule', 'schedule','message', 'confirmed'
    ];
}
