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
        $this->validate([
            'item.ID_RDS' => 'required',
            'item.ID_CONT' => 'required',
            'item.MISION' => 'required',
            'item.VISION' => 'required',
            'item.CULTURA_ORGANIZACIONAL' => 'required',
        ], [
            'item.ID_RDS.required' => 'El campo es obligatorio',
            'item.ID_CONT.required' => 'El campo es obligatorio',
            'item.MISION.required' => 'El campo es obligatorio',
            'item.VISION.required' => 'El campo es obligatorio',
            'item.CULTURA_ORGANIZACIONAL.required' => 'El campo es obligatorio',
        ]);
        $item = Informacione::create([
            'ID_RDS' => $this->item['ID_RDS'] ?? null,
            'ID_CONT' => $this->item['ID_CONT'] ?? null,
            'MISION' => $this->item['MISION'] ?? null,
            'VISION' => $this->item['VISION'] ?? null,
            'CULTURA_ORGANIZACIONAL' => $this->item['CULTURA_ORGANIZACIONAL'] ?? null,
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
        $this->validate([
            'item.ID_RDS' => 'required',
            'item.ID_CONT' => 'required',
            'item.MISION' => 'required',
            'item.VISION' => 'required',
            'item.CULTURA_ORGANIZACIONAL' => 'required',
        ], [
            'item.ID_RDS.required' => 'El campo es obligatorio',
            'item.ID_CONT.required' => 'El campo es obligatorio',
            'item.MISION.required' => 'El campo es obligatorio',
            'item.VISION.required' => 'El campo es obligatorio',
            'item.CULTURA_ORGANIZACIONAL.required' => 'El campo es obligatorio',
        ]);
        $this->item->save();
        $this->confirmingItemEdit = false;
        $this->primaryKey = '';
        $this->emitTo('informaciones', 'refresh');
        $this->emitTo('livewire-toast', 'show', 'Registro actualizado con éxito');
    }
}
