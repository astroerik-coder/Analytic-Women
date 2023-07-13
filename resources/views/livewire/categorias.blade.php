<section class="antialiased bg-gray-100 text-black  px-4 mb-5">
    <div class="mt-8">
        <div class="flex justify-between">
            <div class="text-2xl">Categorias</div>
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
                    <button type="submit" wire:click="$emitTo('eventos-child', 'showCreateForm');"
                        class="group relative h-12 w-48 overflow-hidden rounded-lg bg-white text-lg shadow">
                        <div
                            class="absolute inset-0 w-3 bg-violet-400 transition-all duration-[250ms] ease-out group-hover:w-full">
                        </div>
                        <span class="relative text-black group-hover:text-white">Agregar Categorias</span>
                    </button>
                </div>
            </div>
            <table class="w-full border-collapse bg-white text-left text-sm text-gray-500 mt-8"
            wire:loading.class.delay="opacity-50">               
             <thead>
                <thead class="bg-gray-5">
                    <tr>
                    <td class="px-3 py-2">
                            <div class="flex items-center">
                                <button wire:click="sortBy('ID_CAT')">Id</button>
                                <x-tall-crud-sort-icon sortField="ID_CAT" :sort-by="$sortBy" :sort-asc="$sortAsc" />
                            </div>
                        </td>
                        <td class="px-3 py-2">Id Cat</td>
                        <td class="px-3 py-2">
                            <div class="flex items-center">
                                <button wire:click="sortBy('NOMBRE_CAT')">Nombre Cat</button>
                                <x-tall-crud-sort-icon sortField="NOMBRE_CAT" :sort-by="$sortBy" :sort-asc="$sortAsc" />
                            </div>
                        </td>
                        <td class="px-3 py-2">
                            <div class="flex items-center">
                                <button wire:click="sortBy('blogs_count')">Blogs Count</button>
                                <x-tall-crud-sort-icon sortField="blogs_count" :sort-by="$sortBy"
                                    :sort-asc="$sortAsc" />
                            </div>
                        </td>
                        <td class="px-3 py-2">Blogs</td>
                        <td class="px-3 py-2">Actions</td>
                    </tr>
                </thead>
                <tbody class="divide-y divide-blue-400">
                    @foreach($results as $result)
                    <tr class="hover:bg-blue-300 {{ ($loop->even ) ? " bg-blue-100" : "" }}">
                        <td class="px-3 py-2">{{ $result->id }}</td>
                        <td class="px-3 py-2">{{ $result->ID_CAT }}</td>
                        <td class="px-3 py-2">{{ $result->NOMBRE_CAT }}</td>
                        <td class="px-3 py-2">{{ $result->blogs_count }}</td>
                        <td class="px-3 py-2">{{ $result->blogs->implode('TITULO_BLG', ',') }}</td>
                        <td class="px-3 py-2">
                            <button type="submit"
                                wire:click="$emitTo('categorias-child', 'showEditForm', {{ $result->id}});"
                                class="text-green-500">
                                <x-tall-crud-icon-edit />
                            </button>
                            <button type="submit"
                                wire:click="$emitTo('categorias-child', 'showDeleteForm', {{ $result->id}});"
                                class="text-red-500">
                                <x-tall-crud-icon-delete />
                            </button>
                        </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>

        <div class="mt-4">
            {{ $results->links() }}
        </div>
        @livewire('categorias-child')
        @livewire('livewire-toast')
    </div>