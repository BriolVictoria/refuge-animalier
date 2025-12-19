<?php

use App\Models\Adopting;
use Livewire\Component;

new class extends Component
{
    public $adoptings;

    public function mount() :void
    {
        $this->adoptings = Adopting::latest()->take(3)->get();
    }
};
