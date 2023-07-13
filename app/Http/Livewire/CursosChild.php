<?php

namespace App\Http\Livewire;

use Livewire\Component;
use \Illuminate\View\View;
use App\Models\Curso;

class CursosChild extends Component
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
        'item.ID_CUR' => '',
        'item.ID_CLT' => '',
        'item.NOMBRE_CUR' => '',
        'item.DESCRIPCION_CUR' => '',
        'item.PUBLICO_CUR' => '',
        'item.EDAD_MINIMA_CUR' => '',
        'item.EDAD_MAXIMA_CUR' => '',
        'item.LINK_CUR' => '',
        'item.CUPOS_CUR' => '',
        'item.COSTO_CUR' => '',
    ];

    /**
     * @var array
     */
    protected $validationAttributes = [
        'item.ID_CUR' => 'Id Cur',
        'item.ID_CLT' => 'Id Clt',
        'item.NOMBRE_CUR' => 'Nombre Cur',
        'item.DESCRIPCION_CUR' => 'Descripcion Cur',
        'item.PUBLICO_CUR' => 'Publico Cur',
        'item.EDAD_MINIMA_CUR' => 'Edad Minima Cur',
        'item.EDAD_MAXIMA_CUR' => 'Edad Maxima Cur',
        'item.LINK_CUR' => 'Link Cur',
        'item.CUPOS_CUR' => 'Cupos Cur',
        'item.COSTO_CUR' => 'Costo Cur',
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
        return view('livewire.cursos-child');
    }

    public function showDeleteForm(int $id): void
    {
        $this->confirmingItemDeletion = true;
        $this->primaryKey = $id;
    }

    public function deleteItem(): void
    {
        Curso::destroy($this->primaryKey);
        $this->confirmingItemDeletion = false;
        $this->primaryKey = '';
        $this->reset(['item']);
        $this->emitTo('cursos', 'refresh');
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
        $item = Curso::create([
            'ID_CUR' => $this->item['ID_CUR'] ?? '', 
            'ID_CLT' => $this->item['ID_CLT'] ?? '', 
            'NOMBRE_CUR' => $this->item['NOMBRE_CUR'] ?? '', 
            'DESCRIPCION_CUR' => $this->item['DESCRIPCION_CUR'] ?? '', 
            'PUBLICO_CUR' => $this->item['PUBLICO_CUR'] ?? '', 
            'EDAD_MINIMA_CUR' => $this->item['EDAD_MINIMA_CUR'] ?? '', 
            'EDAD_MAXIMA_CUR' => $this->item['EDAD_MAXIMA_CUR'] ?? '', 
            'LINK_CUR' => $this->item['LINK_CUR'] ?? '', 
            'CUPOS_CUR' => $this->item['CUPOS_CUR'] ?? '', 
            'COSTO_CUR' => $this->item['COSTO_CUR'] ?? '', 
        ]);
        $this->confirmingItemCreation = false;
        $this->emitTo('cursos', 'refresh');
        $this->emitTo('livewire-toast', 'show', 'Registro agregado con éxito');
    }
 
    public function showEditForm(Curso $curso): void
    {
        $this->resetErrorBag();
        $this->item = $curso;
        $this->confirmingItemEdit = true;
    }

    public function editItem(): void
    {
        $this->validate();
        $this->item->save();
        $this->confirmingItemEdit = false;
        $this->primaryKey = '';
        $this->emitTo('cursos', 'refresh');
        $this->emitTo('livewire-toast', 'show', 'Registro actualizado con éxito');
    }

}
