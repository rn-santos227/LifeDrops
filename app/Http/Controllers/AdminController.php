<?php

namespace LifeDrops\Http\Controllers;

use Illuminate\Http\Request;
use LifeDrops\BloodRequest;

class AdminController extends Controller
{
    public function index()
    {
    	$items = BloodRequest::paginate(5);
    	return view('admin.index', compact('items'));
    }

    public function bankrequest() {

    }

    public function donorrequest() {
    	
    }
}
