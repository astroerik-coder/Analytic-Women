<div>
    <x-tall-crud-confirmation-dialog wire:model="confirmingItemDeletion">
        <x-slot name="title">
            Eliminar registro
        </x-slot>

        <x-slot name="content">
            ¿Estás seguro de que quieres eliminar el registro?
        </x-slot>
        <div>
            <x-tall-crud-confirmation-dialog wire:model="confirmingItemDeletion">
                <x-slot name="title">
                    Eliminar Registro
                </x-slot>
        
                <x-slot name="content">
                    ¿Estás seguro de que quieres eliminar el registro?
                </x-slot>
        
                <x-slot name="footer">
                    <x-tall-crud-button wire:click="$set('confirmingItemDeletion', false)">Cancelar</x-tall-crud-button>
                    <x-tall-crud-button mode="delete" wire:loading.attr="disabled" wire:click="deleteItem()">Eliminar</x-tall-crud-button>
                </x-slot>
            </x-tall-crud-confirmation-dialog>
        
            <x-tall-crud-dialog-modal wire:model="confirmingItemCreation">
                <x-slot name="title">
                    Añadir
                </x-slot>
        
                <x-slot name="content">
                    <div class="mt-4">
                        <x-tall-crud-label>Provincia</x-tall-crud-label>
                        <x-tall-crud-select class="block mt-1 w-1/4" wire:model.defer="item.ID_PRO">
                            <option value="">Seleccione</option>
                            @foreach ($provincias as $provincia)
                                <option value="{{$provincia->ID_PRO}}">{{ $provincia->NOMBRE_PRO }}</option>
                            @endforeach
                        </x-tall-crud-select>
                        @error('item.ID_PRO') <x-tall-crud-error-message>{{$message}}</x-tall-crud-error-message> @enderror
                    </div>
                    
                    <div class="mt-4">
                        <x-tall-crud-label>Nombre Ciudad</x-tall-crud-label>
                        <x-tall-crud-input class="block mt-1 w-1/2" type="text" wire:model.defer="item.NOMBRE_CIU" />
                        @error('item.NOMBRE_CIU') <x-tall-crud-error-message>{{$message}}</x-tall-crud-error-message> @enderror
                    </div>
                </x-slot>
        
                <x-slot name="footer">
                    <x-tall-crud-button wire:click="$set('confirmingItemCreation', false)">Cancelar</x-tall-crud-button>
                    <x-tall-crud-button mode="add" wire:loading.attr="disabled" wire:click="createItem()">Guardar</x-tall-crud-button>
                </x-slot>
            </x-tall-crud-dialog-modal>
        
            <x-tall-crud-dialog-modal wire:model="confirmingItemEdit">
                <x-slot name="title">
                    Editar
                </x-slot>
        
                <x-slot name="content">
                    <div class="mt-4">
                        <x-tall-crud-label>Provincia</x-tall-crud-label>
                        <x-tall-crud-select class="block mt-1 w-1/4" wire:model.defer="item.ID_PRO">
                            <option value="">Seleccione</option>
                            @foreach ($provincias as $provincia)
                                <option value="{{ $provincia->ID_PRO }}">{{ $provincia->NOMBRE_PRO }}</option>
                            @endforeach
                        </x-tall-crud-select>
                        @error('item.ID_PRO') <x-tall-crud-error-message>{{$message}}</x-tall-crud-error-message> @enderror
                    </div>
                    
                    <div class="mt-4">
                        <x-tall-crud-label>Nombre Ciudad</x-tall-crud-label>
                        <x-tall-crud-input class="block mt-1 w-1/2" type="text" wire:model.defer="item.NOMBRE_CIU" />
                        @error('item.NOMBRE_CIU') <x-tall-crud-error-message>{{$message}}</x-tall-crud-error-message> @enderror
                    </div>
                </x-slot>
        
                <x-slot name="footer">
                    <x-tall-crud-button wire:click="$set('confirmingItemEdit', false)">Cancelar</x-tall-crud-button>
                    <x-tall-crud-button mode="add" wire:loading.attr="disabled" wire:click="editItem()">Guardar</x-tall-crud-button>
                </x-slot>
            </x-tall-crud-dialog-modal>
        </div>
        
        <x-slot name="footer">
            <x-tall-crud-button wire:click="$set('confirmingItemDeletion', false)">Cancelar</x-tall-crud-button>
            <x-tall-crud-button mode="delete" wire:loading.attr="disabled" wire:click="deleteItem()">Eliminar</x-tall-crud-button>
        </x-slot>
    </x-tall-crud-confirmation-dialog>

    <x-tall-crud-dialog-modal wire:model="confirmingItemCreation">
        <x-slot name="title">
            Añadir
        </x-slot>

        <x-slot name="content">
            <div class="mt-4">
                <x-tall-crud-label>Provincia</x-tall-crud-label>
                <x-tall-crud-select class="block mt-1 w-1/4" wire:model.defer="item.ID_PRO">
                    <option value="">Seleccione</option>
                    @foreach ($provincias as $provincia)
                        <option value="{{$provincia->ID_PRO}}">{{ $provincia->NOMBRE_PRO }}</option>
                    @endforeach
                </x-tall-crud-select>
                @error('item.ID_PRO') <x-tall-crud-error-message>{{$message}}</x-tall-crud-error-message> @enderror
            </div>
            
            <div class="mt-4">
                <x-tall-crud-label>Nombre Ciudad</x-tall-crud-label>
                <x-tall-crud-input class="block mt-1 w-1/2" type="text" wire:model.defer="item.NOMBRE_CIU" />
                @error('item.NOMBRE_CIU') <x-tall-crud-error-message>{{$message}}</x-tall-crud-error-message> @enderror
            </div>
        </x-slot>

        <x-slot name="footer">
            <x-tall-crud-button wire:click="$set('confirmingItemCreation', false)">Cancelar</x-tall-crud-button>
            <x-tall-crud-button mode="add" wire:loading.attr="disabled" wire:click="createItem()">Guardar</x-tall-crud-button>
        </x-slot>
    </x-tall-crud-dialog-modal>

    <x-tall-crud-dialog-modal wire:model="confirmingItemEdit">
        <x-slot name="title">
            Editar
        </x-slot>

        <x-slot name="content"> 
            <div class="mt-4">
                <x-tall-crud-label>Provincia</x-tall-crud-label>
                <x-tall-crud-select class="block mt-1 w-1/4" wire:model.defer="item.ID_PRO">
                    <option value="">Seleccione</option>
                    @foreach ($provincias as $provincia)
                        <option value="{{ $provincia->ID_PRO }}">{{ $provincia->NOMBRE_PRO }}</option>
                    @endforeach
                </x-tall-crud-select>
                @error('item.ID_PRO') <x-tall-crud-error-message>{{$message}}</x-tall-crud-error-message> @enderror
            </div>
            
            <div class="mt-4">
                <x-tall-crud-label>Nombre Ciudad</x-tall-crud-label>
                <x-tall-crud-input class="block mt-1 w-1/2" type="text" wire:model.defer="item.NOMBRE_CIU" />
                @error('item.NOMBRE_CIU') <x-tall-crud-error-message>{{$message}}</x-tall-crud-error-message> @enderror
            </div>
        </x-slot>

        <x-slot name="footer">
            <x-tall-crud-button wire:click="$set('confirmingItemEdit', false)">Cancelar</x-tall-crud-button>
            <x-tall-crud-button mode="add" wire:loading.attr="disabled" wire:click="editItem()">Guardar</x-tall-crud-button>
        </x-slot>
    </x-tall-crud-dialog-modal>
</div>