@php
    $items = [
       ['list_class'=>'mb-[2.625rem]', 'label'=> 'Accueil', 'title' => 'Vers la page Accueil', 'route_name' => '#', 'links_class' => 'text-lg font-medium mt-[4.5rem] inline-block'],
       ['list_class'=>'mb-[2.625rem]', 'label'=> 'À propos', 'title' => 'Vers la page À propos', 'route_name' => '#', 'links_class' => 'text-lg font-medium'],
       ['list_class'=>'mb-[2.625rem]', 'label'=> 'Nos animaux', 'title' => 'Vers la page Nos animaux', 'route_name' => '#', 'links_class' => 'text-lg font-medium'],
       ['list_class'=>'mb-[2.625rem]', 'label'=> 'Devenir bénévole', 'title' => 'Vers la page Devenir bénévole', 'route_name' => '#', 'links_class' => 'text-lg font-medium'],
       ['list_class'=>'mb-[2.625rem]', 'label'=> 'Contactez-nous', 'title' => 'Vers la page Contactez-nous', 'route_name' => '#', 'links_class' => 'rounded-sm inline-block border-blue-900 border-[0.09375rem] text-sm font-medium pr-[1.875rem] pl-[1.875rem] pt-[0.5rem] pb-[0.5rem] mb-[7.625rem] text-blue-900'],
/*VOIR POUR LE PADDING ET LE MARGIN*/
   ];
@endphp

<ul class="nav_container flex flex-col items-center">

    @foreach($items as $item)

        <x-public.navigation.navigation_link
            :list_class="$item['list_class']"
            :label="$item['label']"
            :title="$item['title']"
            :links_class="$item['links_class']"/>

    @endforeach

    <a href="{!! route('public.homepage') !!}" title="Vers la page Accueil">
        <img src="{!! asset("assets/img/logo_bg_phone.svg") !!}" alt="Logo les pattes heureuses">
    </a>

</ul>


