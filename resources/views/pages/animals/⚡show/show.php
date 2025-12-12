<?php

use App\Models\Animal;
use Livewire\Component;

new class extends Component
{
    public Animal $animal;
    public function mount($id): void
    {
        $this->animal = Animal::find($id);
    }
};
