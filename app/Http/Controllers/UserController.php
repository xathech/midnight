<?php

namespace App\Http\Controllers;

use App\User;
use App\Rules\CheckPassword;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $search = $request->input('query', '');

        $users = new User();
        $users = $users->searchUser($search);
        //$users = $users->allUsers();

        //return view('userslist', [ "users" => $users ]);
        return view('users.userslist', compact('users'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\User  $user
     * @return \Illuminate\Http\Response
     */
    public function show(User $user)
    {
        
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\User  $user
     * @return \Illuminate\Http\Response
     */
    public function edit()
    {
        return view('users.userprofile')->with('currentUser', Auth::user());
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\User  $user
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request)
    {
        $validatedData = $request->validate([
            'username' => 'required|max:191',
            'email' => 'required|email|max:191',
            //'password' => 'required|max:191',
        ]);

        $user = Auth::user();

        $user->name = $request->input('username');
        $user->email = $request->input('email');
        //$user->password = Hash::make($request->input('password'));

        $user->save();

        return redirect()->route('home');
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @return \Illuminate\Http\Response
     */

    public function editPassword()
    {
        return view('users.userpassword');
    }

    /**
     * Update the user password.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\User  $user
     * @return \Illuminate\Http\Response
     */
    public function updatePassword(Request $request)
    {
        $validatedData = $request->validate([
            'old_password' => ['required','min:8','different:password','max:191', new CheckPassword],
            'password' => ['required','min:8','confirmed','max:191'],
            'password_confirmation' => ['required','min:8','max:191'],
        ]);

        $user = Auth::user();

        $user->password = Hash::make($request->input('password'));

        $user->save();

        return redirect()->route('home');
    }

    public function reviews(){

        $reviews= Auth::user()->reviews()->paginate(10);


        return view('users.usereviews', compact('reviews'));

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\User  $user
     * @return \Illuminate\Http\Response
     */
    public function destroy()
    {
        $user = new User();
        $user = $user->deleteUser(Auth::user()->id);

        return redirect()->route('home');
    }
}
