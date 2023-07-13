<div>

    <x-tall-crud-confirmation-dialog wire:model="confirmingItemDeletion">
        <x-slot name="title">
            Delete Record
        </x-slot>

        <x-slot name="content">
            Are you sure you want to Delete Record?
        </x-slot>

        <x-slot name="footer">
            <x-tall-crud-button wire:click="$set('confirmingItemDeletion', false)">Cancelar</x-tall-crud-button>
            <x-tall-crud-button mode="delete" wire:loading.attr="disabled" wire:click="deleteItem()">Eliminar</x-tall-crud-button>
        </x-slot>
    </x-tall-crud-confirmation-dialog>

    <x-tall-crud-dialog-modal wire:model="confirmingItemCreation">
        <x-slot name="title">
            Add Record
        </x-slot>

        <x-slot name="content">
            <div class="mt-4">
                <x-tall-crud-label>Id Inf</x-tall-crud-label>
                <x-tall-crud-input class="block mt-1 w-1/2" type="text" wire:model.defer="item.ID_INF" />
                @error('item.ID_INF') <x-tall-crud-error-message>{{$message}}</x-tall-crud-error-message> @enderror
            </div>
            <div class="mt-4">
                <x-tall-crud-label>Id Rds</x-tall-crud-label>
                <x-tall-crud-input class="block mt-1 w-1/2" type="text" wire:model.defer="item.ID_RDS" />
                @error('item.ID_RDS') <x-tall-crud-error-message>{{$message}}</x-tall-crud-error-message> @enderror
            </div>
            <div class="mt-4">
                <x-tall-crud-label>Id Cont</x-tall-crud-label>
                <x-tall-crud-input class="block mt-1 w-1/2" type="text" wire:model.defer="item.ID_CONT" />
                @error('item.ID_CONT') <x-tall-crud-error-message>{{$message}}</x-tall-crud-error-message> @enderror
            </div>
            <div class="mt-4">
                <x-tall-crud-label>Mision</x-tall-crud-label>
                <x-tall-crud-input class="block mt-1 w-1/2" type="text" wire:model.defer="item.MISION" />
                @error('item.MISION') <x-tall-crud-error-message>{{$message}}</x-tall-crud-error-message> @enderror
            </div>
            <div class="mt-4">
                <x-tall-crud-label>Vision</x-tall-crud-label>
                <x-tall-crud-input class="block mt-1 w-1/2" type="text" wire:model.defer="item.VISION" />
                @error('item.VISION') <x-tall-crud-error-message>{{$message}}</x-tall-crud-error-message> @enderror
            </div>
            <div class="mt-4">
                <x-tall-crud-label>Cultura Organizacional</x-tall-crud-label>
                <x-tall-crud-input class="block mt-1 w-1/2" type="text" wire:model.defer="item.CULTURA_ORGANIZACIONAL" />
                @error('item.CULTURA_ORGANIZACIONAL') <x-tall-crud-error-message>{{$message}}</x-tall-crud-error-message> @enderror
            </div>
        </x-slot>

        <x-slot name="footer">
            <x-tall-crud-button wire:click="$set('confirmingItemCreation', false)">Cancelar</x-tall-crud-button>
            <x-tall-crud-button mode="add" wire:loading.attr="disabled" wire:click="createItem()">Guardar</x-tall-crud-button>
        </x-slot>
    </x-tall-crud-dialog-modal>

    <x-tall-crud-dialog-modal wire:model="confirmingItemEdit">
        <x-slot name="title">
            Edit Record
        </x-slot>

        <x-slot name="content">
            <div class="mt-4">
                <x-tall-crud-label>Id Inf</x-tall-crud-label>
                <x-tall-crud-input class="block mt-1 w-1/2" type="text" wire:model.defer="item.ID_INF" />
                @error('item.ID_INF') <x-tall-crud-error-message>{{$message}}</x-tall-crud-error-message> @enderror
            </div>
            <div class="mt-4">
                <x-tall-crud-label>Id Rds</x-tall-crud-label>
                <x-tall-crud-input class="block mt-1 w-1/2" type="text" wire:model.defer="item.ID_RDS" />
                @error('item.ID_RDS') <x-tall-crud-error-message>{{$message}}</x-tall-crud-error-message> @enderror
            </div>
            <div class="mt-4">
                <x-tall-crud-label>Id Cont</x-tall-crud-label>
                <x-tall-crud-input class="block mt-1 w-1/2" type="text" wire:model.defer="item.ID_CONT" />
                @error('item.ID_CONT') <x-tall-crud-error-message>{{$message}}</x-tall-crud-error-message> @enderror
            </div>
            <div class="mt-4">
                <x-tall-crud-label>Mision</x-tall-crud-label>
                <x-tall-crud-input class="block mt-1 w-1/2" type="text" wire:model.defer="item.MISION" />
                @error('item.MISION') <x-tall-crud-error-message>{{$message}}</x-tall-crud-error-message> @enderror
            </div>
            <div class="mt-4">
                <x-tall-crud-label>Vision</x-tall-crud-label>
                <x-tall-crud-input class="block mt-1 w-1/2" type="text" wire:model.defer="item.VISION" />
                @error('item.VISION') <x-tall-crud-error-message>{{$message}}</x-tall-crud-error-message> @enderror
            </div>
            <div class="mt-4">
                <x-tall-crud-label>Cultura Organizacional</x-tall-crud-label>
                <x-tall-crud-input class="block mt-1 w-1/2" type="text" wire:model.defer="item.CULTURA_ORGANIZACIONAL" />
                @error('item.CULTURA_ORGANIZACIONAL') <x-tall-crud-error-message>{{$message}}</x-tall-crud-error-message> @enderror
            </div>
        </x-slot>

        <x-slot name="footer">
            <x-tall-crud-button wire:click="$set('confirmingItemEdit', false)">Cancelar</x-tall-crud-button>
            <x-tall-crud-button mode="add" wire:loading.attr="disabled" wire:click="editItem()">Guardar</x-tall-crud-button>
        </x-slot>
    </x-tall-crud-dialog-modal>
</div>
