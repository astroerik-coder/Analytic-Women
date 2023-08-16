<?php

namespace App\Http\Livewire;

use Livewire\Component;
use \Illuminate\View\View;
use App\Models\Pago;

class PagosChild extends Component
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
        'item.ID_CUR' => '',
        'item.ID_PAG' => '',
        'item.NOMBRE_PAG' => '',
        'item.METODO_PAG' => '',
        'item.FECHA_PAG' => '',
        'item.MONTO_PAG' => '',
    ];

    /**
     * @var array
     */
    protected $validationAttributes = [
        'item.ID_EMP' => 'Id Emp',
        'item.ID_CUR' => 'Id Cur',
        'item.ID_PAG' => 'Id Pag',
        'item.NOMBRE_PAG' => 'Nombre Pag',
        'item.METODO_PAG' => 'Metodo Pag',
        'item.FECHA_PAG' => 'Fecha Pag',
        'item.MONTO_PAG' => 'Monto Pag',
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
        return view('livewire.pagos-child');
    }

    public function showDeleteForm(int $id): void
    {
        $this->confirmingItemDeletion = true;
        $this->primaryKey = $id;
    }

    public function deleteItem(): void
    {
        Pago::destroy($this->primaryKey);
        $this->confirmingItemDeletion = false;
        $this->primaryKey = '';
        $this->reset(['item']);
        $this->emitTo('pagos', 'refresh');
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
            'item.ID_EMP' => 'required',
            'item.ID_CUR' => 'required',
            'item.ID_PAG' => 'required',
            'item.NOMBRE_PAG' => 'required',
            'item.METODO_PAG' => 'required',
            'item.FECHA_PAG' => 'required',
            'item.MONTO_PAG' => 'required',
        ],[
            'item.ID_EMP.required' => 'El campo es obligatorio',
            'item.ID_CUR.required' => 'El campo es obligatorio',
            'item.ID_PAG.required' => 'El campo es obligatorio',
            'item.NOMBRE_PAG.required' => 'El campo es obligatorio',
            'item.METODO_PAG.required' => 'El campo es obligatorio',
            'item.FECHA_PAG.required' => 'El campo es obligatorio',
            'item.MONTO_PAG.required' => 'El campo es obligatorio',
        ]);
        $item = Pago::create([
            'ID_EMP' => $this->item['ID_EMP'] ??  null,
            'ID_CUR' => $this->item['ID_CUR'] ??  null,
            'ID_PAG' => $this->item['ID_PAG'] ??  null ,
            'NOMBRE_PAG' => $this->item['NOMBRE_PAG'] ?? null, 
            'METODO_PAG' => $this->item['METODO_PAG'] ?? null, 
            'FECHA_PAG' => $this->item['FECHA_PAG'] ??  null,
            'MONTO_PAG' => $this->item['MONTO_PAG'] ??  null,
        ]);
        $this->confirmingItemCreation = false;
        $this->emitTo('pagos', 'refresh');
        $this->emitTo('livewire-toast', 'show', 'Registro agregado con éxito');
    }
 
    public function showEditForm(Pago $pago): void
    {
        $this->resetErrorBag();
        $this->item = $pago;
        $this->confirmingItemEdit = true;
    }

    public function editItem(): void
    {
        $this->validate([
            'item.ID_EMP' => 'required',
            'item.ID_CUR' => 'required',
            'item.ID_PAG' => 'required',
            'item.NOMBRE_PAG' => 'required',
            'item.METODO_PAG' => 'required',
            'item.FECHA_PAG' => 'required',
            'item.MONTO_PAG' => 'required',
        ],[
            'item.ID_EMP.required' => 'El campo es obligatorio',
            'item.ID_CUR.required' => 'El campo es obligatorio',
            'item.ID_PAG.required' => 'El campo es obligatorio',
            'item.NOMBRE_PAG.required' => 'El campo es obligatorio',
            'item.METODO_PAG.required' => 'El campo es obligatorio',
            'item.FECHA_PAG.required' => 'El campo es obligatorio',
            'item.MONTO_PAG.required' => 'El campo es obligatorio',
        ]);
        $this->item->save();
        $this->confirmingItemEdit = false;
        $this->primaryKey = '';
        $this->emitTo('pagos', 'refresh');
        $this->emitTo('livewire-toast', 'show', 'Registro actualizado con éxito');
    }

}
