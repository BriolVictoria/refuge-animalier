@props([
    'wire'
])

<form class="flex flex-col gap-6" wire:submit="save">
    <p class="text-red-600 text-xs mb-3">{{ __('auth.required_fields')}}</p>
    {!! $slot !!}
</form>
