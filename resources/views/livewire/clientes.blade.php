<div class="mt-8 min-h-screen">
    <div class="flex justify-between">
        <div class="text-2xl">Clientes</div>
        <button type="submit" wire:click="$emitTo('clientes-child', 'showCreateForm');" class="text-blue-500">
            <x-tall-crud-icon-add />
        </button> 
    </div>

    <div class="mt-6">
        <div class="flex justify-between">
            <div class="flex">

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
                <td class="px-3 py-2" >Id Clt</td>
                <td class="px-3 py-2" >Id Empr</td>
                <td class="px-3 py-2" >Id Gen</td>
                <td class="px-3 py-2" >Id Pro</td>
                <td class="px-3 py-2" >Id Emp</td>
                <td class="px-3 py-2" >Nombre Clt</td>
                <td class="px-3 py-2" >Fecha Nacimiento Clt</td>
                <td class="px-3 py-2" >Telefono1 Clt</td>
                <td class="px-3 py-2" >Telefono2 Clt</td>
                <td class="px-3 py-2" >Email Clt</td>
                <td class="px-3 py-2" >Titulo Clt</td>
                <td class="px-3 py-2" >Rol Clt</td>
                <td class="px-3 py-2" >Experiencia Clt</td>
                <td class="px-3 py-2" >Foto Clt</td>
                <td class="px-3 py-2" >Actions</td>
                </tr>
            </thead>
            <tbody class="divide-y divide-blue-400">
            @foreach($results as $result)
                <tr class="hover:bg-blue-300 {{ ($loop->even ) ? "bg-blue-100" : ""}}">
                    <td class="px-3 py-2" >{{ $result->id }}</td>
                    <td class="px-3 py-2" >{{ $result->ID_CLT }}</td>
                    <td class="px-3 py-2" >{{ $result->ID_EMPR }}</td>
                    <td class="px-3 py-2" >{{ $result->ID_GEN }}</td>
                    <td class="px-3 py-2" >{{ $result->ID_PRO }}</td>
                    <td class="px-3 py-2" >{{ $result->ID_EMP }}</td>
                    <td class="px-3 py-2" >{{ $result->NOMBRE_CLT }}</td>
                    <td class="px-3 py-2" >{{ $result->FECHA_NACIMIENTO_CLT }}</td>
                    <td class="px-3 py-2" >{{ $result->TELEFONO1_CLT }}</td>
                    <td class="px-3 py-2" >{{ $result->TELEFONO2_CLT }}</td>
                    <td class="px-3 py-2" >{{ $result->EMAIL_CLT }}</td>
                    <td class="px-3 py-2" >{{ $result->TITULO_CLT }}</td>
                    <td class="px-3 py-2" >{{ $result->ROL_CLT }}</td>
                    <td class="px-3 py-2" >{{ $result->EXPERIENCIA_CLT }}</td>
                    <td class="px-3 py-2" >{{ $result->FOTO_CLT }}</td>
                    <td class="px-3 py-2" >
                        <button type="submit" wire:click="$emitTo('clientes-child', 'showEditForm', {{ $result->id}});" class="text-green-500">
                            <x-tall-crud-icon-edit />
                        </button>
                        <button type="submit" wire:click="$emitTo('clientes-child', 'showDeleteForm', {{ $result->id}});" class="text-red-500">
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
    @livewire('clientes-child')
    @livewire('livewire-toast')
</div>