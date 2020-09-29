@extends('layouts.main')

@section('pageTitle', 'Crear categoría')

@section('content')
<body background="{{asset('imagenes/fondo.jpg')}}">

<h1 class="text-light">Agregar cliente</h1>
<p class="text-light">Completa correctamente el formulario para agregar un nuevo cliente</p>

<?php
if (session('error')) {
  echo '<p><strong>Por favor llenar correctamente este formulario de clientes</strong></p>';
}
?>

<form action="{{ route('customers.store') }}" method="POST">
  @csrf

  <p class="text-light">Nombre del cliente</p>
  <input type="text" name="name" value="<?php echo old('name') ?>" placeholder="Nombre del cliente" class="form-control">

  <p class="text-light">Apellido del cliente</p>
  <input type="text" name="first_name" value="<?php echo old('first_name') ?>" placeholder="Apellido del cliente" class="form-control">

  <p class="text-light">Ingresar el DUI del cliente</p>
  <input type="number" name="DUI" value="<?php echo old('DUI') ?>" placeholder="DUI" class="form-control">

  <p class="text-light">Ingresar el NIT del cliente</p>
  <input type="number" name="NIT" value="<?php echo old('NIT') ?>" placeholder="NIT" class="form-control">

  <p class="text-light">Dirección del cliente</p>
  <input type="text" name="address" value="<?php echo old('address') ?>" placeholder="Dirección" class="form-control">

  <p class="text-light">Telefono del cliente</p>
  <input type="number" name="telephone" value="<?php echo old('telephone') ?>" placeholder="Telefono" class="form-control">
 
  <p class="text-light">Celular del cliente</p>
  <input type="number" name="cell_phone" value="<?php echo old('cell_phone') ?>" placeholder="Celular" class="form-control">

  <p class="text-light">Nota del cliente</p>
  <input type="number" name="note" value="<?php echo old('note') ?>" placeholder="Nota" class="form-control">
  
  <br>
  <p><button class="btn btn-success">Guardar</button></p>
</form>
@endsection