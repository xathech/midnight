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
    public function search(Request $request)
    {
        /*

        switch ($request->get('searchbutton')) {

            case 'reviews':
                
                $reviews = new Review();

                $reviews = $reviews->searchReview($search);

                return view('search', compact('reviews'));

            case 'users':

                $users = new User();

                $users = $users->searchUser($search);

                return view('search', compact('users'));    
        }

        */

        $search = $request->get('searchinput');

        //$type = $request->segment(3);

        $users = new User();
        $reviews = new Review();

        $users = $users->searchUser($search);
        $reviews = $reviews->searchReview($search);

        //create another one for review and move the query to review model($users=user->searchUser() o algo así) 
        
        //return view('userslist', compact('users'));
        //return view('reviewslist', compact('reviews'));
        return view('search', compact('reviews','users'));
        
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
