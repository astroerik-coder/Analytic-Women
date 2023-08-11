<section class="antialiased bg-gray-100 text-black  px-4 mb-5">
    <div class="mt-8">
        <div class="flex justify-between">
            <div class="text-2xl">Comentarios</div>
        </div>

        <div class="mt-6">
            <div class="flex justify-between">
                <div class="flex">
                    <x-tall-crud-input-search />
                </div>
                <div class="flex">
                    <x-tall-crud-page-dropdown />
                </div>

                <div class="mt-4">
                    {{ $results->links() }}
                </div>
                <div>
                    <button type="submit" wire:click="$emitTo('comentarios-child', 'showCreateForm');"
                        class="group relative h-12 w-48 overflow-hidden rounded-lg bg-white text-lg shadow">
                        <div
                            class="absolute inset-0 w-3 bg-violet-400 transition-all duration-[250ms] ease-out group-hover:w-full">
                        </div>
                        <span class="relative text-black group-hover:text-white">Agregar Comentario</span>
                    </button>
                </div>
            </div>
            <table class="w-full border-collapse bg-white text-left text-sm text-gray-500 mt-8"
                wire:loading.class.delay="opacity-50">
                <thead class="bg-gray-5">
                    <tr class="px-6 py-4 font-medium text-white bg-primary">
                        <td scope="col" class="px-6 py-4">
                            <div class="flex items-center">
                                <button wire:click="sortBy('id')">Id</button>
                                <x-tall-crud-sort-icon sortField="id" :sort-by="$sortBy" :sort-asc="$sortAsc" />
                            </div>
                        </td>
                        <td scope="col" class="px-6 py-4">Id </td>
                        <td scope="col" class="px-6 py-4">Contenido </td>
                        <td scope="col" class="px-6 py-4">Fecha Publicacion</td>
                        <td scope="col" class="px-6 py-4">Revision </td>
                        <td scope="col" class="px-6 py-4">Acciones</td>
                    </tr>
                </thead>
                <tbody class="divide-y divide-gray-100 border-t border-gray-100 ">
                    @foreach($results as $result)
                    <tr class="hover:bg-violet-50">
                        <td scope="col" class="px-6 py-4">{{ $result->ID_COM }}</td>
                        <td scope="col" class="px-6 py-4">{{ $result->CONTENIDO_COM }}</td>
                        <td scope="col" class="px-6 py-4">{{ $result->FECHA_PUBLICACION_COM }}</td>
                        <td scope="col" class="px-6 py-4">{{ $result->REVISION_COM }}</td>
                        <td scope="col" class="px-6 py-4">
                            <div class="flex justify-center gap-4">
                                {{-- Editar --}}
                                <button type="submit"
                                    wire:click="$emitTo('comentarios-child', 'showEditForm', {{ $result->ID_COM}});"
                                    class="material-icons-round text-base">
                                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                        stroke-width="1.5" stroke="currentColor" class="h-6 w-6 " x-tooltip="tooltip">
                                        <path stroke-linecap="round" stroke-linejoin="round"
                                            d="M16.862 4.487l1.687-1.688a1.875 1.875 0 112.652 2.652L6.832 19.82a4.5 4.5 0 01-1.897 1.13l-2.685.8.8-2.685a4.5 4.5 0 011.13-1.897L16.863 4.487zm0 0L19.5 7.125" />
                                    </svg>
                                </button>
                                {{-- Eliminar --}}
                                <button type="submit"
                                    wire:click="$emitTo('comentarios-child', 'showDeleteForm', {{ $result->ID_COM}});"
                                    class="material-icons-round text-base">
                                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                        stroke-width="1.5" stroke="currentColor" class="h-6 w-6 text-red-700"
                                        x-tooltip="tooltip">
                                        <path stroke-linecap="round" stroke-linejoin="round"
                                            d="M14.74 9l-.346 9m-4.788 0L9.26 9m9.968-3.21c.342.052.682.107 1.022.166m-1.022-.165L18.16 19.673a2.25 2.25 0 01-2.244 2.077H8.084a2.25 2.25 0 01-2.244-2.077L4.772 5.79m14.456 0a48.108 48.108 0 00-3.478-.397m-12 .562c.34-.059.68-.114 1.022-.165m0 0a48.11 48.11 0 013.478-.397m7.5 0v-.916c0-1.18-.91-2.164-2.09-2.201a51.964 51.964 0 00-3.32 0c-1.18.037-2.09 1.022-2.09 2.201v.916m7.5 0a48.667 48.667 0 00-7.5 0" />
                                    </svg>
                                </button>
                            </div>
                        </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
        @livewire('comentarios-child')
        @livewire('livewire-toast')
    </div>
</section>