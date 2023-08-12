<?php

namespace App\Http\Livewire;

use Livewire\Component;
use \Illuminate\View\View;
use App\Models\Contacto;

class ContactosChild extends Component
{

    public $item;

    /**
     * @var array
     */
    protected $listeners = [
        'showDeleteForm',
        'showCreateForm',
        'showEditForm',
    ];

    /**
     * @var array
     */
    protected $rules = [
        'item.NOMBRE_CONT' => '',
        'item.TELEFONO1_CONT' => '',
        'item.TELEFONO2_CONT' => '',
        'item.EMAIL1_CONT' => '',
        'item.EMAIL2_CONT' => '',
    ];

    /**
     * @var array
     */
    protected $validationAttributes = [
        'item.NOMBRE_CONT' => 'Nombre Cont',
        'item.TELEFONO1_CONT' => 'Telefono1 Cont',
        'item.TELEFONO2_CONT' => 'Telefono2 Cont',
        'item.EMAIL1_CONT' => 'Email1 Cont',
        'item.EMAIL2_CONT' => 'Email2 Cont',
    ];

    /**
     * @var bool
     */
    public $confirmingItemDeletion = false;

    /**
     * @var string | int
     */
    public $primaryKey;

    /**
     * @var bool
     */
    public $confirmingItemCreation = false;

    /**
     * @var bool
     */
    public $confirmingItemEdit = false;

    public function render(): View
    {
        return view('livewire.contactos-child');
    }

    public function showDeleteForm(int $id): void
    {
        $this->confirmingItemDeletion = true;
        $this->primaryKey = $id;
    }

    public function deleteItem(): void
    {
        Contacto::destroy($this->primaryKey);
        $this->confirmingItemDeletion = false;
        $this->primaryKey = '';
        $this->reset(['item']);
        $this->emitTo('contactos', 'refresh');
        $this->emitTo('livewire-toast', 'show', 'Registro eliminado con éxito');
    }
 
    public function showCreateForm(): void
    {
        $this->confirmingItemCreation = true;
        $this->resetErrorBag();
        $this->reset(['item']);
    }

    public function createItem(): void
    {
        $this->validate(
            [
                'item.NOMBRE_CONT' => 'required',
                'item.TELEFONO1_CONT' => 'required',
                'item.TELEFONO2_CONT' => 'required',
                'item.EMAIL1_CONT' => 'required',
            ],[
                'item.NOMBRE_CONT.require' => 'El campo es necesario',    
                'item.TELEFONO1_CONT.require' => 'El campo es necesario',
                'item.TELEFONO2_CONT.require' => 'El campo es necesario',
                'item.EMAIL1_CONT.require' => 'El campo es necesario',
                'item.EMAIL2_CONT.require' => 'El campo es necesario',
            ]
        );
        
        $item = Contacto::create([
            'ID_CONT' => $this->item['ID_CONT'] ?? null,                  
            'NOMBRE_CONT' => $this->item['NOMBRE_CONT'] ?? null, 
            'TELEFONO1_CONT' => $this->item['TELEFONO1_CONT'] ?? null, 
            'TELEFONO2_CONT' => $this->item['TELEFONO2_CONT'] ?? null, 
            'EMAIL1_CONT' => $this->item['EMAIL1_CONT'] ?? null, 
        ]);
        $this->confirmingItemCreation = false;
        $this->emitTo('contactos', 'refresh');
        $this->emitTo('livewire-toast', 'show', 'Registro agregado con éxito');
    }
 
    public function showEditForm(Contacto $contacto): void
    {
        $this->resetErrorBag();
        $this->item = $contacto;
        $this->confirmingItemEdit = true;
    }

    public function editItem(): void
    {
        $this->validate(
            [
                'item.NOMBRE_CONT' => 'required',
                'item.TELEFONO1_CONT' => 'required',
                'item.TELEFONO2_CONT' => 'required',
                'item.EMAIL1_CONT' => 'required',
            ],[
                'item.NOMBRE_CONT' => 'El campo es necesario',    
                'item.TELEFONO1_CONT' => 'El campo es necesario',
                'item.TELEFONO2_CONT' => 'El campo es necesario',
                'item.EMAIL1_CONT' => 'El campo es necesario',
            ]
        );
        $this->item->save();
        $this->confirmingItemEdit = false;
        $this->primaryKey = '';
        $this->emitTo('contactos', 'refresh');
        $this->emitTo('livewire-toast', 'show', 'Registro actualizado con éxito');
    }

}
