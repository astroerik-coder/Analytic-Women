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
                <x-tall-crud-label>Id Emp</x-tall-crud-label>
                <x-tall-crud-input class="block mt-1 w-1/2" type="text" wire:model.defer="item.ID_EMP" />
                @error('item.ID_EMP') <x-tall-crud-error-message>{{$message}}</x-tall-crud-error-message> @enderror
            </div>
            <div class="mt-4">
                <x-tall-crud-label>Nombre Emp</x-tall-crud-label>
                <x-tall-crud-input class="block mt-1 w-1/2" type="text" wire:model.defer="item.NOMBRE_EMP" />
                @error('item.NOMBRE_EMP') <x-tall-crud-error-message>{{$message}}</x-tall-crud-error-message> @enderror
            </div>
            <div class="mt-4">
                <x-tall-crud-label>Descripcion Emp</x-tall-crud-label>
                <x-tall-crud-input class="block mt-1 w-1/2" type="text" wire:model.defer="item.DESCRIPCION_EMP" />
                @error('item.DESCRIPCION_EMP') <x-tall-crud-error-message>{{$message}}</x-tall-crud-error-message> @enderror
            </div>
            <div class="mt-4">
                <x-tall-crud-label>Modalidad Emp</x-tall-crud-label>
                <x-tall-crud-input class="block mt-1 w-1/2" type="text" wire:model.defer="item.MODALIDAD_EMP" />
                @error('item.MODALIDAD_EMP') <x-tall-crud-error-message>{{$message}}</x-tall-crud-error-message> @enderror
            </div>
            <div class="mt-4">
                <x-tall-crud-label>Horario Emp</x-tall-crud-label>
                <x-tall-crud-input class="block mt-1 w-1/2" type="text" wire:model.defer="item.HORARIO_EMP" />
                @error('item.HORARIO_EMP') <x-tall-crud-error-message>{{$message}}</x-tall-crud-error-message> @enderror
            </div>
            <div class="mt-4">
                <x-tall-crud-label>Fecha Publicacion Emp</x-tall-crud-label>
                <x-tall-crud-input class="block mt-1 w-1/2" type="text" wire:model.defer="item.FECHA_PUBLICACION_EMP" />
                @error('item.FECHA_PUBLICACION_EMP') <x-tall-crud-error-message>{{$message}}</x-tall-crud-error-message> @enderror
            </div>
            <div class="mt-4">
                <x-tall-crud-label>Experiencia Emp</x-tall-crud-label>
                <x-tall-crud-input class="block mt-1 w-1/2" type="text" wire:model.defer="item.EXPERIENCIA_EMP" />
                @error('item.EXPERIENCIA_EMP') <x-tall-crud-error-message>{{$message}}</x-tall-crud-error-message> @enderror
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
                <x-tall-crud-label>Id Emp</x-tall-crud-label>
                <x-tall-crud-input class="block mt-1 w-1/2" type="text" wire:model.defer="item.ID_EMP" />
                @error('item.ID_EMP') <x-tall-crud-error-message>{{$message}}</x-tall-crud-error-message> @enderror
            </div>
            <div class="mt-4">
                <x-tall-crud-label>Nombre Emp</x-tall-crud-label>
                <x-tall-crud-input class="block mt-1 w-1/2" type="text" wire:model.defer="item.NOMBRE_EMP" />
                @error('item.NOMBRE_EMP') <x-tall-crud-error-message>{{$message}}</x-tall-crud-error-message> @enderror
            </div>
            <div class="mt-4">
                <x-tall-crud-label>Descripcion Emp</x-tall-crud-label>
                <x-tall-crud-input class="block mt-1 w-1/2" type="text" wire:model.defer="item.DESCRIPCION_EMP" />
                @error('item.DESCRIPCION_EMP') <x-tall-crud-error-message>{{$message}}</x-tall-crud-error-message> @enderror
            </div>
            <div class="mt-4">
                <x-tall-crud-label>Modalidad Emp</x-tall-crud-label>
                <x-tall-crud-input class="block mt-1 w-1/2" type="text" wire:model.defer="item.MODALIDAD_EMP" />
                @error('item.MODALIDAD_EMP') <x-tall-crud-error-message>{{$message}}</x-tall-crud-error-message> @enderror
            </div>
            <div class="mt-4">
                <x-tall-crud-label>Horario Emp</x-tall-crud-label>
                <x-tall-crud-input class="block mt-1 w-1/2" type="text" wire:model.defer="item.HORARIO_EMP" />
                @error('item.HORARIO_EMP') <x-tall-crud-error-message>{{$message}}</x-tall-crud-error-message> @enderror
            </div>
            <div class="mt-4">
                <x-tall-crud-label>Fecha Publicacion Emp</x-tall-crud-label>
                <x-tall-crud-input class="block mt-1 w-1/2" type="text" wire:model.defer="item.FECHA_PUBLICACION_EMP" />
                @error('item.FECHA_PUBLICACION_EMP') <x-tall-crud-error-message>{{$message}}</x-tall-crud-error-message> @enderror
            </div>
            <div class="mt-4">
                <x-tall-crud-label>Experiencia Emp</x-tall-crud-label>
                <x-tall-crud-input class="block mt-1 w-1/2" type="text" wire:model.defer="item.EXPERIENCIA_EMP" />
                @error('item.EXPERIENCIA_EMP') <x-tall-crud-error-message>{{$message}}</x-tall-crud-error-message> @enderror
            </div>
        </x-slot>

        <x-slot name="footer">
            <x-tall-crud-button wire:click="$set('confirmingItemEdit', false)">Cancelar</x-tall-crud-button>
            <x-tall-crud-button mode="add" wire:loading.attr="disabled" wire:click="editItem()">Guardar</x-tall-crud-button>
        </x-slot>
    </x-tall-crud-dialog-modal>
</div>
