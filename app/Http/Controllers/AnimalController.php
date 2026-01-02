<?php

namespace App\Http\Controllers;

use App\Enums\AdoptingEnvironement;
use App\Enums\AdoptingState;
use App\Enums\AnimalEnum;
use App\Enums\AnimalStates;
use App\Enums\Children;
use App\Enums\Outside;
use App\Models\Adopting;
use App\Models\Animal;
use Carbon\Carbon;
use Illuminate\Http\Request;
use League\CommonMark\Environment\Environment;

class AnimalController extends Controller
{
    public function index(Request $request)
    {
        $query = Animal::query();

        if ($request->filled('search')) {
            $search = trim($request->search);
            $query->where('name', 'like', "%{$search}%");
        }

        $animals = $query
            ->where('state', AnimalStates::Available)
            ->paginate(12)
            ->withQueryString();

        return view('public.animals.index', compact('animals'));
    }

    public function show(string $locale,Animal $animal)
    {
        return view('public.animals.show', compact('animal'));
    }

    public function store(Request $request)
    {
        $data = $request->validate([
            'animal_id' => 'required|exists:animals,id',
            'first_name' => 'required|string|max:255',
            'last_name' => 'required|string|max:255',
            'email' => 'required|email',
            'phone' => 'required|string',
            'address' => 'required|string',
            'city' => 'required|string',
            'postal_code' => 'required|string',
            'message' => 'required|string',
        ]);

        Adopting::create([
            'last_name' => $data['last_name'],
            'first_name' => $data['first_name'],
            'email' => $data['email'],
            'phone_number' => $data['phone'],
            'animal_id' => $data['animal_id'],
            'address' => $data['address'],
            'city' => $data['city'],
            'postcode' => $data['postal_code'],
            'other_animal' => AnimalEnum::NoAnimal->value,
            'children' => Children::NoChildren->value,
            'environment' => AdoptingEnvironement::Studio->value,
            'outside' => Outside::NoOutside->value,
            'creation_date' => Carbon::now(),
            'state' =>AdoptingState::Pending->value,
            'comment' => $data['message'],
        ]);
        return redirect()->back()->with('success', 'Votre demande a été envoyé avec succès !');
    }
}
