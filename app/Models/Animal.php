<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Animal extends Model
{
    use Hasfactory;

    protected $fillable = ['image_path', 'name', 'age', 'breed', 'date', 'coat', 'state', 'sex', 'vaccine', 'type', 'attitude'];

    protected function casts(): array
    {
        return [
            'date' => 'date'
        ];
    }
    public function adopting(): HasMany
    {
        return $this->hasMany(Adopting::class);
    }

   /* public function user(): BelongsTo
    {
        return $this->belongsTo(User::class);
    }*/


    public function notes(): HasMany
    {
        return $this->hasMany(Note::class);
    }

}
