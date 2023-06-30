<div class="mt-8 min-h-screen">
    <div class="flex justify-between">
        <div class="text-2xl">Eventos</div>
        <button type="submit" wire:click="$emitTo('eventos-child', 'showCreateForm');" class="text-blue-500">
            <x-tall-crud-icon-add />
        </button>
    </div>

    <div class="mt-6">
        <div class="flex justify-between">
            <div class="flex">
                <x-tall-crud-input-search />
            </div>
            <div class="flex">
                <x-tall-crud-page-dropdown />
            </div>
        </div>
        <table class="w-full whitespace-no-wrap mt-4 shadow-2xl text-xs" wire:loading.class.delay="opacity-50">
            <thead>
                <tr class="text-left font-bold bg-blue-400">
                    <td class="px-3 py-2">
                        <div class="flex items-center">
                            <button wire:click="sortBy('ID_EVT')">Id</button>
                            <x-tall-crud-sort-icon sortField="ID_EVT" :sort-by="$sortBy" :sort-asc="$sortAsc" />
                        </div>
                    </td>
                    <td class="px-3 py-2">Nombre</td>
                    <td class="px-3 py-2">Descripción</td>
                    <td class="px-3 py-2">Fecha</td>
                    <td class="px-3 py-2">Hora</td>
                    <td class="px-3 py-2">Observaciones</td>
                    <td class="px-3 py-2">Ubicación</td>
                    <td class="px-3 py-2">Acciones</td>
                </tr>
            </thead>
            <tbody class="divide-y divide-blue-400">
                @foreach($results as $result)
                <tr class="hover:bg-blue-300 {{ ($loop->even ) ? " bg-blue-100" : "" }}">
                    <td class="px-3 py-2">{{ $result->ID_EVT }}</td>
                    <td class="px-3 py-2">{{ $result->NOMBRE_EVT }}</td>
                    <td class="px-3 py-2">{{ $result->DESCRIPCION_EVT }}</td>
                    <td class="px-3 py-2">{{ $result->FECHA_EVT }}</td>
                    <td class="px-3 py-2">{{ $result->HORA_EVT }}</td>
                    <td class="px-3 py-2">{{ $result->OBSERVACIONES_EVT }}</td>
                    <td class="px-3 py-2">{{ $result->UBICACION_EVT }}</td>
                    <td class="px-3 py-2">
                        <button type="submit"
                            wire:click="$emitTo('eventos-child', 'showEditForm', {{ $result->ID_EVT}});"
                            class="text-green-500">
                            <x-tall-crud-icon-edit />
                        </button>
                        <button type="submit"
                            wire:click="$emitTo('eventos-child', 'showDeleteForm', {{ $result->ID_EVT}});"
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
    @livewire('eventos-child')
    @livewire('livewire-toast')
</div>
