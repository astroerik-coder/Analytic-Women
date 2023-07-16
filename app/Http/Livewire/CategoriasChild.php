<?php

namespace App\Http\Livewire;

use Livewire\Component;
use \Illuminate\View\View;
use App\Models\Categoria;

class CategoriasChild extends Component
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
        'item.ID_CAT' => '',
        'item.NOMBRE_CAT' => '',
    ];

    /**
     * @var array
     */
    protected $validationAttributes = [
        'item.ID_CAT' => 'Id Cat',
        'item.NOMBRE_CAT' => 'Nombre Cat',
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
        return view('livewire.categorias-child');
    }
    public function showDeleteForm($ID_CAT): void
    {
        $this->confirmingItemDeletion = true;
        $this->primaryKey = $ID_CAT;
    }
    
    
    public function deleteItem(): void
    {
        Categoria::destroy($this->primaryKey);
        $this->confirmingItemDeletion = false;
        $this->primaryKey = '';
        $this->reset(['item']);
        $this->emitTo('categorias', 'refresh');
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
        $item = Categoria::create([
            'ID_CAT' => $this->item['ID_CAT'] ?? '', 
            'NOMBRE_CAT' => $this->item['NOMBRE_CAT'] ?? '', 
        ]);
        $this->confirmingItemCreation = false;
        $this->emitTo('categorias', 'refresh');
        $this->emitTo('livewire-toast', 'show', 'Registro agregado con éxito');
    }
 
    public function showEditForm(Categoria $categoria): void
    {
        $this->resetErrorBag();
        $this->item = $categoria;
        $this->confirmingItemEdit = true;
    }

    public function editItem(): void
    {
        $this->validate();
        $this->item->save();
        $this->confirmingItemEdit = false;
        $this->primaryKey = '';
        $this->emitTo('categorias', 'refresh');
        $this->emitTo('livewire-toast', 'show', 'Registro actualizado con éxito');
    }

}
