@props([
    'wire',
    'field_name',
    'label',
    'value',
    'type',
    'placeholder',
])

<div {!! $attributes->merge(['class'=>'flex flex-col gap-1']) !!}>
    <label class="text-xs font-normal" for="{!! $field_name !!}">{!! $label !!}  <span class="text-xs font-light text-red-500">*</span></label>
    <input wire:model.defer="{{$wire}}" {!! $attributes->merge(['class'=>'text-xs font-normal text-blue-900 border border-blue-400 px-3 py-3 rounded-sm']) !!}type="{!! $type !!}"
           name="{!! $field_name !!}" id="{!! $field_name !!}" value="{!! $value ??  old($field_name) !!}"
           placeholder="{!! $placeholder ?? '' !!}">
    @error($wire)
    <p>{{$message}}</p>
    @enderror
</div>
