<?php

namespace App\Http\Controllers;

use App\Models\trips;
use Illuminate\Http\Request;

class search_controller extends Controller
{
  

    
    public function search(Request $request){
        $search = $request->input('search');
        
        if($search){
            $request->session()->put('search' , $search);
            return redirect()->route('alltours');
        }
        else{
            return redirect()->route('home');
        }
    }
    public function index(){
          
            if(session('search')){
                $trips = trips::where('trip_name', 'like', '%' . session('search') . '%')->get();
                return view('alltours' , ['trips' => $trips]);
            }
            else{
                $trips = trips::all();
                return view('alltours' , ['trips' => $trips]);
            }
            
    
}
}