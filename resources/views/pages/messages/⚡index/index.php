<?php

use App\Enums\MessageState;
use App\Models\Message;
use Livewire\Attributes\Computed;
use Livewire\Component;
use Livewire\WithPagination;

new class extends Component {
    use WithPagination;
    public bool $openMessage = false;

    public string|Message $message = '';
    public string $term = '';
    public bool $openModalForDelete = false;
    public ?int $messageToDelete = null;

    #[Computed]
    function messages()
    {
        return Message::query()
            ->where('email', 'like', '%' . $this->term . '%')
            ->orderBy('created_at', 'desc')
            ->paginate(10);
    }

    public function deleteMessage(int $id_message): void
    {
        Message::findOrFail($id_message)->delete();

        $this->reset(['messageToDelete', 'openModalForDelete']);

        session()->flash('success', 'Le message a été supprimé avec succès');
        $this->redirectRoute('messages.index');
    }

    public function openModalDelete(string $animalId)
    {
        $this->messageToDelete = $animalId;
        $this->openModalForDelete = true;

        $this->dispatch('open-modal');
    }

    public function closeModalDelete()
    {
        $this->openModalForDelete = false;

        $this->dispatch('close-modal');
    }


    public function openModal(string $modal, $id = '')
    {
        if ($modal === 'see_message') {
            $this->message = $id !== '' ? Message::find($id) : '';

            if ($this->messages && $this->message->state !== MessageState::Read->value) {
                $this->message->state = MessageState::Read->value;
                $this->message->save();
            }
            $this->openMessage = true;

        }

        $this->dispatch('open-modal');
    }

    public function closeModal()
    {
        $this->openMessage = false;

        $this->dispatch('close-modal');
    }

};

