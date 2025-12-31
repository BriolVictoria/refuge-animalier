<?php

use App\Enums\MessageState;
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
                'alt' => __('admin/dashboard.stats.animals.alt'),
                'content' => __('admin/dashboard.stats.animals.content'),
                'number' => Animal::count(),
            ],

            'adoptings' => [
                'route' => asset('assets/img/file_icon.svg'),
                'alt' => __('admin/dashboard.stats.adoptings.alt'),
                'content' => __('admin/dashboard.stats.adoptings.content'),
                'number' => Adopting::where('state', '=', \App\Enums\AdoptingState::Done->value)->count(),
            ],

            'waiting' => [
                'route' => asset('assets/img/house_icon.svg'),
                'alt' => __('admin/dashboard.stats.waiting.alt'),
                'content' => __('admin/dashboard.stats.waiting.content'),
                'number' => Adopting::where('state', '=', \App\Enums\AdoptingState::Pending->value)->count(),
            ],

            'message' => [
                'route' => asset('assets/img/mail_icon.svg'),
                'alt' => __('admin/dashboard.stats.message.alt'),
                'content' => __('admin/dashboard.stats.message.content'),
                'number' => Message::where('state', '=', \App\Enums\MessageState::Read->value)->count(),
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
