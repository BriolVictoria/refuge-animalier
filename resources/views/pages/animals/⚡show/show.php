<?php

use App\Models\Animal;
use Illuminate\Database\Eloquent\Collection;
use Livewire\Component;
use Livewire\WithPagination;

new class extends Component {
    use WithPagination;
    public Animal $animal;
    public string $noteNote;
    public string $noteEmail;
    public bool $openVisitNote = false;

    public array $definitions;
    public array $buttons;
    public bool $openModalForDelete = false;
    public ?int $animalToDelete = null;
    public ?int $noteToDelete = null;
    public ?int $noteToEdit = null;

    public function mount($id): void
    {
        $this->animal = Animal::find($id);

        $this->definitions = [
            ['title' => __('admin/animals.fields.type'), 'content' => $this->animal->type],
            ['title' => __('admin/animals.fields.age'), 'content' => $this->animal->age],
            ['title' => __('admin/animals.fields.sex'), 'content' => $this->animal->sex],
            ['title' => __('admin/animals.fields.breed'), 'content' => $this->animal->breed],
            ['title' => __('admin/animals.fields.coat'), 'content' => $this->animal->coat],
            ['title' => __('admin/animals.fields.vaccine'), 'content' => $this->animal->vaccine],
            ['title' => __('admin/animals.fields.state'), 'content' => $this->animal->state],
            ['title' => __('admin/animals.fields.attitude'), 'content' => $this->animal->attitude],
            ['title' => __('admin/animals.fields.updated_at'), 'content' => $this->animal->date->translatedFormat('d/m/Y')],
        ];

        $this->buttons = [
            ['route_name' =>route('animals.edit', $this->animal->id), 'label' => __('admin/animals.buttons.edit_record'), 'title_button' => __('admin/animals.actions.edit_animal', ['name' => $this->animal->name]), 'class' => 'bg-blue-900 self-start text-white transition-all duration-300 hover:scale-101 hover:bg-blue-600 w-full 2xl:row-3'],
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

        if ($this->noteToEdit) {
            $note = $this->animal->notes()->findOrFail($this->noteToEdit);
            $note->update([
                'email' => $this->noteEmail,
                'note' => $this->noteNote,
            ]);

            $this->noteToEdit = null;
        } else {
            $this->animal->notes()->create([
                'email' => $this->noteEmail,
                'note' => $this->noteNote,
            ]);
        }
        $this->openVisitNote = false;

        $this->redirect(route('animals.show', $this->animal->id));
    }

    public function update(): void
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

    public function deleteAnimal(int $id): void
    {
        Animal::findOrFail($id)->delete();

        $this->reset(['animalToDelete', 'openModalForDelete']);

        session()->flash('success', __('admin/animals.success_message'));
        $this->redirectRoute('animals.index');
    }

    public function editNote(int $id): void
    {
        $note = $this->animal->notes()->findOrFail($id);
        $this->noteToEdit = $note->id;
        $this->noteEmail =$note->email;
        $this->noteNote =$note->note;
        $this->openVisitNote = true;

        $this->dispatch('open-modal');
    }

    #[\Livewire\Attributes\Computed]
    public function notes()
    {
        return $this->animal->notes()->latest()->paginate(6);
    }

    public function openModalVisit(string $modal)
    {
        $this->openVisitNote = true;

        $this->dispatch('open-modal');
    }

    public function openModal(string $animalId)
    {
        $this->animalToDelete = $animalId;
        $this->openModalForDelete = true;

        $this->dispatch('open-modal');
    }

    public function closeModal()
    {
        $this->openModalForDelete = false;

        $this->dispatch('close-modal');
    }

    public function openModalDeleteNote(int $noteId)
    {
        $this->noteToDelete = $noteId;
        $this->openModalForDelete = true;
        $this->dispatch('open-modal');
    }

    public function deleteNote(): void
    {
        if ($this->noteToDelete) {
            $note = $this->animal->notes()->findOrFail($this->noteToDelete);
            $note->delete();

            $this->reset(['noteToDelete', 'openModalForDelete']);

            session()->flash('success', __('admin/animals.note_success_message'));
        }
    }
};
