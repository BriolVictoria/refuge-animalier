@props([
    'title',
    'radios',

])

<div {!! $attributes->merge(['class'=>'flex flex-col gap-1']) !!}>
    <p class="text-sm font-normal">{!! $title !!}</p>
    <div class="flex">
        @foreach($radios as $radio)

            <input type="radio" id="{!! $radio['field_name'] !!}" name="{!!  $radio['name'] !!}" value="{!!  $radio['field_name'] !!}">
            <label for="{!!  $radio['field_name'] !!}" class="px-3">{!!  $radio['field_name'] !!}</label>

        @endforeach
    </div>

</div>
