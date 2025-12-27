<?php

use App\Models\Message;
use Livewire\Attributes\Computed;
use Livewire\Component;

new class extends Component {
    public bool $openMessage = false;

    public string|Message $message = '';
    public string $term = '';

    #[Computed]
    function messages()
    {
            return Message::query()
                ->where('email', 'like', '%' . $this->term . '%')
                ->orderBy('created_at', 'desc')
                ->paginate(10);
    }

    public function deleteMessage(int $id_message):void
    {
        $message_delete = Message::findOrFail($id_message);
        $message_delete->delete();

        $this->redirectRoute('messages.index', navigate: true);
    }

    public function openModal(string $modal, $id = '')
    {
        if ($modal === 'see_message') {
            $this->openMessage = true;
            $this->message = $id !== '' ? Message::find($id) : '';

        }

        $this->dispatch('open-modal');
    }

    public function closeModal()
    {
        $this->openMessage = false;

        $this->dispatch('close-modal');
    }

};

