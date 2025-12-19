<?php

use Livewire\Component;

new class extends Component {
    public bool $openMessage = false;

    public function openModal(string $modal)
    {
        if ($modal === 'see_message') {
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

