@extends('layouts.app')

@section('content')

<div class="container">

    <h2> {{ isset($new) ? 'Novo' : 'Editar' }} Filme</h2>

    <form action="{{ isset($new) ? route('movie.store') : route('movie.update', [$movie->id]) }}" method="post" enctype="multipart/form-data">
        {{ csrf_field() }}

        <div class="row">
            <div class="col-xs-12">
                <div class="form-group">
                    <label for="title">Título</label>
                    <input name="title" id="title" class="form-control" value="{{ $movie->title }}">
                </div>
                <div class="form-group">
                    <label for="description">Descrição</label>
                    <textarea name="description" id="description" class="form-control" rows="3">{{ $movie->description }}</textarea>
                </div>
            </div>
        </div>

        <div class="row">
            <div class="col-xs-12 col-md-4">
                <div class="form-group">
                    <label for="gender">Gêneros:</label>
                    <br><span>(Para escolher mais de um gênero, segure a tecla CTRL pra fazer a seleção)</span>
                    <select name="gender[]" id="gender" class="form-control" multiple="true">
                        <option value="" selected disabled>Selecione</option>
                        @if(isset($new))
                            @foreach($genders as $gender)
                            <option value="{{ $gender->id }}">
                                {{ $gender->title }}
                            </option>
                            @endforeach
                        @else
                        @foreach($gender_movie->genders as $gmovie)
                            @foreach($genders as $gender)
                            <option {{ $gmovie->id == $gender->id ? 'selected' : '' }} value="{{ $gender->id }}">
                                {{ $gender->title }}
                            </option>
                            @endforeach
                        @endforeach
                        @endif
                    </select>
                </div>
            </div>

            <div class="col-xs-12 col-md-4">
                <div class="form-group">
                    <label for="year">Ano</label>
                    <input type="tel" name="year" id="year" class="form-control" value="{{ $movie->year }}">
                </div>
            </div>

            <div class="col-xs-12 col-md-4">
                <div class="form-group">
                    <label for="year">Duração</label>
                    <input type="tel" name="duration" id="duration" class="form-control" value="{{ $movie->duration }}">
                </div>
            </div>

        </div>
        @if(isset($new))
        <div class="row">
            <div class="col-xs-6">
                <div class="form-group">
                    <label for="image">Imagem</label>
                    <input type="file" name="image" id="image" class="form-control">
                </div>
            </div>
        </div>
        @endif

        <div class="row">
            <div class="col-xs-12">

                <button class="btn btn-primary">
                    <i class="fa fa-check-square-o" aria-hidden="true"></i>
                    {{ isset($new) ? 'Salvar' : 'Atualizar' }}
                </button>
                <a href="{{ route('user.dashboard') }}" class="btn btn-default">
                    Voltar
                </a>
            </div>
        </div>
    </form>
</div>

@endsection

@section('after_footer')

@endsection