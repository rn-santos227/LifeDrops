<?php

namespace LifeDrops\Http\Controllers;

use Illuminate\Http\Request;
use LifeDrops\BloodRequest;

class BloodRequestController extends Controller
{
   	public function store(Request $request) {
   		BloodRequest::create($request->all());

        $items = Donor::paginate(5);
        $items0 = BloodBank::all();
        $success = 1;
        return view('recipients.index', compact('items','items0', 'success'));  
   	}
}
