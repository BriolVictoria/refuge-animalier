<?php

use App\Models\Adopting;
use Livewire\Attributes\Computed;
use Livewire\Component;

new class extends Component {
    public string $term = '';

    #[Computed]
    function adoptings()
    {
        return Adopting::query()
            ->where('first_name', 'like', '%' . $this->term . '%')
            ->orderBy('created_at', 'desc')
            ->paginate(10);
    }

    public function deleteAdopting(int $id): void
    {
        $adopting = Adopting::findOrFail($id);
        $adopting->delete();

        $this->redirectRoute('adoptings.index', navigate: true);
    }
};

