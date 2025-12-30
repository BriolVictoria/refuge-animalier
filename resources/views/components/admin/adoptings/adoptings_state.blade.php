@props([
    'state',
])

@php
    use App\Enums\AdoptingState;

        $states = [
            AdoptingState::Done->value => 'bg-green-100 py-1 px-3 rounded-2xl inline-block 2xl:relative 2xl:top-0 2xl:right-0 absolute top-3 right-3',
            AdoptingState::InProgress->value => 'bg-red-100 py-1 px-3 rounded-2xl inline-block 2xl:relative 2xl:top-0 2xl:right-0 absolute top-3 right-3',
            AdoptingState::Pending->value => 'bg-orange-100 py-1 px-3 rounded-2xl inline-block 2xl:relative 2xl:top-0 2xl:right-0 absolute top-3 right-3',
        ];
@endphp


<span class="{{$states[(string)$state]}}">
    {{ __('enum.' . $state) }}
</span>
