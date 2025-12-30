<main class="w-full">
    <div>
        <h1 class="py-4 px-8 text-xl text-blue-900 font-semibold border-b border-b-blue-900 w-1/1">{{__('admin/dashboard.dashboard.title')}}</h1>
        <section>
            <h2 class="sr-only">{{__('admin/dashboard.dashboard.sr_only')}}</h2>
            <div class="flex flex-col gap-6 md:grid md:grid-cols-9 md:gap-6 lg:flex 2xl:grid 2xl:grid-cols-9">
                <div class="md:col-start-1 md:col-end-6">
                    <x-admin.definitions.definition
                        title="{{__('admin/dashboard.cards.adoptions.title')}}"
                        label="{{__('admin/dashboard.cards.adoptions.label')}}"
                        title_button="{{__('admin/dashboard.cards.adoptions.title_button')}}"
                        class="bg-blue-900 self-start text-white transition-transform duration-300 hover:scale-101 hover:bg-blue-600 w-1/1 inline-block"
                    />
                </div>


                <div class="md:col-start-6 md:col-end-10">
                    <x-admin.notifications.notification_container
                        title="{{__('admin/dashboard.cards.notifications.title')}}"
                    />
                </div>


                <div class="md:col-start-1 md:col-end-6">
                    <x-admin.statistiques.statistiques_container
                        title="{{__('admin/dashboard.cards.statistics.title')}}"
                        route="#"
                        label="{{__('admin/dashboard.cards.statistics.label')}}"
                        title_button="{{__('admin/dashboard.cards.statistics.title_button')}}"
                        class="bg-blue-900 self-start text-white transition-transform duration-300 hover:scale-101 hover:bg-blue-600 w-1/1 inline-block"
                    />
                </div>

                <div class="md:col-start-6 md:col-end-10">
                    <x-admin.messages_dashboard.message_container
                        title="{{__('admin/dashboard.cards.messages.title')}}"
                        route="{!! route('messages.index') !!}"
                        label="{{__('admin/dashboard.cards.messages.label')}}"
                        title_button="{{__('admin/dashboard.cards.messages.title_button')}}"
                        class="bg-blue-900 self-start text-white transition-transform duration-300 hover:scale-101 hover:bg-blue-600 w-1/1 inline-block"
                    />
                </div>
            </div>
        </section>
    </div>

    @if($openMessage)
        <x-admin.modal.modal title="{{__('admin/dashboard.modal.title')}}">
            <div class="flex flex-col gap-6">
                <div class="flex items-baseline">
                    <dt class="text-sm font-medium pr-2.5">{{__('admin/dashboard.modal.fields.name')}}&nbsp;:</dt>
                    <dd wire:click="openModal('see_message', {{$message->id}})"
                        class="text-xs font-light">{!! $message->name !!}</dd>
                </div>

                <div class="flex items-baseline">
                    <dt class="text-sm font-medium pr-2.5">{{__('admin/dashboard.modal.fields.email')}}&nbsp;:</dt>
                    <dd class="text-xs font-light">{!! $message->email !!}</dd>
                </div>


                <div class="flex items-baseline">
                    <dt class="text-sm font-medium pr-2.5">{{__('admin/dashboard.modal.fields.object')}}&nbsp;:</dt>
                    <dd class="text-xs font-light">{!! $message->object !!}</dd>
                </div>

                <div class="flex items-baseline">
                    <dt class="text-sm font-medium pr-2.5">{{__('admin/dashboard.modal.fields.date')}}&nbsp;:</dt>
                    <dd class="text-xs font-light">{!! $message->date->translatedFormat('d/m/Y') !!}</dd>
                </div>

                <div class="flex flex-col items-baseline">
                    <dt class="text-sm font-medium pr-2.5">{{__('admin/dashboard.modal.fields.text')}}&nbsp;:</dt>
                    <dd class="text-xs font-light">{!! $message->text !!}</dd>
                </div>

            </div>

            <x-admin.button.button
                label="{{__('admin/dashboard.modal.buttons.reply_email')}}"
                title_button="{{__('admin/dashboard.modal.buttons.title_reply_email')}}"
                class="bg-blue-900 self-start text-white transition-transform duration-300 hover:scale-101 hover:bg-blue-600 inline-block"
                route_name="mailto:{!! $message->email !!}?subject=Hello&body=Bonjour!"
            />
        </x-admin.modal.modal>
    @endif

</main>

