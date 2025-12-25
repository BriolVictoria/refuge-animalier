<?php

use App\Models\Message;
use Livewire\Attributes\Computed;
use Livewire\Component;

new class extends Component {
    public bool $openMessage = false;

    public string|Message $message = '';

    #[Computed]
    function messages()
    {
        return Message::paginate(10);
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

