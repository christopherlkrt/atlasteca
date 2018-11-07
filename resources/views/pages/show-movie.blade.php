@extends('layouts.app')

@section('content')

    <div class="container lists">
        
        <div class="row">
            <div class="col-xs-12 text-center">
                <img src="{{ asset('images/logo.jpg') }}" style="max-width: 100%; width: 500px;">
            </div>
        </div>
        <div class="row">
            <div class="col-xs-12 single-movie">
                <h1>
                    {{ $movie->title }}

                    @if(!Auth::guest())

                        @if(!empty($movie->year))
                            <small> ({{ $movie->year }}) </small>
                        @endif

                    @endif
                </h1>

                <img src="{{ url('images/') }}/{{ isset($img->poster->image) ?  $img->poster->image : 'noimage.jpg' }}" alt="{{ $movie->title }}" class="pull-left img-responsive cover img-thumbnail margin10" data-toggle="modal" data-target="#myModal">
                <article>
                    <p>
                        @if(!Auth::guest())
                        {{ $movie->description }}
                        <br>
                        <br>
                        @endif
                        <span> Duração: {{ $movie->duration }}</span>
                        <br>
                        
                        <span>Genêro:
                        @foreach($movie->genders as $gender)
                         {{ $gender->title }}</span>
                        @endforeach
                    </p>
                </article> 
            </div>
        </div>

    </div>

    {{--MODAL--}}

    <!-- Modal -->
    <div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                    <h4 class="modal-title" id="myModalLabel">
                        {{ $movie->title }}
                        @if($movie->year)
                            <small> ({{ $movie->year }}) </small>
                        @endif
                    </h4>
                </div>
                <div class="modal-body text-center">
                    <img src="{{ url('images/') }}/{{ isset($img->poster->image) ?  $img->poster->image : 'noimage.jpg' }}" class="img-responsive displayinlineblock">
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                </div>
            </div>
        </div>
    </div>

@endsection
