@php

    $notifications = [
      ['notification_text' => 'La demande d’adoption pour Luna à été accepté.', 'route' => asset('assets/img/mail_icon.svg'), 'image_alt' => 'Icone d‘une envelope'],
      ['notification_text' => 'La demande d’adoption pour Sol à été accepté.', 'route' => asset('assets/img/mail_icon.svg'), 'image_alt' => 'Icone d‘une envelope'],
      ['notification_text' => 'Est ce que vous avez reçu ma demande.', 'route' => asset('assets/img/mail_icon.svg'), 'image_alt' => 'Icone d‘une envelope'],
      ['notification_text' => 'J‘aimerais bien rencontrer Pedro', 'route' => asset('assets/img/mail_icon.svg'), 'image_alt' => 'Icone d‘une envelope'],
      ['notification_text' => 'La demande d’adoption pour Pascal à été accepté.', 'route' => asset('assets/img/mail_icon.svg'), 'image_alt' => 'Icone d‘une envelope'],
      ['notification_text' => 'La demande d’adoption pour Somon à été accepté.', 'route' => asset('assets/img/mail_icon.svg'), 'image_alt' => 'Icone d‘une envelope'],
    ];

    $statistiques = [
      ['route' => asset('assets/img/paw_icon.svg'), 'alt' => 'Icon de pâttes', 'content' => 'Animaux dans le refuge', 'number' => '24'],
      ['route' => asset('assets/img/file_icon.svg'), 'alt' => 'Icon de fichier', 'content' => 'Adoptions validé ce mois-ci', 'number' => '5'],
      ['route' => asset('assets/img/house_icon.svg'), 'alt' => 'Icon de maison avec un coeur', 'content' => 'Demandes d’adoption en attentes', 'number' => '2'],
      ['route' => asset('assets/img/mail_icon.svg'), 'alt' => 'Icon de mail', 'content' => 'Message non-lus', 'number' => '5'],
    ];

     $messages = [
      ['route' => asset('assets/img/profil_image.svg'), 'alt' => 'Icon d‘image de profil', 'name' => 'Ambre Smith', 'content' => 'Je n’ai pas encore eu de nouvelles pour Sol.'],
      ['route' => asset('assets/img/profil_image.svg'), 'alt' => 'Icon d‘image de profil', 'name' => 'Lorian Flamant', 'content' => 'Avez-vous des nouvelles de Pedro ?'],
      ['route' => asset('assets/img/profil_image.svg'), 'alt' => 'Icon d‘image de profil', 'name' => 'Simon Balsanno', 'content' => 'Est il possible d’avoir un RDV pour Luna ?'],
      ['route' => asset('assets/img/profil_image.svg'), 'alt' => 'Icon d‘image de profil', 'name' => 'Cuisine Dovis', 'content' => 'Je suis intéressé par Bunny'],
    ];





@endphp

<main class="w-full">
    <div>
        <h1 class="py-4 px-8 text-xl text-blue-900 font-semibold border-b border-b-blue-900 w-1/1">Tableau de bord</h1>
        <section>
            <h2 class="sr-only">Tableau de bord</h2>
            <div class="flex flex-col gap-6 md:grid md:grid-cols-9 md:gap-6 lg:flex 2xl:grid 2xl:grid-cols-9">
                <div class="md:col-start-1 md:col-end-6">
                    <x-admin.definitions.definition
                        title="Demandes d'adoptions"
                    />
                </div>


                <div class="md:col-start-6 md:col-end-10">
                    <x-admin.notifications.notification_container
                        title="Notifications récentes"
                        :notifications="$notifications"

                    />
                </div>


                <div class="md:col-start-1 md:col-end-6">
                    <x-admin.statistiques.statistiques_container
                        title="Statistiques rapide"
                        :statistiques="$statistiques"
                        route="#"
                        label="Exporter le PDF"
                        title="Exporter le PDF"
                        class="bg-blue-900 self-start text-white transition-transform duration-300 hover:scale-105 w-1/1 inline-block"
                    />
                </div>

                <div class="md:col-start-6 md:col-end-10">
                    <x-admin.messages.message_container
                        title="Messages récent"
                        :messages="$messages"
                        route="#"
                        label="Voir tous les messages"
                        title="Voir tous les messages"
                        class="bg-blue-900 self-start text-white transition-transform duration-300 hover:scale-105 w-1/1 inline-block"
                    />
                </div>


            </div>


        </section>
    </div>


</main>

