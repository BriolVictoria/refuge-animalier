@props([
    'messages',
])


@foreach($messages as $message)
    <div class="flex justify-start gap-6 border-b border-b-blue-900 pb-2 mb-6">
        <img src="{!! $message['route'] !!}" class="max-w-1/4" alt="{!! $message['alt'] !!}">
        <div class="flex-row">
            <span class="text-xs font-normal">{!! $message['name'] !!}</span>
            <p class="text-xs font-light">{!! $message['content'] !!}</p>
        </div>
    </div>
@endforeach
