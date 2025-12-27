<?php

use App\Models\Volunteer;
use Livewire\Attributes\Computed;
use Livewire\Component;
use Livewire\WithPagination;

new class extends Component
{
    use WithPagination;
    public string $term = '';
    public bool $openModalForDelete = false;
    public ?int $volunteerToDelete = null;


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
        Volunteer::findOrFail($id)->delete();

        $this->reset(['volunteerToDelete', 'openModalForDelete']);

        session()->flash('success', 'Le bénévole à été supprimé avec succès');
    }

    public function openModal(string $volunteerId)
    {
        $this->volunteerToDelete = $volunteerId;
        $this->openModalForDelete = true;

        $this->dispatch('open-modal');
    }

    public function closeModal()
    {
        $this->openModalForDelete = false;

        $this->dispatch('close-modal');
    }
};
