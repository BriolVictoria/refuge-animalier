<?php

use App\Models\Animal;
use Livewire\Component;

new class extends Component
{
    public Animal $animal;

    public string $noteEmail;
    public string $noteNote;

    #[\Livewire\Attributes\Computed]
    public function notes()
    {
        return $this->animal->notes()->paginate(6);
    }

    public bool $openVisitNote = false;

    public function mount($id): void
    {
        $this->animal = Animal::find($id);
    }

    public function openModal(string $modal)
    {
        $this->openVisitNote = true;

        $this->dispatch('open-modal');
    }

    public function closeModal()
    {
        $this->openVisitNote = false;

        $this->dispatch('close-modal');
    }
};
