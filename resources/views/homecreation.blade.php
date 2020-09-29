@extends('layouts.main')

@section('pageTitle', 'Página de inicio')

@section('content')
<body background="{{asset('imagenes/fondo.jpg')}}">

<a href="{{ route('homecreation') }}"><h3 class="text-black">Bufete Juridico</h3></a>
<h2 class="text-light">Bienvenidos al Bufete juridico</h2>
<p class="text-light">Lorem, ipsum dolor sit amet consectetur adipisicing elit. Eum saepe iusto pariatur delectus reprehenderit quo voluptate tenetur veniam adipisci
     suscipit consequatur molestiae debitis et, enim magni porro? Voluptatem, reprehenderit quasi.</p>

<h2 class="p-3 mb-2 bg-dark text-white">Accesos directos</h2>


<a href="{{ route('customers.create') }}">
     <button type="button" class="btn btn-dark">Crear un nuevo cliente</button>
 </a>

<center>
<img src="{{asset('imagenes/logo.png')}}" alt="" width="450" height="350"></center>
         


@endsection
