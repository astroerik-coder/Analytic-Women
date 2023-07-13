<?php

namespace App\Http\Livewire;

use Livewire\Component;
use \Illuminate\View\View;
use App\Models\Informacione;

class InformacionesChild extends Component
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
        'item.ID_INF' => '',
        'item.ID_RDS' => '',
        'item.ID_CONT' => '',
        'item.MISION' => '',
        'item.VISION' => '',
        'item.CULTURA_ORGANIZACIONAL' => '',
    ];

    /**
     * @var array
     */
    protected $validationAttributes = [
        'item.ID_INF' => 'Id Inf',
        'item.ID_RDS' => 'Id Rds',
        'item.ID_CONT' => 'Id Cont',
        'item.MISION' => 'Mision',
        'item.VISION' => 'Vision',
        'item.CULTURA_ORGANIZACIONAL' => 'Cultura Organizacional',
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
        return view('livewire.informaciones-child');
    }

    public function showDeleteForm(int $id): void
    {
        $this->confirmingItemDeletion = true;
        $this->primaryKey = $id;
    }

    public function deleteItem(): void
    {
        Informacione::destroy($this->primaryKey);
        $this->confirmingItemDeletion = false;
        $this->primaryKey = '';
        $this->reset(['item']);
        $this->emitTo('informaciones', 'refresh');
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
        $item = Informacione::create([
            'ID_INF' => $this->item['ID_INF'] ?? '', 
            'ID_RDS' => $this->item['ID_RDS'] ?? '', 
            'ID_CONT' => $this->item['ID_CONT'] ?? '', 
            'MISION' => $this->item['MISION'] ?? '', 
            'VISION' => $this->item['VISION'] ?? '', 
            'CULTURA_ORGANIZACIONAL' => $this->item['CULTURA_ORGANIZACIONAL'] ?? '', 
        ]);
        $this->confirmingItemCreation = false;
        $this->emitTo('informaciones', 'refresh');
        $this->emitTo('livewire-toast', 'show', 'Registro agregado con éxito');
    }
 
    public function showEditForm(Informacione $informacione): void
    {
        $this->resetErrorBag();
        $this->item = $informacione;
        $this->confirmingItemEdit = true;
    }

    public function editItem(): void
    {
        $this->validate();
        $this->item->save();
        $this->confirmingItemEdit = false;
        $this->primaryKey = '';
        $this->emitTo('informaciones', 'refresh');
        $this->emitTo('livewire-toast', 'show', 'Registro actualizado con éxito');
    }

}
