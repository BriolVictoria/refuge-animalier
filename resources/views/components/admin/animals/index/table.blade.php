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
            <x-admin.animals.index.thead/>
            <tbody>
            <x-admin.animals.index.tr/>
            </tbody>
        </table>

        <div
            class="2xl:hidden space-y-4 md:grid md:gap-4 md:grid-cols-2 lg:grid-cols-1 [@media(min-width:1170px)]:grid-cols-2">
            @for($i = 0; $i < 10; $i++)
                <div
                    class="relative border border-blue-100 rounded-xl shadow-md p-4 flex flex-col items-start space-y-2">
                    <img alt="Image d'un chien" class="w-24 h-24 rounded-lg"
                         src="{!! asset('assets/img/image_table.svg') !!}">
                    <div class="flex flex-col space-y-1">
                        <div class="flex items-baseline">
                            <dt class="text-sm font-medium pr-2.5">Nom&nbsp;:</dt>
                            <dd class="text-xs font-light">Pedro</dd>
                        </div>

                        <div class="flex items-baseline">
                            <dt class="text-sm font-medium pr-2.5">Type&nbsp;:</dt>
                            <dd class="text-xs font-light">Chien</dd>
                        </div>

                        <div class="flex items-baseline">
                            <dt class="text-sm font-medium pr-2.5">Mise à jour&nbsp;:</dt>
                            <dd class="text-xs font-light">24/06/2025</dd>
                        </div>
                        <span class="bg-orange-300 py-1 px-3 rounded-2xl inline-block absolute top-3 right-3">En attente d'adoption</span>


                    </div>
                    <img src="{!! asset('assets/img/trash_icon.svg') !!}" class="mt-2" alt="Icon de poubelle">
                </div>
            @endfor
        </div>

    </section>
</div>
