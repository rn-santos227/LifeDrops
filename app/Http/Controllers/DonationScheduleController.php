<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\DonationSchedule;
use App\BloodBank;

class DonationScheduleController extends Controller
{
    public function addsched(Request $request) {
    	DonationSchedule::create($request->all());
        $items = BloodBank::paginate(5);
        $success = 1;
        return view('donors.index',compact('items','success'));
    }
}
