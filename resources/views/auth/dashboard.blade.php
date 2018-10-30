@extends('layouts.app')

@section('content')

    <div class="container">

        <div class="row">
            <div class="col-xs-12 col-md-8 col-md-offset-2 text-center">
                Olá, {{ $user->name }}
            </div>
        </div>

        <div class="row">
            <div class="col-xs-12 mtop-20">
                <a href="{{ route('movie.create') }}">
                    <button type="button" class="btn btn-primary">
                        <span class="glyphicon glyphicon-floppy-disk" aria-hidden="true"></span> Novo
                    </button>
                </a>
            </div>
        </div>


        <div class="row">
            <div class="col-xs-12 mtop-20">
                <div class="panel panel-default">
                    <div class="panel-heading">
                        Banco de Filmes
                    </div>
                    <!-- /.panel-heading -->
                    <div class="panel-body">
                        <div class="table-responsive">
                            <table class="table table-hover">
                                <thead>
                                <tr>
                                    <th>#</th>
                                    <th>Nome</th>
                                    <th>Data Lançamento</th>
                                    <th>Ações</th>
                                </tr>
                                </thead>
                                <tbody>
                                @foreach($movies as $movie)
                                    <tr>
                                        <td>{{$movie->id}}</td>
                                        <td>{{$movie->title}}</td>
                                        <td>{{$movie->year}}</td>
                                        <td>
                                            <a href="{{ route('movie.edit', [$movie->id]) }}">
                                                <button type="button" class="btn btn-primary">
                                                    <span class="glyphicon glyphicon-pencil" aria-hidden="true"></span>
                                                </button>
                                            </a>
                                            <a href="{{ route('movie.delete', [$movie->id]) }}">
                                                <button type="button" class="btn btn-danger">
                                                    <span class="glyphicon glyphicon-trash" aria-hidden="true"></span>
                                                </button>
                                            </a>
                                        </td>
                                    </tr>
                                @endforeach
                                </tbody>
                            </table>
                        </div>
                        <!-- /.table-responsive -->
                    </div>
                    <!-- /.panel-body -->
                </div>
            </div>
        </div>

    </div>

@endsection
