<?php

namespace App\Http\Livewire;

use Livewire\Component;
use \Illuminate\View\View;
use App\Models\Evento;

class EventosChild extends Component
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
        'item.NOMBRE_EVT' => '',
        'item.DESCRIPCION_EVT' => '',
        'item.FECHA_EVT' => '',
        'item.HORA_EVT' => '',
        'item.OBSERVACIONES_EVT' => '',
        'item.UBICACION_EVT' => '',
    ];

    /**
     * @var array
     */
    protected $validationAttributes = [
        'item.NOMBRE_EVT' => 'Nombre Evt',
        'item.DESCRIPCION_EVT' => 'Descripcion Evt',
        'item.FECHA_EVT' => 'Fecha Evt',
        'item.HORA_EVT' => 'Hora Evt',
        'item.OBSERVACIONES_EVT' => 'Observaciones Evt',
        'item.UBICACION_EVT' => 'Ubicacion Evt',
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
        return view('livewire.eventos-child');
    }

    public function showDeleteForm(int $id): void
    {
        $this->confirmingItemDeletion = true;
        $this->primaryKey = $id;
    }

    public function deleteItem(): void
    {
        Evento::destroy($this->primaryKey);
        $this->confirmingItemDeletion = false;
        $this->primaryKey = '';
        $this->reset(['item']);
        $this->emitTo('eventos', 'refresh');
        $this->emitTo('livewire-toast', 'show', 'Record Deleted Successfully');
    }
 
    public function showCreateForm(): void
    {
        $this->confirmingItemCreation = true;
        $this->resetErrorBag();
        $this->reset(['item']);
    }

    public function createItem(): void
    {
        $this->validate();
        $item = Evento::create([
            'NOMBRE_EVT' => $this->item['NOMBRE_EVT'] ?? '', 
            'DESCRIPCION_EVT' => $this->item['DESCRIPCION_EVT'] ?? '', 
            'FECHA_EVT' => $this->item['FECHA_EVT'] ?? '', 
            'HORA_EVT' => $this->item['HORA_EVT'] ?? '', 
            'OBSERVACIONES_EVT' => $this->item['OBSERVACIONES_EVT'] ?? '', 
            'UBICACION_EVT' => $this->item['UBICACION_EVT'] ?? '', 
        ]);
        $this->confirmingItemCreation = false;
        $this->emitTo('eventos', 'refresh');
        $this->emitTo('livewire-toast', 'show', 'Record Added Successfully');
    }
 
    public function showEditForm(Evento $evento): void
    {
        $this->resetErrorBag();
        $this->item = $evento;
        $this->confirmingItemEdit = true;
    }

    public function editItem(): void
    {
        $this->validate();
        $this->item->save();
        $this->confirmingItemEdit = false;
        $this->primaryKey = '';
        $this->emitTo('eventos', 'refresh');
        $this->emitTo('livewire-toast', 'show', 'Record Updated Successfully');
    }

}