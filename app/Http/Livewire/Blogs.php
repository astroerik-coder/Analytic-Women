<?php

namespace App\Http\Livewire;

use Livewire\Component;
use Livewire\WithPagination;
use Illuminate\Database\Eloquent\Builder;
use \Illuminate\View\View;

use App\Models\Blog;

class Blogs extends Component
{
    use WithPagination;

    /**
     * @var array
     */
    protected $listeners = ['refresh' => '$refresh'];
    /**
     * @var string
     */
    public $sortBy = 'ID_BLG';

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

        return view('livewire.blogs', [
            'results' => $results
        ]);
    }

    public function sortBy(string $field): vo
    {
        if ($field == $this->sortBy) {
            $this->sortAsc = !$this->sortAsc;
        }
        $this->sortBy = $field;
    }

    public function updatingPerPage(): void
    {
        $this->resetPage();
    }

    public function query(): Builder
    {
        return Blog::query();
    }
}
