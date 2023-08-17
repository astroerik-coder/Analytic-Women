<!DOCTYPE html>
<html lang="es">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Inicio</title>
  <link href="{{ asset( 'css/app.css' ) }}" rel="stylesheet">
  <link href="{{ asset( 'css/index.css' ) }}" rel="stylesheet">
  <link crossorigin="anonymous" href="https://cdnjs.cloudflare.com/ajax/libs/Swiper/8.3.2/swiper-bundle.css"
    rel="stylesheet" />
  <link rel="shortcut icon" href="{{ asset( 'images/Analytika Women.png' ) }}">

</head>

<body class="bg-gray-100">

  <!-- Barra de navegación -->
  @component('layouts.components.navbar')@endcomponent
  <div class="elfsight-app-a5a494fe-d988-4033-9547-82423d43b7f0"></div>
  @component("layouts.carrousel")@endcomponent
  {{-- Nosotros --}}
  <section class="bg-blueGray-200 -mt-24">
    <div class="container mx-auto px-4">
      <div class="flex flex-wrap">
        <div class="lg:pt-12 pt-6 w-full md:w-4/12 px-4 text-center">
          <div class="relative flex flex-col min-w-0 break-words bg-white w-full mb-8 shadow-lg rounded-lg">
            <div class="px-4 py-5 flex-auto">
              <div
                class="text-white p-3 text-center inline-flex items-center justify-center w-12 h-12 mb-5 shadow-lg rounded-full bg-pink-400">
              </div>
              <h6 class="text-xl font-semibold">Misión</h6>
              <p class="mt-2 mb-4 text-blueGray-500">
                {{ $informacion->first()->MISION }}
              </p>
            </div>
          </div>
        </div>
        <div class="w-full md:w-4/12 px-4 text-center">
          <div class="relative flex flex-col min-w-0 break-words bg-white w-full mb-8 shadow-lg rounded-lg">
            <div class="px-4 py-5 flex-auto">
              <div
                class="text-white p-3 text-center inline-flex items-center justify-center w-12 h-12 mb-5 shadow-lg rounded-full bg-purple-300">
              </div>
              <h6 class="text-xl font-semibold">Visión</h6>
              <p class="mt-2 mb-4 text-blueGray-500">
                {{ $informacion->first()->VISION }}
              </p>
            </div>
          </div>
        </div>
        <div class="pt-6 w-full md:w-4/12 px-4 text-center">
          <div class="relative flex flex-col min-w-0 break-words bg-white w-full mb-8 shadow-lg rounded-lg">
            <div class="px-4 py-5 flex-auto">
              <div
                class="text-white p-3 text-center inline-flex items-center justify-center w-12 h-12 mb-5 shadow-lg rounded-full bg-pink-400">
              </div>
              <h6 class="text-xl font-semibold">Cultura Organizacional</h6>
              <p id="uno" class="mt-2 mb-4 text-blueGray-500">
                {{ $informacion->first()->CULTURA_ORGANIZACIONAL }}
                <br><br><br>
              </p>
            </div>
          </div>
        </div>
      </div>
  </section>

  <div class="flex min-h-screen items-center justify-center bg-black font-bold text-white">
    <div class="text-center space-y-12">
      <div class="text-primary text-center text-5xl font-bold">Ejes de trabajo</div>
      <div class="text-white relative inline-grid grid-cols-1 grid-rows-1 gap-12 overflow-hidden">
        <span class="text-4xl animate-word col-span-full row-span-full">Análisis y procesamiento de datos</span>
        <span class="text-4xl animate-word-delay-1 col-span-full row-span-full">Diseño, ejecución, gestión de
          datos</span>
        <span class="text-4xl animate-word-delay-2 col-span-full row-span-full">Elaboración de instrumentos de
          planificación</span>
        <span class="text-4xl animate-word-delay-3 col-span-full row-span-full">Ejecución de proyectos de
          consultoría</span>
        <span class="text-4xl animate-word-delay-4 col-span-full row-span-full">Asesoría técnica</span>
      </div>
      <p class="text-white">
        <a href="/login" class="hover:text-primary hover:underline">Regístrate</a> para conocer más acerca de nosotros
        <a class="underline hover:text-primary  " href="/contactanos">Contáctanos</a>
      </p>
    </div>
  </div>

  <div class="flex items-center justify-center min-h-screen">
    <div class="bg-slate-800 w-full">
      <div
        class="bg-slate-700 shadow-md rounded rounded-xl m-4 md:m-16 border border-secondary shadow-xl shadow-indigo-500/50">
        <div class="flex flex-col p-6 md:p-10 space-y-4 md:space-y-6 items-center text-center">
          <h1 class="font-light md:text-4xl text-3xl text-white tracking-wide">
            Encuentra el experto en
            <span id="spin"
              class="text-transparent font-normal bg-clip-text bg-gradient-to-r from-primary to-secondary"></span>
            <br />que necesitas
          </h1>
          <p class="text-gray-400 md:text-xl text-lg px-6 md:px-18">
            ¡Ven! forma parte de nuestro equipo de aliados
          </p>
          <button
            class="rounded-full bg-primary shadow-lg shadow-primary-500/50 text-white text-base md:text-lg py-2 md:py-4 px-4 md:px-6">
            Visita nuestros servicios
          </button>
        </div>
      </div>
    </div>
  </div>
  {{-- Aliados --}}
  <div class="w-full bg-white">
    <section class="max-w-6xl mx-auto px-4 sm:px-6 lg:px-4 py-12">
      <div class="text-center pb-12">
        <h2 class="text-base font-bold text-primary">
          Contamos con los mejores equipos del mercado
        </h2>
        <h1 class="font-bold text-3xl md:text-4xl lg:text-5xl font-heading text-black">
          Consulta nuestro increíble equipo
        </h1>
      </div>
      <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-2 lg:grid-cols-3 gap-6">
        <div class="w-full bg-gray-900 rounded-lg sahdow-lg p-12 flex flex-col justify-center items-center">
          <div class="mb-8">
            <img class="object-center object-cover rounded-full h-36 w-36" src="images/Accionista1.png" alt="photo">
          </div>
          <div class="text-center">
            <p class="text-xl text-white font-bold mb-2">Ing. Sara Yánez, Msc.</p>
            <p class="text-base text-gray-400 font-normal">Gerente General</p>
          </div>
        </div>
        <div class="w-full bg-gray-900 rounded-lg sahdow-lg p-12 flex flex-col justify-center items-center">
          <div class="mb-8">
            <img class="object-center object-cover rounded-full h-36 w-36" src="images/Accionista2.png" alt="photo">
          </div>
          <div class="text-center">
            <p class="text-xl text-white font-bold mb-2">Arq. Carolina Ramos Pinto, Msc.</p>
            <p class="text-base text-gray-400 font-normal">Presidenta</p>
          </div>
        </div>
        <div class="w-full bg-gray-900 rounded-lg sahdow-lg p-12 flex flex-col justify-center items-center">
          <div class="mb-8">
            <img class="object-center object-cover rounded-full h-36 w-36" src="images/Accionista3.png" alt="photo">
          </div>
          <div class="text-center">
            <p class="text-xl text-white font-bold mb-2">Ec. Carmen López Saravia</p>
            <p class="text-base text-gray-400 font-normal">Directora Financiera</p>
          </div>
        </div>

      </div>
    </section>
  </div>



  <!-- hero section -->
  <section class="relative py-32 lg:py-36 bg-white">
    <div class="mx-auto lg:max-w-7xl w-full px-5 sm:px-10 md:px-12 lg:px-5 flex flex-col lg:flex-row gap-10 lg:gap-12">
      <div class="absolute w-full lg:w-1/2 inset-y-0 lg:right-0 hidden lg:block">
        <span
          class="absolute -left-6 md:left-4 top-24 lg:top-28 w-24 h-24 rotate-90 skew-x-12 rounded-3xl bg-green-400 blur-xl opacity-60 lg:opacity-95 lg:block hidden"></span>
        <span class="absolute right-4 bottom-12 w-24 h-24 rounded-3xl bg-blue-600 blur-xl opacity-80"></span>
      </div>
      <span
        class="w-4/12 lg:w-2/12 aspect-square bg-gradient-to-tr from-primary to-tertiary absolute -top-5 lg:left-0 rounded-full skew-y-12 blur-2xl opacity-40 skew-x-12 rotate-90"></span>
      <div class="relative flex flex-col items-center text-center lg:text-left lg:py-7 xl:py-8 
          lg:items-start lg:max-w-none max-w-3xl mx-auto lg:mx-0 lg:flex-1 lg:w-1/2">

        <h1 class="text-3xl leading-tight sm:text-4xl md:text-5xl xl:text-6xl
          font-bold text-gray-900">
          "Descubre tu potencial con nuestros <a href="/servicio"> <span class="text-transparent bg-clip-text bg-gradient-to-br from-primary from-20% via-purple-900 via-30% to-tertiary 
            hover:bg-gradient-to-br from-purple-900 from-20% via-primary via-30% to-purple-500">Cursos</span></a>
        </h1>
        <p class="mt-8 text-gray-700">
          Únete a nosotros y sé parte de una experiencia educativa transformadora en nuestros cursos excepcionales.
        </p>
        <div class="mt-10  w-full flex max-w-md mx-auto lg:mx-0">
          <div class="flex sm:flex-row flex-col gap-5 w-full">

          </div>
        </div>
      </div>
      <div class="flex flex-1 lg:w-1/2 lg:h-auto relative lg:max-w-none lg:mx-0 mx-auto max-w-3xl">
        <img src="https://agencex-astro.vercel.app/images/image1.webp" alt="Hero image" width="2350" height="2359"
          class="lg:absolute lg:w-full lg:h-full rounded-3xl object-cover lg:max-h-none max-h-96">
      </div>
    </div>
  </section>
  <style>
    body {
      font-family: "Raleway", sans-serif;
    }

    button[data-toggle-navbar][data-is-open="true"] #line-1 {
      transform: translateY(0.375rem) rotate(40deg);
    }

    button[data-toggle-navbar][data-is-open="true"] #line-2 {
      transform: scaleX(0);
      opacity: 0;
    }

    button[data-toggle-navbar][data-is-open="true"] #line-3 {
      transform: translateY(-0.375rem) rotate(-40deg);
    }
  </style>

  <script>
    const btnHumb = document.querySelector("[data-toggle-navbar]")
const navbar = document.querySelector("[data-navbar]")
const overlay = document.querySelector("[data-nav-overlay]")
if (btnHumb && navbar) {
  const toggleBtnAttr = () => {
      const isOpen = btnHumb.getAttribute("data-is-open")
      btnHumb.setAttribute("data-is-open", isOpen === "true" ? "false" : "true")
      if (isOpen === "false") {
          overlay.classList.toggle("hidden")
      } else {
          overlay.classList.add("hidden")
      }
  }
  btnHumb.addEventListener("click", () => {
      navbar.classList.toggle("invisible")
      navbar.classList.toggle("opacity-0")
      navbar.classList.toggle("translate-y-10")
      toggleBtnAttr()
  })

  overlay.addEventListener("click", () => {
      navbar.classList.add("invisible")
      navbar.classList.add("opacity-0")
      navbar.classList.add("translate-y-10")
      toggleBtnAttr()
  })
}

  </script>


  <section>
    <div class="bg-black text-white py-8">
      <div class="container mx-auto flex flex-col items-start md:flex-row my-12 md:my-24">
        <div class="flex flex-col w-full sticky md:top-36 lg:w-1/3 mt-2 md:mt-12 px-8">
          <p class="ml-2 text-primary uppercase tracking-loose">Equipo de aliados estrategicos</p>
          <p class="text-3xl md:text-4xl leading-normal md:leading-relaxed mb-2">Transformamos datos en información para
            la toma de desiciones.</p>
          <p class="text-sm md:text-base text-gray-50 mb-4">
            Nuestros colaboradores clave comparten objetivos y recursos para lograr ventajas mutuas y crecimiento
            conjunto en un entorno competitivo.
          </p>
        </div>
        <div class="ml-0 md:ml-12 lg:w-2/3 sticky">
          <div class="container mx-auto w-full h-full">
            <div class="relative wrap overflow-hidden p-10 h-full">
              <div class="border-2-2 border-yellow-555 absolute h-full border"
                style="right: 50%; border: 2px solid #BC799D; border-radius: 1%;"></div>
              <div class="border-2-2 border-yellow-555 absolute h-full border"
                style="left: 50%; border: 2px solid #BC799D; border-radius: 1%;"></div>
              <div class="mb-8 flex justify-between flex-row-reverse items-center w-full left-timeline">
                <div class="order-1 w-5/12"></div>
                <div class="order-1 w-5/12 px-1 py-4 text-right">
                  <p class="mb-3 text-base text-primary">Abg. Moisés Yánez, Msc.</p>
                  <h4 class="mb-3 font-bold text-lg md:text-2xl">Abogado</h4>
                  <p class="text-sm md:text-base leading-snug text-gray-50 text-opacity-100">
                    Abogado Universidad Metropolitana de Quito. Maestría en la Universidad UEES en Derecho Penal.
                    Diplomado en la Escuela de Dirección de Empresas IDE Bussines Scholl. Estudios de medio ambiente
                    FLACSO, cursando doctorado en Economía en la universidad Andrés Bello de Caracas, aceptado en la
                    escuela de Psciencia Po, de Francia en París con la universidad de la Sorbona para el Doctorado en
                    Derecho Internacional.
                  </p>
                </div>
              </div>
              <div class="mb-8 flex justify-between items-center w-full right-timeline">
                <div class="order-1 w-5/12"></div>
                <div class="order-1  w-5/12 px-1 py-4 text-left">
                  <p class="mb-3 text-base text-primary">Abg. Patricia de Guzmán Valdivieso, Msc.</p>
                  <h4 class="mb-3 font-bold text-lg md:text-2xl">Abogada</h4>
                  <p class="text-sm md:text-base leading-snug text-gray-50 text-opacity-100">
                    A"Abogada (Pontificia Universidad Católica del Ecuador) y Máster en Política (The University of
                    Manchester, Reino Unido). Experiencia como Vicepresidente de International Youth Democratic Union,
                    Subsecretaria de Gobernabilidad, Asesora de bancada en la Asamblea Nacional, Asesora del Alcalde de
                    Quito y Defensora Pública Penal. Consultora y capacitadora político-jurídica a nivel nacional e
                    internacional, además de formadora de jóvenes." </p>
                </div>
              </div>
              <div class="mb-8 flex justify-between flex-row-reverse items-center w-full left-timeline">
                <div class="order-1 w-5/12"></div>
                <div class="order-1 w-5/12 px-1 py-4 text-right">
                  <p class="mb-3 text-base text-primary">Ing. Nancy Jacho Guanoluisa, Msc.</p>
                  <h4 class="mb-3 font-bold text-lg md:text-2xl">Ingeniera</h4>
                  <p class="text-sm md:text-base leading-snug text-gray-50 text-opacity-100">
                    "Ingeniera en Sistemas e Informática con más de 23 años de experiencia en docencia, investigación y
                    desarrollo de aplicaciones. Magister en Ciencias de la Educación y en Ingeniería de Software, con
                    conocimientos en bases de datos, servidores web, usabilidad y diseño de interfaces. Habilidad para
                    trabajar en equipo y aplicar metodologías ágiles."
                  </p>
                </div>
              </div>

              <div class="mb-8 flex justify-between items-center w-full right-timeline">
                <div class="order-1 w-5/12"></div>

                <div class="order-1  w-5/12 px-1 py-4">
                  <p class="mb-3 text-base text-primary">Ing. Juan Carlos Avilés Aguirre, Msc.</p>
                  <h4 class="mb-3 font-bold  text-lg md:text-2xl text-left">Ingeniero</h4>
                  <p class="text-sm md:text-base leading-snug text-gray-50 text-opacity-100">

                    "Ingeniero Ambiental con Maestría en Salud, Seguridad y Ambiente. Director Nacional de Gestión Socio
                    Ambiental en el Ministerio de Transportes y Obras Públicas. Ex Secretario de Ambiente en el
                    Municipio de Quito. Presidente de la Alianza de Profesionales Ambientales del Ecuador. Socio
                    fundador de J3M energía solar. Consultor Ambiental calificado desde 2008."
                  </p>
                </div>
              </div>
            </div>
            <img class="mx-auto -mt-36 md:-mt-36"
              src="https://user-images.githubusercontent.com/54521023/116968861-ef21a000-acd2-11eb-95ac-a34b5b490265.png" />
          </div>
        </div>
      </div>
    </div>
  </section>

  {{-- Clientes --}}
  <div class="min-w-screen min-h-screen bg-gray-50 flex items-center justify-center py-5">
    <div class="w-full bg-white border-t border-b border-gray-200 px-5 py-16 md:py-24 text-gray-800">
      <div class="w-full max-w-6xl mx-auto">
        <div class="text-center max-w-xl mx-auto">
          <h1 class="text-6xl md:text-7xl font-bold mb-5 text-gray-600">Nuestros clientes <br>nos dicen.</h1>
          <h3 class="text-xl mb-5 font-light">Comentarios de nuestros clientes acerca de Analytika Women</h3>
          <div class="text-center mb-10">
            <span class="inline-block w-1 h-1 rounded-full bg-indigo-500 ml-1"></span>
            <span class="inline-block w-3 h-1 rounded-full bg-indigo-500 ml-1"></span>
            <span class="inline-block w-40 h-1 rounded-full bg-indigo-500"></span>
            <span class="inline-block w-3 h-1 rounded-full bg-indigo-500 ml-1"></span>
            <span class="inline-block w-1 h-1 rounded-full bg-indigo-500 ml-1"></span>
          </div>
        </div>
        <div class="-mx-3 md:flex items-start">
          <div class="px-3 md:w-1/3">
            <div class="w-full mx-auto rounded-lg bg-white border border-gray-200 p-5 text-gray-800 font-light mb-6">
              <div class="w-full flex mb-4 items-center">
                <div class="overflow-hidden rounded-full w-10 h-10 bg-gray-50 border border-gray-200">
                  <img src="https://i.pravatar.cc/100?img=1" alt="">
                </div>
                <div class="flex-grow pl-3">
                  <h6 class="font-bold text-sm uppercase text-gray-600">Kenzie Edgar.</h6>
                </div>
              </div>
              <div class="w-full">
                <p class="text-sm leading-tight"><span
                    class="text-lg leading-none italic font-bold text-gray-400 mr-1">"</span>Hemos estado buscando
                  asesoramiento político en términos de marketing político-electoral y manejo de imagen pública, y no
                  podríamos estar más satisfechos con Analytika Women. Su profundo conocimiento en estas áreas y su
                  enfoque de género encajaron perfectamente con nuestra visión. Han logrado mejorar nuestra presencia
                  pública de manera que resuene con una amplia audiencia. ¡Estamos impresionados y agradecidos por su
                  colaboración!<span class="text-lg leading-none italic font-bold text-gray-400 ml-1">"</span></p>
              </div>
            </div>
            <div class="w-full mx-auto rounded-lg bg-white border border-gray-200 p-5 text-gray-800 font-light mb-6">
              <div class="w-full flex mb-4 items-center">
                <div class="overflow-hidden rounded-full w-10 h-10 bg-gray-50 border border-gray-200">
                  <img src="https://i.pravatar.cc/100?img=2" alt="">
                </div>
                <div class="flex-grow pl-3">
                  <h6 class="font-bold text-sm uppercase text-gray-600">Stevie Tifft.</h6>
                </div>
              </div>
              <div class="w-full">
                <p class="text-sm leading-tight"><span
                    class="text-lg leading-none italic font-bold text-gray-400 mr-1">"</span>En nuestra organización
                  sin fines de lucro, estábamos luchando por implementar prácticas de gobierno abierto y alinear
                  nuestras acciones con los Objetivos de Desarrollo Sostenible. Gracias a Analytika Women, hemos
                  logrado avances significativos en ambos aspectos. Su enfoque práctico y su compromiso con la
                  transparencia han sido un verdadero catalizador para el cambio positivo en nuestra organización.
                  ¡Los recomendamos altamente!<span
                    class="text-lg leading-none italic font-bold text-gray-400 ml-1">"</span></p>
              </div>
            </div>
          </div>
          <div class="px-3 md:w-1/3">
            <div class="w-full mx-auto rounded-lg bg-white border border-gray-200 p-5 text-gray-800 font-light mb-6">
              <div class="w-full flex mb-4 items-center">
                <div class="overflow-hidden rounded-full w-10 h-10 bg-gray-50 border border-gray-200">
                  <img src="https://i.pravatar.cc/100?img=3" alt="">
                </div>
                <div class="flex-grow pl-3">
                  <h6 class="font-bold text-sm uppercase text-gray-600">Tommie Ewart.</h6>
                </div>
              </div>
              <div class="w-full">
                <p class="text-sm leading-tight"><span
                    class="text-lg leading-none italic font-bold text-gray-400 mr-1">"</span>¡Los servicios de
                  Analytika Women son realmente excepcionales! Como parte de una ONG, buscábamos capacitación en
                  gestión del cambio y diseño de políticas públicas, y su equipo multidisciplinario nos brindó
                  exactamente lo que necesitábamos. Su enfoque en la innovación y la inclusión social realmente se
                  destacó, y su enfoque de género en todo su trabajo es impresionante.<span
                    class="text-lg leading-none italic font-bold text-gray-400 ml-1">"</span></p>
              </div>
            </div>
            <div class="w-full mx-auto rounded-lg bg-white border border-gray-200 p-5 text-gray-800 font-light mb-6">
              <div class="w-full flex mb-4 items-center">
                <div class="overflow-hidden rounded-full w-10 h-10 bg-gray-50 border border-gray-200">
                  <img src="https://i.pravatar.cc/100?img=4" alt="">
                </div>
                <div class="flex-grow pl-3">
                  <h6 class="font-bold text-sm uppercase text-gray-600">Charlie Howse.</h6>
                </div>
              </div>
              <div class="w-full">
                <p class="text-sm leading-tight"><span
                    class="text-lg leading-none italic font-bold text-gray-400 mr-1">"</span>Desde que comenzamos a
                  trabajar con Analytika Women, hemos experimentado un cambio transformador en nuestra organización.
                  Sus capacitaciones nos han permitido mejorar nuestros procesos internos y hemos implementado
                  políticas más inclusivas y orientadas a resultados. Estamos agradecidos por su experiencia en
                  gobierno abierto y en la implementación de los Objetivos de Desarrollo Sostenible. ¡Recomendamos
                  encarecidamente sus servicios!<span
                    class="text-lg leading-none italic font-bold text-gray-400 ml-1">"</span></p>
              </div>
            </div>
          </div>
          <div class="px-3 md:w-1/3">
            <div class="w-full mx-auto rounded-lg bg-white border border-gray-200 p-5 text-gray-800 font-light mb-6">
              <div class="w-full flex mb-4 items-center">
                <div class="overflow-hidden rounded-full w-10 h-10 bg-gray-50 border border-gray-200">
                  <img src="https://i.pravatar.cc/100?img=5" alt="">
                </div>
                <div class="flex-grow pl-3">
                  <h6 class="font-bold text-sm uppercase text-gray-600">Nevada Herbertson.</h6>
                </div>
              </div>
              <div class="w-full">
                <p class="text-sm leading-tight"><span
                    class="text-lg leading-none italic font-bold text-gray-400 mr-1">"</span>Como directora de una
                  empresa privada, tuvimos el placer de colaborar con Analytika Women en un proyecto de consultoría
                  empresarial. Su enfoque analítico y su capacidad para comprender nuestras necesidades específicas
                  fue impresionante. Nos brindaron recomendaciones prácticas y realistas que han tenido un impacto
                  significativo en nuestra estrategia comercial. ¡Definitivamente seguiremos trabajando con ellas en
                  el futuro!<span class="text-lg leading-none italic font-bold text-gray-400 ml-1">"</span></p>
              </div>
            </div>
            <div class="w-full mx-auto rounded-lg bg-white border border-gray-200 p-5 text-gray-800 font-light mb-6">
              <div class="w-full flex mb-4 items-center">
                <div class="overflow-hidden rounded-full w-10 h-10 bg-gray-50 border border-gray-200">
                  <img src="https://i.pravatar.cc/100?img=6" alt="">
                </div>
                <div class="flex-grow pl-3">
                  <h6 class="font-bold text-sm uppercase text-gray-600">Kris Stanton.</h6>
                </div>
              </div>
              <div class="w-full">
                <p class="text-sm leading-tight"><span
                    class="text-lg leading-none italic font-bold text-gray-400 mr-1">"</span>Como parte de un grupo de
                  atención prioritaria en una zona rural, hemos experimentado de primera mano la dedicación de
                  Analytika Women en el manejo de modelos de acción participativa y monitoreo en entornos rurales. Su
                  enfoque centrado en la comunidad y su comprensión de nuestras necesidades específicas han hecho una
                  diferencia real en nuestra comunidad. Estamos agradecidos por su apoyo y experiencia. ¡Son realmente
                  excepcionales!<span class="text-lg leading-none italic font-bold text-gray-400 ml-1">"</span></p>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>

  @component("layouts.contact")@endcomponent
  @component('layouts.components.footer') @endcomponent


  {{-- Scripts --}}
  <script src="{{ asset( 'js/app.js' ) }}"></script>
  <script src="{{ asset( 'js/index.js' ) }}"></script>
  <script crossorigin="anonymous" defer src="https://cdnjs.cloudflare.com/ajax/libs/Swiper/8.3.2/swiper-bundle.min.js">
  </script>
  <script src="https://static.elfsight.com/platform/platform.js" data-use-service-core defer></script>
  <script src="https://unpkg.com/tailwindcss-jit-cdn"></script>
  <script src="https://kit.fontawesome.com/2655b6ac6f.js" crossorigin="anonymous"></script>
</body>

</html>