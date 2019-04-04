<?php

namespace App\Http\Controllers;

use Auth;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        // $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        // return view('home');
        if (Auth::check()){
            $user = new \stdClass();
            $user->id = Auth::user()->id;
            $user->firstName = Auth::user()->firstName;
            $user->lastName = Auth::user()->lastName;
            $user->email = Auth::user()->email;
            $user->phone = Auth::user()->phone;
            $user->keyword = Auth::user()->keyword;
            $user->ifDriver = Auth::user()->ifDriver;
            return view('index')->with('user', $user);
        } else {
            return view('index');
        }
    }
}
