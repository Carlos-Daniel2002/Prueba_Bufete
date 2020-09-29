<!DOCTYPE html>
<html lang="es">
  <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Bufete Juridico--Bienvenidos-- | @yield('pageTitle', 'Bienvenidos')</title>
    <link rel="shortcut icon" href="{{asset('imagenes/logo.png')}}" type="image/x-icon">
    <link href="{{ asset('src/css/bootstrap.min.css') }}" rel="stylesheet">
  </head>
    <div class="container">
      <div class="d-flex flex-row-reverse">
        <div class="p-2"><a href="{{ route('customers.index') }}" class="text-primary"><button class="btn btn-outline-primary">Clientes</button></a></div> 
        <div class="p-2"><a href="{{ route('homecreation') }}" class="text-primary"><button class="btn btn-outline-primary">Home</button></a></div> 
      </div>

      @section('content')
      <p>Este es un mensaje de ejemplo</p>
      @show

      <div class="text-light">{{ date('Y') }} Derechos Reservados Por Carlos Daniel</div>

      @section('scripts')
      @show
    </div>
    <script>
      flatpickr("#complete_date", { enableTime: true, minDate: 'today' });
    </script>
  </body>
</html>