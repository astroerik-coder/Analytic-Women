<?php

namespace App\Http\Livewire;

use Livewire\Component;
use \Illuminate\View\View;
use App\Models\Rede;

class RedesChild extends Component
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
        'item.FACEBOOK' => '',
        'item.INSTAGRAM' => '',
        'item.LINKEDIN' => '',
        'item.TIKTOK' => '',
    ];

    /**
     * @var array
     */
    protected $validationAttributes = [
        'item.ID_RDS' => 'Id Rds',
        'item.FACEBOOK' => 'Facebook',
        'item.INSTAGRAM' => 'Instagram',
        'item.LINKEDIN' => 'Linkedin',
        'item.TIKTOK' => 'Tiktok',
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
        return view('livewire.redes-child');
    }

    public function showDeleteForm(int $id): void
    {
        $this->confirmingItemDeletion = true;
        $this->primaryKey = $id;
    }

    public function deleteItem(): void
    {
        Rede::destroy($this->primaryKey);
        $this->confirmingItemDeletion = false;
        $this->primaryKey = '';
        $this->reset(['item']);
        $this->emitTo('redes', 'refresh');
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
                'item.ID_RDS' =>    'required',
                'item.FACEBOOK' =>  'required',
                'item.INSTAGRAM' => 'required',
                'item.LINKEDIN' =>  'required',
                'item.TIKTOK' =>    'required',
            ],
            [
                'item.ID_RDS.required' =>    'El campo es obligatorio',
                'item.FACEBOOK.required' =>  'El campo es obligatorio',
                'item.INSTAGRAM.required' => 'El campo es obligatorio',
                'item.LINKEDIN.required' =>  'El campo es obligatorio',
                'item.TIKTOK.required' =>    'El campo es obligatorio',
            ]
        );
        $item = Rede::create([
            'ID_RDS' => $this->item['ID_RDS'] ?? null,
            'FACEBOOK' => $this->item['FACEBOOK']?? null, 
            'INSTAGRAM' => $this->item['INSTAGRAM']?? null, 
            'LINKEDIN' => $this->item['LINKEDIN']?? null, 
            'TIKTOK' => $this->item['TIKTOK'] ?? null,
        ]);
        $this->confirmingItemCreation = false;
        $this->emitTo('redes', 'refresh');
        $this->emitTo('livewire-toast', 'show', 'Registro agregado con éxito');
    }
 
    public function showEditForm(Rede $rede): void
    {
        $this->resetErrorBag();
        $this->item = $rede;
        $this->confirmingItemEdit = true;
    }

    public function editItem(): void
    {
        $this->validate(
            [
                'item.ID_RDS' =>    'required',
                'item.FACEBOOK' =>  'required',
                'item.INSTAGRAM' => 'required',
                'item.LINKEDIN' =>  'required',
                'item.TIKTOK' =>    'required',
            ],
            [
                'item.ID_RDS.required' =>    'El campo es obligatorio',
                'item.FACEBOOK.required' =>  'El campo es obligatorio',
                'item.INSTAGRAM.required' => 'El campo es obligatorio',
                'item.LINKEDIN.required' =>  'El campo es obligatorio',
                'item.TIKTOK.required' =>    'El campo es obligatorio',
            ]
        );
        $this->item->save([
            'ID_RDS' => $this->item['ID_RDS'] ?? null,
            'FACEBOOK' => $this->item['FACEBOOK']?? null, 
            'INSTAGRAM' => $this->item['INSTAGRAM']?? null, 
            'LINKEDIN' => $this->item['LINKEDIN']?? null, 
            'TIKTOK' => $this->item['TIKTOK'] ?? null,
        ]);
        $this->confirmingItemEdit = false;
        $this->primaryKey = '';
        $this->emitTo('redes', 'refresh');
        $this->emitTo('livewire-toast', 'show', 'Registro actualizado con éxito');
    }

}
