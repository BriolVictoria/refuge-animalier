<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasOne;

class Availability extends Model
{
    use HasFactory;

    protected $fillable  = ['volunteer_id', 'monday', 'tuesday', 'wednesday', 'thursday', 'friday', 'saturday', 'sunday'];


    public function volunteer(): BelongsTo
    {
        return $this->belongsTo(Volunteer::class);
    }
}
