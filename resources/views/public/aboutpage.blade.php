<x-public.app title="{{__('public/about.page_title')}}">
<main>
    <x-public.sections.text-media
        class="bg-green-50"
        :image_path="asset('assets/img/aboutpage_picture.png')"
        image_alt="{{__('public/about.sections.history.image_alt')}}"
        title="{{__('public/about.sections.history.title')}}"
        content="{{__('public/about.sections.history.content')}}"
        :have_button="true"
        btn_url="{!! route('public.contactpage') !!}"
        btn_title="{{__('public/about.sections.history.button.title')}}"
        btn_label="{{__('public/about.sections.history.button.label')}}"
        btn_class="bg-blue-900 text-white self-start transition-transform duration-300 hover:scale-105"
    />

    <x-public.sections.text-media
        :image_path="asset('assets/img/mission_image.png')"
        image_alt="{{__('public/about.sections.mission.image_alt')}}"
        title="{{__('public/about.sections.mission.title')}}"
        content="{{__('public/about.sections.mission.content')}}"
        :have_button="true"
        btn_url="{!! route('public.animals.index') !!}"
        btn_title="{{__('public/about.sections.mission.button.title')}}"
        btn_label="{{__('public/about.sections.mission.button.label')}}"
        btn_class="bg-blue-900 text-white self-start transition-transform duration-300 hover:scale-105"
    />

    <x-public.sections.section_card_skills
        title="{{__('public/about.values.title')}}"
    />

    <x-public.sections.text-media
        :image_path="asset('assets/img/team_image.png')"
        image_alt="{{__('public/about.sections.team.image_alt')}}"
        title="{{__('public/about.sections.team.title')}}"
        content="{{__('public/about.sections.team.content')}}"
        :have_button="false"
    />

    <x-public.sections.text-media
        :image_path="asset('assets/img/volunteer_image_about.png')"
        image_alt="{{__('public/about.sections.help.image_alt')}}"
        title="{{__('public/about.sections.help.title')}}"
        content="{{__('public/about.sections.help.content')}}"
        :have_button="true"
        btn_url="{!! route('public.volunteerpage') !!}"
        btn_title="{{__('public/about.sections.help.button.title')}}"
        btn_label="{{__('public/about.sections.help.button.label')}}"
        btn_class="bg-blue-900 text-white self-start transition-transform duration-300 hover:scale-105"
    />

</main>

</x-public.app>
