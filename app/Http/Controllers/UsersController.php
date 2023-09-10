<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class UsersController extends Controller
{
   
    public function user()
    {
<<<<<<< HEAD
        $data = User::all();
        return view('admin.Users', compact('data'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create(Request $request)
=======
        $user = users::where('id', 1)->get();

        return view('user', ['user' => $user]);
    }


    public function edit()
    {
        $user = users::where('id', 1)->get();

        return view('edit', ['user' => $user]);
    }

   
    public function create()
>>>>>>> b417459e21e312db732dbde6bc78d793b0bcff84
    {
        $usr = new User();
        $usr->Fname    = $request->input('user_fname');
        $usr->Lname    = $request->input('user_lname');
        $usr->password    = $request->input('user_pass');
        $usr->email    = $request->input('user_email');
        $usr->phone    = $request->input('user_phone');
        $usr->save();
        return redirect('/AdminUser');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show()
    {
        //
    }

<<<<<<< HEAD
    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id, $status)
    {
        $usr = User::find($id);
        $usr->is_admin= $status;
        $usr->update();
        return redirect('/AdminUser');    }

    /**
     * Update the specified resource in storage.
     */
    public function update()
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        $usr = User::find($id);
        $usr->delete();
        return redirect('/AdminUser');    }
=======
   
//     public function update(Request $request, $id)
// {
// $request->validate([
//         'name' => 'required|string|max:255',
//         'email' => 'required|email|max:255',
//         'phone' => 'required|string|max:20',
//         'photo' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048',
//     ]);

//     // Update the user data based on the form input
//     $user = users::find($id);

//     if (!$user) {
//         return redirect()->back()->with('error', 'User not found');
//     }

//     $user->name = $request->input('name');
//     $user->email = $request->input('email');
//     $user->phone = $request->input('phone');
//     $user->photo = $request->input('photo');


//     $user->save();

//     return redirect('user');
// }


public function update(Request $request, $id)
{
    $request->validate([
        'name' => 'required|string|max:255',
        'email' => 'required|email|max:255',
        'phone' => 'required|string|max:20',
        'photo' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048',
    ]);


   
    $user = users::find($id); // Note the capital 'User' and 'users' table name

    if (!$user) {
        return redirect()->back()->with('error', 'User not found');
    }

    $user->name = $request->input('name');
    $user->email = $request->input('email');
    $user->phone = $request->input('phone');

    // Handle photo upload
    if ($request->hasFile('photo')) {
        $photo = $request->file('photo');
        $photoPath = $photo->store('public/myimg'); // Store the uploaded file in the 'public/myimg' directory
        $user->photo = str_replace('public/', '', $photoPath); // Remove 'public/' from the file path
    }
    

    $user->save();

    return redirect('user');
>>>>>>> b417459e21e312db732dbde6bc78d793b0bcff84
}
}