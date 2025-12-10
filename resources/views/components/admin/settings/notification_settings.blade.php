<article class="flex flex-col gap-6 bg-white rounded-sm shadow-[var(--shadow-xl)] p-6 h-full">
    <h3 class="text-sm font-medium">{!! $title !!}</h3>

    <x-admin.settings.notification_div_settings
        :notifications="$notifications"
/>


</article>
