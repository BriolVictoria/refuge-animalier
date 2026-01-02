@php
    $items = [
       ['icon'=>asset('assets/img/dashboard_icon.svg'),'icon_alt'=> __('admin/navigation.icons_alt.dashboard'), 'list_class'=>'mb-10.5', 'label'=> __('admin/navigation.items.dashboard.label'), 'title' => __('admin/navigation.items.dashboard.title'), 'route_name' => route('dashboard', ['locale' => app()->getLocale()]), 'links_class' => 'flex items-center text-sm font-normal mt-[6rem] lg:mt-12.5 transition-all duration-300 ease-in hover:bg-blue-200 hover:rounded-sm px-2 py-2'],
       ['icon'=>asset('assets/img/dog_icon.svg'),'icon_alt'=>__('admin/navigation.icons_alt.animal'), 'list_class'=>'mb-10.5', 'label'=> __('admin/navigation.items.animals.label'), 'title' => __('admin/navigation.items.animals.title'), 'route_name' => route('animals.index', ['locale' => app()->getLocale()]), 'links_class' => 'flex items-center text-sm font-normal transition-all duration-300 ease-in hover:bg-blue-200 hover:rounded-sm px-2 py-2'],
       ['icon'=>asset('assets/img/house_icon.svg'),'icon_alt'=>__('admin/navigation.icons_alt.adopting'), 'list_class'=>'mb-10.5', 'label'=> __('admin/navigation.items.adoptings.label'), 'title' => __('admin/navigation.items.adoptings.title'), 'route_name' => route('adoptings.index', ['locale' => app()->getLocale()]), 'links_class' => 'flex items-center text-sm font-normal transition-all duration-300 ease-in hover:bg-blue-200 hover:rounded-sm px-2 py-2'],
       ['icon'=>asset('assets/img/person_icon.svg'),'icon_alt'=>__('admin/navigation.icons_alt.volunteer'), 'list_class'=>'mb-10.5', 'label'=> __('admin/navigation.items.volunteers.label'), 'title' => __('admin/navigation.items.volunteers.title'), 'route_name' => route('volunteers.index', ['locale' => app()->getLocale()]), 'links_class' => 'flex items-center text-sm font-normal transition-all duration-300 ease-in hover:bg-blue-200 hover:rounded-sm px-2 py-2'],
       ['icon'=>asset('assets/img/mail_icon.svg'),'icon_alt'=>__('admin/navigation.icons_alt.message'), 'list_class'=>'mb-10.5', 'label'=> __('admin/navigation.items.messages.label'), 'title' => __('admin/navigation.items.messages.title'), 'route_name' => route('messages.index', ['locale' => app()->getLocale()]), 'links_class' => 'flex items-center text-sm font-normal transition-all duration-300 ease-in hover:bg-blue-200 hover:rounded-sm px-2 py-2'],
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
