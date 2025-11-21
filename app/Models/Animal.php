<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Animal extends Model
{
    use Hasfactory;
    protected $fillable = ['image_path', 'name', 'age', 'breed', 'coat', 'date','attitude'];
}
