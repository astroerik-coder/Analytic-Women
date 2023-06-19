<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Inicio</title>
    <!-- Enlace al archivo CSS de Tailwind -->
    <link href="{{ asset( 'css/app.css' ) }}" rel="stylesheet">
    <link rel="stylesheet" href="css/accionistas.jss">
    <script src="js/accionistas.js"></script>
</head>

<body class="bg-gray-100">

    <!-- Barra de navegación -->
    @component('layouts.components.navbar')@endcomponent

      
    <!-- Botón flotante de WhatsApp -->
    <a href="https://api.whatsapp.com/" target="_blank" class="floating-button-whatsapp bg-green-500 hover:bg-green-600 text-white rounded-full p-2 shadow-lg">
        <svg class="w-6 h-6" viewBox="0 0 24 24" fill="currentColor">
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 12l1-2h2l1 2h10l1-2h2l1 2v4a1 1 0 01-1 1H4a1 1 0 01-1-1v-4zm8-2a2 2 0 100-4 2 2 0 000 4z" />
        </svg>
    </a>

    <!-- Botón flotante para ir arriba -->
    <a href="#" class="floating-button-up bg-primary hover:bg-tertiary text-white rounded-full p-2 shadow-lg">
        <svg class="w-6 h-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 10l7-7m0 0l7 7m-7-7v18" />
        </svg>
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
        <div
            class="button-container absolute top-1/2 left-0 transform -translate-y-1/2 w-full flex justify-between z-10">
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


    <!-- Contenido principal -->
    <div class="container mx-auto mt-16">
        <!-- component -->
        <section class="max-w-screen-xl flex flex-wrap text-black body-font">
            <div class="container mx-auto flex px-5 py-5 md:flex-row flex-col items-center">
                <div
                    class="lg:flex-grow flex flex-col md:items-start md:text-left mb-16 md:mb-0 items-center text-center">
                    <h1 class="title-font tracking-wide sm:text-3xl md:text-6xl xl:text-7xl mb-4 font-bold ">¿Quiénes
                        somos?
                    </h1>
                    <p class="mb-8 leading-relaxed opacity-50 ">
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
      <div class="h-48 lg:h-auto lg:w-48 flex-none bg-cover rounded-t lg:rounded-t-none lg:rounded-l text-center overflow-hidden" style="background-image: url('images/Accionista1.png')" title="Woman holding a mug">
      </div>
      <div class="border-r border-b border-l border-grey-light lg:border-l-0 lg:border-t lg:border-grey-light bg-white rounded-b lg:rounded-b-none lg:rounded-r p-4 flex flex-col justify-between leading-normal bg-pink-300">
        <div class="mb-8">
          <p class="text-sm text-grey-dark flex items-center">
          </p>
          <div class="text-black font-bold text-xl mb-2">Ing. Sara Yánez, Msc.</div>
          <div class="text-black font-bold text-xl mb-2">Gerente General</div>
          <p class="text-grey-darker text-base">
            Ingeniera en Sistemas ESPE y UDLA. Maestría en Evaluación de la Política Pública IAEN. Egresada de la Maestría Dirección de Proyectos UESS. Diplomado en:
Gobernanza y Liderazgo Político, Políticas Públicas, Liderazgo local IDE Bussines Scholl. Diplomado en Liderazgo de los ODS SODECTEC Argentina. Fundadora y
presidenta de la Red de Profesionales de Cotopaxi. Fundadora y ex presidenta de la Red Nacional de Apoyo a la Mujer Ecuatoriana (RENAME). Cofundadora de
la Red de Gobierno Abierto Ecuador. Designada como Facilitadora de la Red de Economía Violeta de Ecuador.
Experiencia en Desarrollo de software para la banca privada: PRODUBANCO y Banco Pichincha. Análisis de bases de datos de Instituciones Públicas. Desarrollo
de proyectos sociales con organizaciones de mujeres y grupos vulnerables, Coordinación con la academia para el desarrollo de aplicaciones informáticas, que
servirán para potencializar el emprendimiento y promover el turismo sostenible, la gastronomía y cultura comunitaria del Ecuador. Desarrollo de Capacitaciones
y Formación Continua en temas de economía, gobernanza y política. Apoyo en la elaboración del plan de Gobierno Abierto de Ecuador 2019-2022. Miembro
del Consejo Consultivo de las Negociaciones de la Unión Europea con Ecuador 2018 – 2021. Actualmente, apoyando en la Mesa de Justicia Abierta de Ecuador y
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
      <div class="h-48 lg:h-auto lg:w-48 flex-none bg-cover rounded-t lg:rounded-t-none lg:rounded-r text-center overflow-hidden" style="background-image: url('images/Accionista2.png')" title="Woman holding a mug">
      </div>
      <div class="border-r border-b border-l border-grey-light lg:border-l-0 lg:border-t lg:border-grey-light bg-white rounded-b lg:rounded-b-none lg:rounded-l p-4 flex flex-col justify-between leading-normal bg-pink-300">
        <div class="mb-8">
            <div class="text-black font-bold text-xl mb-2">Arq. Carolina Ramos Pinto, Msc.</div>
            <div class="text-black font-bold text-xl mb-2">Presidenta</div>
          <p class="text-grey-darker text-base">
            Arquitecta con maestría en Dirección de Proyectos. Certificación en Prevención de riesgos laborales: construcción y obras públicas. Cursando Diplomado en
Gestión de Empresas Constructoras, de Arquitectura e Inmobiliarias. Estudios en liderazgo y productividad.
Experiencia en fiscalización de obras civiles e infraestructura urbana. Desarrollo de estudios de consultoría de arquitectura e ingeniería. Coordinadora y
parte del equipo de proyectos de consultoría de ingeniería en el ámbito de infraestructura sanitaria en entidades públicas. Manejo de equipos
multidisciplinarios.Desarrollo y evaluación de proyectos. Coordinación y desarrollo de estudios socioeconómicos y de mercado para consultorías de
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
      <div class="h-48 lg:h-auto lg:w-48 flex-none bg-cover rounded-t lg:rounded-t-none lg:rounded-l text-center overflow-hidden" style="background-image: url('images/Accionista3.png')" title="Woman holding a mug">
      </div>
      <div class="border-r border-b border-l border-grey-light lg:border-l-0 lg:border-t lg:border-grey-light bg-white rounded-b lg:rounded-b-none lg:rounded-r p-4 flex flex-col justify-between leading-normal bg-pink-300">
        <div class="mb-8">
            <div class="text-black font-bold text-xl mb-2">Ec. Carmen López Saravia</div>
            <div class="text-black font-bold text-xl mb-2">Directora Financiera</div>
          <p class="text-grey-darker text-base">
            Economista UCE. Socia del Colegio de Economistas de Pichincha. Profesional orientada a objetivos y metas medibles. Certificación en Resiliencia Laboral,
habilidades blandas y atención al cliente (Enfoque en la norma ISO 9001-2015). Certificación Internacional en Hubspot. Escuela de formadores y capacitadores
banco del Pacífico.
Experiencia: Elaboración de Presupuestos comerciales y determinación del mercado objetivo. Manejo operacional, Digital, Ventas Inbound. Comercio electrónico y
de servicios. Elaboración de lineamentos comerciales con aplicación nacional. Diseño y manejo de indicadores comerciales y de productividad.Captación y
mantenimiento de socios corporativos. Formular y evaluar planes para la implementación de estrategias comerciales. Gestión área comercial (Instituciones
Financieras y Aseguradoras). Dirección de equipos comerciales de alto rendimientos. Capacitaciones y talleres en ventas, liderazgo, motivación, trabajo en equipo,
servicio al cliente

          </p>
        </div>
      </div>
    </div>
  </div>
  
  
  
  
  

  
  
  
  
      

  
    
  
  


<!-----------------FIN CARRUSEL ACCIONISTAS------->



    {{-- Empresa --}}
    <div class="py-16 white">
        <div class="container m-auto px-6 text-gray-600 md:px-12 xl:px-6">
            <h2 class="mb-12 text-center text-2xl text-gray-900 font-bold md:text-4xl">Socias Accionistas</h2>
            <div class="grid gap-8 md:grid-rows-2 lg:grid-cols-2">
                <div class="row-span-2 p-6 border border-gray-100 rounded-xl bg-gray-50 text-center sm:p-8">
                    <div class="h-full flex flex-col justify-center space-y-4">
                        <img class="w-20 h-20 mx-auto rounded-full"
                            src="https://img.icons8.com/?size=512&id=82220&format=png" alt="user avatar" height="220"
                            width="220" loading="lazy">
                        <div>
                            <h6 class="text-lg font-semibold leading-none">Ing. Sara Yánez, Msc.</h6>
                            <span class="text-xs text-gray-500">Gerente General</span>
                        </div>
                        <p class="text-gray-600">
                            Ingeniera en Sistemas ESPE y UDLA. Maestría en Evaluación de la Política Pública IAEN.
                            Egresada de la Maestría Dirección de Proyectos UESS. Diplomado en:
                            Gobernanza y Liderazgo Político, Políticas Públicas, Liderazgo local IDE Bussines Scholl.
                            Diplomado en Liderazgo de los ODS SODECTEC Argentina. Fundadora y
                            presidenta de la Red de Profesionales de Cotopaxi. Fundadora y ex presidenta de la Red
                            Nacional de Apoyo a la Mujer Ecuatoriana (RENAME). Cofundadora de
                            la Red de Gobierno Abierto Ecuador. Designada como Facilitadora de la Red de Economía
                            Violeta de Ecuador.
                            Experiencia en Desarrollo de software para la banca privada: PRODUBANCO y Banco Pichincha.
                            Análisis de bases de datos de Instituciones Públicas. Desarrollo
                            de proyectos sociales con organizaciones de mujeres y grupos vulnerables, Coordinación con
                            la academia para el desarrollo de aplicaciones informáticas, que
                            servirán para potencializar el emprendimiento y promover el turismo sostenible, la
                            gastronomía y cultura comunitaria del Ecuador. Desarrollo de Capacitaciones
                            y Formación Continua en temas de economía, gobernanza y política. Apoyo en la elaboración
                            del plan de Gobierno Abierto de Ecuador 2019-2022. Miembro
                            del Consejo Consultivo de las Negociaciones de la Unión Europea con Ecuador 2018 – 2021.
                            Actualmente, apoyando en la Mesa de Justicia Abierta de Ecuador y
                            del grupo de Ciencia Abierta de Ecuador.
                        </p>

                    </div>
                </div>

                <div class="p-6 border border-gray-100 rounded-xl bg-gray-50 sm:flex sm:space-x-8 sm:p-8">
                    <img class="w-20 h-20 mx-auto rounded-full"
                        src="https://img.icons8.com/?size=512&id=82220&format=png" alt="user avatar" height="220"
                        width="220" loading="lazy">
                    <div class="space-y-4 mt-4 text-center sm:mt-0 sm:text-left">
                        <div>
                            <h6 class="text-lg font-semibold leading-none">Arq. Carolina Ramos Pinto, Msc.</h6>
                            <span class="text-xs text-gray-500">Presidenta</span>
                        </div>
                        <p class="text-gray-600">Arquitecta con maestría en Dirección de Proyectos. Certificación en
                            Prevención de riesgos laborales: construcción y obras públicas. Cursando Diplomado en
                            Gestión de Empresas Constructoras, de Arquitectura e Inmobiliarias. Estudios en liderazgo y
                            productividad.
                            Experiencia en fiscalización de obras civiles e infraestructura urbana. Desarrollo de
                            estudios de consultoría de arquitectura e ingeniería. Coordinadora y
                            parte del equipo de proyectos de consultoría de ingeniería en el ámbito de infraestructura
                            sanitaria en entidades públicas. Manejo de equipos
                            multidisciplinarios.Desarrollo y evaluación de proyectos. Coordinación y desarrollo de
                            estudios socioeconómicos y de mercado para consultorías de
                            infraestructura sanitaria, vías y regeneración urbana.
                        </p>
                    </div>
                </div>
                <div class="p-6 border border-gray-100 rounded-xl bg-gray-50 sm:flex sm:space-x-8 sm:p-8">
                    <img class="w-20 h-20 mx-auto rounded-full"
                        src="https://img.icons8.com/?size=512&id=82220&format=png" alt="user avatar" height="220"
                        width="220" loading="lazy">
                    <div class="space-y-4 mt-4 text-center sm:mt-0 sm:text-left">
                        <div>
                            <h6 class="text-lg font-semibold leading-none">Ec. Carmen López Saravia</h6>
                            <span class="text-xs text-gray-500">Directora Financiera</span>
                        </div>
                        <p class="text-gray-600">Economista UCE. Socia del Colegio de Economistas de Pichincha.
                            Profesional orientada a objetivos y metas medibles. Certificación en Resiliencia Laboral,
                            habilidades blandas y atención al cliente (Enfoque en la norma ISO 9001-2015). Certificación
                            Internacional en Hubspot. Escuela de formadores y capacitadores
                            banco del Pacífico.
                            Experiencia: Elaboración de Presupuestos comerciales y determinación del mercado objetivo.
                            Manejo operacional, Digital, Ventas Inbound. Comercio electrónico y
                            de servicios. Elaboración de lineamentos comerciales con aplicación nacional. Diseño y
                            manejo de indicadores comerciales y de productividad.Captación y
                            mantenimiento de socios corporativos. Formular y evaluar planes para la implementación de
                            estrategias comerciales. Gestión área comercial (Instituciones
                            Financieras y Aseguradoras). Dirección de equipos comerciales de alto rendimientos.
                            Capacitaciones y talleres en ventas, liderazgo, motivación, trabajo en equipo,
                            servicio al cliente.
                        </p>

                    </div>
                </div>
            </div>
        </div>
    </div>

    {{-- Users --}}
    <section class="max-w-6xl mx-auto px-4 sm:px-6 lg:px-4 py-12">
        <div class="text-center pb-12">
            <h2 class="text-base font-bold text-indigo-600">
                Socias-Accionistas
            </h2>
            <h1 class="font-bold text-3xl md:text-4xl lg:text-5xl font-heading text-gray-900">
                Check our awesome team members
            </h1>
        </div>
        <div class="grid grid-cols-1 lg:grid-cols-2 gap-6">
            <div class="w-full bg-white rounded-lg sahdow-lg overflow-hidden flex flex-col md:flex-row">
                <div class="w-full md:w-2/5 h-80">
                    <img class="object-center object-cover w-full h-full"
                        src="https://images.unsplash.com/flagged/photo-1570612861542-284f4c12e75f?ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&ixlib=rb-1.2.1&auto=format&fit=crop&w=1170&q=80"
                        alt="photo">
                </div>
                <div class="w-full md:w-3/5 text-left p-6 md:p-4 space-y-2">
                    <p class="text-xl text-gray-700 font-bold">Dany Bailey</p>
                    <p class="text-base text-gray-400 font-normal">Software Engineer</p>
                    <p class="text-base leading-relaxed text-gray-500 font-normal">Lorem ipsum dolor sit amet,
                        consectetur
                        adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
                    <div class="flex justify-start space-x-2">
                    </div>
                </div>
            </div>
            <div class="w-full bg-white rounded-lg sahdow-lg overflow-hidden flex flex-col md:flex-row">
                <div class="w-full md:w-2/5 h-80">
                    <img class="object-center object-cover w-full h-full"
                        src="https://images.unsplash.com/photo-1438761681033-6461ffad8d80?ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&ixlib=rb-1.2.1&auto=format&fit=crop&w=1170&q=80"
                        alt="photo">
                </div>
                <div class="w-full md:w-3/5 text-left p-4 md:p-4 space-y-2">
                    <p class="text-xl text-gray-700 font-bold">Lucy Carter</p>
                    <p class="text-base text-gray-400 font-normal">Graphic Designer</p>
                    <p class="text-base leading-relaxed text-gray-500 font-normal">Lorem ipsum dolor sit amet,
                        consectetur
                        adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
                    <div class="flex justify-start space-x-2">

                    </div>
                </div>
            </div>
            <div class="w-full bg-white rounded-lg sahdow-lg overflow-hidden flex flex-col md:flex-row">
                <div class="w-full md:w-2/5 h-80">
                    <img class="object-center object-cover w-full h-full"
                        src="https://images.unsplash.com/photo-1499952127939-9bbf5af6c51c?ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&ixlib=rb-1.2.1&auto=format&fit=crop&w=1176&q=80"
                        alt="photo">
                </div>
                <div class="w-full md:w-3/5 text-left p-4 md:p-4 space-y-2">
                    <p class="text-xl text-gray-700 font-bold">Jade Bradley</p>
                    <p class="text-base text-gray-400 font-normal">Dev Ops</p>
                    <p class="text-base leading-relaxed text-gray-500 font-normal">Lorem ipsum dolor sit amet,
                        consectetur
                        adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
                    <div class="flex justify-start space-x-2">
                    </div>
                </div>
            </div>

            <div class="w-full bg-white rounded-lg sahdow-lg overflow-hidden flex flex-col md:flex-row">
                <div class="w-full md:w-2/5 h-80">
                    <img class="object-center object-cover w-full h-full"
                        src="https://images.unsplash.com/photo-1438761681033-6461ffad8d80?ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&ixlib=rb-1.2.1&auto=format&fit=crop&w=1170&q=80"
                        alt="photo">
                </div>
                <div class="w-full md:w-3/5 text-left p-4 md:p-4 space-y-2">
                    <p class="text-xl text-gray-700 font-bold">Lucy Carter</p>
                    <p class="text-base text-gray-400 font-normal">Graphic Designer</p>
                    <p class="text-base leading-relaxed text-gray-500 font-normal">Lorem ipsum dolor sit amet,
                        consectetur
                        adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
                    <div class="flex justify-start space-x-2">

                    </div>
                </div>
            </div>
        </div>
        </div>
    </section>

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
                        <div class="flex flex-row  items-center space-x-3 mt-5"><button type="button"
                                data-te-ripple-init data-te-ripple-color="light"
                                class="mb-2 inline-block rounded-full p-3 text-xs font-medium uppercase leading-normal text-white shadow-md transition duration-150 ease-in-out hover:shadow-lg focus:shadow-lg focus:outline-none focus:ring-0 active:shadow-lg"
                                style="background-color: #c13584"><svg xmlns="http://www.w3.org/2000/svg"
                                    class="h-4 w-4" fill="currentColor" viewBox="0 0 24 24">
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
                                                <div
                                                    class="rounded-t-2xl absolute bg-gradient-to-t from-gray-800 opacity-75 inset-0 z-0">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="relative m-5 p-5"><svg class="absolute left-0 w-6  fill-tertiary"
                                                viewBox="0 0 512 512" xmlns="http://www.w3.org/2000/svg">
                                                <path
                                                    d="M464 256h-80v-64c0-35.3 28.7-64 64-64h8c13.3 0 24-10.7 24-24V56c0-13.3-10.7-24-24-24h-8c-88.4 0-160 71.6-160 160v240c0 26.5 21.5 48 48 48h128c26.5 0 48-21.5 48-48V304c0-26.5-21.5-48-48-48zm-288 0H96v-64c0-35.3 28.7-64 64-64h8c13.3 0 24-10.7 24-24V56c0-13.3-10.7-24-24-24h-8C71.6 32 0 103.6 0 192v240c0 26.5 21.5 48 48 48h128c26.5 0 48-21.5 48-48V304c0-26.5-21.5-48-48-48z" />
                                            </svg>
                                            <p class="text-gray-100 text-xl px-5">Lorem ipsum dolor sit amet consectetur
                                                adipisicing elit.
                                                Magni assumenda officiis sit amet itaque eveniet accusantium corporis
                                                tempora. </p><svg class="absolute right-0  w-6 fill-tertiary"
                                                viewBox="0 0 512 512" xmlns="http://www.w3.org/2000/svg">
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
                                                <div
                                                    class="rounded-t-2xl absolute bg-gradient-to-t from-gray-800 opacity-75 inset-0 z-0">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="relative relative m-5 p-5"><svg
                                                class="absolute left-0  w-6  fill-tertiary" viewBox="0 0 512 512"
                                                xmlns="http://www.w3.org/2000/svg">
                                                <path
                                                    d="M464 256h-80v-64c0-35.3 28.7-64 64-64h8c13.3 0 24-10.7 24-24V56c0-13.3-10.7-24-24-24h-8c-88.4 0-160 71.6-160 160v240c0 26.5 21.5 48 48 48h128c26.5 0 48-21.5 48-48V304c0-26.5-21.5-48-48-48zm-288 0H96v-64c0-35.3 28.7-64 64-64h8c13.3 0 24-10.7 24-24V56c0-13.3-10.7-24-24-24h-8C71.6 32 0 103.6 0 192v240c0 26.5 21.5 48 48 48h128c26.5 0 48-21.5 48-48V304c0-26.5-21.5-48-48-48z" />
                                            </svg>
                                            <p class="text-gray-100 text-xl px-5">Lorem ipsum dolor sit amet consectetur
                                                adipisicing elit.
                                                Magni assumenda officiis sit amet itaque eveniet accusantium corporis
                                                tempora. </p><svg class="absolute right-0 w-6 fill-tertiary"
                                                viewBox="0 0 512 512" xmlns="http://www.w3.org/2000/svg">
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
</body>

</html>



<script>
    const slides = document.querySelectorAll('.slide');
const indicators = document.querySelectorAll('.indicator');
let currentSlide = 0;

setInterval(() => {
goToSlide((currentSlide + 1) % slides.length);
}, 5000);

const prevButton = document.querySelector('.button:first-child');
const nextButton = document.querySelector('.button:last-child');

prevButton.addEventListener('click', () => {
goToSlide((currentSlide - 1 + slides.length) % slides.length);
});

nextButton.addEventListener('click', () => {
goToSlide((currentSlide + 1) % slides.length);
});

indicators.forEach((indicator, index) => {
indicator.addEventListener('click', () => {
  goToSlide(index);
});
});

function goToSlide(index) {
slides[currentSlide].classList.remove('opacity-100');
indicators[currentSlide].classList.remove('bg-white');
currentSlide = index;
slides[currentSlide].classList.add('opacity-100');
indicators[currentSlide].classList.add('bg-white');
}
</script>

<script crossorigin="anonymous" defer src="https://cdnjs.cloudflare.com/ajax/libs/Swiper/8.3.2/swiper-bundle.min.js">
</script>
<script>
    document.addEventListener('DOMContentLoaded', function () {
        new Swiper('.swiper-container', {

          loop: true,
          slidesPerView: 1,
          spaceBetween: 8,
          autoplay: {
            delay: 8000,
          }

          ,
          pagination: {
            el: '.swiper-pagination',
            clickable: true,
          }

          ,
          breakpoints: {
            640: {
              slidesPerView: 1.5,
            }

            ,
            1024: {
              slidesPerView: 1,
            }

            ,
          }

          ,
        })

    }) 
</script>