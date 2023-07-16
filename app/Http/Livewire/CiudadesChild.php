<?php

namespace App\Http\Livewire;

use Livewire\Component;
use \Illuminate\View\View;
use App\Models\Ciudade;
use App\Models\Provincia; // Asegúrate de importar el modelo de la tabla relacional


class CiudadesChild extends Component
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
        'item.ID_CIU' => '',
        'item.ID_PRO' => '',
        'item.NOMBRE_CIU' => '',
    ];

    /**
     * @var array
     */
    protected $validationAttributes = [
        'item.ID_PRO' => 'Id Pro',
        'item.NOMBRE_CIU' => 'Nombre Ciu',
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
        $provincias = Provincia::all();

        return view('livewire.ciudades-child', compact('provincias'));
    }

    public function showDeleteForm(int $id): void
    {
        $this->confirmingItemDeletion = true;
        $this->primaryKey = $id;
    }

    public function deleteItem(): void
    {
        Ciudade::destroy($this->primaryKey);
        $this->confirmingItemDeletion = false;
        $this->primaryKey = '';
        $this->reset(['item']);
        $this->emitTo('ciudades', 'refresh');
        $this->emitTo('livewire-toast', 'show', 'Registro eliminado con éxito', ['background' => 'purple', 'color' => 'white']);
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
            'item.ID_PRO' => 'required',
            'item.NOMBRE_CIU' => 'required',
        ], [
            'item.ID_PRO.required' => 'El campo Provincia es obligatorio.',
            'item.NOMBRE_CIU.required' => 'El campo Nombre Ciudad es obligatorio.',
        ]);
    
        $item = Ciudade::create([
            'ID_PRO' => $this->item['ID_PRO'] ?? null,
            'NOMBRE_CIU' => $this->item['NOMBRE_CIU'] ?? null,
        ]);
    
        $this->confirmingItemCreation = false;
        $this->emitTo('ciudades', 'refresh');
        $this->emitTo('livewire-toast', 'show', 'Registro agregado con éxito');
    }
    

    public function showEditForm(Ciudade $ciudade): void
    {
        $this->resetErrorBag();
        $this->item = $ciudade;
        $this->confirmingItemEdit = true;
    }

    public function editItem(): void
    {
        $this->validate();
        $this->item->save();
        $this->confirmingItemEdit = false;
        $this->primaryKey = '';
        $this->emitTo('ciudades', 'refresh');
        $this->emitTo('livewire-toast', 'show', 'Registro actualizado con éxito', ['background' => 'purple', 'color' => 'white']);
    }

}