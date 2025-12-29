@props([
    'title',
    'content',
])

<article class="flex flex-col gap-6 bg-white rounded-sm shadow-[var(--shadow-xl)] py-6 px-6 h-full">
    <h3 class="text-lg font-medium">{!! $title !!}</h3>
    <p>{!! $content !!}</p>
    <x-admin.form.field.form>
        <fieldset class="flex flex-col gap-6 md:grid md:grid-cols-2 lg:grid-cols-2">

            {!! $slot !!}

        </fieldset>
    </x-admin.form.field.form>


</article>
