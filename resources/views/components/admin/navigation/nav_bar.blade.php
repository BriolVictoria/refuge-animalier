<div class="admin_nav_container px-[3.5rem] lg:px-4 flex flex-col justify-between py-7 lg:flex h-full">
    <x-admin.navigation.navigation_links/>

    <div class="lg:mt-auto">
        <div class="flex py-4 border-t border-t-blue-300 ">
            <a class="flex transition-all duration-300 hover:scale-101 hover:text-blue-800"
               href="{!! route('settings') !!}">
                <img
                    alt="Image de profil"
                    src="{{ auth()->user()->avatar ? asset('storage/' . auth()->user()->avatar) : asset('assets/img/profil_image.svg') }}"
                    class="aspect-square w-12 h-12 rounded-full object-cover object-center">
                <div class="flex flex-col px-3">
                    <span class="text-lg font-normal">{!! auth()->user()->name !!}</span>
                    <span class="text-xs font-light">{!! auth()->user()->email !!}</span>
                </div>
            </a>
        </div>
        <x-admin.logout.logout/>
    </div>


</div>
