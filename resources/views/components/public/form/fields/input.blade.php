@props([
    'field_name',
    'label',
    'value',
    'type',
    'placeholder',
])

<div {!! $attributes->merge(['class'=>'flex flex-col gap-1 ']) !!}>
    <label class="text-sm font-normal" for="{!! $field_name !!}">{!! $label !!}  <span class="text-xs font-light text-red-500">*</span></label>
    <input class="text-sm font-normal text-blue-400 border border-blue-400 px-3 py-3 rounded-sm" type="{!! $type !!}"
           name="{!! $field_name !!}" id="{!! $field_name !!}" value="{!! $value ??  old($field_name) !!}"
           placeholder="{!! $placeholder ?? '' !!}">
</div>
