<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Donor;
use App\BloodBank;
use DB;

class RecipientController extends Controller
{
    public function index(Request $request) {
      $success = 0;      
      if($request->search != '') {
        $items = Donor::where(function ($query) use ($request){
                  $query->where('first_name', 'like', '%'.$request->search .'%')
                        ->orWhere('last_name', 'like', '%'.$request->search.'%')
                        ->orWhere('location', 'like', '%'.$request->search.'%');
        })->paginate(5);
        $items0 = BloodBank::where(function ($query) use ($request){
                  $query->where('name', 'like', '%'.$request->search .'%')
                        ->orWhere('location', 'like', '%'.$request->search.'%');
        })->paginate(5);        
        return view('recipients.index', compact('items','items0', 'success'));       

      } else {

        $items = Donor::paginate(5);
        $items0 = BloodBank::paginate(5);
        return view('recipients.index', compact('items','items0', 'success'));          
      } 	
    }
}