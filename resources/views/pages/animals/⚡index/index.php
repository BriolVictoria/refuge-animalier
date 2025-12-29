<?php

use App\Models\Animal;
use Livewire\Attributes\Computed;
use Livewire\Component;
use Livewire\WithPagination;

new class extends Component {

    use WithPagination;
    public string $term = '';
    public string $sortField = 'created_at';
    public string $sortDirection = 'desc';
    public bool $openModalForDelete = false;
    public ?int $animalToDelete = null;

    #[Computed]
    public function animals()
    {
        return Animal::query()
            ->where('name', 'like', '%' . $this->term . '%')
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

    public function deleteAnimal(int $id): void
    {
        Animal::findOrFail($id)->delete();

        $this->reset(['animalToDelete', 'openModalForDelete']);

        session()->flash('success', 'L’animal a été supprimé avec succès');
    }

    public function openModal(string $animalId)
    {
        $this->animalToDelete = $animalId;
        $this->openModalForDelete = true;

        $this->dispatch('open-modal');
    }

    public function closeModal()
    {
        $this->openModalForDelete = false;

        $this->dispatch('close-modal');
    }
};

