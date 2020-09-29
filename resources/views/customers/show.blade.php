@extends('layouts.main')

@section('pageTitle', $customer->name)

@section('content')
<body background="{{asset('imagenes/fondo.jpg')}}">

@if (session('customers_updated'))
<div class="p-3 mb-2 bg-success text-white">Información del cliente actualizada con éxito</div>
@endif

<h1 class="text-light">{{ $customer->name }}</h1>
<p class="text-light"><strong>Apellido:</strong> {{ $customer->first_name }}</p>
<p class="text-light"><strong>Numero de DUI:</strong> {{ $customer->DUI }}</p>
<p class="text-light"><strong>Numero de NIT:</strong> {{ $customer->NIT }}</p>
<p class="text-light"><strong>Dirección:</strong> {{ $customer->address }}</p>
<p class="text-light"><strong>Numero de Telefono:</strong> {{ $customer->telephone }}</p>
<p class="text-light"><strong>Numero deCelular:</strong> {{ $customer->cell_phone }}</p>
<p class="text-light"><strong>Nota:</strong> {{ $customer->note }}</p>
<p class="text-light"><strong>Creado el:</strong> {{ $customer->created_at->formatLocalized('%b %d, %Y %I:%M %p') }}</p>

<p class="text-light"><a href="{{ route('customers.edit', $customer->id) }}"><button class="btn btn-primary">Actualizar Información del cliente</button></a></p>

  
<form action="{{ route('customers.destroy', $customer->id) }}" method="POST" class="mb-4" onsubmit="return confirm('¿Realmente quieres eliminar esta categoría?');">
  @csrf
  @method('DELETE')
  <button class="btn btn-danger">Eliminar Información del cliente</button>
</form>

@endsection
