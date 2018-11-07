@extends('layouts.app')

@section('content')

    <div class="container">

        <h2>Contato</h2>

        <form action="{{ route('submit.contact') }}" method="post">
            {{ csrf_field() }}

            

            <div class="row">
                <div class="col-xs-12 col-md-6">
                    <div class="form-group">
                        <label for="name">Nome</label>
                        <input type="text" name="name" id="name" class="form-control">
                    </div>
                </div>

                 <div class="col-xs-12 col-md-6">
                    <div class="form-group">
                        <label for="email">Email</label>
                        <input type="email" name="email" id="email" class="form-control">
                    </div>
                </div>

            </div>

            <div class="row">
                <div class="col-xs-12">
                    <div class="form-group">
                        <label for="message">Mensagem</label>
                        <textarea name="message" id="message" class="form-control" rows="3"></textarea>
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="col-xs-12">

                    <button class="btn btn-primary">
                        <i class="fa fa-check-square-o" aria-hidden="true"></i>
                        Enviar
                    </button>
                    <a href="{{ route('home') }}" class="btn btn-default">
                        Voltar
                    </a>
                </div>
            </div>
        </form>
    </div>

@endsection

@section('after_footer')

@endsection