@foreach($this->messages as $message)
    <div wire:click="openModal('see_message', {{$message->id}})"
         class="cursor-pointer flex justify-start gap-6 border-b border-b-blue-900 pb-2 mb-6">
        <x-admin.messages.messages_state
            page="modal_dashboard"
            :state="$message->state"
        />
        <div class="flex-row">
            <span class="text-xs font-normal">{!! $message->name!!}</span>
            <p class="text-xs font-light">{!! $message->object !!}</p>
        </div>
    </div>
@endforeach
