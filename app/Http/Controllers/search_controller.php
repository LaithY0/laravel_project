<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class search_controller extends Controller
{
    public function index(){
        return view('home');
    }
    public function search(Request $request){
        $search = $request->input('search');
        
        if($search){
            $request->session()->put('search' , $search);
            return redirect()->route('alltours');
        }
    }
}
