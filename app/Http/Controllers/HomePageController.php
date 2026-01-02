<?php

namespace App\Http\Controllers;

use App\Enums\AnimalStates;
use App\Models\Animal;

class HomePageController extends Controller
{
    public function index()
    {
        $animals = Animal::where('state', AnimalStates::Available)->paginate(3);

        return view('public.homepage', compact('animals'));
    }
}
