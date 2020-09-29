@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Bienvenidos acaban de iniciar sesión a la pagina web del Bufete Juridico') }}</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    {{ __('Espero que la disfruten!') }}
                    <button type="button" class="btn btn-dark"><a href="{{ url('/creationhome') }}">Entrar</a></button>
                </div>
            </div>
        </div>
    </div>
</div>
<br><br>
<center><img src="{{asset('imagenes/logo.png')}}" alt="" width="350" height="250"></center>
@endsection
