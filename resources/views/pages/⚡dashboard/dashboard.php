<?php

use App\Models\Adopting;
use App\Models\Animal;
use App\Models\Message;
use App\Models\Notification;
use Illuminate\Database\Eloquent\Collection;
use Livewire\Attributes\Computed;
use Livewire\Component;

new class extends Component {
    public bool $openMessage = false;
    public string|Message $message = '';

    public Collection $adoptings;
    public Collection $messages;
    public Collection $notifications;
    public array $statistiques = [];


    public function mount(): void
    {
        $this->adoptings = Adopting::latest()->take(3)->get();

        $this->messages = Message::where('state', '=', \App\Enums\MessageState::NotRead->value)->take(4)->get();

        $this->notifications = Notification::latest()->take(7)->get();

        $this->statistiques = [
            'animals' => [
                'route' => asset('assets/img/paw_icon.svg'),
                'alt' => 'Icon de pâttes',
                'content' => 'Animaux dans le refuge',
                'number' => Animal::count(),
            ],

            'adoptings' => [
                'route' => asset('assets/img/file_icon.svg'),
                'alt' => 'Icon de fichier',
                'content' => 'Adoption validés ce mois-ci',
                'number' => Adopting::where('state', '=', \App\Enums\AdoptingState::Done->value)->count(),
            ],

            'waiting' => [
                'route' => asset('assets/img/house_icon.svg'),
                'alt' => 'Icon de maison',
                'content' => 'Demande d‘adoption en attentes',
                'number' => Adopting::where('state', '=', \App\Enums\AdoptingState::Pending->value)->count(),
            ],

            'message' => [
                'route' => asset('assets/img/mail_icon.svg'),
                'alt' => 'Icon de d‘enveloppe',
                'content' => 'Message non-lu',
                'number' => Message::where('state', '=', \App\Enums\MessageState::NotRead->value)->count(),
            ],
        ];

    }

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
