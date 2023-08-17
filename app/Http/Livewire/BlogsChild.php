<?php

namespace App\Http\Livewire;

use Livewire\Component;
use \Illuminate\View\View;
use App\Models\Blog;

class BlogsChild extends Component
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
        'item.ID_BLG' => '',
        'item.ID_CLT' => '',
        'item.ID_COM' => '',
        'item.ID_CAT' => '',
        'item.TITULO_BLG' => '',
        'item.VALORACION_BLG' => '',
    ];

    /**
     * @var array
     */
    protected $validationAttributes = [
        'item.ID_BLG' => 'Id',
        'item.ID_CLT' => 'Id Clt',
        'item.ID_COM' => 'Id Com',
        'item.ID_CAT' => 'Id Cat',
        'item.TITULO_BLG' => 'Titulo',
        'item.VALORACION_BLG' => 'Valoracion',
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
        return view('livewire.blogs-child');
    }

    public function showDeleteForm(int $id): void
    {
        $this->confirmingItemDeletion = true;
        $this->primaryKey = $id;
    }

    public function deleteItem(): void
    {
        Blog::destroy($this->primaryKey);
        $this->confirmingItemDeletion = false;
        $this->primaryKey = '';
        $this->reset(['item']);
        $this->emitTo('blogs', 'refresh');
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
        $this->validate(
            [
                'item.ID_BLG' => 'required',
                'item.ID_CLT' => 'required',
                'item.ID_COM' => 'required',
                'item.ID_CAT' => 'required',
                'item.TITULO_BLG' => 'required',
                'item.VALORACION_BLG' => 'required',
            ],
            [

                'item.ID_BLG.required' => 'El campo es obligatorio',
                'item.ID_CLT.required' => 'El campo es obligatorio',
                'item.ID_COM.required' => 'El campo es obligatorio',
                'item.ID_CAT.required' => 'El campo es obligatorio',
                'item.TITULO_BLG.required' => 'El campo es obligatorio',
                'item.VALORACION_BLG.required' => 'El campo es obligatorio',
            ]
        );
        $item = Blog::create([
            'ID_BLG' => $this->item['ID_BLG'] ?? null,
            'ID_CLT' => $this->item['ID_CLT'] ?? null,
            'ID_COM' => $this->item['ID_COM'] ?? null,
            'ID_CAT' => $this->item['ID_CAT'] ?? null,
            'TITULO_BLG' => $this->item['TITULO_BLG'] ?? null,
            'VALORACION_BLG' => $this->item['VALORACION_BLG'] ?? null,
        ]);
        $this->confirmingItemCreation = false;
        $this->emitTo('blogs', 'refresh');
        $this->emitTo('livewire-toast', 'show', 'Registro agregado con éxito');
    }

    public function showEditForm(Blog $blog): void
    {
        $this->resetErrorBag();
        $this->item = $blog;
        $this->confirmingItemEdit = true;
    }

    public function editItem(): void
    {
        $this->validate(
            [
                'item.ID_BLG' => 'required',
                'item.ID_CLT' => 'required',
                'item.ID_COM' => 'required',
                'item.ID_CAT' => 'required',
                'item.TITULO_BLG' => 'required',
                'item.VALORACION_BLG' => 'required',
            ],
            [

                'item.ID_BLG.required' => 'El campo es obligatorio',
                'item.ID_CLT.required' => 'El campo es obligatorio',
                'item.ID_COM.required' => 'El campo es obligatorio',
                'item.ID_CAT.required' => 'El campo es obligatorio',
                'item.TITULO_BLG.required' => 'El campo es obligatorio',
                'item.VALORACION_BLG.required' => 'El campo es obligatorio',
            ]
        );
        $this->item->save();
        $this->confirmingItemEdit = false;
        $this->primaryKey = '';
        $this->emitTo('blogs', 'refresh');
        $this->emitTo('livewire-toast', 'show', 'Registro actualizado  con éxito');
    }
}
