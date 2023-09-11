<?php

namespace App\Http\Controllers;

use App\Models\trips;
use App\Models\category;

use Illuminate\Http\Request;

class TripsController extends Controller
{
   
    public function index(){
         //
         $data = trips::with('category:id,category_name')->get();
         $data2= category::all();
         return view('admin.Trips', compact('data','data2'));

    }
    public function enjoyment()
    {
        
        $trips = trips::where('category_id', 3)->get();

        return view('tours', ['trips' => $trips]);

       
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create(Request $request)
    {
        $trp = new trips();
        $trp->trip_name    = $request->input('trip_name');
        $trp->price    = $request->input('trip_price');
        $trp->date    = $request->input('trip_date');
        
        $trp->clients    = $request->input('trip_clients');

        $img = $request->file('trip_img');
        $imgname = $img->getClientOriginalName();
        $img->move(public_path('assetsAdmin/images'), $imgname);
        $trp->photo = $imgname;

        $trp->days	    = $request->input('trip_days');
        $trp->details    = $request->input('trip_details');
        $trp->category_id     = $request->input('categories_id');


        $trp->save();
        return redirect('/AdminTrips');    }
    public function medical()
    {
        $trips = trips::where('category_id', 4)->get();

        return view('tours', ['trips' => $trips]);

    }

    public function archaeological()
    {
        $trips = trips::where('category_id', 1)->get();

        return view('tours', ['trips' => $trips]);

    }

    public function religious()
    {
        $trips = trips::where('category_id', 2)->get();

        return view('tours', ['trips' => $trips]);

    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Request $request)
    {
        $id = $request->input('id');
        $trp = trips::find($id);
        $trp->trip_name = $request->input('trip_name');
        $trp->price = $request->input('trip_price');
        $trp->date = $request->input('trip_date');
        $trp->clients = $request->input('trip_clients');
        if ($request->file('trip_img')) {
            $img = $request->file('trip_img');
            $imgname = $img->getClientOriginalName();
            $img->move(public_path('assetsAdmin/images'), $imgname);
            $trp->photo = $imgname;

            $trp->days = $request->input('trip_days');
            $trp->details = $request->input('trip_details');
            $trp->category_id = $request->input('categories_id');





            $trp->update();
            return redirect('/AdminTrips');
        }
    }


    public function petradetails()
    {
        $trips = trips::where('trip_name', 'petra')->get();

        return view('details')->with('trips', $trips);

    }

    public function ummdetails()
    {
        $trips = trips::where('trip_name', 'Umm Qais, Irbid')->get();

        return view('details')->with('trips', $trips);

    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        $trp = trips::find($id);
        $trp->delete();
        return redirect('/AdminTrips');  }
    public function deaddetails()
    {
        $trips = trips::where('trip_name', 'Dead sea')->get();

        return view('details')->with('trips', $trips);

    }

    public function aqabadetails()
    {
        $trips = trips::where('trip_name', 'Aqaba')->get();

        return view('details')->with('trips', $trips);

    }

    public function ammandetails()
    {
        $trips = trips::where('trip_name', 'Amman')->get();

        return view('details')->with('trips', $trips);

    }

    
    public function wadidetails()
    {
        $trips = trips::where('trip_name', 'Wadi Rum')->get();

        return view('details')->with('trips', $trips);

    }
   

}
