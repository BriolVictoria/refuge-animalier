<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Adopting extends Model
{

    use HasFactory;

    protected $fillable = [
        'last_name', 'first_name', 'email', 'phone_number', 'address', 'city', 'postcode', 'other_animal', 'children', 'environment', 'outside', 'creation_date', 'state', 'comment', 'animal_id'];

    protected function casts(): array
    {
        return [
            'creation_date' => 'date'
        ];
    }
    public function animal(): BelongsTo
    {
        return $this->belongsTo(Animal::class);
    }

    /*public function user(): BelongsTo
    {
        return $this->belongsTo(User::class);
    }*/

}
