<?php

namespace App\Http\Controllers;

use App\Enums\AnimalStates;
use App\Models\Animal;

class AnimalController extends Controller
{
    public function index()
    {
        $animals = Animal::where('state', AnimalStates::Available)->paginate(10);

        return view('public.animals.index', compact('animals'));
    }
}
