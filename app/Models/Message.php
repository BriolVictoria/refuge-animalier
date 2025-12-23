<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Message extends Model
{
    use HasFactory;
    protected $fillable  = ['name', 'email', 'object', 'text', 'date', 'state'];

    protected function casts(): array
    {
        return [
            'date' => 'date'
        ];
    }

}


