<div>

    <x-tall-crud-confirmation-dialog wire:model="confirmingItemDeletion">
        <x-slot name="title">
            Eliminar Registro
        </x-slot>

        <x-slot name="content">
            ¿Estás seguro de que quieres eliminar este registro?
        </x-slot>

        <x-slot name="footer">
            <x-tall-crud-button wire:click="$set('confirmingItemDeletion', false)">Cancelar</x-tall-crud-button>
            <x-tall-crud-button mode="delete" wire:loading.attr="disabled" wire:click="deleteItem()">Eliminar
            </x-tall-crud-button>
        </x-slot>
    </x-tall-crud-confirmation-dialog>

    <x-tall-crud-dialog-modal wire:model="confirmingItemCreation">
        <x-slot name="title">
            Agregar Registro
        </x-slot>

        <x-slot name="content">
           
            <div class="mt-4">
                <x-tall-crud-label>Nombre</x-tall-crud-label>
                <x-tall-crud-input class="block mt-1 w-1/2" type="text" wire:model.defer="item.NOMBRE_CONT" />
                @error('item.NOMBRE_CONT') <x-tall-crud-error-message>{{$message}}</x-tall-crud-error-message> @enderror
            </div>
            <div class="mt-4">
                <x-tall-crud-label>Teléfono</x-tall-crud-label>
                <x-tall-crud-input class="block mt-1 w-1/2" type="text" wire:model.defer="item.TELEFONO1_CONT" />
                @error('item.TELEFONO1_CONT') <x-tall-crud-error-message>{{$message}}</x-tall-crud-error-message>
                @enderror
            </div>
            <div class="mt-4">
                <x-tall-crud-label>Teléfono</x-tall-crud-label>
                <x-tall-crud-input class="block mt-1 w-1/2" type="text" wire:model.defer="item.TELEFONO2_CONT" />
                @error('item.TELEFONO2_CONT') <x-tall-crud-error-message>{{$message}}</x-tall-crud-error-message>
                @enderror
            </div>
            <div class="mt-4">
                <x-tall-crud-label>Correo Electrónico</x-tall-crud-label>
                <x-tall-crud-input class="block mt-1 w-1/2" type="text" wire:model.defer="item.EMAIL1_CONT" />
                @error('item.EMAIL1_CONT') <x-tall-crud-error-message>{{$message}}</x-tall-crud-error-message> @enderror
            </div>
            <div class="mt-4">
                <x-tall-crud-label>Correo Electrónico </x-tall-crud-label>
                <x-tall-crud-input class="block mt-1 w-1/2" type="text" wire:model.defer="item.EMAIL2_CONT" />
                @error('item.EMAIL2_CONT') <x-tall-crud-error-message>{{$message}}</x-tall-crud-error-message> @enderror
            </div>
        </x-slot>

        <x-slot name="footer">
            <x-tall-crud-button wire:click="$set('confirmingItemCreation', false)">Cancelar</x-tall-crud-button>
            <x-tall-crud-button mode="add" wire:loading.attr="disabled" wire:click="createItem()">Guardar
            </x-tall-crud-button>
        </x-slot>
    </x-tall-crud-dialog-modal>

    <x-tall-crud-dialog-modal wire:model="confirmingItemEdit">
        <x-slot name="title">
            Editar Registro
        </x-slot>

        <x-slot name="content">

            <div class="mt-4">
                <x-tall-crud-label>Nombre</x-tall-crud-label>
                <x-tall-crud-input class="block mt-1 w-1/2" type="text" wire:model.defer="item.NOMBRE_CONT" />
                @error('item.NOMBRE_CONT') <x-tall-crud-error-message>{{$message}}</x-tall-crud-error-message> @enderror
            </div>
            <div class="mt-4">
                <x-tall-crud-label>Teléfono</x-tall-crud-label>
                <x-tall-crud-input class="block mt-1 w-1/2" type="text" wire:model.defer="item.TELEFONO1_CONT" />
                @error('item.TELEFONO1_CONT') <x-tall-crud-error-message>{{$message}}</x-tall-crud-error-message>
                @enderror
            </div>
            <div class="mt-4">
                <x-tall-crud-label>Teléfono</x-tall-crud-label>
                <x-tall-crud-input class="block mt-1 w-1/2" type="text" wire:model.defer="item.TELEFONO2_CONT" />
                @error('item.TELEFONO2_CONT') <x-tall-crud-error-message>{{$message}}</x-tall-crud-error-message>
                @enderror
            </div>
            <div class="mt-4">
                <x-tall-crud-label>Correo Electrónico</x-tall-crud-label>
                <x-tall-crud-input class="block mt-1 w-1/2" type="text" wire:model.defer="item.EMAIL1_CONT" />
                @error('item.EMAIL1_CONT') <x-tall-crud-error-message>{{$message}}</x-tall-crud-error-message> @enderror
            </div>
            <div class="mt-4">
                <x-tall-crud-label>Correo Electrónico </x-tall-crud-label>
                <x-tall-crud-input class="block mt-1 w-1/2" type="text" wire:model.defer="item.EMAIL2_CONT" />
                @error('item.EMAIL2_CONT') <x-tall-crud-error-message>{{$message}}</x-tall-crud-error-message> @enderror
            </div>
        </x-slot>

        <x-slot name="footer">
            <x-tall-crud-button wire:click="$set('confirmingItemEdit', false)">Cancelar</x-tall-crud-button>
            <x-tall-crud-button mode="add" wire:loading.attr="disabled" wire:click="editItem()">Guardar
            </x-tall-crud-button>
        </x-slot>
    </x-tall-crud-dialog-modal>
</div>