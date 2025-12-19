<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Adopting extends Model
{

    use Hasfactory;

    protected $fillable = [
        'last_name', 'first_name', 'email', 'phone_number', 'address', 'city', 'postcode', 'other_animal', 'children', 'environment', 'outside', 'creation_date', 'state', 'comment'];

    public function animal(): BelongsTo
    {
        return $this->belongsTo(Animal::class);
    }

    /*public function user(): BelongsTo
    {
        return $this->belongsTo(User::class);
    }*/

}
