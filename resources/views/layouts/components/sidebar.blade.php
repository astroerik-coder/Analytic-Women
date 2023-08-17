<link href="{{ asset( 'css/dashboard.css' ) }}" rel="stylesheet">
<link href="{{ asset( 'css/app.css' ) }}" rel="stylesheet">
<link crossorigin="anonymous" href="https://cdnjs.cloudflare.com/ajax/libs/Swiper/8.3.2/swiper-bundle.css" rel="stylesheet" />

{{-- Barra de navegacion --}}
<nav id="navbar" class="fixed top-0 z-40 flex w-full flex-row justify-end bg-tertiary px-4 sm:justify-between">
    <button id="btnSidebarToggler" type="button" class="py-4 text-2xl text-white hover:text-gray-200">
        <svg id="navClosed" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
            stroke="currentColor" class="h-8 w-8">
            <path stroke-linecap="round" stroke-linejoin="round" d="M3.75 6.75h16.5M3.75 12h16.5m-16.5 5.25h16.5" />
        </svg>
        <svg id="navOpen" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
            stroke="currentColor" class="hidden h-8 w-8">
            <path stroke-linecap="round" stroke-linejoin="round" d="M6 18L18 6M6 6l12 12" />
        </svg>
    </button>

    <!-- Dropdown button de usuario -->
    <div class="relative inline-block">
        <button id="dropdownButton" class="relative z-10 flex items-center py-4 text-sm text-white hover:text-gray-200">
            <img class="flex-shrink-0 object-cover mx-1 rounded-full w-9 h-9"
                src="{{ Auth::user()->profile_photo_url }}" alt="Avatar de usuario">
            <span class="mx-1">{{ Auth::user()->name }}</span>
            <svg class="w-5 h-5 mx-1" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                <path d="M10 15.713L18.01 9.70299L16.597 8.28799L12 12.888L7.40399 8.28799L5.98999 9.70199L12 15.713Z"
                    fill="currentColor"></path>
            </svg>
        </button>

        <!-- Dropdown menu de usuario -->
        <div class="absolute right-0 z-20 w-56 mt-2 -mr-2 overflow-hidden bg-tertiary rounded-md shadow-xl dark:bg-gray-800 hidden"
            id="dropdownMenu">
            <a href="#"
                class="flex items-center p-3 text-sm text-gray-600 transition-colors duration-200 transform dark:text-gray-300 hover:bg-gray-600 dark:hover:bg-gray-700 dark:hover:text-white">
                <img class="flex-shrink-0 object-cover mx-1 rounded-full w-9 h-9"
                    src="{{ Auth::user()->profile_photo_url }}" alt="Usuario">
                <div class="mx-1">
                    <h1 class="text-sm font-semibold text-gray-100 dark:text-gray-600"> {{ Auth::user()->name }}</h1>
                    <p class="text-sm text-gray-100 dark:text-gray-600">{{ Auth::user()->email }}</p>
                </div>
            </a>

            <hr class="border-gray-200 dark:border-gray-700 ">
            <a href="{{ route('profile.show') }}"
                class="block px-4 py-3 text-sm text-gray-100 capitalize transition-colors duration-200 transform dark:text-gray-100 hover:bg-gray-600 dark:hover:bg-gray-700 dark:hover:text-white">
                Configuración
            </a>
            <hr class="border-gray-200 dark:border-gray-700 ">
            <form method="POST" action="{{ route('logout') }}">
                @csrf
                <a href="#" onclick="event.preventDefault(); this.closest('form').submit();"
                    class="block px-4 py-3 text-sm text-gray-100 hover:bg-red-400 hover:text-white capitalize transition-colors duration-200 transform dark:text-white dark:hover:bg-gray-700 dark:hover:text-white">
                    Cerrar Sesión
                </a>
            </form>

        </div>
    </div>
</nav>

<!-- Navbar end -->

<!-- Sidebar start-->
<div id="containerSidebar" class="z-40">
    <div class="navbar-menu relative z-40">
        <nav id="sidebar"
            class="fixed left-0 bottom-0 flex w-1/4 -translate-x-full flex-col overflow-y-auto bg-tertiary pt-6 pb-8 sm:max-w-xs lg:w-80">
            <div class="px-4 pb-6">
                {{-- --}}
                <div class="p-2.5 mt-1 flex items-center">
                    <img src="{{ asset('images/Analytika Women.png') }}" width="64px" height="64px">
                    <h1 class="font-bold text-gray-200 text-[15px] ml-3">Analytika Women</h1>
                    <i class="bi bi-x cursor-pointer ml-28 lg:hidden" onclick="openSidebar()"></i>
                </div>

                <div>
                    <div class="inline-block mb-6 rounded-full bg-secundary pr-5 h-16 line-height-username1">
                        <img class="rounded-full float-left h-full" src="{{ Auth::user()->profile_photo_url }}"> <span
                            class="ml-3">{{ Auth::user()->name }}</span>
                    </div>
                </div>
                {{-- --}}
                <hr>
                <ul class="mb-8 text-sm font-medium">
                    <li>
                        <a class="flex items-center rounded mt-5 py-3 pl-3 pr-4 text-gray-50 hover:bg-gray-600"
                            href="dashboard">
                            <span class="select-none">Panel</span>
                        </a>
                    </li>
                    <li>
                        <a class="flex items-center rounded py-3 pl-3 pr-4 text-gray-50 hover:bg-gray-600" href="crud">
                            <span class="select-none">Generador</span>
                        </a>
                    </li>
                    <hr>
                </ul>
            </div>
            <div class="px-4 pb-6">
                <h3 class="mb-2 text-xs font-medium uppercase text-gray-500">
                    Tablas
                </h3>
                <ul class="mb-8 text-sm font-medium">
                   {{--  <li>
                        <a class="active flex items-center rounded py-3 pl-3 pr-4 text-gray-50 hover:bg-gray-600"
                            href="blogs">
                            <span class="select-none">Blogs</span>
                        </a>
                    </li> --}}
                    <li>
                        <a class="active flex items-center rounded py-3 pl-3 pr-4 text-gray-50 hover:bg-gray-600"
                            href="categorias">
                            <span class="select-none">Categorias</span>
                        </a>
                    </li>
                    <li>
                        <a class="active flex items-center rounded py-3 pl-3 pr-4 text-gray-50 hover:bg-gray-600"
                            href="ciudades">
                            <span class="select-none">Ciudades</span>
                        </a>
                    </li>
                    <li>
                        <a class="active flex items-center rounded py-3 pl-3 pr-4 text-gray-50 hover:bg-gray-600"
                            href="clientes">
                            <span class="select-none">Clientes</span>
                        </a>
                    </li>
                    <li>
                        <a class="active flex items-center rounded py-3 pl-3 pr-4 text-gray-50 hover:bg-gray-600"
                            href="comentarios">
                            <span class="select-none">Comentarios</span>
                        </a>
                    </li>
                    <li>
                        <a class="active flex items-center rounded py-3 pl-3 pr-4 text-gray-50 hover:bg-gray-600"
                            href="contactos">
                            <span class="select-none">Contacto</span>
                        </a>
                    </li>
                    <li>
                        <a class="active flex items-center rounded py-3 pl-3 pr-4 text-gray-50 hover:bg-gray-600"
                            href="cursos">
                            <span class="select-none">Curso</span>
                        </a>
                    </li>
                    <li>
                        <a class="active flex items-center rounded py-3 pl-3 pr-4 text-gray-50 hover:bg-gray-600"
                            href="empleos">
                            <span class="select-none">Empleos</span>
                        </a>
                    </li>

                    <li>
                        <a class="active flex items-center rounded py-3 pl-3 pr-4 text-gray-50 hover:bg-gray-600"
                            href="eventos">
                            <span class="select-none">Eventos</span>
                        </a>
                    </li>
                    <li>
                        <a class="active flex items-center rounded py-3 pl-3 pr-4 text-gray-50 hover:bg-gray-600"
                            href="generos">
                            <span class="select-none">Generos</span>
                        </a>
                    </li>
                    <li>
                        <a class="active flex items-center rounded py-3 pl-3 pr-4 text-gray-50 hover:bg-gray-600"
                            href="informaciones">
                            <span class="select-none">Informaciones</span>
                        </a>
                    </li>
                    <li>
                        <a class="active flex items-center rounded py-3 pl-3 pr-4 text-gray-50 hover:bg-gray-600"
                            href="pagos">
                            <span class="select-none">Pagos</span>
                        </a>
                    </li>
                    <li>
                        <a class="active flex items-center rounded py-3 pl-3 pr-4 text-gray-50 hover:bg-gray-600"
                            href="provincias">
                            <span class="select-none">Provincias</span>
                        </a>
                    </li>
                    <li>
                        <a class="active flex items-center rounded py-3 pl-3 pr-4 text-gray-50 hover:bg-gray-600"
                            href="redes">
                            <span class="select-none">Redes</span>
                        </a>
                    </li>
                    <li>
                        <a class="active flex items-center rounded py-3 pl-3 pr-4 text-gray-50 hover:bg-gray-600"
                            href="servicios">
                            <span class="select-none">Servicios</span>
                        </a>
                    </li>

                </ul>
            </div>
            <div class="px-4 pb-6">
                <h3 class="mb-2 text-xs font-medium uppercase text-gray-500">
                    Reportes
                </h3>
                <ul class="mb-8 text-sm font-medium">
                    <li>
                        <a class="active flex items-center rounded py-3 pl-3 pr-4 text-gray-50 hover:bg-gray-600"
                            href="reportePagoCurso">
                            <span class="select-none">Reporte de pago de cursos</span>
                        </a>
                    </li>
                    <li>
                        <a class="active flex items-center rounded py-3 pl-3 pr-4 text-gray-50 hover:bg-gray-600"
                            href="reporteCursos">
                            <span class="select-none">Reporte de cursos</span>
                        </a>
                    </li>
                    <li>
                        <a class="active flex items-center rounded py-3 pl-3 pr-4 text-gray-50 hover:bg-gray-600"
                            href="reporteEmpleos">
                            <span class="select-none">Reporte de empleos</span>
                        </a>
                    </li>
                    <li>
                        <a class="active flex items-center rounded py-3 pl-3 pr-4 text-gray-50 hover:bg-gray-600"
                            href="reporteCliente">
                            <span class="select-none">Reporte de Clientes</span>
                        </a>
                    </li>
                    <li>
                        <a class="active flex items-center rounded py-3 pl-3 pr-4 text-gray-50 hover:bg-gray-600"
                            href="reporteComentarios">
                            <span class="select-none">Reporte de Comentarios</span>
                        </a>
                    </li>
                </ul>
            </div>
        </nav>
    </div>
    <div class="mx-auto lg:ml-80"></div>
</div>

{{-- Scripts --}}
<script src="{{ asset( 'js/dashboard.js' ) }}"></script>
<script crossorigin="anonymous" defer src="https://cdnjs.cloudflare.com/ajax/libs/Swiper/8.3.2/swiper-bundle.min.js"></script>
<script src="https://static.elfsight.com/platform/platform.js" data-use-service-core defer></script>
<script src="https://unpkg.com/tailwindcss-jit-cdn"></script>
<script src="https://kit.fontawesome.com/2655b6ac6f.js" crossorigin="anonymous"></script>