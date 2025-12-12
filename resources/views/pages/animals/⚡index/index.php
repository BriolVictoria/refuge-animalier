<?php

use App\Models\Animal;
use Livewire\Attributes\Computed;
use Livewire\Component;

new class extends Component {
    #[Computed]
    function animals()
    {
        return Animal::paginate(10);
    }
};
