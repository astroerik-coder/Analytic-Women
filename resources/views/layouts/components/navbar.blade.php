<style>
    @import url(https://pro.fontawesome.com/releases/v5.10.0/css/all.css);
    @import url('https://fonts.googleapis.com/css2?family=Poppins:wght@300;500;800&display=swap');

    .hover\:w-full:hover {
        width: 100%;
    }

    .group:hover .group-hover\:w-full {
        width: 100%;
    }

    .group:hover .group-hover\:inline-block {
        display: inline-block;
    }

    .group:hover .group-hover\:flex-grow {
        flex-grow: 1;
    }

    nav {
        position: fixed;
        top: 0;
        left: 50%;
        transform: translateX(-50%);
        width: 95%;
        max-width: 600px;
        z-index: 9999;
        background-color: transparent;
        color: #fff;
        padding: 10px;
    }
</style>
<nav>
    <div class="px-7 bg-primary shadow-lg rounded-2xl mb-5">
        <div class="flex">
            <div class="flex-auto hover:w-full group">
                <a href="#"
                    class="flex items-center justify-center text-center mx-auto px-4 py-2 group-hover:w-full text-tertiary">
                    <span class="block px-1 py-1 group-hover:bg-primary rounded-full group-hover:flex-grow">
                        <i class="far fa-home text-2xl pt-1"></i><span
                            class="hidden group-hover:inline-block ml-3 align-bottom pb-1">Inicio</span>
                    </span>
                </a>
            </div>
            <div class="flex-auto hover:w-full group">
                <a href="#"
                    class="flex items-center justify-center text-center mx-auto px-4 py-2 group-hover:w-full text-white">
                    <span class="block px-1 py-1 group-hover:bg-primary rounded-full group-hover:flex-grow">
                        <i class="far fa-users text-2xl pt-1"></i><span
                            class="hidden group-hover:inline-block ml-3 align-bottom pb-1">Nosotros</span>
                    </span>
                </a>
            </div>
            <div class="flex-auto hover:w-full group">
                <a href="servicio"
                    class="flex items-center justify-center text-center mx-auto px-4 py-2 group-hover:w-full text-white">
                    <span class="block px-1 py-1 group-hover:bg-primary rounded-full group-hover:flex-grow">
                        <i class="far fa-search text-2xl pt-1"></i><span
                            class="hidden group-hover:inline-block ml-3 align-bottom pb-1">Servicios</span>
                    </span>
                </a>
            </div>
            <div class="flex-auto hover:w-full group">
                <a href="contactanos"
                    class="flex items-center justify-center text-center mx-auto px-4 py-2 group-hover:w-full text-white">
                    <span class="block px-1 py-1 group-hover:bg-primary rounded-full group-hover:flex-grow">
                        <i class="far fa-cog text-2xl pt-1"></i><span
                            class="hidden group-hover:inline-block ml-3 align-bottom pb-1">Contactanos</span>
                    </span>
                </a>
            </div>
            <div class="flex-auto hover:w-full group">
                <a href="/register"
                    class="flex items-center justify-center text-center mx-auto px-4 py-2 group-hover:w-full text-white">
                    <span class="block px-1 py-1 group-hover:bg-primary rounded-full group-hover:flex-grow">
                        <i class="far fa-cog text-2xl pt-1"></i><span
                            class="hidden group-hover:inline-block ml-3 align-bottom pb-1">Registrarse</span>
                    </span>
                </a>
            </div>
            <div class="flex-auto hover:w-full group">
                <a href="/login"
                    class="flex items-center justify-center text-center mx-auto px-4 py-2 group-hover:w-full text-white">
                    <span class="block px-1 py-1 group-hover:bg-tertiary rounded-full group-hover:flex-grow">
                        <i class="far fa-cog text-2xl pt-1"></i><span
                            class="hidden group-hover:inline-block ml-3 align-bottom pb-1">Iniciar Sesión</span>
                    </span>
                </a>
            </div>
        </div>
    </div>
</nav>