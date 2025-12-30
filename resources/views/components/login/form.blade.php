<form class="flex flex-col gap-6"
      method="POST" action="{{ route('login.store') }}">
    @csrf
    <p class="text-red-600 text-xs mb-3">{{ __('auth.required_fields')}}</p>
    {!! $slot !!}
</form>
