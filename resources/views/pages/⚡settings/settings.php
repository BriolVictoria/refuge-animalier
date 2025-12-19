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

    public function mount(): void
    {
        $this->user = auth()->user();

        $this->userName = $this->user->name;
        $this->userEmail = $this->user->email;
        $this->userPhoneNumber = $this->user->phone_number;
        $this->userRole = $this->user->role;
        $this->userCreationDate = $this->user->creation_date;
        $this->userPassword = $this->user->password;
    }
};
