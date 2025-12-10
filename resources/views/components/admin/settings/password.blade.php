@props([
    'title',
    'route',
    'label',
    'title_button',
    'class',
])

<article class="flex flex-col gap-6 bg-white rounded-sm shadow-[var(--shadow-xl)] p-6 h-full">
    <h3 class="text-sm font-medium">{!! $title !!}</h3>
    <x-admin.form.field.form>
        <fieldset class="flex flex-col gap-6 lg:grid lg:grid-cols-2">
            {!! $slot!!}
        </fieldset>

        <x-admin.button.button
            route_name="{!! $route !!}"
            label="{!! $label !!}"
            title_button="{!! $title_button !!}"
            class="{!! $class !!}"/>
    </x-admin.form.field.form>
</article>
