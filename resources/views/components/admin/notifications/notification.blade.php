@foreach($this->notifications as $notification)
<div class="flex items-center gap-3 border-b border-b-blue-900 pb-2 mb-6 lg:mb-10">
        <img src="{!! asset('assets/img/mail_icon.svg') !!}" alt="Icône d'une enveloppe">
        <p class="text-xs font-light">{!! $notification->text !!}</p>
</div>
@endforeach
