<?php

use App\Models\Adopting;
use Livewire\Attributes\Computed;
use Livewire\Component;
use Livewire\WithPagination;

new class extends Component {
    use WithPagination;
    public string $term = '';
    public bool $openModalForDelete = false;
    public ?int $adoptingToDelete = null;

    #[Computed]
    function adoptings()
    {
        return Adopting::query()
            ->where('first_name', 'like', '%' . $this->term . '%')
            ->orderBy('created_at', 'desc')
            ->paginate(10);
    }

    public function deleteAdopting(int $id): void
    {
        Adopting::findOrFail($id)->delete();

        $this->reset(['adoptingToDelete', 'openModalForDelete']);

        session()->flash('success', 'La demande a été supprimé avec succès');

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

