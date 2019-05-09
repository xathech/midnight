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
        $search = $request->get('searchinput');
        
        if (!isset($button)) {
            $button = $request->get('searchbutton');
        }
        
        //SI NADA FUNCIONA SEPARAR LAS BUSQUEDAS CON LOS ENLACES INDIVIDUALES DEL NAVBAR(mirar en las rutas para referencia)

        $reviews = new Review();
        $users = new User();

        $reviews = $reviews->searchReview($search);
        $users = $users->searchUser($search);

        return view('search', compact('reviews','users','button'));

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
