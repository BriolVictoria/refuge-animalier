@props([
    'state',
    'page'
])

@php
    use App\Enums\AnimalStates;

        $states = [
            'index' => [
                AnimalStates::Adopted->value => 'bg-purple-100 py-1 px-3 rounded-2xl inline-block 2xl:relative 2xl:top-0 2xl:right-0 absolute top-3 right-3',
            AnimalStates::InCare->value => 'bg-red-100 py-1 px-3 rounded-2xl inline-block 2xl:relative 2xl:top-0 2xl:right-0 absolute top-3 right-3',
            AnimalStates::AwaitingAdoption->value => 'bg-orange-100 py-1 px-3 rounded-2xl inline-block 2xl:relative 2xl:top-0 2xl:right-0 absolute top-3 right-3',
            AnimalStates::CurrentlyAdopted->value => 'bg-blue-100 py-1 px-3 rounded-2xl inline-block 2xl:relative 2xl:top-0 2xl:right-0 absolute top-3 right-3',
            AnimalStates::Available->value => 'bg-green-100 py-1 px-3 rounded-2xl inline-block 2xl:relative 2xl:top-0 2xl:right-0 absolute top-3 right-3'
            ],
            'show' => [
     AnimalStates::Adopted->value => 'bg-purple-100 text-xs font-light px-3 py-2 rounded-4xl w-fit',
            AnimalStates::InCare->value => 'bg-red-100 text-xs font-light px-3 py-2 rounded-4xl w-fit',
            AnimalStates::AwaitingAdoption->value => 'bg-orange-100 text-xs font-light px-3 py-2 rounded-4xl w-fit',
            AnimalStates::CurrentlyAdopted->value => 'bg-blue-100 text-xs font-light px-3 py-2 rounded-4xl w-fit',
            AnimalStates::Available->value => 'bg-green-100 text-xs font-light px-3 py-2 rounded-4xl w-fit'
            ]
        ];
@endphp



<span class="{{$states[(string)$page][(string)$state]}}">
    {{ __('enum.' . $state) }}
</span>
