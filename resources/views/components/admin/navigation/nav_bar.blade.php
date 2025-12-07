<div class="admin_nav_container px-[3.5rem] lg:px-4 flex flex-col justify-between py-7 lg:flex h-full">
    <x-admin.navigation.navigation_links/>

    <div class="lg:mt-auto">
        <div class="flex py-4 border-t border-t-blue-300 ">
            <img class="max-w-1/4" src="{!! asset('assets/img/profil_image.svg') !!}" alt="Image de profil">
            <a class="flex flex-col px-3">
                <span class="text-lg font-normal">John Doe</span>
                <span class="text-xs font-light">john.doe@gmail.com</span>
            </a>
        </div>
        <x-admin.button
            route_name="#"
            title="Se déconnecter"
            label="Déconnexion"
            class="bg-blue-900 text-white transition-transform duration-300 hover:scale-105 w-1/1 inline-block"/>
    </div>


</div>
