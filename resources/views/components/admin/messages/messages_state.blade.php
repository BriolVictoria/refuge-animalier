@props([
    'state',
    'page'
])

@php
    use App\Enums\MessageState;


        $states = [
            'table' => [
                MessageState::Read->value => 'whitespace-nowrap bg-blue-100 py-1 px-3 rounded-2xl inline-block 2xl:relative 2xl:top-0 2xl:right-0 absolute top-3 right-3',
                MessageState::NotRead->value => 'whitespace-nowrap bg-red-100 py-1 px-3 rounded-2xl  inline-block 2xl:relative 2xl:top-0 2xl:right-0 absolute top-3 right-3',

            ],
            'modal' => [
                MessageState::Read->value => 'whitespace-nowrap bg-blue-100 py-1 px-3 self-start rounded-2xl relative top-0 right-0 absolute top-3 right-3',
                MessageState::NotRead->value => 'whitespace-nowrap bg-red-100 py-1 px-3 self-start rounded-2xl relative top-0 right-0 absolute top-3 right-3',

            ],

            'modal_dashboard' => [
                MessageState::Read->value => 'whitespace-nowrap bg-blue-100 py-1 px-3 self-start rounded-2xl relative top-0 right-0 absolute top-3 right-0',
                MessageState::NotRead->value => 'whitespace-nowrap bg-red-100 py-1 px-3 self-start rounded-2xl relative top-0 right-0 absolute top-3 right-0',

            ]
        ];
@endphp


<span class="{{$states[(string)$page][(string)$state]}}">
    {{ __('enum.' . $state) }}
</span>
