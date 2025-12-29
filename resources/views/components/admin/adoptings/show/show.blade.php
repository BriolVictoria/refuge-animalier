@props([
    'title_sronly',
    'title1',
    'definitions',
    'buttons',
])

<section class="w-full flex flex-col gap-6">
    <h2 class="sr-only">{!! $title_sronly !!}</h2>

    <div
        class="relative border border-blue-100 rounded-2xl shadow-md p-4 flex flex-col gap-6 md:grid md:grid-cols-3 md:items-center">

        <h3 class="text-xl font-medium text-blue-900 md:col-span-2">{!! $title1 !!}</h3>



        <x-admin.adoptings.show.definitions_adopting/>

        <div class="flex flex-col gap-3 md:col-span-3 lg:flex-row lg:justify-end">
            <x-admin.volunteers.show.buttons_show/>
            <x-admin.button
                wire:click.prevent="openModal({{ $this->adopting->id }})"
                route_name="#"
                label="{{__('admin/adoptings.delete_modal.delete_button')}}"
                title_button="{{__('admin/adoptings.delete_modal.delete_button')}}"
                class="border border-blue-900 self-start text-blue-900 transition-all duration-300 hover:scale-101 hover:text-blue-600 hover:border-blue-600 w-full 2xl:row-3"
            />
        </div>


    </div>

</section>
