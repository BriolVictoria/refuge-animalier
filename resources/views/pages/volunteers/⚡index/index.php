<?php

use App\Models\Volunteer;
use Livewire\Attributes\Computed;
use Livewire\Component;

new class extends Component
{
    #[Computed]
    function volunteers()
    {
        return Volunteer::paginate(10);
    }
};
