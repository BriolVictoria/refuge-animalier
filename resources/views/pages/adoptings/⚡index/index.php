<?php

use App\Models\Adopting;
use Livewire\Attributes\Computed;
use Livewire\Component;
use Livewire\WithPagination;

new class extends Component {
    use WithPagination;
    public string $term = '';
    public string $sortField = 'created_at';
    public string $sortDirection = 'desc';
    public bool $openModalForDelete = false;
    public ?int $adoptingToDelete = null;

    #[Computed]
    function adoptings()
    {
        return Adopting::query()->where('first_name', 'like', '%' . $this->term . '%')
            ->orderBy($this->sortField, $this->sortDirection)
            ->paginate(10);
    }

    public function sortBy(string $field)
    {
        if ($this->sortField === $field) {
            $this->sortDirection = $this->sortDirection === 'asc' ? 'desc' : 'asc';
        } else {
            $this->sortField = $field;
            $this->sortDirection = 'asc';
        }

        $this->resetPage();
    }

    public function deleteAdopting(int $id): void
    {
        Adopting::findOrFail($id)->delete();

        $this->reset(['adoptingToDelete', 'openModalForDelete']);

        session()->flash('success', __('admin/adoptings.success_message'));

    }

    public function openModal(string $adoptingId)
    {
        $this->adoptingToDelete = $adoptingId;
        $this->openModalForDelete = true;

        $this->dispatch('open-modal');
    }

    public function closeModal()
    {
        $this->openModalForDelete = false;

        $this->dispatch('close-modal');
    }
};

