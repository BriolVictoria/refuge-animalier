<?php

use App\Models\Adopting;
use Livewire\Component;

new class extends Component
{
    public Adopting $adopting;
    public array $definitions;
    public array $buttons;

    public function mount($id): void
    {
        $this->adopting = Adopting::find($id);

        $this->definitions =[
            ['title' => 'Nom', 'content' => $this->adopting->last_name],
            ['title' => 'Prénom', 'content' => $this->adopting->first_name],
            ['title' => 'Adresse mail', 'content' => $this->adopting->email],
            ['title' => 'Nom de l‘animal désirée', 'content' => $this->adopting->animal->name . ' (' .$this->adopting->animal->breed .')'],
            ['title' => 'Numéro de téléphone', 'content' => $this->adopting->phone_number],
            ['title' => 'Adresse', 'content' => $this->adopting->address],
            ['title' => 'Ville', 'content' => $this->adopting->city],
            ['title' => 'Code postal', 'content' => $this->adopting->postcode],
            ['title' => 'D‘autres animaux à la maison', 'content' => $this->adopting->other_animal],
            ['title' => 'Présence d‘enfants', 'content' => $this->adopting->children],
            ['title' => 'Type d‘environement', 'content' => $this->adopting->environment],
            ['title' => 'Espace extérieur', 'content' => $this->adopting->outside],
            ['title' => 'Date de création du compte', 'content' => $this->adopting->creation_date->translatedFormat('d/m/Y')],
            ['title' => 'Satut de la demande', 'content' => $this->adopting->state],
            ['title' => 'Commentaire interne (résérvé au personnel)', 'content' => $this->adopting->comment],
        ];

        $this->buttons =[
            ['route_name' => route('adoptings.edit', $this->adopting->id), 'label' => 'Modifier la fiche', 'title_button' => 'Modifier le fiche de' . $this->adopting->name, 'class' => 'bg-blue-900 self-start text-white transition-all duration-300 hover:scale-101 hover:bg-blue-600 w-full 2xl:row-3'],
            ['route_name' => '#', 'label' => 'Supprimer le fiche', 'title_button' => 'Supprimer le fiche de'.  $this->adopting->name, 'class' => 'border border-blue-900 self-start text-blue-900 transition-all duration-300 hover:scale-101 hover:text-blue-600 hover:border-blue-600 w-full 2xl:row-3'],

        ];

    }
};
