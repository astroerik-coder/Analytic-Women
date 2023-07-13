<div class="mt-8 min-h-screen">
    <div class="flex justify-between">
        <div class="text-2xl">Redes</div>
        <button type="submit" wire:click="$emitTo('redes-child', 'showCreateForm');" class="text-blue-500">
            <x-tall-crud-icon-add />
        </button> 
    </div>

    <div class="mt-6">
        <div class="flex justify-between">
            <div class="flex">

            </div>
            <div class="flex">

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
                <td class="px-3 py-2" >Id Rds</td>
                <td class="px-3 py-2" >Facebook</td>
                <td class="px-3 py-2" >Instagram</td>
                <td class="px-3 py-2" >Linkedin</td>
                <td class="px-3 py-2" >Tiktok</td>
                <td class="px-3 py-2" >Actions</td>
                </tr>
            </thead>
            <tbody class="divide-y divide-blue-400">
            @foreach($results as $result)
                <tr class="hover:bg-blue-300 {{ ($loop->even ) ? "bg-blue-100" : ""}}">
                    <td class="px-3 py-2" >{{ $result->id }}</td>
                    <td class="px-3 py-2" >{{ $result->ID_RDS }}</td>
                    <td class="px-3 py-2" >{{ $result->FACEBOOK }}</td>
                    <td class="px-3 py-2" >{{ $result->INSTAGRAM }}</td>
                    <td class="px-3 py-2" >{{ $result->LINKEDIN }}</td>
                    <td class="px-3 py-2" >{{ $result->TIKTOK }}</td>
                    <td class="px-3 py-2" >
                        <button type="submit" wire:click="$emitTo('redes-child', 'showEditForm', {{ $result->id}});" class="text-green-500">
                            <x-tall-crud-icon-edit />
                        </button>
                        <button type="submit" wire:click="$emitTo('redes-child', 'showDeleteForm', {{ $result->id}});" class="text-red-500">
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
    @livewire('redes-child')
    @livewire('livewire-toast')
</div>