<form action="{{ route('logout') }}" method="post">
    @csrf
    <button type="submit" class="px-6 py-2.5 text-center text-sm font-medium rounded-sm bg-blue-900 text-white transition-transform duration-300 hover:scale-101 hover:bg-blue-600 w-1/1 inline-block">{{__('auth.logout_title')}}</button>
</form>
