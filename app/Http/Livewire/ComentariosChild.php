<?php

namespace App\Http\Livewire;

use Livewire\Component;
use \Illuminate\View\View;
use App\Models\Comentario;

class ComentariosChild extends Component
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
        'item.CONTENIDO_COM' => '',
        'item.FECHA_PUBLICACION_COM' => '',
        'item.REVISION_COM' => '',
    ];

    /**
     * @var array
     */
    protected $validationAttributes = [
        'item.CONTENIDO_COM' => 'Contenido Com',
        'item.FECHA_PUBLICACION_COM' => 'Fecha Publicacion Com',
        'item.REVISION_COM' => 'Revision Com',
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
        return view('livewire.comentarios-child');
    }

    public function showDeleteForm(int $id): void
    {
        $this->confirmingItemDeletion = true;
        $this->primaryKey = $id;
    }

    public function deleteItem(): void
    {
        Comentario::destroy($this->primaryKey);
        $this->confirmingItemDeletion = false;
        $this->primaryKey = '';
        $this->reset(['item']);
        $this->emitTo('comentarios', 'refresh');
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
            'item.CONTENIDO_COM' => 'required',
            'item.FECHA_PUBLICACION_COM' => 'required',
            'item.REVISION_COM' => 'required',
        ], [
            'item.CONTENIDO_COM.required' => 'El campo es necesario',
            'item.FECHA_PUBLICACION_COM.required' => 'El campo es necesario',
            'item.REVISION_COM.required' => 'El campo es necesario',
        ]);
        $item = Comentario::create([
            'ID_COM' => $this->item['ID_COM'] ?? null,
            'CONTENIDO_COM' => $this->item['CONTENIDO_COM'] ?? null,
            'FECHA_PUBLICACION_COM' => $this->item['FECHA_PUBLICACION_COM'] ?? null,
            'REVISION_COM' => $this->item['REVISION_COM'] ?? null,
        ]);
        $this->confirmingItemCreation = false;
        $this->emitTo('comentarios', 'refresh');
        $this->emitTo('livewire-toast', 'show', 'Registro agregado con éxito');
    }

    public function showEditForm(Comentario $comentario): void
    {
        $this->resetErrorBag();
        $this->item = $comentario;
        $this->confirmingItemEdit = true;
    }

    public function editItem(): void
    {
        $this->validate([
            'item.CONTENIDO_COM' => 'required',
            'item.FECHA_PUBLICACION_COM' => 'required',
            'item.REVISION_COM' => 'required',
        ], [
            'item.CONTENIDO_COM.required' => 'El campo es necesario',
            'item.FECHA_PUBLICACION_COM.required' => 'El campo es necesario',
            'item.REVISION_COM.required' => 'El campo es necesario',
        ]);
        $item = Comentario::create([
            'ID_COM' => $this->item['ID_COM'] ?? null,
            'CONTENIDO_COM' => $this->item['CONTENIDO_COM'] ?? null,
            'FECHA_PUBLICACION_COM' => $this->item['FECHA_PUBLICACION_COM'] ?? null,
            'REVISION_COM' => $this->item['REVISION_COM'] ?? null,
        ]);
        $this->item->save();
        $this->confirmingItemEdit = false;
        $this->primaryKey = '';
        $this->emitTo('comentarios', 'refresh');
        $this->emitTo('livewire-toast', 'show', 'Registro actualizado con éxito');
    }
}
