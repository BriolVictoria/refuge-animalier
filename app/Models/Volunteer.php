<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasOne;

class Volunteer extends Model
{
    use HasFactory;

    protected $fillable = ['first_name', 'last_name','email', 'phone_number', 'adresse', 'postal_code', 'town', 'password'];

    public function availability(): HasOne
    {
        return $this->hasOne(Availability::class);
    }

    protected static function booted()
    {
        static::created(function ($volunteer) {
            \App\Models\User::create([
                'email' => $volunteer->email,
                'name' => $volunteer->first_name . ' ' . $volunteer->last_name,
                'password' => $volunteer->password,
                'phone_number' => $volunteer->phone_number,
                'role' => 'Volunteer',
                'creation_date' => now(),
                'volunteer_id' => $volunteer->id,
            ]);
        });
    }
}
