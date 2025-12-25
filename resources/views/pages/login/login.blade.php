<x-login.app title="Login">
    <main>
        <section class="w-full max-w-md mx-auto bg-white shadow-2xl rounded-sm flex flex-col gap-4">
            <img src="{!! asset('assets/img/logo_admin.svg') !!}" alt="Logo les pattes heureuses">
            <h1 class="text-sm font-medium text-blue-900">Connectez-vous pour continuer</h1>
            <x-login.form>

                <x-login.input
                    field_name="email"
                    label="Adresse email"
                    type="email"
                    placeholder="ambre.smith@gmail.com"
                />

                <x-login.input
                    field_name="password"
                    label="Mot de passe"
                    type="password"
                    placeholder="*********"
                />
                <a class="text-xs font-light text-blue-400" href="#">Mot de passe oublié?</a>
                <x-login.button
                    label="Se connecter"
                    title_button="Se connecter"
                />
            </x-login.form>
        </section>
    </main>
</x-login.app>
