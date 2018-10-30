@extends('layouts.app')

@section('content')

    <div class="container lists">

        <div class="row">
            <div class="col-xs-12 text-center">
                <img src="{{ asset('images/logo.jpg') }}" style="max-width: 100%; width: 500px;">
            </div>
        </div>

        <div class="row">
            <div class="col-xs-12">
                <h1 class="text-center">Listagem de Filmes</h1>
            </div>
        </div>

        <div class="row">
            @foreach($movies as $movie)
                <div class="col-xs-6 col-sm-4 col-lg-3 text-center item-movie">

                    <a href="{{ route('movie.show', [$movie->id, $movie->slug]) }}">
                        <div class="ic_container legend">

                            <img class="cover" src="{{ asset('images/noimage.jpg') }}" alt="{{ $movie->title }}">

                            <div class="overlay" style="display:none;"></div>
                            <div class="ic_caption">
                                <h3>{{ $movie->title }}</h3>
                                <p class="ic_text">
                                    {{ $movie->gender->title }}
                                </p>
                            </div>
                        </div>
                    </a>
                </div>
            @endforeach
        </div>



    </div>



@endsection

@section('after_footer')
    <script>
        $(document).ready(function(){
            $(".legend").capslide({
                caption_color	: 'white',
                caption_bgcolor	: 'black',
                overlay_bgcolor : 'black',
                border			: '',
                showcaption	    : false
            });
        });
    </script>
@endsection