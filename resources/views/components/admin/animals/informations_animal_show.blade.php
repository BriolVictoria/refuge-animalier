@props([
    'title',
    'content',
])

<div class="flex flex-col gap-4">
    <h3 class="text-lg font-medium">{!! $title !!}</h3>
    <p>{!! $content !!}</p>

    <x-admin.form.field.form
        wire="update">
        <fieldset class="flex flex-col gap-6 md:grid md:grid-cols-2 lg:grid-cols-3">
            {!! $slot !!}
        </fieldset>
    </x-admin.form.field.form>
</div>
