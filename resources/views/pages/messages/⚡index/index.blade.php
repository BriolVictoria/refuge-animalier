<main class="w-full">
    @if (session()->has('success'))
        <div
            x-data="{ show: true }"
            x-init="setTimeout(() => show = false, 2500)"
            x-show="show"
            x-transition
            class="fixed top-10 right-10 z-50
               px-4 py-3 rounded-lg
               bg-green-600 text-white text-md shadow-md"
        >
            {{ session('success') }}
        </div>
    @endif
    <x-admin.messages.index.table
        title_sronly="{{ __('admin/messages.messages.title_sronly')}}"
        title="{{ __('admin/messages.messages.title')}}"
        label="{{ __('admin/messages.messages.label')}}"
        title_button="{{ __('admin/messages.messages.title_button')}}"
        route_name="mailto:exemple@email.com?subject=Hello&body=Bonjour!"
        class="bg-blue-900 self-start text-white transition-transform duration-300 hover:scale-101 hover:bg-blue-600 inline-block"
        search_placeholder="{{ __('admin/messages.messages.search_placeholder')}}"

    />

    @if($openMessage)
        <x-admin.modal.modal
            title="{{ __('admin/messages.show_modal.title')}}"
        >
            <div class="flex flex-col gap-6">
                <div class="flex items-baseline">
                    <dt class="text-sm font-medium pr-2.5">{{ __('admin/messages.show_modal.fields.name')}}&nbsp;:</dt>
                    <dd wire:click="openModal('see_message', {{$message->id}})"
                        class="text-xs font-light">{!! $message->name !!}</dd>
                </div>

                <div class="flex items-baseline">
                    <dt class="text-sm font-medium pr-2.5">{{ __('admin/messages.show_modal.fields.email')}}&nbsp;:</dt>
                    <dd class="text-xs font-light break-all max-w-full">{!! $message->email !!}</dd>
                </div>


                <div class="flex items-baseline">
                    <dt class="text-sm font-medium pr-2.5">{{ __('admin/messages.show_modal.fields.object')}}&nbsp;:</dt>
                    <dd class="text-xs font-light">{!! $message->object !!}</dd>
                </div>

                <div class="flex items-baseline">
                    <dt class="text-sm font-medium pr-2.5">{{ __('admin/messages.show_modal.fields.date')}}&nbsp;:</dt>
                    <dd class="text-xs font-light">{!! $message->date->translatedFormat('d/m/Y') !!}</dd>
                </div>

                <div class="flex flex-col items-baseline">
                    <dt class="text-sm font-medium pr-2.5">{{ __('admin/messages.show_modal.fields.text')}}&nbsp;:</dt>
                    <dd class="text-xs font-light">{!! $message->text !!}</dd>
                </div>

            </div>

            <x-admin.button.button
                label="{{ __('admin/messages.show_modal.reply_button')}}"
                title_button="{{ __('admin/messages.show_modal.reply_button')}}"
                class="bg-blue-900 self-start text-white transition-transform duration-300 hover:scale-101 hover:bg-blue-600 inline-block"
                route_name="mailto:{!! $message->email !!}?subject=Hello&body=Bonjour!"
            />
        </x-admin.modal.modal>
    @endif

        @if($openModalForDelete)
            <x-admin.modal.modal
                title="{{ __('admin/messages.delete_modal.title')}}"
            >

                <p class="text-sm text-gray-600">
                    {{ __('admin/messages.delete_modal.description')}}
                </p>


                <div class="flex flex-col justify-center gap-4 pt-4">

                    <x-admin.button.delete_button
                        wire_delete="deleteMessage({{ $messageToDelete }})"
                        delete_message="{{ __('admin/messages.delete_modal.delete_button')}}"
                        class="px-6 py-2 bg-red-600 text-white text-lg rounded-lg
                           transition-all duration-300 hover:bg-red-700 hover:scale-105"
                    >
                        {{ __('admin/messages.buttons.delete')}}
                    </x-admin.button.delete_button>

                    <x-admin.button.button
                        wire:click="closeModalDelete"
                        route_name="#"
                        title_button="{{ __('admin/messages.delete_modal.cancel_button')}}"
                        label="{{ __('admin/messages.buttons.cancel')}}"
                        class="px-6 py-2 border border-gray-300 text-gray-600 rounded-lg
                           transition-all duration-300 hover:bg-gray-100"
                    />


                </div>

            </x-admin.modal.modal>
        @endif

</main>
