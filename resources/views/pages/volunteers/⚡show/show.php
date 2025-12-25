<?php

use App\Models\Volunteer;
use Livewire\Component;

new class extends Component
{
    public Volunteer $volunteer;
    public array $definitions;
    public array $buttons;

    public function mount($id): void
    {
        $this->volunteer = Volunteer::find($id);

        $this->definitions =[
            ['title' => 'Nom', 'content' => $this->volunteer->last_name],
            ['title' => 'Prénom', 'content' => $this->volunteer->first_name],
            ['title' => 'Email', 'content' => $this->volunteer->email],
            ['title' => 'Numéro de téléphone', 'content' => $this->volunteer->phone_number],
            ['title' => 'Adresse', 'content' => $this->volunteer->adresse],
            ['title' => 'Code postal', 'content' => $this->volunteer->postal_code],
            ['title' => 'Ville', 'content' => $this->volunteer->town],
            ['title' => 'Mot de passe', 'content' => $this->volunteer->password],
        ];

        $this->buttons =[
            ['route_name' => route('volunteers.edit', $this->volunteer->id), 'label' => 'Modifier la fiche', 'title_button' => 'Modifier le fiche de' .$this->volunteer->name, 'class' => 'bg-blue-900 self-start text-white transition-all duration-300 hover:scale-101 hover:bg-blue-600 w-full 2xl:row-3'],
            ['route_name' => '#', 'label' => 'Supprimer le fiche', 'title_button' => 'Supprimer le fiche de' .$this->volunteer->name, 'class' => 'border border-blue-900 self-start text-blue-900 transition-all duration-300 hover:scale-101 hover:text-blue-600 hover:border-blue-600 w-full 2xl:row-3'],

        ];

    }
};
