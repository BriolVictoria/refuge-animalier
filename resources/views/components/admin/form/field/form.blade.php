@props([
    'wire' => null
])

<form class="flex flex-col gap-6" wire:submit.prevent="{{$wire}}">
    <p class="text-red-600 text-xs mb-3">{{ __('auth.required_fields')}}</p>
    {!! $slot !!}
</form>
