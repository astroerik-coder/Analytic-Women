<?php

namespace App\Http\Livewire;

use Livewire\Component;
use \Illuminate\View\View;
use App\Models\User;

class UsersChild extends Component
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
        'item.name' => '',
        'item.email' => '',
        'item.email_verified_at' => '',
        'item.profile_photo_path' => '',
    ];

    /**
     * @var array
     */
    protected $validationAttributes = [
        'item.name' => 'Name',
        'item.email' => 'Email',
        'item.email_verified_at' => 'Email Verified At',
        'item.profile_photo_path' => 'Profile Photo Path',
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
        return view('livewire.users-child');
    }

    public function showDeleteForm(int $id): void
    {
        $this->confirmingItemDeletion = true;
        $this->primaryKey = $id;
    }

    public function deleteItem(): void
    {
        User::destroy($this->primaryKey);
        $this->confirmingItemDeletion = false;
        $this->primaryKey = '';
        $this->reset(['item']);
        $this->emitTo('users', 'refresh');
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
        $item = User::create([
            'name' => $this->item['name'] ?? '', 
            'email' => $this->item['email'] ?? '', 
            'email_verified_at' => $this->item['email_verified_at'] ?? '', 
            'profile_photo_path' => $this->item['profile_photo_path'] ?? '', 
        ]);
        $this->confirmingItemCreation = false;
        $this->emitTo('users', 'refresh');
        $this->emitTo('livewire-toast', 'show', 'Registro agregado con éxito');
    }
 
    public function showEditForm(User $user): void
    {
        $this->resetErrorBag();
        $this->item = $user;
        $this->confirmingItemEdit = true;
    }

    public function editItem(): void
    {
        $this->validate();
        $this->item->save();
        $this->confirmingItemEdit = false;
        $this->primaryKey = '';
        $this->emitTo('users', 'refresh');
        $this->emitTo('livewire-toast', 'show', 'Registro actualizado con éxito');
    }

}
