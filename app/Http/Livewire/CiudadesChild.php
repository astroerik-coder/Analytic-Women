<?php

namespace App\Http\Livewire;

use Livewire\Component;
use \Illuminate\View\View;
use App\Models\Ciudade;

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
        'item.ID_CIU' => 'Id Ciu',
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
        return view('livewire.ciudades-child');
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
        $item = Ciudade::create([
            'ID_CIU' => $this->item['ID_CIU'] ?? '', 
            'ID_PRO' => $this->item['ID_PRO'] ?? '', 
            'NOMBRE_CIU' => $this->item['NOMBRE_CIU'] ?? '', 
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
        $this->emitTo('livewire-toast', 'show', 'Registro actualizado con éxito');
    }

}
