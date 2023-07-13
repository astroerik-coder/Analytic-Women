<div class="mt-8 min-h-screen">
    <div class="flex justify-between">
        <div class="text-2xl">Cursos</div>
        <button type="submit" wire:click="$emitTo('cursos-child', 'showCreateForm');" class="text-blue-500">
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
                <td class="px-3 py-2" >
                    <div class="flex items-center">
                        <button wire:click="sortBy('id')">Id</button>
                        <x-tall-crud-sort-icon sortField="id" :sort-by="$sortBy" :sort-asc="$sortAsc" />
                    </div>
                </td>
                <td class="px-3 py-2" >Id Cur</td>
                <td class="px-3 py-2" >Id Clt</td>
                <td class="px-3 py-2" >Nombre Cur</td>
                <td class="px-3 py-2" >Descripcion Cur</td>
                <td class="px-3 py-2" >Publico Cur</td>
                <td class="px-3 py-2" >Edad Minima Cur</td>
                <td class="px-3 py-2" >Edad Maxima Cur</td>
                <td class="px-3 py-2" >Link Cur</td>
                <td class="px-3 py-2" >Cupos Cur</td>
                <td class="px-3 py-2" >Costo Cur</td>
                <td class="px-3 py-2" >Actions</td>
                </tr>
            </thead>
            <tbody class="divide-y divide-blue-400">
            @foreach($results as $result)
                <tr class="hover:bg-blue-300 {{ ($loop->even ) ? "bg-blue-100" : ""}}">
                    <td class="px-3 py-2" >{{ $result->id }}</td>
                    <td class="px-3 py-2" >{{ $result->ID_CUR }}</td>
                    <td class="px-3 py-2" >{{ $result->ID_CLT }}</td>
                    <td class="px-3 py-2" >{{ $result->NOMBRE_CUR }}</td>
                    <td class="px-3 py-2" >{{ $result->DESCRIPCION_CUR }}</td>
                    <td class="px-3 py-2" >{{ $result->PUBLICO_CUR }}</td>
                    <td class="px-3 py-2" >{{ $result->EDAD_MINIMA_CUR }}</td>
                    <td class="px-3 py-2" >{{ $result->EDAD_MAXIMA_CUR }}</td>
                    <td class="px-3 py-2" >{{ $result->LINK_CUR }}</td>
                    <td class="px-3 py-2" >{{ $result->CUPOS_CUR }}</td>
                    <td class="px-3 py-2" >{{ $result->COSTO_CUR }}</td>
                    <td class="px-3 py-2" >
                        <button type="submit" wire:click="$emitTo('cursos-child', 'showEditForm', {{ $result->id}});" class="text-green-500">
                            <x-tall-crud-icon-edit />
                        </button>
                        <button type="submit" wire:click="$emitTo('cursos-child', 'showDeleteForm', {{ $result->id}});" class="text-red-500">
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
    @livewire('cursos-child')
    @livewire('livewire-toast')
</div>