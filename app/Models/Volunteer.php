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
}
