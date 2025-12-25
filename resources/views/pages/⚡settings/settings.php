<?php

use App\Models\User;
use Livewire\Component;

new class extends Component
{
    public User $user;

    public string $userName;
    public string $userEmail;
    public string $userPhoneNumber;
    public string $userRole;
    public string $userCreationDate;
    public string $userPassword;
    public array $roles;
    public array $notifications;
    public array $buttons;

    public function mount(): void
    {
        $this->user = auth()->user();

        $this->roles =[\App\Enums\RoleUser::Volunteer->value, \App\Enums\RoleUser::Administrator->value];

        $this->notifications =[
            ['title' => 'Notifications par email', 'id' => '1', 'for' => '1'],
            ['title' => 'Notifications tableau de bord', 'id' => '2', 'for' => '2'],
            ['title' => 'Alertes adoption urgentes', 'id' => '3', 'for' => '3'],
            ['title' => 'Rappel de RDV', 'id' => '4', 'for' => '4'],
        ];

        $this->userName = $this->user->name;
        $this->userEmail = $this->user->email;
        $this->userPhoneNumber = $this->user->phone_number;
        $this->userRole = $this->user->role;
        $this->userCreationDate = $this->user->creation_date;
        $this->userPassword = $this->user->password;
    }

    public function update(): void
    {
        $this->validate(
            [
                'userName' => ['required', 'string', 'max:255'],
                'userEmail' => ['required', 'string', 'max:255'],
                'userPhoneNumber' => ['required', 'string', 'max:255'],
                'userRole' => ['required', 'string', 'max:255'],
                'userCreationDate' => ['required', 'string', 'max:255'],
                'userPassword' => ['required', 'string', 'max:255'],
            ]
        );

        $this->user->update(
            [
                'name' => $this->userName,
                'email' => $this->userEmail,
                'phone_number' => $this->userPhoneNumber,
                'role' => $this->userRole,
                'creation_date' => $this->userCreationDate,
                'password' => $this->userPassword,
            ]
        );

        $this->redirect(route('settings'));
    }
};
