<?php

namespace App\Http\Livewire;

use Livewire\Component;
use Livewire\WithPagination;
use Illuminate\Database\Eloquent\Builder;
use \Illuminate\View\View;

use App\Models\Informacione;

class Informaciones extends Component
{
    use WithPagination;

    /**
     * @var array
     */
    protected $listeners = ['refresh' => '$refresh'];
    /**
     * @var string
     */
    public $sortBy = 'id';

    /**
     * @var bool
     */
    public $sortAsc = true;

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
            ->orderBy($this->sortBy, $this->sortAsc ? 'ASC' : 'DESC')
            ->paginate($this->per_page);

        return view('livewire.informaciones', [
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

    public function query(): Builder
    {
        return Informacione::query();
    }
}
