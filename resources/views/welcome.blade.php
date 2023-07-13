<!DOCTYPE html>
<html lang="es">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Inicio</title>
  <!-- Enlace al archivo CSS de Tailwind -->
  <link href="{{ asset( 'css/app.css' ) }}" rel="stylesheet">

</head>

<body class="bg-gray-100">

  <!-- Barra de navegación -->
  @component('layouts.components.navbar')@endcomponent

  <!-- Botón flotante de WhatsApp -->
  <a href="https://api.whatsapp.com/" class="floating-button-whatsapp animate-bounce" target="_blank"
    id="floating-icon">
    <img src="images/icono_What.png" alt="..." class="w-14">
  </a>

  <div class="slider relative w-full h-screen overflow-hidden">
    <div class="slide absolute top-0 left-0 w-full h-full bg-cover bg-center opacity-0 transition-opacity duration-500"
      style="background-image: url('https://images.unsplash.com/photo-1674574124649-778f9afc0e9c?ixlib=rb-4.0.3&ixid=M3wxMjA3fDF8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=1170&q=80')">
      <div
        class="overlay absolute top-0 left-0 w-full h-full bg-black bg-opacity-50 flex flex-col items-center justify-center text-white">
        <h2 class="text-3xl font-bold">Título de la imagen 1</h2>
        <p>Descripción de la imagen 1</p>
      </div>
    </div>
    <div class="slide absolute top-0 left-0 w-full h-full bg-cover bg-center opacity-0 transition-opacity duration-500"
      style="background-image: url('https://images.unsplash.com/photo-1504194921103-f8b80cadd5e4?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=1170&q=80')">

      <div
        class="overlay absolute top-0 left-0 w-full h-full bg-black bg-opacity-50 flex flex-col items-center justify-center text-white">
        <h2 class="text-3xl font-bold">Título de la imagen 2</h2>
        <p>Descripción de la imagen 2</p>
      </div>
    </div>
    <div class="slide absolute top-0 left-0 w-full h-full bg-cover bg-center opacity-0 transition-opacity duration-500"
      style="background-image: url('https://images.unsplash.com/photo-1573167627769-e201a7ddf409?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=1169&q=80')">
      <div
        class="overlay absolute top-0 left-0 w-full h-full bg-black bg-opacity-50 flex flex-col items-center justify-center text-white">
        <h2 class="text-3xl font-bold">Título de la imagen 3</h2>
        <p>Descripción de la imagen 3</p>
      </div>
    </div>
    <div class="button-container absolute top-1/2 left-0 transform -translate-y-1/2 w-full flex justify-between z-10">
      <button
        class="button bg-primary bg-opacity-50 text-white w-10 h-10 flex items-center justify-center transition duration-300 hover:bg-opacity-70">
        <svg class="w-6 h-6" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
          <path d="M15 18L9 12L15 6" stroke="currentColor" stroke-width="2" stroke-linecap="round"
            stroke-linejoin="round" />
        </svg>
      </button>
      <button
        class="button bg-primary bg-opacity-50 text-white w-10 h-10 flex items-center justify-center transition duration-300 hover:bg-opacity-70">
        <svg class="w-6 h-6" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
          <path d="M9 6L15 12L9 18" stroke="currentColor" stroke-width="2" stroke-linecap="round"
            stroke-linejoin="round" />
        </svg>
      </button>
    </div>
    <div
      class="indicators-container absolute bottom-5 left-1/2 transform -translate-x-1/2 w-full max-w-2xl overflow-x-auto">
      <div class="indicators flex justify-center">
        <div class="indicator w-4 h-4 rounded-full bg-white bg-opacity-50 mx-1 transition duration-300"></div>
        <div class="indicator w-4 h-4 rounded-full bg-white bg-opacity-50 mx-1 transition duration-300"></div>
        <div class="indicator w-4 h-4 rounded-full bg-white bg-opacity-50 mx-1 transition duration-300"></div>
      </div>
    </div>
  </div>

  <style>
    .bg-pink-400 {
      background-image: url("images/favicon.png");
      background-repeat: no-repeat;
      background-position: center;
    }
  </style>

  <style>
    .bg-purple-300 {
      background-image: url("images/favicon.png");
      background-repeat: no-repeat;
      background-position: center;
    }
  </style>


  <section class="bg-blueGray-200 -mt-24">
    <div class="container mx-auto px-4">
      <div class="flex flex-wrap">
        <div class="lg:pt-12 pt-6 w-full md:w-4/12 px-4 text-center">
          <div class="relative flex flex-col min-w-0 break-words bg-white w-full mb-8 shadow-lg rounded-lg">
            <div class="px-4 py-5 flex-auto">
              <div
                class="text-white p-3 text-center inline-flex items-center justify-center w-12 h-12 mb-5 shadow-lg rounded-full bg-pink-400">
              </div>
              <h6 class="text-xl font-semibold">MISIÓN</h6>
              <p class="mt-2 mb-4 text-blueGray-500">
                Transformar data en información mediante conceptos innovadores y ágiles, para que las organizaciones e
                instituciones públicas y privadas, cuenten con las mejores soluciones en la toma de decisiones a nivel
                técnico, económico, político y social; considerando enfoques de tipo intergeneracional, intersectorial,
                intercultural, ambiental, de género y movilidad.
              </p>
            </div>
          </div>
        </div>
        <div class="w-full md:w-4/12 px-4 text-center">
          <div class="relative flex flex-col min-w-0 break-words bg-white w-full mb-8 shadow-lg rounded-lg">
            <div class="px-4 py-5 flex-auto">
              <div
                class="text-white p-3 text-center inline-flex items-center justify-center w-12 h-12 mb-5 shadow-lg rounded-full bg-purple-300">
                <i class="fas fa-retweet"></i>
              </div>
              <h6 class="text-xl font-semibold">VISIÓN</h6>
              <p class="mt-2 mb-4 text-blueGray-500">
                Ser una compañía ecuatoriana referente en el ámbito de la investigación financiera, económica, social y
                política, aportando al bienestar y desarrollo humano, cumpliendo estándares de calidad, buenas prácticas
                y aplicando metodologías innovadoras en la investigación y análisis de información.
              </p>
            </div>
          </div>
        </div>
        <div class="pt-6 w-full md:w-4/12 px-4 text-center">
          <div class="relative flex flex-col min-w-0 break-words bg-white w-full mb-8 shadow-lg rounded-lg">
            <div class="px-4 py-5 flex-auto">
              <div
                class="text-white p-3 text-center inline-flex items-center justify-center w-12 h-12 mb-5 shadow-lg rounded-full bg-pink-400">
                <i class="fas fa-fingerprint"></i>
              </div>
              <h6 class="text-xl font-semibold">CULTURA ORGANIZACIONAL</h6>
              <p id="uno" class="mt-2 mb-4 text-blueGray-500">
                Nuestra empresa promueve la cultura de la integridad personal, para proponer las mejores alternativas
                frente a las necesidades o requerimientos solicitados; <br> para lo cual nos apoyamos de un equipo
                multidisciplinario de profesionales con equidad de género.
                <br><br><br>
              </p>
            </div>
          </div>
        </div>
      </div>
  </section>

  <div class="container mx-auto mt-16">
    <!-- component -->
    <section class="max-w-screen-xl flex flex-wrap text-black body-font">
      <div class="container mx-auto flex px-10 md:flex-row flex-col items-center justify-center">
        <!-- Added 'justify-center' class -->
        <div class="lg:flex-grow flex flex-col md:items-center md:text-center mb-16 md:mb-0 items-center text-center">
          <!-- Modified 'md:items-start' and 'md:text-left' to 'md:items-center' and 'md:text-center' -->
          <h1 class="title-font tracking-wide sm:text-3xl md:text-6xl xl:text-7xl mb-4 font-bold text-black ">¿Quiénes
            somos?</h1> <!-- Added 'text-black' class -->
          <p class="mb-8 leading-relaxed opacity-100 text-black ">
            <!-- Added 'text-black' class -->
            Somos una empresa conformada por
            un grupo multidisciplinario de mujeres
            profesionales de diferentes provincias
            del país, con una trayectoria
            importante de trabajo y experiencia en
            empresas públicas y privadas; tenemos
            un recorrido amplio de trabajo social
            con grupos de atención prioritaria.
            Somos multifacéticas y creemos que la
            mujer está preparada para hacer que
            las cosas sucedan.
          </p>
        </div>
      </div>
    </section>
  </div>


  <!----------------CARRUSEL ACCIONISTAS------------------>

  <h1 class="title-font tracking-wide sm:text-3xl md:text-6xl xl:text-4xl mb-4 font-bold" style="margin-left: 40px;">
    SOCIAS - ACCIONISTAS
  </h1>
  <div class="flex justify-center">
    <div class="max-w-7xl w-full lg:flex">
      <div
        class="h-48 lg:h-auto lg:w-48 flex-none bg-cover rounded-t lg:rounded-t-none lg:rounded-l text-center overflow-hidden"
        style="background-image: url('images/Accionista1.png')" title="Woman holding a mug">
      </div>
      <div
        class="border-r border-b border-l border-grey-light lg:border-l-0 lg:border-t lg:border-grey-light bg-white rounded-b lg:rounded-b-none lg:rounded-r p-4 flex flex-col justify-between leading-normal bg-white">
        <div class="mb-8">
          <p class="text-sm text-grey-dark flex items-center">
          </p>
          <div class="text-black font-bold text-xl mb-2">Ing. Sara Yánez, Msc.</div>
          <div class="text-black font-bold text-xl mb-2">Gerente General</div>
          <p class="text-grey-darker text-base">
            Ingeniera en Sistemas ESPE y UDLA. Maestría en Evaluación de la Política Pública IAEN. Egresada de la
            Maestría Dirección de Proyectos UESS. Diplomado en:
            Gobernanza y Liderazgo Político, Políticas Públicas, Liderazgo local IDE Bussines Scholl. Diplomado en
            Liderazgo de los ODS SODECTEC Argentina. Fundadora y
            presidenta de la Red de Profesionales de Cotopaxi. Fundadora y ex presidenta de la Red Nacional de Apoyo a
            la Mujer Ecuatoriana (RENAME). Cofundadora de
            la Red de Gobierno Abierto Ecuador. Designada como Facilitadora de la Red de Economía Violeta de Ecuador.
            Experiencia en Desarrollo de software para la banca privada: PRODUBANCO y Banco Pichincha. Análisis de bases
            de datos de Instituciones Públicas. Desarrollo
            de proyectos sociales con organizaciones de mujeres y grupos vulnerables, Coordinación con la academia para
            el desarrollo de aplicaciones informáticas, que
            servirán para potencializar el emprendimiento y promover el turismo sostenible, la gastronomía y cultura
            comunitaria del Ecuador. Desarrollo de Capacitaciones
            y Formación Continua en temas de economía, gobernanza y política. Apoyo en la elaboración del plan de
            Gobierno Abierto de Ecuador 2019-2022. Miembro
            del Consejo Consultivo de las Negociaciones de la Unión Europea con Ecuador 2018 – 2021. Actualmente,
            apoyando en la Mesa de Justicia Abierta de Ecuador y
            del grupo de Ciencia Abierta de Ecuador.

          </p>
        </div>
      </div>
    </div>
  </div>

  <!-------------------------------------->
  <br>
  <!-------------------------------------->
  <div class="flex justify-center">
    <div class="max-w-7xl w-full lg:flex flex-row-reverse">
      <div
        class="h-48 lg:h-auto lg:w-48 flex-none bg-cover rounded-t lg:rounded-t-none lg:rounded-r text-center overflow-hidden"
        style="background-image: url('images/Accionista2.png')" title="Woman holding a mug">
      </div>
      <div
        class="border-r border-b border-l border-grey-light lg:border-l-0 lg:border-t lg:border-grey-light bg-white rounded-b lg:rounded-b-none lg:rounded-l p-4 flex flex-col justify-between leading-normal bg-white">
        <div class="mb-8">
          <div class="text-black font-bold text-xl mb-2">Arq. Carolina Ramos Pinto, Msc.</div>
          <div class="text-black font-bold text-xl mb-2">Presidenta</div>
          <p class="text-grey-darker text-base">
            Arquitecta con maestría en Dirección de Proyectos. Certificación en Prevención de riesgos laborales:
            construcción y obras públicas. Cursando Diplomado en
            Gestión de Empresas Constructoras, de Arquitectura e Inmobiliarias. Estudios en liderazgo y productividad.
            Experiencia en fiscalización de obras civiles e infraestructura urbana. Desarrollo de estudios de
            consultoría de arquitectura e ingeniería. Coordinadora y
            parte del equipo de proyectos de consultoría de ingeniería en el ámbito de infraestructura sanitaria en
            entidades públicas. Manejo de equipos
            multidisciplinarios.Desarrollo y evaluación de proyectos. Coordinación y desarrollo de estudios
            socioeconómicos y de mercado para consultorías de
            infraestructura sanitaria, vías y regeneración urbana.
          </p>
        </div>
      </div>
    </div>
  </div>
  <!-------------------------------------->
  <br>
  <!-------------------------------------->
  <div class="flex justify-center">
    <div class="max-w-7xl w-full lg:flex">
      <div
        class="h-48 lg:h-auto lg:w-48 flex-none bg-cover rounded-t lg:rounded-t-none lg:rounded-l text-center overflow-hidden"
        style="background-image: url('images/Accionista3.png')" title="Woman holding a mug">
      </div>
      <div
        class="border-r border-b border-l border-grey-light lg:border-l-0 lg:border-t lg:border-grey-light bg-white rounded-b lg:rounded-b-none lg:rounded-r p-4 flex flex-col justify-between leading-normal bg-white">
        <div class="mb-8">
          <div class="text-black font-bold text-xl mb-2">Ec. Carmen López Saravia</div>
          <div class="text-black font-bold text-xl mb-2">Directora Financiera</div>
          <p class="text-grey-darker text-base">
            Economista UCE. Socia del Colegio de Economistas de Pichincha. Profesional orientada a objetivos y metas
            medibles. Certificación en Resiliencia Laboral,
            habilidades blandas y atención al cliente (Enfoque en la norma ISO 9001-2015). Certificación Internacional
            en Hubspot. Escuela de formadores y capacitadores
            banco del Pacífico.
            Experiencia: Elaboración de Presupuestos comerciales y determinación del mercado objetivo. Manejo
            operacional, Digital, Ventas Inbound. Comercio electrónico y
            de servicios. Elaboración de lineamentos comerciales con aplicación nacional. Diseño y manejo de indicadores
            comerciales y de productividad.Captación y
            mantenimiento de socios corporativos. Formular y evaluar planes para la implementación de estrategias
            comerciales. Gestión área comercial (Instituciones
            Financieras y Aseguradoras). Dirección de equipos comerciales de alto rendimientos. Capacitaciones y
            talleres en ventas, liderazgo, motivación, trabajo en equipo,
            servicio al cliente

          </p>
        </div>
      </div>
    </div>
  </div>
  <!-----------------FIN CARRUSEL ACCIONISTAS------->


  {{-- Users --}}
  <section class="max-w-6xl mx-auto px-4 sm:px-6 py-5">
    <div class="text-center pb-12">
      <h1 class="font-bold text-3xl md:text-4xl lg:text-5xl font-heading text-gray-900">
        Check our awesome team members
      </h1>
    </div>
    </div>
  </section>
  <!-- component -->
  <html>

  <head>
    <!-- JIT SUPPORT, for using peer-* below -->
    <script src="https://unpkg.com/tailwindcss-jit-cdn"></script>
  </head>

  <body>
    <div class="min-h-screen bg-gray-100 p-3 relative">
      <div class="w-128 mx-auto" style="scroll-snap-type: x mandatory;">
        <!-- first -->
        <div class="">
          <input class="sr-only peer" type="radio" name="carousel" id="carousel-1" checked />
          <!-- content #1 -->
          <div
            class="w-150 absolute top-1/2 left-1/2 transform -translate-x-1/2 -translate-y-1/2 bg-white rounded-lg shadow-lg transition-all duration-300 opacity-0 peer-checked:opacity-100 peer-checked:z-10 z-0">
            <div class="flex justify-center">
              <img class="rounded-t-lg w-96 h-64"
                src="https://images.unsplash.com/photo-1628788835388-415ee2fa9576?ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&ixlib=rb-1.2.1&auto=format&fit=crop&w=384&q=80"
                alt="" />
            </div>
            <div class="py-4 px-8">
              <h1 class="hover:cursor-pointer mt-2 text-gray-900 font-bold text-2xl tracking-tight">
                Abg. Patricia de Guzmán Valdivieso, Msc
              </h1>
              <p class="hover:cursor-pointer py-3 text-gray-600 leading-6">
                Abogada por la Pontificia Universidad Católica del Ecuador. Máster en
                Política por The University of Manchester en el Reino Unido. Vicepresidente
                de International Youth Democratic Union. Ex Subsecretaria de
                Gobernabilidad en el Ministerio de Gobierno de Guillermo Lasso. Asesora de
                bancada en la Asamblea Nacional del PSC. Asesora del Alcalde de Quito.
                Defensora Pública Penal. Consultora y capacitadora político jurídica, a nivel
                nacional e internacional. Formadora de jóvenes.
              </p>
            </div>
            <!-- controls -->
            <div class="absolute top-1/2 w-full flex justify-between z-20">
              <label for="carousel-3"
                class="inline-block text-primary cursor-pointer -translate-x-5 bg-white rounded-full shadow-md active:translate-y-0.5">
                <svg xmlns="http://www.w3.org/2000/svg" class="h-10 w-10" viewBox="0 0 20 20" fill="currentColor">
                  <path fill-rule="evenodd"
                    d="M10 18a8 8 0 100-16 8 8 0 000 16zm.707-10.293a1 1 0 00-1.414-1.414l-3 3a1 1 0 000 1.414l3 3a1 1 0 001.414-1.414L9.414 11H13a1 1 0 100-2H9.414l1.293-1.293z"
                    clip-rule="evenodd" />
                </svg>
              </label>
              <label for="carousel-2"
                class="inline-block text-primary cursor-pointer translate-x-5 bg-white rounded-full shadow-md active:translate-y-0.5">
                <svg xmlns="http://www.w3.org/2000/svg" class="h-10 w-10" viewBox="0 0 20 20" fill="currentColor">
                  <path fill-rule="evenodd"
                    d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-8.707l-3-3a1 1 0 00-1.414 1.414L10.586 9H7a1 1 0 100 2h3.586l-1.293 1.293a1 1 0 101.414 1.414l3-3a1 1 0 000-1.414z"
                    clip-rule="evenodd" />
                </svg>
              </label>
            </div>
          </div>
        </div>
        <!-- second -->
        <div class="">
          <input class="sr-only peer" type="radio" name="carousel" id="carousel-2" />
          <!-- content #2 -->
          <div
            class="w-150 absolute top-1/2 left-1/2 transform -translate-x-1/2 -translate-y-1/2 bg-white rounded-lg shadow-lg transition-all duration-300 opacity-0 peer-checked:opacity-100 peer-checked:z-10 z-0">
            <div class="flex justify-center">
              <img class="rounded-t-lg w-96 h-64"
                src="https://images.unsplash.com/photo-1628788835388-415ee2fa9576?ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&ixlib=rb-1.2.1&auto=format&fit=crop&w=384&q=80"
                alt="" />
            </div>
            <div class="py-4 px-8">
              <h1 class="hover:cursor-pointer mt-2 text-gray-900 font-bold text-2xl tracking-tight">
                Ing. Silvia Erazo, Msc.
              </h1>
              <p class="hover:cursor-pointer py-3 text-gray-600 leading-6">
                Estudios en Ingeniería Comercial mención Recursos Humanos en la Universidad
                Estatal de Milagro, Maestría en Administración Pública, Capacitadora
                Independiente avalada por el Ministerio de Trabajo en Contratación Pública y
                Gestión de Bodegas y Manejo de Inventarios, Certificación por Competencias
                en Administración, Certificación por Competencias en Formador de
                Formadores. Posee conocimientos y experiencia en Contratación Pública,
                Gestión Administrativa, Levantamiento de Información para establecer Flujo de
                Procesos. Experiencia con más de 10 años en instituciones públicas,
                cumpliendo funciones en jefaturas de mandos medios en área Administrativa y
                Financiera.
              </p>
            </div>
            <!-- controls -->
            <div class="absolute top-1/2 w-full flex justify-between z-20">
              <label for="carousel-1"
                class="inline-block text-quaternary cursor-pointer -translate-x-5 bg-white rounded-full shadow-md active:translate-y-0.5">
                <svg xmlns="http://www.w3.org/2000/svg" class="h-10 w-10" viewBox="0 0 20 20" fill="currentColor">
                  <path fill-rule="evenodd"
                    d="M10 18a8 8 0 100-16 8 8 0 000 16zm.707-10.293a1 1 0 00-1.414-1.414l-3 3a1 1 0 000 1.414l3 3a1 1 0 001.414-1.414L9.414 11H13a1 1 0 100-2H9.414l1.293-1.293z"
                    clip-rule="evenodd" />
                </svg>
              </label>
              <label for="carousel-3"
                class="inline-block text-quaternary cursor-pointer translate-x-5 bg-white rounded-full shadow-md active:translate-y-0.5">
                <svg xmlns="http://www.w3.org/2000/svg" class="h-10 w-10" viewBox="0 0 20 20" fill="currentColor">
                  <path fill-rule="evenodd"
                    d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-8.707l-3-3a1 1 0 00-1.414 1.414L10.586 9H7a1 1 0 100 2h3.586l-1.293 1.293a1 1 0 101.414 1.414l3-3a1 1 0 000-1.414z"
                    clip-rule="evenodd" />
                </svg>
              </label>
            </div>
          </div>
        </div>
        <!-- three -->
        <div class="">
          <input class="sr-only peer" type="radio" name="carousel" id="carousel-3" />
          <!-- content #3 -->
          <div
            class="w-150 absolute top-1/2 left-1/2 transform -translate-x-1/2 -translate-y-1/2 bg-white rounded-lg shadow-lg transition-all duration-300 opacity-0 peer-checked:opacity-100 peer-checked:z-10 z-0">
            <div class="flex justify-center">
              <img class="rounded-t-lg w-96 h-64"
                src="https://images.unsplash.com/photo-1628788835388-415ee2fa9576?ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&ixlib=rb-1.2.1&auto=format&fit=crop&w=384&q=80"
                alt="" />
            </div>
            <div class="py-4 px-8">
              <h1 class="hover:cursor-pointer mt-2 text-gray-900 font-bold text-2xl tracking-tight">
                Ing. Juan Carlos Avilés Aguirre, Msc.
              </h1>
              <p class="hover:cursor-pointer py-3 text-gray-600 leading-6">
                Ingeniero Ambiental, con maestr;iua en Salud, Seguridad y Ambiente. Realizó
                Especialización en Rellenos Sanitarios, infraestructura vial con enfoque de
                Cambio climático y Construcción Sostenible (2021-2022).
                Director Nacional de Gestión Socio Ambiental del Ministerio de Transportes y
                Obras Públicas, 2022. Durante el período 2019-2021 fue Secretario de
                Ambiente del Municipio del Distrito Metropolitano de Quito, espacio en el cual
                permitió aprobar el Plan de acción Climático Quito PACQ 2020.
                Presidente Alianza Profesionales Ambientales del Ecuador. Socio fundador J3M
                energía solar 2019. Presidente del Comité Consultivo de la carrera de
                Ingeniería Ambiental de la UDLA 2021 -2023. Fundador Colegio de Ingenieros
                Ambientales del Ecuador. Consultor Ambiental calificado desde el año 2008
              </p>
            </div>
            <!-- controls -->
            <div class="absolute top-1/2 w-full flex justify-between z-20">
              <label for="carousel-2"
                class="inline-block text-tertiary cursor-pointer -translate-x-5 bg-white rounded-full shadow-md active:translate-y-0.5">
                <svg xmlns="http://www.w3.org/2000/svg" class="h-10 w-10" viewBox="0 0 20 20" fill="currentColor">
                  <path fill-rule="evenodd"
                    d="M10 18a8 8 0 100-16 8 8 0 000 16zm.707-10.293a1 1 0 00-1.414-1.414l-3 3a1 1 0 000 1.414l3 3a1 1 0 001.414-1.414L9.414 11H13a1 1 0 100-2H9.414l1.293-1.293z"
                    clip-rule="evenodd" />
                </svg>
              </label>
              <label for="carousel-1"
                class="inline-block text-tertiary cursor-pointer translate-x-5 bg-white rounded-full shadow-md active:translate-y-0.5">
                <svg xmlns="http://www.w3.org/2000/svg" class="h-10 w-10" viewBox="0 0 20 20" fill="currentColor">
                  <path fill-rule="evenodd"
                    d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-8.707l-3-3a1 1 0 00-1.414 1.414L10.586 9H7a1 1 0 100 2h3.586l-1.293 1.293a1 1 0 101.414 1.414l3-3a1 1 0 000-1.414z"
                    clip-rule="evenodd" />
                </svg>
              </label>
            </div>
          </div>
        </div>
      </div>
    </div>



  </body>

  </html>

  <!-- component -->
  <link crossorigin="anonymous" href="https://cdnjs.cloudflare.com/ajax/libs/Swiper/8.3.2/swiper-bundle.css"
    rel="stylesheet" />

  <style>
    .swiper-pagination {
      bottom: 0;
      position: relative;
    }

    .swiper-container {
      overflow: hidden;
    }

    .swiper-pagination-bullet {
      background-color: rgb(14 211 207);
    }

    .swiper-pagination-bullet-active {
      background-color: rgb(14 211 207);
    }
  </style>
  <div class="bg-no-repeat bg-cover bg-center relative"
    style="background-image: url(https://c.wallhere.com/photos/e5/53/4001x2655_px_art_artwork_church_classic_Cotopaxi_Ecuador_Edwin-1805403.jpg!d);">
    <div class="absolute bg-gradient-to-r from-gray-900 to-gray-900 opacity-75 inset-0 z-0"></div>
    <div>
      <div class="min-h-screen flex justify-center">
        <div class="grid grid-cols-2 gap-4 items-center z-10">
          <div class="max-w-lg text-center sm:text-left">
            <h2 class="text-4xl font-bold text-gray-100 tracking-tight">"Indivualmente <br
                class=" hidden sm:block lg:hidden"> somos una gota, juntos formamos un océano"

            </h2>
            <p class="mt-4 text-gray-300">Ryunosuke Satoro </p>
            <div class="flex flex-row  items-center space-x-3 mt-5"><button type="button" data-te-ripple-init
                data-te-ripple-color="light"
                class="mb-2 inline-block rounded-full p-3 text-xs font-medium uppercase leading-normal text-white shadow-md transition duration-150 ease-in-out hover:shadow-lg focus:shadow-lg focus:outline-none focus:ring-0 active:shadow-lg"
                style="background-color: #c13584"><svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4"
                  fill="currentColor" viewBox="0 0 24 24">
                  <path
                    d="M12 2.163c3.204 0 3.584.012 4.85.07 3.252.148 4.771 1.691 4.919 4.919.058 1.265.069 1.645.069 4.849 0 3.205-.012 3.584-.069 4.849-.149 3.225-1.664 4.771-4.919 4.919-1.266.058-1.644.07-4.85.07-3.204 0-3.584-.012-4.849-.07-3.26-.149-4.771-1.699-4.919-4.92-.058-1.265-.07-1.644-.07-4.849 0-3.204.013-3.583.07-4.849.149-3.227 1.664-4.771 4.919-4.919 1.266-.057 1.645-.069 4.849-.069zm0-2.163c-3.259 0-3.667.014-4.947.072-4.358.2-6.78 2.618-6.98 6.98-.059 1.281-.073 1.689-.073 4.948 0 3.259.014 3.668.072 4.948.2 4.358 2.618 6.78 6.98 6.98 1.281.058 1.689.072 4.948.072 3.259 0 3.668-.014 4.948-.072 4.354-.2 6.782-2.618 6.979-6.98.059-1.28.073-1.689.073-4.948 0-3.259-.014-3.667-.072-4.947-.196-4.354-2.617-6.78-6.979-6.98-1.281-.059-1.69-.073-4.949-.073zm0 5.838c-3.403 0-6.162 2.759-6.162 6.162s2.759 6.163 6.162 6.163 6.162-2.759 6.162-6.163c0-3.403-2.759-6.162-6.162-6.162zm0 10.162c-2.209 0-4-1.79-4-4 0-2.209 1.791-4 4-4s4 1.791 4 4c0 2.21-1.791 4-4 4zm6.406-11.845c-.796 0-1.441.645-1.441 1.44s.645 1.44 1.441 1.44c.795 0 1.439-.645 1.439-1.44s-.644-1.44-1.439-1.44z" />
                </svg></button></div>
          </div>
          <div class="mx-0 max-w-xl flex rounded-2xl bg-primary">
            <div class="swiper-container flex-col flex  self-center">
              <div class="swiper-wrapper">
                <div class="swiper-slide">
                  <blockquote class="text-left ">
                    <div class="relative">
                      <div class="relative"><img
                          src="https://images.unsplash.com/photo-1524601500432-1e1a4c71d692?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=1074&q=80"
                          alt="aji" class="object-cover w-full h-60 mx-auto rounded-t-2xl" />
                        <div class="rounded-t-2xl absolute bg-gradient-to-t from-gray-800 opacity-75 inset-0 z-0">
                        </div>
                      </div>
                    </div>
                    <div class="relative m-5 p-5"><svg class="absolute left-0 w-6  fill-tertiary" viewBox="0 0 512 512"
                        xmlns="http://www.w3.org/2000/svg">
                        <path
                          d="M464 256h-80v-64c0-35.3 28.7-64 64-64h8c13.3 0 24-10.7 24-24V56c0-13.3-10.7-24-24-24h-8c-88.4 0-160 71.6-160 160v240c0 26.5 21.5 48 48 48h128c26.5 0 48-21.5 48-48V304c0-26.5-21.5-48-48-48zm-288 0H96v-64c0-35.3 28.7-64 64-64h8c13.3 0 24-10.7 24-24V56c0-13.3-10.7-24-24-24h-8C71.6 32 0 103.6 0 192v240c0 26.5 21.5 48 48 48h128c26.5 0 48-21.5 48-48V304c0-26.5-21.5-48-48-48z" />
                      </svg>
                      <p class="text-gray-100 text-xl px-5">Lorem ipsum dolor sit amet consectetur
                        adipisicing elit.
                        Magni assumenda officiis sit amet itaque eveniet accusantium corporis
                        tempora. </p><svg class="absolute right-0  w-6 fill-tertiary" viewBox="0 0 512 512"
                        xmlns="http://www.w3.org/2000/svg">
                        <path
                          d="M464 32H336c-26.5 0-48 21.5-48 48v128c0 26.5 21.5 48 48 48h80v64c0 35.3-28.7 64-64 64h-8c-13.3 0-24 10.7-24 24v48c0 13.3 10.7 24 24 24h8c88.4 0 160-71.6 160-160V80c0-26.5-21.5-48-48-48zm-288 0H48C21.5 32 0 53.5 0 80v128c0 26.5 21.5 48 48 48h80v64c0 35.3-28.7 64-64 64h-8c-13.3 0-24 10.7-24 24v48c0 13.3 10.7 24 24 24h8c88.4 0 160-71.6 160-160V80c0-26.5-21.5-48-48-48z" />
                      </svg>
                      <div class="text-sm mt-5 mx-5">
                        <p class="font-medium text-white">Ajimon</p>
                        <p class="mt-1 text-gray-300">CEO Of Marketing </p>
                      </div>
                    </div>
                  </blockquote>
                </div>
                <div class="swiper-slide">
                  <blockquote class="text-left">
                    <div class="">
                      <div class="relative"><img
                          src="https://images.unsplash.com/photo-1524601500432-1e1a4c71d692?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=1074&q=80"
                          alt="aji" class="object-cover w-full mx-auto rounded-t-2xl h-60" />
                        <div class="rounded-t-2xl absolute bg-gradient-to-t from-gray-800 opacity-75 inset-0 z-0">
                        </div>
                      </div>
                    </div>
                    <div class="relative relative m-5 p-5"><svg class="absolute left-0  w-6  fill-tertiary"
                        viewBox="0 0 512 512" xmlns="http://www.w3.org/2000/svg">
                        <path
                          d="M464 256h-80v-64c0-35.3 28.7-64 64-64h8c13.3 0 24-10.7 24-24V56c0-13.3-10.7-24-24-24h-8c-88.4 0-160 71.6-160 160v240c0 26.5 21.5 48 48 48h128c26.5 0 48-21.5 48-48V304c0-26.5-21.5-48-48-48zm-288 0H96v-64c0-35.3 28.7-64 64-64h8c13.3 0 24-10.7 24-24V56c0-13.3-10.7-24-24-24h-8C71.6 32 0 103.6 0 192v240c0 26.5 21.5 48 48 48h128c26.5 0 48-21.5 48-48V304c0-26.5-21.5-48-48-48z" />
                      </svg>
                      <p class="text-gray-100 text-xl px-5">Lorem ipsum dolor sit amet consectetur
                        adipisicing elit.
                        Magni assumenda officiis sit amet itaque eveniet accusantium corporis
                        tempora. </p><svg class="absolute right-0 w-6 fill-tertiary" viewBox="0 0 512 512"
                        xmlns="http://www.w3.org/2000/svg">
                        <path
                          d="M464 32H336c-26.5 0-48 21.5-48 48v128c0 26.5 21.5 48 48 48h80v64c0 35.3-28.7 64-64 64h-8c-13.3 0-24 10.7-24 24v48c0 13.3 10.7 24 24 24h8c88.4 0 160-71.6 160-160V80c0-26.5-21.5-48-48-48zm-288 0H48C21.5 32 0 53.5 0 80v128c0 26.5 21.5 48 48 48h80v64c0 35.3-28.7 64-64 64h-8c-13.3 0-24 10.7-24 24v48c0 13.3 10.7 24 24 24h8c88.4 0 160-71.6 160-160V80c0-26.5-21.5-48-48-48z" />
                      </svg>
                      <div class="text-sm mt-5 mx-5">
                        <p class="font-medium text-white">John Doe</p>
                        <p class="mt-1 text-gray-300">Marketing Manager </p>
                      </div>
                    </div>
                  </blockquote>
                </div>
              </div>
              <div class="mt-12 swiper-pagination hidden"></div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>

  @component('layouts.components.footer') @endcomponent
  {{-- Scripts --}}
  <script src="js/app.js"></script>
</body>

</html>

<script crossorigin="anonymous" defer src="https://cdnjs.cloudflare.com/ajax/libs/Swiper/8.3.2/swiper-bundle.min.js"></script>

<script>
  const slides = document.querySelectorAll(".slide");
  const indicators = document.querySelectorAll(".indicator");
  let currentSlide = 0;

  setInterval(() => {
    goToSlide((currentSlide + 1) % slides.length);
  }, 5000);

  const prevButton = document.querySelector(".button:first-child");
  const nextButton = document.querySelector(".button:last-child");

  prevButton.addEventListener("click", () => {
    goToSlide((currentSlide - 1 + slides.length) % slides.length);
  });

  nextButton.addEventListener("click", () => {
    goToSlide((currentSlide + 1) % slides.length);
  });

  indicators.forEach((indicator, index) => {
    indicator.addEventListener("click", () => {
      goToSlide(index);
    });
  });

  function goToSlide(index) {
    slides[currentSlide].classList.remove("opacity-100");
    indicators[currentSlide].classList.remove("bg-white");
    currentSlide = index;
    slides[currentSlide].classList.add("opacity-100");
    indicators[currentSlide].classList.add("bg-white");
  }

  document.addEventListener("DOMContentLoaded", function () {
    new Swiper(".swiper-container", {
      loop: true,
      slidesPerView: 1,
      spaceBetween: 8,
      autoplay: {
        delay: 8000,
      },

      pagination: {
        el: ".swiper-pagination",
        clickable: true,
      },

      breakpoints: {
        640: {
          slidesPerView: 1.5,
        },

        1024: {
          slidesPerView: 1,
        },
      },
    });
  });
</script>
