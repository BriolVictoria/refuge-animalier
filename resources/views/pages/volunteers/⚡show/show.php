<?php

use App\Models\Volunteer;
use Livewire\Component;

new class extends Component
{
    public Volunteer $volunteer;
    public array $definitions;
    public array $buttons;
    public bool $openModalForDelete = false;
    public ?int $volunteerToDelete = null;

    public function mount($id): void
    {
        $this->volunteer = Volunteer::find($id);

        $this->definitions =[
            ['title' => __('admin/volunteers.show.fields.last_name'), 'content' => $this->volunteer->last_name],
            ['title' => __('admin/volunteers.show.fields.first_name'), 'content' => $this->volunteer->first_name],
            ['title' => __('admin/volunteers.show.fields.email'), 'content' => $this->volunteer->email],
            ['title' => __('admin/volunteers.show.fields.phone_number'), 'content' => $this->volunteer->phone_number],
            ['title' => __('admin/volunteers.show.fields.adresse'), 'content' => $this->volunteer->adresse],
            ['title' => __('admin/volunteers.show.fields.postal_code'), 'content' => $this->volunteer->postal_code],
            ['title' => __('admin/volunteers.show.fields.town'), 'content' => $this->volunteer->town],
            ['title' => __('admin/volunteers.show.fields.password'), 'content' => $this->volunteer->password],
        ];

        $this->buttons =[
            ['route_name' => route('volunteers.edit', ['locale' => app()->getLocale(), 'id' => $this->volunteer->id]), 'label' => __('admin/volunteers.show.buttons.edit'), 'title_button' => __('admin/volunteers.buttons.edit', ['name' => $this->volunteer->first_name]), 'class' => 'bg-blue-900 self-start text-white transition-all duration-300 hover:scale-101 hover:bg-blue-600 w-full 2xl:row-3'],

        ];

    }

    public function deleteVolunteer(int $id): void
    {
        Volunteer::findOrFail($id)->delete();

        $this->reset(['volunteerToDelete', 'openModalForDelete']);

        session()->flash('success', __('admin/volunteers.success_message'));
        $this->redirectRoute('volunteers.index', ['locale' => app()->getLocale()]);
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

