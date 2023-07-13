<?php

namespace App\Http\Livewire;

use Livewire\Component;
use \Illuminate\View\View;
use App\Models\Empleo;

class EmpleosChild extends Component
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
        'item.ID_EMP' => '',
        'item.NOMBRE_EMP' => '',
        'item.DESCRIPCION_EMP' => '',
        'item.MODALIDAD_EMP' => '',
        'item.HORARIO_EMP' => '',
        'item.FECHA_PUBLICACION_EMP' => '',
        'item.EXPERIENCIA_EMP' => '',
    ];

    /**
     * @var array
     */
    protected $validationAttributes = [
        'item.ID_EMP' => 'Id Emp',
        'item.NOMBRE_EMP' => 'Nombre Emp',
        'item.DESCRIPCION_EMP' => 'Descripcion Emp',
        'item.MODALIDAD_EMP' => 'Modalidad Emp',
        'item.HORARIO_EMP' => 'Horario Emp',
        'item.FECHA_PUBLICACION_EMP' => 'Fecha Publicacion Emp',
        'item.EXPERIENCIA_EMP' => 'Experiencia Emp',
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
        return view('livewire.empleos-child');
    }

    public function showDeleteForm(int $id): void
    {
        $this->confirmingItemDeletion = true;
        $this->primaryKey = $id;
    }

    public function deleteItem(): void
    {
        Empleo::destroy($this->primaryKey);
        $this->confirmingItemDeletion = false;
        $this->primaryKey = '';
        $this->reset(['item']);
        $this->emitTo('empleos', 'refresh');
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
        $this->validate();
        $item = Empleo::create([
            'ID_EMP' => $this->item['ID_EMP'] ?? '', 
            'NOMBRE_EMP' => $this->item['NOMBRE_EMP'] ?? '', 
            'DESCRIPCION_EMP' => $this->item['DESCRIPCION_EMP'] ?? '', 
            'MODALIDAD_EMP' => $this->item['MODALIDAD_EMP'] ?? '', 
            'HORARIO_EMP' => $this->item['HORARIO_EMP'] ?? '', 
            'FECHA_PUBLICACION_EMP' => $this->item['FECHA_PUBLICACION_EMP'] ?? '', 
            'EXPERIENCIA_EMP' => $this->item['EXPERIENCIA_EMP'] ?? '', 
        ]);
        $this->confirmingItemCreation = false;
        $this->emitTo('empleos', 'refresh');
        $this->emitTo('livewire-toast', 'show', 'Registro agregado con éxito');
    }
 
    public function showEditForm(Empleo $empleo): void
    {
        $this->resetErrorBag();
        $this->item = $empleo;
        $this->confirmingItemEdit = true;
    }

    public function editItem(): void
    {
        $this->validate();
        $this->item->save();
        $this->confirmingItemEdit = false;
        $this->primaryKey = '';
        $this->emitTo('empleos', 'refresh');
        $this->emitTo('livewire-toast', 'show', 'Registro actualizado con éxito');
    }

}
