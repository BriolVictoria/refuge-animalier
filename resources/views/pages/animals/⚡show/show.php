<?php

use App\Models\Animal;
use Illuminate\Database\Eloquent\Collection;
use Livewire\Component;

new class extends Component {
    public Animal $animal;
    public string $noteNote;
    public string $noteEmail;
    public bool $openVisitNote = false;

    public array $definitions;
    public array $buttons;

    public function mount($id): void
    {
        $this->animal = Animal::find($id);

        $this->definitions = [
            ['title' => 'Type', 'content' => $this->animal->type],
            ['title' => 'Age', 'content' => $this->animal->age],
            ['title' => 'Sexe', 'content' => $this->animal->sex],
            ['title' => 'Race', 'content' => $this->animal->breed],
            ['title' => 'Pelage', 'content' => $this->animal->coat],
            ['title' => 'Vaccin', 'content' => $this->animal->vaccine],
            ['title' => 'Statut', 'content' => $this->animal->state],
            ['title' => 'Caractèristique', 'content' => $this->animal->attitude],
            ['title' => 'Mise à jour', 'content' => $this->animal->date->translatedFormat('d/m/Y')],
        ];

        $this->buttons = [
            ['route_name' =>route('animals.edit', $this->animal->id), 'label' => 'Modifier la fiche', 'title_button' => 'Modifier le fiche de'. $this->animal->name, 'class' => 'bg-blue-900 self-start text-white transition-all duration-300 hover:scale-101 hover:bg-blue-600 w-full 2xl:row-3'],
            ['route_name' => '#', 'label' => 'Supprimer le fiche', 'title_button' => 'Supprimer le fiche de'. $this->animal->name, 'class' => 'border border-blue-900 self-start text-blue-900 transition-all duration-300 hover:scale-101 hover:text-blue-600 hover:border-blue-600 w-full 2xl:row-3']
        ];

    }

    public function create()
    {

        $this->validate(
            [
                'noteEmail' => ['required', 'email', 'max:255'],
                'noteNote' => ['required', 'string', 'max:255'],
            ]
        );

        $this->animal->notes()->create(
            [
                'email' => $this->noteEmail,
                'note' => $this->noteNote,
            ]
        );

        $this->redirect(route('animals.show', $this->animal->id));
    }


    #[\Livewire\Attributes\Computed]
    public function notes()
    {
        return $this->animal->notes()->latest()->paginate(6);
    }

    public function openModal(string $modal)
    {
        $this->openVisitNote = true;

        $this->dispatch('open-modal');
    }

    public function closeModal()
    {
        $this->openVisitNote = false;

        $this->dispatch('close-modal');
    }
};
