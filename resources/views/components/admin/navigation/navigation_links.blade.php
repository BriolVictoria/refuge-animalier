@php
    $items = [
       ['icon'=>asset('assets/img/dashboard_icon.svg'),'icon_alt'=>'Image d‘un logo', 'list_class'=>'mb-10.5', 'label'=> __('admin/navigation.items.dashboard.label'), 'title' => __('admin/navigation.items.dashboard.title'), 'route_name' => route('dashboard'), 'links_class' => 'flex items-center text-sm font-normal mt-[6rem] lg:mt-12.5 transition-all duration-300 ease-in hover:bg-blue-200 hover:rounded-sm px-2 py-2'],
       ['icon'=>asset('assets/img/dog_icon.svg'),'icon_alt'=>'Image d‘un logo', 'list_class'=>'mb-10.5', 'label'=> __('admin/navigation.items.animals.label'), 'title' => __('admin/navigation.items.animals.title'), 'route_name' => route('animals.index'), 'links_class' => 'flex items-center text-sm font-normal transition-all duration-300 ease-in hover:bg-blue-200 hover:rounded-sm px-2 py-2'],
       ['icon'=>asset('assets/img/house_icon.svg'),'icon_alt'=>'Image d‘un logo', 'list_class'=>'mb-10.5', 'label'=> __('admin/navigation.items.adoptings.label'), 'title' => __('admin/navigation.items.adoptings.title'), 'route_name' => route('adoptings.index'), 'links_class' => 'flex items-center text-sm font-normal transition-all duration-300 ease-in hover:bg-blue-200 hover:rounded-sm px-2 py-2'],
       ['icon'=>asset('assets/img/person_icon.svg'),'icon_alt'=>'Image d‘un logo', 'list_class'=>'mb-10.5', 'label'=> __('admin/navigation.items.volunteers.label'), 'title' => __('admin/navigation.items.volunteers.title'), 'route_name' => route('volunteers.index'), 'links_class' => 'flex items-center text-sm font-normal transition-all duration-300 ease-in hover:bg-blue-200 hover:rounded-sm px-2 py-2'],
       ['icon'=>asset('assets/img/mail_icon.svg'),'icon_alt'=>'Image d‘un logo', 'list_class'=>'mb-10.5', 'label'=> __('admin/navigation.items.messages.label'), 'title' => __('admin/navigation.items.messages.title'), 'route_name' => route('messages.index'), 'links_class' => 'flex items-center text-sm font-normal transition-all duration-300 ease-in hover:bg-blue-200 hover:rounded-sm px-2 py-2'],
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
