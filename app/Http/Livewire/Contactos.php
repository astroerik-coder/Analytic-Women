<?php

namespace App\Http\Livewire;

use Livewire\Component;
use Livewire\WithPagination;
use Illuminate\Database\Eloquent\Builder;
use \Illuminate\View\View;

use App\Models\Contacto;

class Contactos extends Component
{
    use WithPagination;

    /**
     * @var array
     */
    protected $listeners = ['refresh' => '$refresh'];
    /**
     * @var string
     */
    public $sortBy = 'ID_CONT';

    /**
     * @var bool
     */
    public $sortAsc = true;

    /**
     * @var string
     */
    public $q;

    /**
     * @var int
     */
    public $per_page = 10;


    public function mount(): void
    {

    }

    public function render(): View
    {
        $results = $this->query()
            ->when($this->q, function ($query) {
                return $query->where(function ($query) {
                    $query->where('NOMBRE_CONT', 'like', '%' . $this->q . '%')
                        ->orWhere('TELEFONO1_CONT', 'like', '%' . $this->q . '%')
                        ->orWhere('TELEFONO2_CONT', 'like', '%' . $this->q . '%')
                        ->orWhere('EMAIL1_CONT', 'like', '%' . $this->q . '%')
                        ->orWhere('EMAIL2_CONT', 'like', '%' . $this->q . '%');
                });
            })
            ->orderBy($this->sortBy, $this->sortAsc ? 'ASC' : 'DESC')
            ->paginate($this->per_page);

        return view('livewire.contactos', [
            'results' => $results
        ]);
    }

    public function sortBy(string $field): void
    {
        if ($field == $this->sortBy) {
            $this->sortAsc = !$this->sortAsc;
        }
        $this->sortBy = $field;
    }

    public function updatingQ(): void
    {
        $this->resetPage();
    }

    public function updatingPerPage(): void
    {
        $this->resetPage();
    }

    public function query(): Builder
    {
        return Contacto::query();
    }
}
