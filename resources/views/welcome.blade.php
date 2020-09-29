<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        @section ('style')
    <link rel="stylesheet" href="{{asset('src/css/bootstrap.min.css')}}">
    @show
    <title>Bufete Juridico--Bienvenidos--</title>
    <link rel="shortcut icon" href="{{asset('imagenes/logo.png')}}" type="image/x-icon">

    </head>
    <body background="{{asset('imagenes/fondo.jpg')}}">
    <style>
            html, body {
                background-color: #fff;
                color: #ffffff;
                font-family: 'Nunito', sans-serif;
                font-weight: 200;
                height: 100vh;
                margin: 0;
            }
     </style>
        
        <div class="flex-center position-ref full-height">
            @if (Route::has('login'))
                <div class="top-right links">
                    @auth
                    <button type="button" class="btn btn-dark"><a href="{{ url('/home') }}">Home</a></button>
                        
                    @else
                    <button type="button" class="btn btn-dark"><a href="{{ route('login') }}">Iniciar sesión</a></button>

                        @if (Route::has('register'))
                        <button type="button" class="btn btn-dark"><a href="{{ route('register') }}">Registrate</a></button>

                        @endif
                    @endauth
                </div>
            @endif

<center>
<h1>Proyecto basado en una empresa de un bufete Juridico, Espero que les guste</h1>
<img src="{{asset('imagenes/logo.png')}}" alt="" width="450" height="350"></center>
                
</body>

    @section('scripts')
<script src="{{asset('src/js/bootstrap.min.css')}}"></script>
@show
</html>
