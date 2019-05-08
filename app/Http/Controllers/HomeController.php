<?php

namespace App\Http\Controllers;

use App\Review;
use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Input;
use Illuminate\Support\Facades\DB;

class HomeController extends Controller
{

    /**
     * Test.
     * @return \App\Review and \App\User
     */
    public function search()
    {
        $search = Input::get('searchinput');//parece que esto devuelve el valor del input(justo lo que quiero)

        //$results = User::all();
        $users = User::where('name', $search)->orWhere('name', 'like', '%' . $search . '%')->get();//move this to user model
        //create another one for review and move the query to review model($users=user->searchUser() o algo así) 
        
        return view('userslist', compact('users'));//adapt the view and controller for reviews names too
    }

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        //TU TE QUEDAS CALLADITO $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        return view('home');
    }
}
