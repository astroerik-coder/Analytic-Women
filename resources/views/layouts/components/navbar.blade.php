<script>
    window.addEventListener("scroll", function () {
        var nav = document.querySelector("nav");
        nav.classList.toggle("fixedNavbar", window.scrollY > 0);
    });
</script>


<nav class="bg-primary text-black border-primary-200 dark:bg-primary-900">
    <div class="max-w-screen-xl flex flex-wrap items-center justify-between mx-auto p-4">
        <a href="" class="flex items-center">
            <img src="https://img.icons8.com/?size=512&id=HyQyTDt8OqK9&format=png" class="h-8 mr-3"
                alt="Analytika Women Logo" />
            <span class="self-center text-2xl font-semibold whitespace-nowrap dark:text-white">Analytika Women</span>
        </a>
        <div class="flex items-center md:order-2">
            <button data-collapse-toggle="mobile-menu-2" type="button"
                class="inline-flex items-center p-2 ml-1 text-sm text-gray-500 rounded-lg md:hidden hover:bg-gray-100 focus:outline-none focus:ring-2 focus:ring-gray-200 dark:text-gray-400 dark:hover:bg-gray-700 dark:focus:ring-gray-600"
                aria-controls="mobile-menu-2" aria-expanded="false">
                <span class="sr-only">Menu</span>
                <svg class="w-6 h-6" aria-hidden="true" fill="currentColor" viewBox="0 0 20 20"
                    xmlns="http://www.w3.org/2000/svg">
                    <path fill-rule="evenodd"
                        d="M3 5a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1zM3 10a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1zM3 15a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1z"
                        clip-rule="evenodd"></path>
                </svg>
            </button>
        </div>
        <div class="items-lef justify-between hidden w-full md:flex md:w-auto md:order-1" id="mobile-menu-2">
            <ul
                class="flex flex-col font-medium p-4 md:p-0 mt-4 border border-gray-100 rounded-lg bg-primary md:flex-row md:space-x-8 md:mt-0 md:border-0 md:bg-primary dark:bg-gray-800 md:dark:bg-gray-900 dark:border-gray-700">
                <li><a href="{{route('welcome')}}" title="">Inicio</a></li>
                
                <li>
                    
                    <a href="#" class="bg-primary block 
                        py-2 pl-3 pr-4 
                        text-gray-900 rounded 
                      hover:bg-primary
                        md:hover:text-secundary
                        md:p-0 dark:text-white 
                        md:dark:hover:text-blue-500 
                        dark:hover:bg-gray-700 
                        dark:hover:text-white
                        md:dark:hover:bg-transparent 
                        dark:border-gray-700">About</a>
                </li>
                <li>
                    <a href="#" class="block py-2 pl-3 pr-4
                     text-gray-900 rounded 
                     hover:bg-primary
                     md:bg-primary 
                    md:hover:text-secundary
                     md:p-0 dark:text-white 
                     md:dark:hover:text-blue-500 
                     dark:hover:bg-gray-700 
                     dark:hover:text-white 
                     md:dark:hover:bg-transparent 
                     dark:border-gray-700">Servicios</a>
                </li>
                <li>
                    <a href="#" class="block py-2 pl-3 pr-4
                  text-gray-900 rounded 
                  hover:bg-primary
                  md:bg-primary 
                  md:hover:text-secundary
                    md:p-0 dark:text-white 
                    md:dark:hover:text-blue-500 
                    dark:hover:bg-gray-700 
                    dark:hover:text-white 
                    md:dark:hover:bg-transparent 
                    dark:border-gray-700">Precios</a>
                </li>
                <li><a href="{{route('indice')}}" title="">Contactos</a></li>
                <li>
                    <a href="/register" 
                    class="
                    relative flex h-9 ml-auto 
                    items-center justify-center 
                    sm:px-6 before:absolute 
                    before:inset-0 
                    before:rounded-full
                    before:bg-tertiary 
                    dark:before:bg-tertiary  before:transition 
                    before:duration-300 
                    hover:before:scale-105 
                    active:duration-75 active:before:scale-95">
                    <span class="
                    relative text-sm 
                    font-semibold 
                    text-white 
                    dark:text-gray-900">Registarse</span>                    
                </a>
                </li>
               <li>
                <a href="/login" 
                    class="
                    relative flex h-9 ml-auto 
                    items-center justify-center 
                    sm:px-6 before:absolute 
                    before:inset-0 
                    before:rounded-full
                  before:bg-tertiary 
                    dark:before:bg-tertiary  before:transition 
                    before:duration-300 
                    hover:before:scale-105 
                    active:duration-75 active:before:scale-95">
                    <span class="
                    relative text-sm 
                    font-semibold 
                    text-white 
                    dark:text-gray-900">Iniciar Sesion</span>                    
                </a>
               </li>
            </ul>
        </div>
    </div>
</nav>