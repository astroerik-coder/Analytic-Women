<!DOCTYPE html>
<html lang="es">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Servicios</title>
  <link href="{{ asset( 'css/app.css' ) }}" rel="stylesheet">
  <!-- Enlace al archivo CSS de Tailwind -->
  <link href="http://127.0.0.1:8000/css/app.css" rel="stylesheet">
  <!--Enlace del archivo de los iconos-->
  <script src="https://kit.fontawesome.com/2655b6ac6f.js" crossorigin="anonymous"></script>
</head>

<body>
  <!-- Barra de navegación -->
  @component('layouts.components.navbar')@endcomponent
  <!--Formulario de contactos-->
  <!-- Tailwind Play: https://play.tailwindcss.com/qIqvl7e7Ww  -->

  
  @foreach ($servicios as $servicio)
<div class="max-w-lg mx-auto">
    <div class="bg-white shadow-md border border-gray-200 rounded-lg max-w-sm mb-5">
        <a href="#">
            <img class="rounded-t-lg" src="https://flowbite.com/docs/images/blog/image-1.jpg" alt="">
        </a>
        <div class="p-5">
            <a href="#">
                <h5 class="text-gray-900 font-bold text-2xl tracking-tight mb-2">{{ $servicio->nombre_ser}}</h5>
            </a>
            <p class="font-normal text-gray-700 mb-3">{{ $servicio->descripcion_ser}}</p>
        </div>
    </div>
</div>
@endforeach

</html>


   


