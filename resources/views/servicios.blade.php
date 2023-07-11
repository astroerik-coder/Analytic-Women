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

  
 

<!-- ====== Cards Section Start -->

<section class="flex justify-center pt-10 lg:pt-[50px] pb-10 lg:pb-10 bg-[#d8e2dc]">
    <div class="container">
        <div class="flex flex-wrap -mx-4">
            @foreach ($servicios as $servicio)
            <div class="w-full md:w-1/2 xl:w-1/3 px-4">
                <div class="bg-white rounded-lg overflow-hidden mb-10">
                    <img src="{{$servicio->imagen_ser}}" alt="image" class="w-full" />
                    <div class="p-8 sm:p-9 md:p-7 xl:p-9 text-center">
                        <h3>
                            <a href="javascript:void(0)" class="font-semibold text-dark text-xl sm:text-[22px] md:text-xl lg:text-[22px] xl:text-xl 2xl:text-[22px] mb-4 block hover:text-primary">
                                {{ $servicio->nombre_ser}}
                            </a>
                        </h3>
                        <p class="text-base text-body-color leading-relaxed mb-7">
                            {{ $servicio->descripcion_ser}}
                        </p>
                    </div>
                </div>
            </div>
            @endforeach
        </div>
    </div>
</section>
</html>


<br><br><br><br>

<h1>Cursos disponibles</h1>

    @foreach ($cursos as $curso)
        <div>
            <h2>{{ $curso->nombre_curso }}</h2>
            <p>{{ $curso->descripcion_curso }}</p>
            <img src="{{ $curso->imagen_curso}}" alt="Imagen del curso">
        </div>
    @endforeach



                     









   


