<main class="w-full">
    <x-admin.messages.index.table
        title_sronly="Messages"
        title="Messages"
        label="Ouvrir mail"
        title_button="Ouvrir mail"
        route_name="mailto:exemple@email.com?subject=Hello&body=Bonjour!"
        class="bg-blue-900 self-start text-white transition-transform duration-300 hover:scale-101 hover:bg-blue-600 inline-block"
        search_placeholder="Rechercher un message"

    />

    @if($openMessage)
        <x-admin.modal.modal
            title="Le message"
        >
            <div class="flex flex-col gap-6">
                <x-admin.messages.messages_state
                    page="modal"
                    :state="$message->state"
                />
                <div class="flex items-baseline">
                    <dt class="text-sm font-medium pr-2.5">Nom&nbsp;:</dt>
                    <dd wire:click="openModal('see_message', {{$message->id}})"
                        class="text-xs font-light">{!! $message->name !!}</dd>
                </div>

                <div class="flex items-baseline">
                    <dt class="text-sm font-medium pr-2.5">Email&nbsp;:</dt>
                    <dd class="text-xs font-light">{!! $message->email !!}</dd>
                </div>


                <div class="flex items-baseline">
                    <dt class="text-sm font-medium pr-2.5">Objet&nbsp;:</dt>
                    <dd class="text-xs font-light">{!! $message->object !!}</dd>
                </div>

                <div class="flex items-baseline">
                    <dt class="text-sm font-medium pr-2.5">Date&nbsp;:</dt>
                    <dd class="text-xs font-light">{!! $message->date->translatedFormat('d/m/Y') !!}</dd>
                </div>

                <div class="flex flex-col items-baseline">
                    <dt class="text-sm font-medium pr-2.5">Message&nbsp;:</dt>
                    <dd class="text-xs font-light">{!! $message->text !!}</dd>
                </div>

            </div>

            <x-admin.button.button
                label="Répondre dans mail"
                title_button="Répondre dans mail"
                class="bg-blue-900 self-start text-white transition-transform duration-300 hover:scale-101 hover:bg-blue-600 inline-block"
                route_name="mailto:{!! $message->email !!}?subject=Hello&body=Bonjour!"
            />
        </x-admin.modal.modal>
    @endif

</main>
