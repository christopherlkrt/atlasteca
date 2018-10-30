<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use Illuminate\Support\Collection;
use App\User;
use App\Gender;
use App\Movie;

class AppController extends Controller
{
    public function lists(){
        $movies = Movie::get();

//        ->withErrors(
//            [
//                'phone_email' => 'Este telefone está <b>banido</b>.',
//
//            ]
//        );

        return view('pages.home', compact('movies'));
    }
}
