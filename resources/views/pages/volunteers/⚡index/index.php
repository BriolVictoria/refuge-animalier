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

    public string $sortField = 'created_at';
    public string $sortDirection = 'desc';


    #[Computed]
    function volunteers()
    {
        return Volunteer::query()
            ->where('first_name', 'like', '%' . $this->term . '%')
            ->orderBy($this->sortField, $this->sortDirection)
            ->paginate(10);
    }

    public function sortBy(string $field)
    {
        if ($this->sortField === $field) {
            $this->sortDirection = $this->sortDirection === 'asc' ? 'desc' : 'asc';
        } else {
            $this->sortField = $field;
            $this->sortDirection = 'asc';
        }

        $this->resetPage();
    }

    public function deleteVolunteer(int $id):void
    {
        Volunteer::findOrFail($id)->delete();

        $this->reset(['volunteerToDelete', 'openModalForDelete']);

        session()->flash('success', __('admin/volunteers.success_message'));
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
