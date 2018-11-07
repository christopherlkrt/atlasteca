<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use Illuminate\Support\Collection;
use App\User;
use App\Gender;
use App\Movie;
use App\Contact;

class AppController extends Controller
{
	protected $request;

	public function __construct(Request $request) {
        $this->request = $request;
    }

    public function lists(){
        $movies = Movie::with('genders', 'poster')->paginate(8);
        $count = Movie::count();
//        ->withErrors(
//            [
//                'phone_email' => 'Este telefone está <b>banido</b>.',
//
//            ]
//        );

        return view('pages.home', compact('movies', 'count'));
    }

    public function contact(){
    	return view('pages.contact');
    }

    public function submitcontact(){
    	$inputs = $this->request->all();
    	$contact = New Contact();
    	$contact->name = $inputs['name'];
    	$contact->email = $inputs['email'];
    	$contact->message = $inputs['message'];
    	$contact->save();
    	return redirect()
            ->route('home')
            ->with([
                       'success' => 'Mensagem enviada com sucesso!',
                   ]);
    }
}
