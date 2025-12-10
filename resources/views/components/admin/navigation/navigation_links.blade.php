@php
    $items = [
       ['icon'=>asset('assets/img/dashboard_icon.svg'),'icon_alt'=>'Image d‘un logo', 'list_class'=>'mb-10.5', 'label'=> 'Tableau de bord', 'title' => 'Vers le Tableau de bord', 'route_name' => route('dashboard'), 'links_class' => 'flex items-center text-sm font-normal mt-[6rem] lg:mt-12.5 transition-all duration-300 ease-in hover:bg-blue-200 hover:rounded-sm px-2 py-2'],
       ['icon'=>asset('assets/img/dog_icon.svg'),'icon_alt'=>'Image d‘un logo', 'list_class'=>'mb-10.5', 'label'=> 'Animaux', 'title' => 'Vers les Animaux', 'route_name' => route('animals.index'), 'links_class' => 'flex items-center text-sm font-normal transition-all duration-300 ease-in hover:bg-blue-200 hover:rounded-sm px-2 py-2'],
       ['icon'=>asset('assets/img/house_icon.svg'),'icon_alt'=>'Image d‘un logo', 'list_class'=>'mb-10.5', 'label'=> 'Demandes d‘adoption', 'title' => 'Vers les Demandes d‘adoption', 'route_name' => route('adoptings.index'), 'links_class' => 'flex items-center text-sm font-normal transition-all duration-300 ease-in hover:bg-blue-200 hover:rounded-sm px-2 py-2'],
       ['icon'=>asset('assets/img/person_icon.svg'),'icon_alt'=>'Image d‘un logo', 'list_class'=>'mb-10.5', 'label'=> 'Bénévoles', 'title' => 'Vers les Bénévoles', 'route_name' => route('volunteers.index'), 'links_class' => 'flex items-center text-sm font-normal transition-all duration-300 ease-in hover:bg-blue-200 hover:rounded-sm px-2 py-2'],
       ['icon'=>asset('assets/img/mail_icon.svg'),'icon_alt'=>'Image d‘un logo', 'list_class'=>'mb-10.5', 'label'=> 'Messages', 'title' => 'Vers les Messages', 'route_name' => route('messages.index'), 'links_class' => 'flex items-center text-sm font-normal transition-all duration-300 ease-in hover:bg-blue-200 hover:rounded-sm px-2 py-2'],
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
