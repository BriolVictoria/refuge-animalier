<?php

use App\Models\Animal;
use Livewire\Attributes\Computed;
use Livewire\Component;
use Livewire\WithPagination;

new class extends Component {

    use WithPagination;
    public string $term = '';

    #[Computed]
    public function animals()
    {
        return Animal::query()
            ->where('name', 'like', '%' . $this->term . '%')
            ->orderBy('created_at', 'desc')
            ->paginate(10);
    }

    public function deleteAnimal(int $id):void
    {
        $animal = Animal::findOrFail($id);
        $animal->delete();

        $this->redirectRoute('animals.index', navigate: true);
    }
};

