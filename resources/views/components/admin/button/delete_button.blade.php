@props([
    'wire_delete',
    'delete_message',
    'class',
])

<button type="button" wire:click="{!! $wire_delete !!}" title="{!! $delete_message !!}"
        class="{!! $class !!}">
    {!! $slot !!}
</button>
