<?php

namespace App\Http\Controllers;


use App\Enums\MessageState;
use App\Models\Message;
use Carbon\Carbon;
use Illuminate\Http\Request;

class ContactController extends Controller
{
    public function index()
    {
        return view('public.contactpage');
    }

    public function store(Request $request)
    {
        $data = $request->validate([
            'last_name' => ['required', 'string', 'max:255', 'min:2'],
            'first_name' => ['required', 'string', 'max:255', 'min:2'],
            'email' => ['required', 'email', 'max:255', 'min:2'],
            'object' => ['required', 'string', 'max:255'],
            'message' => ['required', 'string', 'max:255'],
        ]);

        Message::create([
            'name' => $data['last_name'] . $data['first_name'],
            'email' => $data['email'],
            'object' => $data['object'],
            'text' => $data['message'],
            'date' => Carbon::now(),
            'state' => MessageState::NotRead->value,
        ]);
        return redirect()->back()->with('success', 'Votre message a été envoyé avec succès !');
    }
}
