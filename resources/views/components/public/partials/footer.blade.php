@php
    $navigations = [
           ['list_class'=>'pb-3.5', 'label'=> __('public/footer.navigation.home.label'), 'title' => __('public/footer.navigation.home.title'), 'route_name' => route('public.homepage', ['locale' => app()->getLocale()]), 'links_class' => 'text-xs font-normal pt-6 inline-block transition-transform duration-300 hover:scale-105 hover:text-blue-800'],
           ['list_class'=>'pb-3.5', 'label'=> __('public/footer.navigation.about.label'), 'title' => __('public/footer.navigation.about.title'), 'route_name' => route('public.aboutpage', ['locale' => app()->getLocale()]), 'links_class' => 'text-xs font-normal inline-block transition-transform duration-300 hover:scale-105 hover:text-blue-800'],
           ['list_class'=>'pb-3.5', 'label'=> __('public/footer.navigation.animals.label'), 'title' => __('public/footer.navigation.animals.title'), 'route_name' => route('public.animals.index', ['locale' => app()->getLocale()]), 'links_class' => 'text-xs font-normal inline-block transition-transform duration-300 hover:scale-105 hover:text-blue-800'],
           ['list_class'=>'pb-3.5', 'label'=> __('public/footer.navigation.contact.label'), 'title' => __('public/footer.navigation.contact.title'), 'route_name' => route('public.contactpage', ['locale' => app()->getLocale()]), 'links_class' => 'text-xs font-normal inline-block transition-transform duration-300 hover:scale-105 hover:text-blue-800'],
       ];

    $contact_details = [
           ['list_class'=>'pb-3.5', 'label'=> __('public/footer.contact.phone.label'), 'title' =>__('public/footer.contact.phone.title'), 'route_name' => 'tel:0472569142', 'links_class' => 'text-xs font-normal pt-6 inline-block transition-transform duration-300 hover:scale-105 hover:text-blue-800'],
           ['list_class'=>'pb-3.5', 'label'=> __('public/footer.contact.email.label'), 'title' => __('public/footer.contact.email.title'), 'route_name' => 'mailto:contact@lespattesheureuses.be', 'links_class' => 'text-xs font-normal inline-block transition-transform duration-300 hover:scale-105 hover:text-blue-800'],
           ['list_class'=>'pb-3.5', 'label'=> __('public/footer.contact.address.label'), 'title' => __('public/footer.contact.address.title'), 'route_name' => 'https://www.google.com/maps?q=12+Rue+des+Fleurs,+69000+Heusy,+Belgique', 'links_class' => 'text-xs font-normal inline-block transition-transform duration-300 hover:scale-105 hover:text-blue-800'],
    ];

    $legal_notices = [
           ['list_class'=>'pb-3.5', 'label'=> __('public/footer.legal.terms.label'), 'title' => __('public/footer.legal.terms.title'), 'route_name' => '#', 'links_class' => 'text-xs font-normal pt-6 inline-block transition-transform duration-300 hover:scale-105 hover:text-blue-800'],
           ['list_class'=>'pb-3.5', 'label'=> __('public/footer.legal.privacy.label'), 'title' => __('public/footer.legal.privacy.title'), 'route_name' => '#', 'links_class' => 'text-xs font-normal inline-block transition-transform duration-300 hover:scale-105 hover:text-blue-800'],
    ];


@endphp

<footer class="bg-white shadow-[var(--shadow-xl)] py-11.5 px-[1.25rem] lg:px-[6.25rem]">

    <h2 class="sr-only">{{__('public/footer.title')}}</h2>
    <div class="flex flex-col lg:items-center min-[1600px]:flex-row-reverse justify-center">
        <div class="lg:flex flex-row gap-[4.5rem] justify-end">
            <nav>
                <h3 class="text-lg font-medium">{{__('public/footer.navigation.sr_only')}}</h3>
                <ul>
                    @foreach($navigations as $navigation)
                        <x-public.navigation.navigation_link
                            :list_class="$navigation['list_class']"
                            :label="$navigation['label']"
                            :title="$navigation['title']"
                            :route_name="$navigation['route_name']"
                            :links_class="$navigation['links_class']"/>

                    @endforeach
                </ul>
            </nav>

            <div>
                <h3 class="text-lg font-medium pt-10.5 lg:pt-0">{{__('public/footer.contact.title')}}</h3>
                <ul>
                    @foreach($contact_details as $contact_detail)

                        <x-public.navigation.navigation_link
                            :list_class="$contact_detail['list_class']"
                            :label="$contact_detail['label']"
                            :title="$contact_detail['title']"
                            :route_name="$contact_detail['route_name']"
                            :links_class="$contact_detail['links_class']"/>

                    @endforeach
                </ul>
            </div>


            <div>
                <h3 class="text-lg font-medium pt-10.5 lg:pt-0">{{__('public/footer.legal.terms.title')}}</h3>

                <ul>
                    @foreach($legal_notices as $legal_notice)

                        <x-public.navigation.navigation_link
                            :list_class="$legal_notice['list_class']"
                            :label="$legal_notice['label']"
                            :title="$legal_notice['title']"
                            :route_name="$contact_detail['route_name']"

                            :links_class="$legal_notice['links_class']"/>

                    @endforeach
                </ul>
            </div>
        </div>


        <div class="flex flex-col pt-10.5 lg:items-center min-[1600px]:pr-[8.375rem]">
            <a href="{!! route('public.homepage', ['locale' => app()->getLocale()]) !!}" title="{{__('public/footer.navigation.home.title')}}">
                <img src="{!! asset("assets/img/logo_admin.svg") !!}" width="300"
                     alt="{{__('public/footer.image_alt')}}">
            </a>
            <p class="pt-3">{{__('public/footer.copyright')}}</p>
        </div>
    </div>

</footer>
