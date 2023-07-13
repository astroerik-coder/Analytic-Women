<?php

namespace App\Http\Livewire;

use Livewire\Component;
use \Illuminate\View\View;
use App\Models\Cliente;

class ClientesChild extends Component
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
        'item.ID_CLT' => '',
        'item.ID_EMPR' => '',
        'item.ID_GEN' => '',
        'item.ID_PRO' => '',
        'item.ID_EMP' => '',
        'item.NOMBRE_CLT' => '',
        'item.FECHA_NACIMIENTO_CLT' => '',
        'item.TELEFONO1_CLT' => '',
        'item.TELEFONO2_CLT' => '',
        'item.EMAIL_CLT' => '',
        'item.TITULO_CLT' => '',
        'item.ROL_CLT' => '',
        'item.EXPERIENCIA_CLT' => '',
        'item.FOTO_CLT' => '',
    ];

    /**
     * @var array
     */
    protected $validationAttributes = [
        'item.ID_CLT' => 'Id Clt',
        'item.ID_EMPR' => 'Id Empr',
        'item.ID_GEN' => 'Id Gen',
        'item.ID_PRO' => 'Id Pro',
        'item.ID_EMP' => 'Id Emp',
        'item.NOMBRE_CLT' => 'Nombre Clt',
        'item.FECHA_NACIMIENTO_CLT' => 'Fecha Nacimiento Clt',
        'item.TELEFONO1_CLT' => 'Telefono1 Clt',
        'item.TELEFONO2_CLT' => 'Telefono2 Clt',
        'item.EMAIL_CLT' => 'Email Clt',
        'item.TITULO_CLT' => 'Titulo Clt',
        'item.ROL_CLT' => 'Rol Clt',
        'item.EXPERIENCIA_CLT' => 'Experiencia Clt',
        'item.FOTO_CLT' => 'Foto Clt',
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
        return view('livewire.clientes-child');
    }

    public function showDeleteForm(int $id): void
    {
        $this->confirmingItemDeletion = true;
        $this->primaryKey = $id;
    }

    public function deleteItem(): void
    {
        Cliente::destroy($this->primaryKey);
        $this->confirmingItemDeletion = false;
        $this->primaryKey = '';
        $this->reset(['item']);
        $this->emitTo('clientes', 'refresh');
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
        $item = Cliente::create([
            'ID_CLT' => $this->item['ID_CLT'] ?? '', 
            'ID_EMPR' => $this->item['ID_EMPR'] ?? '', 
            'ID_GEN' => $this->item['ID_GEN'] ?? '', 
            'ID_PRO' => $this->item['ID_PRO'] ?? '', 
            'ID_EMP' => $this->item['ID_EMP'] ?? '', 
            'NOMBRE_CLT' => $this->item['NOMBRE_CLT'] ?? '', 
            'FECHA_NACIMIENTO_CLT' => $this->item['FECHA_NACIMIENTO_CLT'] ?? '', 
            'TELEFONO1_CLT' => $this->item['TELEFONO1_CLT'] ?? '', 
            'TELEFONO2_CLT' => $this->item['TELEFONO2_CLT'] ?? '', 
            'EMAIL_CLT' => $this->item['EMAIL_CLT'] ?? '', 
            'TITULO_CLT' => $this->item['TITULO_CLT'] ?? '', 
            'ROL_CLT' => $this->item['ROL_CLT'] ?? '', 
            'EXPERIENCIA_CLT' => $this->item['EXPERIENCIA_CLT'] ?? '', 
            'FOTO_CLT' => $this->item['FOTO_CLT'] ?? '', 
        ]);
        $this->confirmingItemCreation = false;
        $this->emitTo('clientes', 'refresh');
        $this->emitTo('livewire-toast', 'show', 'Registro agregado con éxito');
    }
 
    public function showEditForm(Cliente $cliente): void
    {
        $this->resetErrorBag();
        $this->item = $cliente;
        $this->confirmingItemEdit = true;
    }

    public function editItem(): void
    {
        $this->validate();
        $this->item->save();
        $this->confirmingItemEdit = false;
        $this->primaryKey = '';
        $this->emitTo('clientes', 'refresh');
        $this->emitTo('livewire-toast', 'show', 'Registro actualizado con éxito');
    }

}
