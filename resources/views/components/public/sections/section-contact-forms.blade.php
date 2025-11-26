@props([
    'title',
    'content',
    'sub_title',
    'btn_class',
    'btn_url',
    'btn_label',
    'btn_title',
    'coords' => [],
])

<section
    class="flex flex-col gap-6 md:flex-row-reverse  bg-[url('/public/assets/img/fond_contactpages.svg')] bg-cover bg-center bg-no-repeat">

    <aside class="flex flex-col gap-8">
        <div class="flex flex-col gap-3">
            <h2 class="text-xl font-medium">{!! $title !!}</h2>
            <p class="text-sm font-light">{!! $content !!}</p>
        </div>

        <div class="flex flex-col gap-3">
            <h3 class="text-sm font-medium">{!! $sub_title !!}</h3>
            <ul>
                @foreach($coords as $coord)
                    <li class="pb-2">
                        <a class="text-xs font-light" href="{!! $coord['href'] !!}" title="{!! $coord['title'] !!}">{!! $coord['label'] !!}</a>
                    </li>
                @endforeach
            </ul>
        </div>
    </aside>


</section>

