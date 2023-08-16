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
        $this->validate([
            'item.ID_CLT' => 'require',
            'item.NOMBRE_SER' => 'require',
            'item.DESCRIPCION_SER' => 'require',
            'item.OBSERVACIONES_SER' => 'require',
        ],[
            'item.ID_CLT.required' =>'El campo es obligatorio.',
            'item.NOMBRE_SER.required' =>'El campo es obligatorio.',
            'item.DESCRIPCION_SER.required' =>'El campo es obligatorio.',
            'item.OBSERVACIONES_SER.required' =>'El campo es obligatorio.',
        ]);
        $item = Servicio::create([
            'ID_CLT' => $this->item['ID_CLT'] ?? null, 
            'NOMBRE_SER' => $this->item['NOMBRE_SER'] ?? null, 
            'DESCRIPCION_SER' => $this->item['DESCRIPCION_SER'] ?? null, 
            'OBSERVACIONES_SER' => $this->item['OBSERVACIONES_SER'] ?? null, 
        ]);
        $this->confirmingItemCreation = false;
        $this->emitTo('servicios', 'refresh');
        $this->emitTo('livewire-toast', 'show', 'Registro agregado con éxito');
    }
 
    public function showEditForm(Servicio $servicio): void
    {
        $this->resetErrorBag();
        $this->item = $servicio;
        $this->confirmingItemEdit = true;
    }

    public function editItem(): void
    {
        $this->validate([
            'item.ID_CLT' => 'require',
            'item.NOMBRE_SER' => 'require',
            'item.DESCRIPCION_SER' => 'require',
            'item.OBSERVACIONES_SER' => 'require',
        ],[
            'item.ID_CLT.required' =>'El campo es obligatorio.',
            'item.NOMBRE_SER.required' =>'El campo es obligatorio.',
            'item.DESCRIPCION_SER.required' =>'El campo es obligatorio.',
            'item.OBSERVACIONES_SER.required' =>'El campo es obligatorio.',
        ]);
        $this->item->save();
        $this->confirmingItemEdit = false;
        $this->primaryKey = '';
        $this->emitTo('servicios', 'refresh');
        $this->emitTo('livewire-toast', 'show', 'Registro actualizado con éxito');
    }

}
