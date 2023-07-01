
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
    <div class="flex justify-center items-start h-screen pt-10">
        <div class="flex flex-col rounded-lg bg-white shadow-[0_2px_15px_-3px_rgba(0,0,0,0.07),0_10px_20px_-2px_rgba(0,0,0,0.04)] dark:bg-neutral-700 md:max-w-xl md:flex-row">
          <img class="h-96 w-full rounded-t-lg object-cover md:h-auto md:w-48 md:rounded-none md:rounded-l-lg"
            src="https://tecdn.b-cdn.net/wp-content/uploads/2020/06/vertical.jpg" alt="" />
          <div class="flex flex-col justify-start p-6">
            <h5 class="mb-2 text-xl font-medium text-neutral-800 dark:text-neutral-50">{{ $servicio->nombre_ser}}</h5>
            <p class="mb-4 text-base text-neutral-600 dark:text-neutral-200">
                {{ $servicio->descripcion_ser}}
            </p>
          </div>
        </div>
      </div>
      @endforeach
</html>

   


