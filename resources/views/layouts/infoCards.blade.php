<div class="flex items-center min-h-50 bg-white text-gray-800">
    <div class="p-4 w-full">
        <div class="grid grid-cols-12 gap-4">
            <div class="col-span-12 sm:col-span-6 md:col-span-3">
                <div class="flex flex-row bg-white shadow-sm rounded p-4">
                    <div
                        class="flex items-center justify-center flex-shrink-0 h-12 w-12 rounded-xl bg-blue-100 text-blue-500">
                        <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24"
                            xmlns="http://www.w3.org/2000/svg">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M17 20h5v-2a3 3 0 00-5.356-1.857M17 20H7m10 0v-2c0-.656-.126-1.283-.356-1.857M7 20H2v-2a3 3 0 015.356-1.857M7 20v-2c0-.656.126-1.283.356-1.857m0 0a5.002 5.002 0 019.288 0M15 7a3 3 0 11-6 0 3 3 0 016 0zm6 3a2 2 0 11-4 0 2 2 0 014 0zM7 10a2 2 0 11-4 0 2 2 0 014 0z">
                            </path>
                        </svg>
                    </div>
                    <div class="flex flex-col flex-grow ml-4">
                        <div class="text-sm text-gray-500">Usuarios</div>
                        <div class="font-bold text-lg">
                            <?php echo app('App\Http\Controllers\UserController')->getTotalUsuarios(); ?>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-span-12 sm:col-span-6 md:col-span-3">
                <div class="flex flex-row bg-white shadow-sm rounded p-4">
                    <div
                        class="flex items-center justify-center flex-shrink-0 h-12 w-12 rounded-xl bg-orange-100 text-orange-500">
                        <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24"
                            xmlns="http://www.w3.org/2000/svg">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M9 19v-6a2 2 0 00-2-2H5a2 2 0 00-2 2v6a2 2 0 002 2h2a2 2 0 002-2zm0 0V9a2 2 0 012-2h2a2 2 0 012 2v10m-6 0a2 2 0 002 2h2a2 2 0 002-2m0 0V5a2 2 0 012-2h2a2 2 0 012 2v14a2 2 0 01-2 2h-2a2 2 0 01-2-2z">
                            </path>
                        </svg>
                    </div>
                    <div class="flex flex-col flex-grow ml-4">
                        <div class="text-sm text-gray-500">Nuevos Clientes</div>
                        <div class="font-bold text-lg">
                            <?php echo app('App\Http\Controllers\UserController')->getTotalUsuarios()-2;?>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="antialiased sans-serif bg-gray-200 w-lg min-h ">
    <link href="https://fonts.googleapis.com/css2?family=IBM+Plex+Mono:wght@400;500;600;700&display=swap"
        rel="stylesheet">
    <link href="https://unpkg.com/tailwindcss@^1.0/dist/tailwind.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/gh/alpinejs/alpine@v2.x.x/dist/alpine.min.js" defer></script>
    <style>
        body {
            font-family: 'IBM Plex Mono', sans-serif;
        }

        [x-cloak] {
            display: none;
        }

        .line {
            background: repeating-linear-gradient(to bottom,
                    #eee,
                    #eee 1px,
                    #fff 1px,
                    #fff 8%);
        }

        .tick {
            background: repeating-linear-gradient(to right,
                    #eee,
                    #eee 1px,
                    #fff 1px,
                    #fff 5%);
        }
    </style>



    <div x-data="app()" x-cloak class="px-4">
        <div class="max-w-lg mx-auto py-10">
            <div class="shadow p-6 rounded-lg bg-white">
                <div class="md:flex md:justify-between md:items-center">
                    <div>
                        <h2 class="text-xl text-gray-800 font-bold leading-tight">Cursos Ofertados</h2>
                        <p class="mb-2 text-gray-600 text-sm">Promedio mensual</p>
                    </div>

                    <!-- Legends -->
                    <div class="mb-4">
                        <div class="flex items-center">
                            <div class="w-2 h-2 bg-blue-600 mr-2 rounded-full"></div>
                            <div class="text-sm text-gray-700">Cursos</div>
                        </div>
                    </div>
                </div>


                <div class="line my-8 relative">
                    <!-- Tooltip -->
                    <template x-if="tooltipOpen == true">
                        <div x-ref="tooltipContainer" class="p-0 m-0 z-10 shadow-lg rounded-lg absolute h-auto block"
                            :style="`bottom: ${tooltipY}px; left: ${tooltipX}px`">
                            <div class="shadow-xs rounded-lg bg-white p-2">
                                <div class="flex items-center justify-between text-sm">
                                    <div>Cursos:</div>
                                    <div class="font-bold ml-2">
                                        <span x-html="tooltipContent"></span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </template>

                    <!-- Bar Chart -->
                    <div class="flex -mx-2 items-end mb-2">
                        <template x-for="data in chartData">

                            <div class="px-2 w-1/6">
                                <div :style="`height: ${data}px`"
                                    class="transition ease-in duration-200 bg-blue-600 hover:bg-blue-400 relative"
                                    @mouseenter="showTooltip($event); tooltipOpen = true"
                                    @mouseleave="hideTooltip($event)">
                                    <div x-text="data"
                                        class="text-center absolute top-0 left-0 right-0 -mt-6 text-gray-800 text-sm">
                                    </div>
                                </div>
                            </div>

                        </template>
                    </div>

                    <!-- Labels -->
                    <div class="border-t border-gray-400 mx-auto"
                        :style="`height: 1px; width: ${ 100 - 1/chartData.length*100 + 3}%`"></div>
                    <div class="flex -mx-2 items-end">
                        <template x-for="data in labels">
                            <div class="px-2 w-1/6">
                                <div class="bg-red-600 relative">
                                    <div class="text-center absolute top-0 left-0 right-0 h-2 -mt-px bg-gray-400 mx-auto"
                                        style="width: 1px"></div>
                                    <div x-text="data"
                                        class="text-center absolute top-0 left-0 right-0 mt-3 text-gray-700 text-sm">
                                    </div>
                                </div>
                            </div>
                        </template>
                    </div>

                </div>
            </div>
        </div>
    </div>

    <script>
        function app() {
        return {
          chartData: [0, 0, 0, 0, 0, 5,2,3],
          labels: ['Enero', 'Febrero', 'Marzo', 'Abril', 'Mayo', 'Junio', 'Julio', 'Agosto',],
  
          tooltipContent: '',
          tooltipOpen: false,
          tooltipX: 0,
          tooltipY: 0,
          showTooltip(e) {
            console.log(e);
            this.tooltipContent = e.target.textContent
            this.tooltipX = e.target.offsetLeft - e.target.clientWidth;
            this.tooltipY = e.target.clientHeight + e.target.clientWidth;
          },
          hideTooltip(e) {
            this.tooltipContent = '';
            this.tooltipOpen = false;
            this.tooltipX = 0;
            this.tooltipY = 0;
          }
        }
      }
    </script>
</div>

<!-- component -->
<div class="mx-auto bg-gray-700 h-screen flex items-center justify-center px-8">
    <div class="flex flex-col w-full bg-white rounded shadow-lg sm:w-3/4 md:w-1/2 lg:w-3/5">
        <div class="w-full h-64 bg-top bg-cover rounded-t"
            style="background-image: url('https://images.unsplash.com/photo-1674574124649-778f9afc0e9c?ixlib=rb-4.0.3&ixid=M3wxMjA3fDF8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=1170&q=80')">
            >
        </div>
        <div class="flex flex-col w-full md:flex-row">
            <div
                class="flex flex-row justify-around p-4 font-bold leading-none text-white uppercase bg-primary rounded md:flex-col md:items-center md:justify-center md:w-1/4">
                <div class="md:text-3xl">Agosto</div>
                <div class="md:text-6xl">16</div>
                <div class="md:text-xl">7 am</div>
            </div>
            <div class="p-4 font-normal text-gray-800 md:w-3/4">
                <h1 class="mb-4 text-4xl font-bold leading-none tracking-tight text-gray-800">Caminata por la paz
                </h1>
                <p class="leading-normal">Únete a nosotros en una caminata por la paz, donde nos uniremos como comunidad
                    para promover valores de armonía, igualdad y respeto. Esta es una oportunidad para manifestar
                    nuestro deseo de un mundo más pacífico y libre de conflictos, así como para concienciar sobre los
                    desafíos que enfrenta nuestra sociedad en materia de violencia y discriminación.</p>
                <div class="flex flex-row items-center mt-4 text-gray-700">
                    <div class="w-1/2">
                        Latacunga-Estadio,La Cocha
                    </div>
                    <div class="w-1/2 flex justify-end">
                        <img src="https://collegefootballplayoff.com/images/section_logo.png" alt="" class="w-8">
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>