<?php

use App\Models\Adopting;
use Livewire\Component;

new class extends Component
{
    public Adopting $adopting;
    public array $definitions;
    public array $buttons;
    public bool $openModalForDelete = false;
    public ?int $adoptingToDelete = null;

    public function mount($id): void
    {
        $this->adopting = Adopting::find($id);

        $this->definitions =[
            ['title' => __('admin/adoptings.fields.last_name'), 'content' => $this->adopting->last_name],
            ['title' => __('admin/adoptings.fields.first_name'), 'content' => $this->adopting->first_name],
            ['title' => __('admin/adoptings.fields.email'), 'content' => $this->adopting->email],
            ['title' => __('admin/adoptings.fields.animal_name'), 'content' => $this->adopting->animal->name],
            ['title' => __('admin/adoptings.fields.phone_number'), 'content' => $this->adopting->phone_number],
            ['title' => __('admin/adoptings.fields.address'), 'content' => $this->adopting->address],
            ['title' => __('admin/adoptings.fields.city'), 'content' => $this->adopting->city],
            ['title' => __('admin/adoptings.fields.postcode'), 'content' => $this->adopting->postcode],
            ['title' => __('admin/adoptings.fields.other_animal'), 'content' => $this->adopting->other_animal],
            ['title' => __('admin/adoptings.fields.children'), 'content' => $this->adopting->children],
            ['title' => __('admin/adoptings.fields.environment'), 'content' => $this->adopting->environment],
            ['title' => __('admin/adoptings.fields.outside'), 'content' => $this->adopting->outside],
            ['title' => __('admin/adoptings.fields.creation_date'), 'content' => $this->adopting->creation_date->translatedFormat('d/m/Y')],
            ['title' => __('admin/adoptings.fields.state'), 'content' => $this->adopting->state],
            ['title' => __('admin/adoptings.fields.comment'), 'content' => $this->adopting->comment],
        ];

        $this->buttons =[
            ['route_name' => route('adoptings.edit', ['locale' => app()->getLocale(), 'id' => $this->adopting->id]), 'label' => __('admin/adoptings.buttons.edit_record'), 'title_button' => __('admin/adoptings.actions.edit', ['name' => $this->adopting->first_name]), 'class' => 'bg-blue-900 self-start text-white transition-all duration-300 hover:scale-101 hover:bg-blue-600 w-full 2xl:row-3'],

        ];

    }

    public function deleteAdopting(int $id): void
    {
        Adopting::findOrFail($id)->delete();

        $this->reset(['adoptingToDelete', 'openModalForDelete']);

        session()->flash('success', __('admin/adoptings.success_message'));
        $this->redirectRoute('adoptings.index', ['locale' => app()->getLocale()]);
    }

    public function openModal(string $adoptingId)
    {
        $this->adoptingToDelete = $adoptingId;
        $this->openModalForDelete = true;

        $this->dispatch('open-modal');
    }

    public function closeModal()
    {
        $this->openModalForDelete = false;

        $this->dispatch('close-modal');
    }
};
