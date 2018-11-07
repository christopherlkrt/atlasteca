<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use App\Gender;
use App\Movie;
use App\Poster;

class MovieController extends Controller
{
    protected $request;

    public function __construct(Request $request) {
        $this->request = $request;
    }


    public function show($movie_id,$movie_slug=null){

        $movie = Movie::find($movie_id);
        $img = Movie::with('poster')->find($movie_id);

        //Redirect to home
        if( ! $movie){
            return redirect()
                ->route('home')
                ->withErrors("Filme não encontrado!");
        }

        //Redirect to get real movie slug
        if($movie->slug != $movie_slug){
            return redirect()
                ->route('movie.show', [$movie->id, $movie->slug]);
        }

        return view('pages.show-movie', compact('movie', 'img'));
    }

    public function create(){

        $new = true;
        $movie = new Movie();
        $movie->gender = new Gender();
        $genders = Gender::get();

        return view('pages.edit-movie', compact('new','movie','genders'));
    }

    public function store(){

        $inputs = $this->request->all();
        
        $this->validate($this->request, [
            'title' => 'required|max:255',
            'description' => 'required',
            'gender' => 'required',
            'year' => 'numeric|min:1900|max:2100',
            'duration' => 'required',
        ]);

        $movie = New Movie();
        $movie->user_id = \Auth::user()->id;
        $movie->title = $inputs['title'];
        $movie->slug = str_slug($inputs['title']);
        $movie->description = $inputs['description'];
        $movie->year = $inputs['year'];
        $movie->duration = $inputs['duration'];
        $movie->save();

        foreach ($inputs['gender'] as $genders) {
        
        $movie->genders()->attach($genders);
        }

        if ($this->request->hasFile('image')) {
        $image = $this->request->file('image');
        $destinationPath = public_path('/images');
        $name = time().rand(5, 1500).'.'.$image->getClientOriginalExtension();
        $image->move($destinationPath, $name);

        Poster::create(['movie_id' => $movie->id,'image' => $name]);
        }



        return redirect()
            ->route('user.dashboard')
            ->with([
                       'success' => 'Filme adicionado com sucesso!',
                   ]);
    }

    public function edit($movie_id)
    {
        $movie = Movie::find($movie_id);
        $gender_movie = Movie::with('genders')->find($movie_id);
        //Redirect to adm dashboard
        if (! $movie) {
            return redirect()
                ->route('user.dashboard')
                ->withErrors("Filme não encontrado!");
        }

        $genders = Gender::get();
   


        return view('pages.edit-movie', compact('genders', 'gender_movie', 'movie'));
    }

    public function update($movie_id){

        $inputs = $this->request->all();

        $movie = Movie::find($movie_id);

        //Redirect to adm dashboard
        if (! $movie) {
            return redirect()
                ->route('user.dashboard')
                ->withErrors("Filme não encontrado!");
        }

        $this->validate($this->request, [
            'title' => 'required|max:255',
            'description' => 'required',
            'gender' => 'required',
            'year' => 'numeric|min:1900|max:2100',
            'duration' => 'required',
        ]);

        $movie->gender_id = $inputs['gender'];
        $movie->title = $inputs['title'];
        $movie->slug = str_slug($inputs['title']);
        $movie->description = $inputs['description'];
        $movie->year = $inputs['year'];
        $movie->duration = $inputs['duration'];
        $movie->save();

        return redirect()
            ->route('user.dashboard')
            ->with([
                       'success' => 'Filme editado com sucesso!',
                   ]);
    }

    public function delete($movie_id){

        $movie = Movie::find($movie_id);

        //Redirect to adm dashboard
        if (! $movie) {
            return redirect()
                ->route('user.dashboard')
                ->withErrors("Filme não encontrado!");
        }

         $movie->delete();

        return redirect()
            ->route('user.dashboard')
            ->with([
                       'success' => 'Filme deletado com sucesso!',
                   ]);
    }

}
