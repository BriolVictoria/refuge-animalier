@props([
    'adopting'
])

<div>
    <a href="{!! route('adoptings.show', $adopting->id) !!}">


        <dl class="bg-blue-200 px-3 py-4 rounded-sm">
            <div class="flex items-center gap-4">
                <dt class="text-sm font-medium">Adoptant&nbsp;:</dt>
                <dd class="text-xs font-light text-center">{!! $adopting->first_name !!}</dd>
            </div>
            <div class="flex items-center gap-4">
                <dt class="text-sm font-medium ">Nom de l'animal&nbsp;:</dt>
                <dd class="text-xs font-light">{!! $adopting->animal->name . ' (' .$adopting->animal->breed .')' !!}</dd>
            </div>
            <div class="flex items-center gap-4">
                <dt class="text-sm font-medium">Date&nbsp;:</dt>
                <dd class="text-xs font-light">{!! $adopting->creation_date !!}</dd>
            </div>
        </dl>

    </a>
</div>
