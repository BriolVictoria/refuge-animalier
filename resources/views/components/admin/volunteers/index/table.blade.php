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
            <x-admin.volunteers.index.thead/>
            <tbody>
            <x-admin.volunteers.index.tr/>
            </tbody>
        </table>

        <div
            class="2xl:hidden space-y-4 md:grid md:gap-4 md:grid-cols-2 lg:grid-cols-1 [@media(min-width:1170px)]:grid-cols-2">
            @for($i = 0; $i < 10; $i++)
                <div
                    class="relative border border-blue-100 rounded-xl shadow-md p-4 flex flex-col items-start space-y-2">
                    <div class="flex flex-col space-y-1">
                        <div class="flex items-baseline">
                            <dt class="text-sm font-medium pr-2.5">Nom&nbsp;:</dt>
                            <dd class="text-xs font-light">Ambre Flamant</dd>
                        </div>

                        <div class="flex items-baseline">
                            <dt class="text-sm font-medium pr-2.5">Email&nbsp;:</dt>
                            <dd class="text-xs font-light">ambre.flamant@gmail.com</dd>
                        </div>

                        <div class="flex items-baseline">
                            <dt class="text-sm font-medium pr-2.5">Téléphone&nbsp;:</dt>
                            <dd class="text-xs font-light">04 70.85.96.48.85</dd>
                        </div>

                    </div>
                    <div class="flex mt-7">
                        <img src="{!! asset('assets/img/mail_icon.svg') !!}" class="inline-block pr-2"
                             alt="Icon de poubelle">
                        <img src="{!! asset('assets/img/trash_icon.svg') !!}" class="inline-block"
                             alt="Icon de poubelle">
                    </div>

                </div>
            @endfor
        </div>
    </section>
</div>
