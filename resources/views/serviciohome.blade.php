<!DOCTYPE html>
<html lang="es">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Servicios</title>
  <link href="{{ asset( 'css/app.css' ) }}" rel="stylesheet">
  <link href="{{ asset( 'css/index.css' ) }}" rel="stylesheet">
  <link crossorigin="anonymous" href="https://cdnjs.cloudflare.com/ajax/libs/Swiper/8.3.2/swiper-bundle.css"
    rel="stylesheet" />
</head>

<body>
  <!-- Barra de navegación -->
  @component('layouts.components.navbar')@endcomponent

  <section class="flex justify-center pt-10 lg:pt-[50px] pb-10 lg:pb-10 bg-[#d8e2dc]">
    <div class="container">
      <div class="flex flex-wrap -mx-4">
        @foreach ($servicios as $servicio)
        <div class="w-full md:w-1/2 xl:w-1/3 px-4">
          <div class="bg-white rounded-lg overflow-hidden mb-10">
            <img src="{{$servicio->OBSERVACIONES_SER}}" alt="image" class="w-full" />
            <div class="p-8 sm:p-9 md:p-7 xl:p-9 text-center">
              <h3>
                <a href="javascript:void(0)"
                  class="font-semibold text-dark text-xl sm:text-[22px] md:text-xl lg:text-[22px] xl:text-xl 2xl:text-[22px] mb-4 block hover:text-primary">
                  {{$servicio->NOMBRE_SER}}
                </a>
              </h3>
              <p class="text-base text-body-color leading-relaxed mb-7">
                {{ $servicio->DESCRIPCION_SER}}
              </p>
            </div>
          </div>
        </div>
        @endforeach
      </div>
    </div>
  </section>
  <br><br><br><br>

  { @foreach ($cursos as $curso)

  <div class="min-w-screen min-h-screen bg-primary flex items-center p-5 lg:p-10 overflow-hidden relative">
    <div class="w-full max-w-6xl rounded bg-white shadow-xl p-10 lg:p-20 mx-auto text-gray-800 relative md:text-left">
      <div class="md:flex items-center -mx-10">
        <div class="w-full md:w-1/2 px-10 mb-10 md:mb-0">
          <div class="relative">
            <img src="{{$curso->first()->IMAGEN_CUR}}" class="w-full relative z-10" alt="">
            <div class="border-4 border-tertiary absolute top-10 bottom-10 left-10 right-10 z-0"></div>
          </div>
        </div>
        <div class="w-full md:w-1/2 px-10">
          <div class="mb-10">
            <h1 class="font-bold uppercase text-2xl mb-5">{{$curso->first()->NOMBRE_CUR}}</h1>
            <p class="text-sm">{{ $curso->first()->DESCRIPCION_CUR}}</p>
          </div>
          <div>
            <div class="inline-block align-bottom mr-5">
              <span class="text-2xl leading-none align-baseline">$</span>
              <span class="font-bold text-5xl leading-none align-baseline">{{ $curso->first()->COSTO_CUR}}</span>
              <span class="text-2xl leading-none align-baseline">.00</span>
            </div>
            <div class="inline-block align-bottom">
              <button
                class="bg-primary opacity-75 hover:opacity-100 text-white hover:text-gray-900 rounded-full px-10 py-2 font-semibold"><i
                  class="mdi mdi-cart -ml-2 mr-2"></i> Registrate ahora</button>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>

   @endforeach 


  @component('layouts.components.footer') @endcomponent
  {{-- Scripts --}}
  <script src="{{ asset( 'js/app.js' ) }}"></script>
  <script src="{{ asset( 'js/index.js' ) }}"></script>
  <script crossorigin="anonymous" defer src="https://cdnjs.cloudflare.com/ajax/libs/Swiper/8.3.2/swiper-bundle.min.js">
  </script>
  <script src="https://static.elfsight.com/platform/platform.js" data-use-service-core defer></script>
  <script src="https://unpkg.com/tailwindcss-jit-cdn"></script>

</body>

</html>