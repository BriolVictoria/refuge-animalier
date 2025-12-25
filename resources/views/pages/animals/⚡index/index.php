<?php

use App\Models\Animal;
use Livewire\Attributes\Computed;
use Livewire\Component;

new class extends Component {
    public $search = '';
    #[Computed]
    function animals()
    {
        return Animal::where('name', 'like', '%' . $this->search . '%')
            ->paginate(10);
    }
};
