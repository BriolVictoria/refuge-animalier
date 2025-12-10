@props([
    'notifications' ,
])

@foreach($notifications as $notification)

<div class="flex items-center justify-between w-full">
    <span class="text-xs mr-14">{!! $notification['title'] !!}</span>
    <label for="toggle" class="flex items-end cursor-pointer">
        <input type="checkbox" id="toggle" class="sr-only peer">
        <div
            class="block relative bg-blue-200 w-12 h-7 p-1 rounded-full before:absolute before:bg-white before:w-5 before:h-5 before:p-1 before:rounded-full before:transition-all before:duration-500 before:left-1 peer-checked:bg-blue-900 peer-checked:before:left-6 peer-checked:before:bg-white"></div>
    </label>
</div>

@endforeach
