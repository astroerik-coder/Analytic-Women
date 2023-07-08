<style>
    ul.breadcrumb li+li::before {
        content: "\276F";
        padding-left: 8px;
        padding-right: 4px;
        color: inherit;
    }

    ul.breadcrumb li span {
        opacity: 60%;
    }

    #sidebar {
        -webkit-transition: all 300ms cubic-bezier(0, 0.77, 0.58, 1);
        transition: all 300ms cubic-bezier(0, 0.77, 0.58, 1);
    }

    #sidebar.show {
        transform: translateX(0);
    }

    #sidebar ul li a.active {
        background: #1f2937;
        background-color: #1f2937;
    }
</style>

<!-- Navbar start -->
<nav id="navbar" class="fixed top-0 z-40 flex w-full flex-row justify-end bg-gray-700 px-4 sm:justify-between">
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
        <button id="dropdownButton"
            class="relative z-10 flex items-center py-4 text-sm text-white hover:text-gray-200">
            <img class="flex-shrink-0 object-cover mx-1 rounded-full w-9 h-9"
            src="{{ Auth::user()->profile_photo_url }}"
            alt="Avatar de usuario">
            <span class="mx-1">{{ Auth::user()->name }}</span>
            <svg class="w-5 h-5 mx-1" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                <path
                    d="M12 15.713L18.01 9.70299L16.597 8.28799L12 12.888L7.40399 8.28799L5.98999 9.70199L12 15.713Z"
                    fill="currentColor"></path>
            </svg>
        </button>

        <!-- Dropdown menu de usuario -->
        <div
            class="absolute right-0 z-20 w-56 mt-14 -mr-2 overflow-hidden bg-white rounded-md shadow-xl dark:bg-gray-800 hidden"
            id="dropdownMenu">
            <a href="#"
                class="flex items-center p-3 text-sm text-gray-600 transition-colors duration-200 transform dark:text-gray-300 hover:bg-gray-100 dark:hover:bg-gray-700 dark:hover:text-white">
                <img class="flex-shrink-0 object-cover mx-1 rounded-full w-9 h-9"
                    src="{{ Auth::user()->profile_photo_url }}"
                    alt="Usuario">
                <div class="mx-1">
                    <h1 class="text-sm font-semibold text-gray-700 dark:text-gray-200"> {{ Auth::user()->name }}</h1>
                    <p class="text-sm text-gray-500 dark:text-gray-400">{{ Auth::user()->email }}</p>
                </div>
            </a>

            <hr class="border-gray-200 dark:border-gray-700 ">
            <a href="{{ route('profile.show') }}"
                class="block px-4 py-3 text-sm text-gray-600 capitalize transition-colors duration-200 transform dark:text-gray-300 hover:bg-gray-100 dark:hover:bg-gray-700 dark:hover:text-white">
                Configuración
            </a>

            <hr class="border-gray-200 dark:border-gray-700 ">

            <form method="POST" action="{{ route('logout') }}">
                @csrf
                <a href="#" onclick="event.preventDefault(); this.closest('form').submit();"
                    class="block px-4 py-3 text-sm text-gray-600 hover:bg-red-400 capitalize transition-colors duration-200 transform dark:text-gray-300 dark:hover:bg-gray-700 dark:hover:text-white">
                    Cerrar sesión
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
            class="fixed left-0 bottom-0 flex w-3/4 -translate-x-full flex-col overflow-y-auto bg-gray-700 pt-6 pb-8 sm:max-w-xs lg:w-80">
            <!-- one category / navigation group -->
            <div class="px-4 pb-6">
                <h3 class="mb-2 text-xs font-medium uppercase text-gray-500">
                    Main
                </h3>
                <ul class="mb-8 text-sm font-medium">
                    <li>
                        <a class="active flex items-center rounded py-3 pl-3 pr-4 text-gray-50 hover:bg-gray-600"
                            href="dashboard">
                            <span class="select-none">Inicio</span>
                        </a>
                    </li>
                    <li>
                        <a class="flex items-center rounded py-3 pl-3 pr-4 text-gray-50 hover:bg-gray-600" href="crud">
                            <span class="select-none">Crud</span>
                        </a>
                    </li>
                </ul>
            </div>
            <div class="px-4 pb-6">
                <h3 class="mb-2 text-xs font-medium uppercase text-gray-500">
                    Tablas
                </h3>
                <ul class="mb-8 text-sm font-medium">
                    <li>
                        <a class="active flex items-center rounded py-3 pl-3 pr-4 text-gray-50 hover:bg-gray-600"
                            href="eventos">
                            <span class="select-none">Eventos</span>
                        </a>
                    </li>
                    <li>
                        <a class="active flex items-center rounded py-3 pl-3 pr-4 text-gray-50 hover:bg-gray-600"
                            href="blog">
                            <span class="select-none">Blog</span>
                        </a>
                    </li>
                    <li>
                        <a class="active flex items-center rounded py-3 pl-3 pr-4 text-gray-50 hover:bg-gray-600"
                            href="ciudades">
                            <span class="select-none">Ciudades</span>
                        </a>
                    </li>

                </ul>
            </div>
            <!-- navigation group end-->

            <!-- example copies start -->
            <div class="px-4 pb-6">
                <h3 class="mb-2 text-xs font-medium font-bold uppercase text-gray-100">
                    Legal
                </h3>
                <ul class="mb-8 text-sm font-medium">

                    <li>
                        <a class="flex items-center rounded py-3 pl-3 pr-4 text-gray-50 hover:bg-gray-600" href="#tc">
                            <span class="select-none">Terms and Condition</span>
                        </a>
                    </li>
                </ul>
            </div>
        </nav>
    </div>
    <div class="mx-auto lg:ml-80"></div>
</div> 

<script type="text/javascript">
    document.addEventListener("DOMContentLoaded", () => {
        const btnSidebarToggler = document.getElementById("btnSidebarToggler");
        const navClosed = document.getElementById("navClosed");
        const navOpen = document.getElementById("navOpen");
        const dropdownButton = document.getElementById('dropdownButton');
        const dropdownMenu = document.getElementById('dropdownMenu');

        btnSidebarToggler.addEventListener("click", (e) => {
            e.preventDefault();
            sidebar.classList.toggle("show");
            navClosed.classList.toggle("hidden");
            navOpen.classList.toggle("hidden");
        });

        sidebar.style.top = parseInt(navbar.clientHeight) - 1 + "px";

        function toggleDropdownMenu() {
            dropdownMenu.classList.toggle('hidden');
        }

        dropdownButton.addEventListener('click', toggleDropdownMenu);

        window.addEventListener('click', function (event) {
            if (!dropdownButton.contains(event.target) && !dropdownMenu.contains(event.target)) {
                dropdownMenu.classList.add('hidden');
            }
        });
    });
</script>
