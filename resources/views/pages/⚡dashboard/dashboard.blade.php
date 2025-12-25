<main class="w-full">
    <div>
        <h1 class="py-4 px-8 text-xl text-blue-900 font-semibold border-b border-b-blue-900 w-1/1">Tableau de bord</h1>
        <section>
            <h2 class="sr-only">Tableau de bord</h2>
            <div class="flex flex-col gap-6 md:grid md:grid-cols-9 md:gap-6 lg:flex 2xl:grid 2xl:grid-cols-9">
                <div class="md:col-start-1 md:col-end-6">
                    <x-admin.definitions.definition
                        title="Demandes d'adoptions"
                        label="Voir toutes les demandes"
                        title_button="Voir toutes les demandes"
                        class="bg-blue-900 self-start text-white transition-transform duration-300 hover:scale-101 hover:bg-blue-600 w-1/1 inline-block"
                    />
                </div>


                <div class="md:col-start-6 md:col-end-10">
                    <x-admin.notifications.notification_container
                        title="Notifications récentes"
                    />
                </div>


                <div class="md:col-start-1 md:col-end-6">
                    <x-admin.statistiques.statistiques_container
                        title="Statistiques rapide"
                        route="#"
                        label="Exporter le PDF"
                        title_button="Exporter le PDF"
                        class="bg-blue-900 self-start text-white transition-transform duration-300 hover:scale-101 hover:bg-blue-600 w-1/1 inline-block"
                    />
                </div>

                <div class="md:col-start-6 md:col-end-10">
                    <x-admin.messages_dashboard.message_container
                        title="Messages récent"
                        route="{!! route('messages.index') !!}"
                        label="Voir tous les messages"
                        title_button="Voir tous les messages"
                        class="bg-blue-900 self-start text-white transition-transform duration-300 hover:scale-101 hover:bg-blue-600 w-1/1 inline-block"
                    />
                </div>
            </div>
        </section>
    </div>

    @if($openMessage)
        <x-admin.modal.modal title="Le message">
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

