<?php

use App\Models\Adopting;
use Livewire\Component;

new class extends Component
{
    public Adopting $adopting;

    public function mount($id): void
    {
        $this->adopting = Adopting::find($id);
    }
};
