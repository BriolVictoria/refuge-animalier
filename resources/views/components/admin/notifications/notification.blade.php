@props([
    'notifications',
])

@foreach($notifications as $notification)
<div class="flex items-center gap-3 border-b border-b-blue-900 pb-2 mb-6 lg:mb-10">
        <img src="{!! $notification['route'] !!}" alt="{!! $notification['image_alt'] !!}">
        <p class="text-xs font-light">{!! $notification['notification_text'] !!}</p>
</div>
@endforeach
