@props([
    'title',
    'title_sronly',
    'route_name',
    'title_button',
    'label',
    'class',
    'search_placeholder',
])

<div>
    <h1 class="py-4 px-8 text-xl text-blue-900 font-semibold border-b border-b-blue-900 w-1/1">{!! $title !!}</h1>
    <section>

        <x-admin.table.header
            title_sronly="{!! $title_sronly !!}"
            route_name="{!! $route_name !!}"
            title_button="{!! $title_button !!}"
            label="{!! $label !!}"
            class="{!! $class !!}"
            search_placeholder="{!! $search_placeholder !!}"
        />

        <table class="w-full overflow-hidden rounded-sm hidden 2xl:table">
            <x-admin.messages.index.thead/>
            <tbody>
            <x-admin.messages.index.tr/>
            </tbody>
        </table>

        <div
            class="2xl:hidden space-y-4 md:grid md:gap-4 md:grid-cols-2 lg:grid-cols-1 [@media(min-width:1170px)]:grid-cols-2">
            @for($i = 0; $i < 10; $i++)
                <div
                    class="relative border border-blue-100 rounded-xl shadow-md p-4 flex flex-col items-start space-y-2">
                    <div class="flex flex-col space-y-1">
                        <div class="flex flex-col items-baseline">
                            <dt class="text-sm font-medium pr-2.5">Nom&nbsp;:</dt>
                            <dd wire:click="openModal('see_message')" class="text-xs font-light">Simon Alvarez</dd>
                        </div>

                        <div class="flex flex-col items-baseline">
                            <dt class="text-sm font-medium pr-2.5">Email&nbsp;:</dt>
                            <dd class="text-xs font-light">simon.alvarez@gmail.com</dd>
                        </div>

                        <div class="flex flex-col items-baseline">
                            <dt class="text-sm font-medium pr-2.5">Objet&nbsp;:</dt>
                            <dd class="text-xs font-light">Avez vous des nouvelles de Sol</dd>
                        </div>

                        <div class="flex flex-col items-baseline">
                            <dt class="text-sm font-medium pr-2.5">Date&nbsp;:</dt>
                            <dd class="text-xs font-light">24/06/2025</dd>
                        </div>
                        <span class="bg-red-100 py-1 px-3 rounded-2xl inline-block absolute top-3 right-3">Non-lu</span>


                    </div>
                    <a title="Supprimer le message" href="#" class="inline-block pr-2 transition-all duration-300 hover:scale-105">
                        <svg width="24" height="27" viewBox="0 0 24 27" xmlns="http://www.w3.org/2000/svg">
                            <path d="M9.375 11.875V19.375" stroke="#26486C" stroke-width="1.25" stroke-linecap="round" stroke-linejoin="round"/>
                            <path d="M14.375 11.875V19.375" stroke="#26486C" stroke-width="1.25" stroke-linecap="round" stroke-linejoin="round"/>
                            <path d="M20.625 5.625V23.125C20.625 23.788 20.3616 24.4239 19.8928 24.8928C19.4239 25.3616 18.788 25.625 18.125 25.625H5.625C4.96196 25.625 4.32607 25.3616 3.85723 24.8928C3.38839 24.4239 3.125 23.788 3.125 23.125V5.625" stroke="#26486C" stroke-width="1.25" stroke-linecap="round" stroke-linejoin="round"/>
                            <path d="M0.625 5.625H23.125" stroke="#26486C" stroke-width="1.25" stroke-linecap="round" stroke-linejoin="round"/>
                            <path d="M6.875 5.625V3.125C6.875 2.46196 7.13839 1.82607 7.60723 1.35723C8.07607 0.888392 8.71196 0.625 9.375 0.625H14.375C15.038 0.625 15.6739 0.888392 16.1428 1.35723C16.6116 1.82607 16.875 2.46196 16.875 3.125V5.625" stroke="#26486C" stroke-width="1.25" stroke-linecap="round" stroke-linejoin="round"/>
                        </svg>


                    </a>
                </div>
            @endfor
        </div>
    </section>
</div>
