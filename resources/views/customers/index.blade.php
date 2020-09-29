@extends('layouts.main')

@section('pageTitle', 'Índice de categorías')

@section('content')
<body background="{{asset('imagenes/fondo.jpg')}}">

@if (session('customers_stored'))
<div class="p-3 mb-2 bg-success text-white"><center>Información del cliente almacenada con éxito</center></div> 
@endif

@if (session('customers_destroyed'))
<center><div class="text-danger">Información del cliente eliminada con éxito</div></center>
@endif

<h1 class="text-light">Índice de  los clientes</h1>
<p class="text-light">Lorem, ipsum dolor sit amet consectetur adipisicing elit. Quaerat ab quidem maxime? Corrupti, magni cum?</p>
<a href="{{ route('customers.create') }}"><button type="button" class="btn btn-dark">Agregar un cliente nuevo</button></a><br><br>

<h2 class="p-3 mb-2 bg-dark text-white">Listado</h2>
@if (count($customers) == 0)
<p>No hay ningun cliente ingresado por el momento</p>
@else
<ol class="list-decimal ml-8">
  @foreach($customers as $customer)
  <li><a href="{{ route('customers.show', $customer->id) }}" class="text-blue-500 hover:underline">{{ $customer->name }}</a></li>
  @endforeach
</ol>
@endif
@endsection