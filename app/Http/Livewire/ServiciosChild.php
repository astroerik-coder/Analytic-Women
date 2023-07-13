<?php

namespace App\Http\Livewire;

use Livewire\Component;
use \Illuminate\View\View;
use App\Models\Servicio;

class ServiciosChild extends Component
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
        'item.ID_CLT' => '',
        'item.NOMBRE_SER' => '',
        'item.DESCRIPCION_SER' => '',
        'item.OBSERVACIONES_SER' => '',
    ];

    /**
     * @var array
     */
    protected $validationAttributes = [
        'item.ID_CLT' => 'Id Clt',
        'item.NOMBRE_SER' => 'Nombre Ser',
        'item.DESCRIPCION_SER' => 'Descripcion Ser',
        'item.OBSERVACIONES_SER' => 'Observaciones Ser',
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
        return view('livewire.servicios-child');
    }

    public function showDeleteForm(int $id): void
    {
        $this->confirmingItemDeletion = true;
        $this->primaryKey = $id;
    }

    public function deleteItem(): void
    {
        Servicio::destroy($this->primaryKey);
        $this->confirmingItemDeletion = false;
        $this->primaryKey = '';
        $this->reset(['item']);
        $this->emitTo('servicios', 'refresh');
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
        $item = Servicio::create([
            'ID_CLT' => $this->item['ID_CLT'] ?? '', 
            'NOMBRE_SER' => $this->item['NOMBRE_SER'] ?? '', 
            'DESCRIPCION_SER' => $this->item['DESCRIPCION_SER'] ?? '', 
            'OBSERVACIONES_SER' => $this->item['OBSERVACIONES_SER'] ?? '', 
        ]);
        $this->confirmingItemCreation = false;
        $this->emitTo('servicios', 'refresh');
        $this->emitTo('livewire-toast', 'show', 'Record Added Successfully');
    }
 
    public function showEditForm(Servicio $servicio): void
    {
        $this->resetErrorBag();
        $this->item = $servicio;
        $this->confirmingItemEdit = true;
    }

    public function editItem(): void
    {
        $this->validate();
        $this->item->save();
        $this->confirmingItemEdit = false;
        $this->primaryKey = '';
        $this->emitTo('servicios', 'refresh');
        $this->emitTo('livewire-toast', 'show', 'Record Updated Successfully');
    }

}
