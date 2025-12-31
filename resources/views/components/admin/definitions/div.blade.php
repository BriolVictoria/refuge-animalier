@foreach($this->adoptings as $adopting)
<div>
    <a href="{!! route('adoptings.show', $adopting->id) !!}">
        <dl class="bg-blue-200 px-3 py-4 rounded-sm">
            <div class="flex items-center gap-4">
                <dt class="text-sm font-medium">{{__('admin/dashboard.list.adopter')}}&nbsp;:</dt>
                <dd class="text-xs font-light text-center">{!! $adopting->first_name !!}</dd>
            </div>
            <div class="flex items-center gap-4">
                <dt class="text-sm font-medium ">{{__('admin/dashboard.list.animal_name')}}&nbsp;:</dt>
                <dd class="text-xs font-light">{!! $adopting->animal->name . ' (' .$adopting->animal->breed .')' !!}</dd>
            </div>
            <div class="flex items-center gap-4">
                <dt class="text-sm font-medium">{{__('admin/dashboard.list.date')}}&nbsp;:</dt>
                <dd class="text-xs font-light">{!! $adopting->creation_date->translatedFormat('d/m/Y') !!}</dd>
            </div>
        </dl>
    </a>
</div>
@endforeach
