<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\BloodRequest;

class AdminController extends Controller
{
    public function index()
    {
    	$items = BloodRequest::paginate(5);
    	return view('admin.index', compact('items'));
    }

    public function bankrequest() {
        $items = BloodRequest::where('donor_type', 'Blood Bank')->paginate(5);
        return view('admin.bloodrequest', compact('items'));
    }

    public function donorrequest() {
        $items = BloodRequest::where('donor_type', 'Person Donor')->paginate(5);
        return view('admin.donorrequest', compact('items'));    	
    }
}
