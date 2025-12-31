<x-login.app title="Login">
    <main>
        <section class="w-full max-w-md mx-auto bg-white shadow-2xl rounded-sm flex flex-col gap-4">
            <img src="{!! asset('assets/img/logo_admin.svg') !!}" alt="{{__('auth.logo_alt')}}">
            <h1 class="text-sm font-medium text-blue-900">{{ __('auth.title')}}</h1>
            <x-login.form>

                <x-login.input
                    field_name="email"
                    label="{{ __('auth.fields.email')}}"
                    type="email"
                    placeholder="{{ __('auth.placeholder.email')}}"
                />

                <x-login.input
                    field_name="password"
                    label="{{ __('auth.fields.password')}}"
                    type="password"
                    placeholder="{{ __('auth.placeholder.password')}}"
                />
                <a class="text-xs font-light text-blue-400" href="#">{{ __('auth.forgot_password')}}</a>
                <x-login.button
                    label="{{ __('auth.buttons.login')}}"
                    title_button="{{ __('auth.buttons.login')}}"
                />
            </x-login.form>
        </section>
    </main>
</x-login.app>
