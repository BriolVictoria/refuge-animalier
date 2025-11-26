@props([
    'field_name',
    'label',
    'select',
    'value',
    'option'
])

<div {!! $attributes->merge(['class'=>'flex flex-col gap-1']) !!}>
    <label class="text-sm font-normal" for="{!! $field_name !!}">{!! $label !!} <span class="text-xs font-light text-red-500">*</span></label>
    <select name="{!! $field_name !!}" id="{!! $field_name !!}" class="text-blue-900 text-sm font-normal border border-blue-400 px-3 py-3 rounded-sm">
        <option {!! $select !!} value="{!! $value !!}">{!! $option !!}</option>
    </select>
</div>
