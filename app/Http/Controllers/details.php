<?php

namespace App\Http\Controllers;

use App\Models\trips;
use Illuminate\Http\Request;

class details extends Controller
{
    public function index(){
        return view('details');
    }
    public function get($id){
        $trip = trips::where('id' , $id)->get();
        return view('details' , ['trip' => $trip]);
    }
}
