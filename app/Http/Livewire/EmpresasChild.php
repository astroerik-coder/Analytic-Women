<?php

namespace App\Http\Livewire;

use Livewire\Component;
use \Illuminate\View\View;
use App\Models\Empresa;

class EmpresasChild extends Component
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
        'item.ID_EMPR' => '',
        'item.NOMBRE_EMPR' => '',
        'item.LOGO_EMPR' => '',
    ];

    /**
     * @var array
     */
    protected $validationAttributes = [
        'item.ID_EMPR' => 'Id Empr',
        'item.NOMBRE_EMPR' => 'Nombre Empr',
        'item.LOGO_EMPR' => 'Logo Empr',
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
        return view('livewire.empresas-child');
    }

    public function showDeleteForm(int $id): void
    {
        $this->confirmingItemDeletion = true;
        $this->primaryKey = $id;
    }

    public function deleteItem(): void
    {
        Empresa::destroy($this->primaryKey);
        $this->confirmingItemDeletion = false;
        $this->primaryKey = '';
        $this->reset(['item']);
        $this->emitTo('empresas', 'refresh');
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
        $item = Empresa::create([
            'ID_EMPR' => $this->item['ID_EMPR'] ?? '', 
            'NOMBRE_EMPR' => $this->item['NOMBRE_EMPR'] ?? '', 
            'LOGO_EMPR' => $this->item['LOGO_EMPR'] ?? '', 
        ]);
        $this->confirmingItemCreation = false;
        $this->emitTo('empresas', 'refresh');
        $this->emitTo('livewire-toast', 'show', 'Registro agregado con éxito');
    }
 
    public function showEditForm(Empresa $empresa): void
    {
        $this->resetErrorBag();
        $this->item = $empresa;
        $this->confirmingItemEdit = true;
    }

    public function editItem(): void
    {
        $this->validate();
        $this->item->save();
        $this->confirmingItemEdit = false;
        $this->primaryKey = '';
        $this->emitTo('empresas', 'refresh');
        $this->emitTo('livewire-toast', 'show', 'Registro actualizado con éxito');
    }

}
