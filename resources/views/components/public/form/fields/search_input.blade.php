<form method="GET" action="{{ route('public.animals.index', ['locale' => app()->getLocale()]) }}" class="w-full">
    <input
        type="search"
        name="search"
        value="{{ request('search') }}"
        placeholder="{{ __('public/animals.list.search_placeholder') }}"
        class="w-full text-xs text-blue-900 font-medium py-3 px-2.5 border border-blue-400 rounded-sm"
    >

    <button type="submit" class="hidden">Rechercher</button>
</form>


