<?php

use App\Models\Volunteer;
use Livewire\Attributes\Computed;
use Livewire\Component;

new class extends Component
{
    public string $term = '';

    #[Computed]
    function volunteers()
    {
        return Volunteer::query()
            ->where('first_name', 'like', '%' . $this->term . '%')
            ->orderBy('created_at', 'desc')
            ->paginate(10);
    }

    public function deleteVolunteer(int $id):void
    {
        $volunteer = Volunteer::findOrFail($id);
        $volunteer->delete();

        $this->redirectRoute('volunteers.index', navigate: true);
    }
};
