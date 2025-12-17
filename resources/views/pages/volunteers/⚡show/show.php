<?php

use App\Models\Volunteer;
use Livewire\Component;

new class extends Component
{
    public Volunteer $volunteer;

    public function mount($id): void
    {
        $this->volunteer = Volunteer::find($id);
    }
};
