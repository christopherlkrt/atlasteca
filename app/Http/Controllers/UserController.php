<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests;
use App\User;
use App\Gender;
use App\Movie;

class UserController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $user = \Auth::user();

        $movies = Movie::get();
        if ($user->admin==1) {
            return view('auth.dashboard', compact('user','movies'));
        }
        else{
            return redirect()->route('home');
        }
    }
}
