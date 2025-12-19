@props([
    'notes'
])

@foreach($notes as $note)

    <div class="border border-blue-300 rounded-2xl shadow-md p-4 ">
        <div class="flex items-baseline">
            <dt class="text-sm font-medium pr-2.5">Email&nbsp;:</dt>
            <dd class="text-xs font-light">{!! $note->email !!}</dd>
        </div>

        <div class="flex items-baseline">
            <dt class="text-sm font-medium pr-2.5">Note&nbsp;:</dt>
            <dd class="text-xs font-light">{!! $note->note !!}</dd>
        </div>
    </div>


@endforeach
