<?php

use App\Models\Adopting;
use Livewire\Attributes\Computed;
use Livewire\Component;

new class extends Component
{
    #[Computed]
    function adoptings()
    {
        return Adopting::paginate(10);
    }
};
