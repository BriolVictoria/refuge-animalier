@php
    $items = [
       ['icon'=>asset('assets/img/dashboard_icon.svg'),'icon_alt'=>'Image d‘un logo', 'list_class'=>'mb-10.5', 'label'=> 'Tableau de bord', 'title' => 'Vers le Tableau de bord', 'route_name' => route('dashboard'), 'links_class' => 'flex flex-row text-sm font-normal mt-[6rem] lg:mt-12.5 transition-transform duration-300 ease-in-out hover:scale-105 hover:text-blue-800 lg:mt-[7rem]'],
       ['icon'=>asset('assets/img/dog_icon.svg'),'icon_alt'=>'Image d‘un logo', 'list_class'=>'mb-10.5', 'label'=> 'Animaux', 'title' => 'Vers les Animaux', 'route_name' => '#', 'links_class' => 'flex flex-row text-sm font-normal transition-transform duration-300 ease-in-out hover:scale-105 hover:text-blue-800'],
       ['icon'=>asset('assets/img/house_icon.svg'),'icon_alt'=>'Image d‘un logo', 'list_class'=>'mb-10.5', 'label'=> 'Demandes d‘adoption', 'title' => 'Vers les Demandes d‘adoption', 'route_name' => '#', 'links_class' => 'flex flex-row text-sm font-normal transition-transform duration-300 ease-in-out hover:scale-105 hover:text-blue-800'],
       ['icon'=>asset('assets/img/person_icon.svg'),'icon_alt'=>'Image d‘un logo', 'list_class'=>'mb-10.5', 'label'=> 'Bénévoles', 'title' => 'Vers les Bénévoles', 'route_name' => '#', 'links_class' => 'flex flex-row text-sm font-normal transition-transform duration-300 ease-in-out hover:scale-105 hover:text-blue-800'],
       ['icon'=>asset('assets/img/mail_icon.svg'),'icon_alt'=>'Image d‘un logo', 'list_class'=>'mb-10.5', 'label'=> 'Messages', 'title' => 'Vers les Messages', 'route_name' => '#', 'links_class' => 'flex flex-row text-sm font-normal transition-transform duration-300 ease-in-out hover:scale-105 hover:text-blue-800'],
   ];
@endphp


<ul class="flex flex-col">

    @foreach($items as $item)

        <x-admin.navigation.navigation_link
            :icon="$item['icon']"
            :icon_alt="$item['icon_alt']"
            :list_class="$item['list_class']"
            :label="$item['label']"
            :title="$item['title']"
            :route_name="$item['route_name']"
            :links_class="$item['links_class']"/>

    @endforeach

</ul>
