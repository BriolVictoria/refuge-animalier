<x-public.app title="{{__('public/animals.page_title')}}">

    <main>
        <x-public.sections.text-media
            class="bg-green-50"
            :image_path="asset('assets/img/animalspage_picture.png')"
            image_alt="{{__('public/animals.hero.image_alt')}}"
            title="{{__('public/animals.hero.title')}}"
            content="{{__('public/animals.hero.content')}}"
            :have_button="true"
            btn_url="{!! route('public.animals.index', ['locale' => app()->getLocale()]) !!}"
            btn_title="{{__('public/animals.hero.button.title')}}"
            btn_label="{{__('public/animals.hero.button.label')}}"
            btn_class="bg-blue-900 text-white self-start transition-transform duration-300 hover:scale-105"
        />

        <x-public.sections.section-animals-card
            title="{{__('public/animals.list.title')}}"
            :animals="$animals"
        />

    </main>
    <div class="px-11.5">
        {{ $animals->links() }}
    </div>

</x-public.app>
