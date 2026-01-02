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
    <div>
        <div class="flex items-center gap-2 border-b border-blue-900">
            <a title="{{__('admin/volunteers.ariane.volunteer_index')}}" href="{!! route('volunteers.index', ['locale' => app()->getLocale()]) !!}"
               class="py-4 px-8 text-xs text-blue-900 font-light md:text-lg ">{{__('admin/volunteers.volunteers.title')}}</a>
            <img src="{!! asset('assets/img/arrow_arianne.svg') !!}" class="w-4 h-4" alt="{{__('admin/volunteers.volunteers.image_alt')}}">
            <h1 class="py-4 px-8 text-sm text-blue-900 font-semibold md:text-xl">{{__('admin/volunteers.ariane.volunteer_show', ['name' => $volunteer->first_name])}}</h1>
        </div>

        <x-admin.volunteers.show
            title_sronly="{{__('admin/volunteers.ariane.volunteer_show', ['name' => $volunteer->first_name])}}"
            title1="{!! $volunteer->first_name !!}"
        />


    </div>
        @if($openModalForDelete)
            <x-admin.modal.modal
                title="{{__('admin/volunteers.delete_modal.title')}}"
            >

                <p class="text-sm text-gray-600">
                    {{__('admin/volunteers.delete_modal.description')}}
                </p>


                <div class="flex flex-col justify-center gap-4 pt-4">

                    <x-admin.button.delete_button
                        wire_delete="deleteVolunteer({{ $volunteerToDelete }})"
                        delete_message="{{__('admin/volunteers.delete_modal.delete_button')}}"
                        class="px-6 py-2 bg-red-600 text-white text-lg rounded-lg
                           transition-all duration-300 hover:bg-red-700 hover:scale-105"
                    >
                        {{__('admin/volunteers.buttons.delete')}}
                    </x-admin.button.delete_button>

                    <x-admin.button.button
                        wire:click="closeModal"
                        route_name="#"
                        title_button="{{__('admin/volunteers.delete_modal.cancel_button')}}"
                        label="{{__('admin/volunteers.buttons.cancel')}}"
                        class="px-6 py-2 border border-gray-300 text-gray-600 rounded-lg
                           transition-all duration-300 hover:bg-gray-100"
                    />


                </div>

            </x-admin.modal.modal>
        @endif
</main>
