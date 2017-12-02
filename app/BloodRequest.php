<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class BloodRequest extends Model
{
	protected $table = 'bloodrequests';
    protected $fillable = [
        'recipient_id', 'location', 'message', 'blood_type', 'status', 'size', 'donor', 'donor_type'
    ];
}
