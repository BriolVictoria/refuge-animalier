<?php

namespace App\Http\Controllers;

use App\Enums\AnimalStates;
use App\Models\Animal;

class AnimalController extends Controller
{
    public function index()
    {
        $animals = Animal::where('state', AnimalStates::Available)->paginate(12);

        return view('public.animals.index', compact('animals'));
    }

    public function show(Animal $animal)
    {
        return view('public.animals.show', compact('animal'));
    }
}
