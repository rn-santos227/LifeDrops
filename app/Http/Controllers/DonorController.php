<?php

namespace LifeDrops\Http\Controllers;

use Illuminate\Http\Request;
use LifeDrops\BloodBank;
use DB;

class DonorController extends Controller
{
    public function index(Request $request)
    {
      $success = 0;      
      if($request->search != '') {
        $items = BloodBank::where(function ($query) use ($request){
                  $query->where('name', 'like', '%'.$request->search .'%')
                        ->orWhere('location', 'like', '%'.$request->search.'%');
        })->paginate(5);        
        return view('donors.index', compact('items', 'success'));       

      } else {

        $items = BloodBank::paginate(5);
        return view('donors.index', compact('items', 'success'));          
      } 
    }

    public function getData(Request $request) {
        $items = DB::table('bloodbanks')
                ->where('name', 'like', $request->txt_search+'%')
                ->get();
        $success = 0;      
    	return view('donors.index',compact('items', 'success'));
    }

    public function loadprofile() {
        $items = BloodBank::paginate(5);
        $success = 0;        
        return view('donors.index',compact('items', 'success'));
    }
}
