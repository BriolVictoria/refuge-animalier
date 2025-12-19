@props([
    'wire',
    'field_name',
    'label',
    'select' => null, // pour que je puisse avoir une valeur par défaut
    'options' => [],
    ])

<div {!! $attributes->merge(['class'=>'flex flex-col gap-1']) !!}>
    <label class="text-xs font-normal" for="{!! $field_name !!}">{!! $label !!} <span
            class="text-xs font-normal text-red-500">*</span></label>
    <select name="{!! $field_name !!}" id="{!! $field_name !!}"
            wire:model.change="{{$wire}}"
            class="text-blue-900 text-sm font-normal border border-blue-400 px-3 py-3 rounded-sm">
        @foreach($options as $option)
            <option {!!($select === $option) ? 'selected': '' !!} value="{!! $option->id !!}">{!! $option->name . ' (' . $option->breed !!})</option>
        @endforeach
    </select>
    @error($wire)
    <p>{{$message}}</p>
    @enderror
</div>
