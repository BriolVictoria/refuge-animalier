<?php

use App\Models\Adopting;
use Livewire\Attributes\Computed;
use Livewire\Component;

new class extends Component
{
    public string $term = '';

    #[Computed]
    function adoptings()
    {
        return Adopting::paginate(10);
    }
   /* #[Computed]
    function adoptings()
    {
        return auth()->user()
            ->adoptings()
            ->where('name', 'like', '%' . $this->term . '%')
            ->orderBy('date', 'asc')
            ->paginate(10);
    }*/
};
