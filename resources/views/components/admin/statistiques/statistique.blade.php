@foreach($this->statistiques as $statistique)
<div class="flex justify-between gap-4 border-b border-b-blue-900 pb-2 mb-6 md:mb-15">
    <img src="{!! $statistique['route'] !!}" alt="{!! $statistique['alt'] !!}" width="35" height="35">
    <p class="flex-1 text-left text-xs font-light">{!! $statistique['content'] !!}</p>
    <span class="text-lg font-medium">{!! $statistique['number'] !!}</span>
</div>
@endforeach
