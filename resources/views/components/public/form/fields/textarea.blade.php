@props([
    'field_name',
    'label',
    'value',
    'placeholder',
])

<div {!! $attributes->merge(['class'=>'flex flex-col gap-1']) !!}>
    <label class="text-sm font-normal" for="{!! $field_name !!}">{!! $label !!} <span class="text-xs font-light text-red-500">*</span></label>
    <textarea class="text-sm font-normal text-blue-900 border border-blue-400 px-3 py-3 rounded-sm" name="{!! $field_name !!}" id="{!! $field_name !!}" rows="3" placeholder="{!! $placeholder !!}">{!! $value ??  old($field_name) !!}</textarea>
</div>
