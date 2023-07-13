<?php

namespace App\Http\Livewire;

use Livewire\Component;
use \Illuminate\View\View;
use App\Models\Provincia;

class ProvinciasChild extends Component
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
        'item.ID_PRO' => '',
        'item.NOMBRE_PRO' => '',
    ];

    /**
     * @var array
     */
    protected $validationAttributes = [
        'item.ID_PRO' => 'Id Pro',
        'item.NOMBRE_PRO' => 'Nombre Pro',
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
        return view('livewire.provincias-child');
    }

    public function showDeleteForm(int $id): void
    {
        $this->confirmingItemDeletion = true;
        $this->primaryKey = $id;
    }

    public function deleteItem(): void
    {
        Provincia::destroy($this->primaryKey);
        $this->confirmingItemDeletion = false;
        $this->primaryKey = '';
        $this->reset(['item']);
        $this->emitTo('provincias', 'refresh');
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
        $item = Provincia::create([
            'ID_PRO' => $this->item['ID_PRO'] ?? '', 
            'NOMBRE_PRO' => $this->item['NOMBRE_PRO'] ?? '', 
        ]);
        $this->confirmingItemCreation = false;
        $this->emitTo('provincias', 'refresh');
        $this->emitTo('livewire-toast', 'show', 'Registro agregado con éxito');
    }
 
    public function showEditForm(Provincia $provincia): void
    {
        $this->resetErrorBag();
        $this->item = $provincia;
        $this->confirmingItemEdit = true;
    }

    public function editItem(): void
    {
        $this->validate();
        $this->item->save();
        $this->confirmingItemEdit = false;
        $this->primaryKey = '';
        $this->emitTo('provincias', 'refresh');
        $this->emitTo('livewire-toast', 'show', 'Registro actualizado con éxito');
    }

}
