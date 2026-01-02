@props([
    'title',
    'messages',
])

<div class="fixed h-full w-full z-50 bg-[rgba(0,0,0,0.4)] inset-0 flex items-center justify-center">
    <div class="p-10 bg-white flex flex-col gap-7 max-w-1/2">
        <div class="flex items-center justify-between">
            <h1 class=" text-lg text-blue-900 font-semibold md:text-lg">{!! $title !!}</h1>
            <svg wire:click="closeModal()" xmlns="http://www.w3.org/2000/svg" width="45" height="45" viewBox="0 0 24 24" stroke="#2B517A"
                 stroke-width="1.25" stroke-linecap="round" stroke-linejoin="round" class="align-right cursor-pointer lucide lucide-x-icon lucide-x">
                <path d="M18 6 6 18"/>
                <path d="m6 6 12 12"/>
            </svg>
        </div>

        {!! $slot !!}
    </div>
</div>
