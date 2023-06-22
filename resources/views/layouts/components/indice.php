<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulario</title>
    <link rel="stylesheet" href="stylescont.css">
    <link href="{{ asset( 'css/app.css' ) }}" rel="stylesheet">
    <!-- Enlace al archivo CSS de Tailwind -->
    <link href="http://127.0.0.1:8000/css/app.css" rel="stylesheet">
    <!--Enlace del archivo de los iconos-->
    <script src="https://kit.fontawesome.com/2655b6ac6f.js" crossorigin="anonymous"></script>
</head>
<body>
    <!-- Barra de navegación -->
<nav class="bg-primary text-black border-primary-200 dark:bg-primary-900 fixedNavbar">
    <div class="max-w-screen-xl flex flex-wrap items-center justify-between mx-auto p-4">
        <a href="" class="flex items-center">
            <img src="https://img.icons8.com/?size=512&amp;id=HyQyTDt8OqK9&amp;format=png" class="h-8 mr-3" alt="Analytika Women Logo">
            <span class="self-center text-2xl font-semibold whitespace-nowrap dark:text-white">Analytika Women</span>
        </a>
        <div class="flex items-center md:order-2">
            <button data-collapse-toggle="mobile-menu-2" type="button" class="inline-flex items-center p-2 ml-1 text-sm text-gray-500 rounded-lg md:hidden hover:bg-gray-100 focus:outline-none focus:ring-2 focus:ring-gray-200 dark:text-gray-400 dark:hover:bg-gray-700 dark:focus:ring-gray-600" aria-controls="mobile-menu-2" aria-expanded="false">
                <span class="sr-only">Menu</span>
                <svg class="w-6 h-6" aria-hidden="true" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                    <path fill-rule="evenodd" d="M3 5a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1zM3 10a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1zM3 15a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1z" clip-rule="evenodd"></path>
                </svg>
            </button>
        </div>
        <div class="items-lef justify-between hidden w-full md:flex md:w-auto md:order-1" id="mobile-menu-2">
            <ul class="flex flex-col font-medium p-4 md:p-0 mt-4 border border-gray-100 rounded-lg bg-primary md:flex-row md:space-x-8 md:mt-0 md:border-0 md:bg-primary dark:bg-gray-800 md:dark:bg-gray-900 dark:border-gray-700">
                <li>
                    <a href="http://localhost:8000/#">Inicio</a>
                </li>
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
                <li>
                    <a href="http://localhost/Analytic-Women/resources/views/layouts/components/indice.php">Contactos</a>
                </li>
                <li>
                    <a href="/register" class="
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
                <a href="/login" class="
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

<!--Formulario de contactos-->
    <div class="form-container">
        <h2>Contáctanos</h2>
        <div class="objeto1"><i class="fa-solid fa-phone"> +0999785416</i><br><i class="fa-solid fa-phone">+0999785416</i><br><i class="fa-solid fa-phone">+0999785416</i></div>
        <div class="objeto2"><i class="fa-brands fa-whatsapp"> +0999785416</i><br><i class="fa-brands fa-whatsapp">+0984654656</i><br><i class="fa-brands fa-whatsapp">+0984649456</i></div>
        <div class="objeto3"><i class="fa-solid fa-envelope"> dschancusig@gmail.com</i><br><i class="fa-solid fa-envelope">dschancusig@gmail.com</i></div>
        <div class="objeto4"><i class="fa-solid fa-location-dot"> ESPE</i></div>

        <form method="post" autocomplete="off">
            <br><b><h3>Formulario de contacto:</h3></b></br> 
            <div class="form-group">
                <div class="font-content">
                    <label for="name">Nombre:</label>
                    <input type="text" id="name" name="name" placeholder="Nombre">
                </div>
                <div class="font-content">
                    <label for="email">Correo:</label>
                    <input type="email" id="email" name="email" placeholder="Correo">
                </div>
            </div>

            <div class="form-group">
                <div class="font-content">
                    <label for="direction">Dirección:</label>
                    <input type="text" id="direction" name="direction" placeholder="Direccion">
                </div>
                <div class="font-content">
                    <label for="phone">Teléfono:</label>
                    <input type="tel" id="phone" name="phone" placeholder="Telefono">
                </div>
            </div>
            <label for="message">Mensaje:</label>
            <textarea name="message" id="message" cols="30" rows="10" placeholder="Mensaje"></textarea>
            <input class="btn" type="submit" name="contact" value="Enviar mensaje">        
        </form>
        <?php
    include("contactos.php");
    ?>
    </div>

 <!-- Barra del footer -->
    <footer class="bg-primary text-white dark:bg-white-900">
    <div class="mx-auto w-full max-w-screen-xl p-4 py-6 lg:py-8">
        <div class="md:flex md:justify-between">
            <div class="mb-6 md:mb-0">
                <a href="" class="flex items-center">
                    <img src="https://img.icons8.com/?size=512&amp;id=HyQyTDt8OqK9&amp;format=png" class="h-8 mr-3" alt="FlowBite Logo">
                    <span class="self-center text-2xl font-semibold primaryspace-nowrap dark:text-primary">Analytika Women</span>
                </a>
            </div>
            <div class="grid grid-cols-2 gap-8 sm:gap-6 sm:grid-cols-3">
                <div>
                    <h2 class="mb-6 text-sm font-semibold text-white-900 uppercase dark:text-primary">Contactos</h2>
                    <ul class="text-white-600 dark:text-white-400 font-medium">
                        <li class="mb-4">
                            <a href="" class="hover:underline">0999785416</a>
                        </li>
                        <li class="mb-4">
                            <a href="" class="hover:underline">0990902380</a>
                        </li>
                        <li class="mb-4">
                            <a href="mailto:&quot;analytikawomen@gmail.com&quot;" class="hover:underline">Contactar por correo</a>
                        </li>
                    </ul>
                </div>
                <div>
                    <h2 class="mb-6 text-sm font-semibold text-white-900 uppercase dark:text-primary">Redes Sociales</h2>
                    <ul class="text-white-600 dark:text-white-400 font-medium">
                        <li class="mb-4">
                            <a href="https://github.com/themesberg/flowbite" class="hover:underline ">Github</a>
                        </li>
                        <li>
                            <a href="https://discord.gg/4eeurUVvTy" class="hover:underline">Discord</a>
                        </li>
                    </ul>
                </div>
                <div>
                    <h2 class="mb-6 text-sm font-semibold text-white-900 uppercase dark:text-primary">Encuentranos</h2>
                    <ul class="text-white-600 dark:text-white-400 font-medium">
                        <li class="mb-4 ">
                            <a href="#" class="hover:underline">Privacy Policy</a>
                        </li>
                        <li>
                            <a href="#" class="hover:underline">Terms &amp; Conditions</a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
        <hr class="my-6 border-white-200 sm:mx-auto dark:border-white-700 lg:my-8">
        <div class="sm:flex sm:items-center sm:justify-between">
            <span class="text-sm text-white-500 sm:text-center dark:text-white-400">© 2023 <a href="" class="hover:underline">Analityka Women™</a>. All Rights Reserved.
            </span>
            <div class="flex mt-4 space-x-6 sm:justify-center sm:mt-0">
                <a href="#" class="text-white-500 hover:text-white-900 dark:hover:text-primary">
                    <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 24 24" aria-hidden="true">
                        <path fill-rule="evenodd" d="M22 12c0-5.523-4.477-10-10-10S2 6.477 2 12c0 4.991 3.657 9.128 8.438 9.878v-6.987h-2.54V12h2.54V9.797c0-2.506 1.492-3.89 3.777-3.89 1.094 0 2.238.195 2.238.195v2.46h-1.26c-1.243 0-1.63.771-1.63 1.562V12h2.773l-.443 2.89h-2.33v6.988C18.343 21.128 22 16.991 22 12z" clip-rule="evenodd"></path>
                    </svg>
                    <span class="sr-only">Facebook page</span>
                </a>
                <a href="#" class="text-white-500 hover:text-white-900 dark:hover:text-primary">
                    <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 24 24" aria-hidden="true">
                        <path fill-rule="evenodd" d="M12.315 2c2.43 0 2.784.013 3.808.06 1.064.049 1.791.218 2.427.465a4.902 4.902 0 011.772 1.153 4.902 4.902 0 011.153 1.772c.247.636.416 1.363.465 2.427.048 1.067.06 1.407.06 4.123v.08c0 2.643-.012 2.987-.06 4.043-.049 1.064-.218 1.791-.465 2.427a4.902 4.902 0 01-1.153 1.772 4.902 4.902 0 01-1.772 1.153c-.636.247-1.363.416-2.427.465-1.067.048-1.407.06-4.123.06h-.08c-2.643 0-2.987-.012-4.043-.06-1.064-.049-1.791-.218-2.427-.465a4.902 4.902 0 01-1.772-1.153 4.902 4.902 0 01-1.153-1.772c-.247-.636-.416-1.363-.465-2.427-.047-1.024-.06-1.379-.06-3.808v-.63c0-2.43.013-2.784.06-3.808.049-1.064.218-1.791.465-2.427a4.902 4.902 0 011.153-1.772A4.902 4.902 0 015.45 2.525c.636-.247 1.363-.416 2.427-.465C8.901 2.013 9.256 2 11.685 2h.63zm-.081 1.802h-.468c-2.456 0-2.784.011-3.807.058-.975.045-1.504.207-1.857.344-.467.182-.8.398-1.15.748-.35.35-.566.683-.748 1.15-.137.353-.3.882-.344 1.857-.047 1.023-.058 1.351-.058 3.807v.468c0 2.456.011 2.784.058 3.807.045.975.207 1.504.344 1.857.182.466.399.8.748 1.15.35.35.683.566 1.15.748.353.137.882.3 1.857.344 1.054.048 1.37.058 4.041.058h.08c2.597 0 2.917-.01 3.96-.058.976-.045 1.505-.207 1.858-.344.466-.182.8-.398 1.15-.748.35-.35.566-.683.748-1.15.137-.353.3-.882.344-1.857.048-1.055.058-1.37.058-4.041v-.08c0-2.597-.01-2.917-.058-3.96-.045-.976-.207-1.505-.344-1.858a3.097 3.097 0 00-.748-1.15 3.098 3.098 0 00-1.15-.748c-.353-.137-.882-.3-1.857-.344-1.023-.047-1.351-.058-3.807-.058zM12 6.865a5.135 5.135 0 110 10.27 5.135 5.135 0 010-10.27zm0 1.802a3.333 3.333 0 100 6.666 3.333 3.333 0 000-6.666zm5.338-3.205a1.2 1.2 0 110 2.4 1.2 1.2 0 010-2.4z" clip-rule="evenodd"></path>
                    </svg>
                    <span class="sr-only">Instagram page</span>
                </a>                
            </div>
        </div>
    </div>
</footer>
 
   
</body>

</html>