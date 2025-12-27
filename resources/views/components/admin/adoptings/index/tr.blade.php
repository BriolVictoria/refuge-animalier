@foreach($this->adoptings as $adopting)

    <tr class="odd:bg-blue-50 even:bg-white border border-blue-100 text-center">
        <td class="px-4 py-4 transition-all duration-300 hover:text-blue-800 ">
            <a title="Voir la fiche de {!! $adopting->first_name !!}" href="{!! route('adoptings.show', $adopting->id) !!}">{!! $adopting->last_name !!}</a></td>
        <td class="px-4 py-4 transition-all duration-300 hover:text-blue-800 ">
            <a title="Voir la fiche de {!! $adopting->first_name !!}" href="{!! route('adoptings.show', $adopting->id) !!}">{!! $adopting->first_name !!}</a></td>
        <td class="px-4 py-4 transition-all duration-300 hover:text-blue-800 ">
            <a title="Voir la fiche de {!! $adopting->animal->name !!}" href="{!! route('animals.show', $adopting->animal->id) !!}">{!! $adopting->animal->name !!}</a></td>
        <td class="px-4 py-4">{!! $adopting->creation_date->translatedFormat('d/m/Y') !!}</td>
        <td class="px-4 py-4">
            <x-admin.adoptings.adoptings_state
                :state="$adopting->state"
            />
        </td>
        <td class="px-4 py-4">
            <a title="Voir la fiche de {!! $adopting->first_name !!}" href="{!! route('adoptings.show', $adopting->id) !!}"
               class="inline-block pr-2 transition-all duration-300 hover:scale-105">
                <svg width="30" height="30" viewBox="0 0 30 30" xmlns="http://www.w3.org/2000/svg">
                    <path
                        d="M2.57716 15.4352C2.47298 15.1546 2.47298 14.8458 2.57716 14.5652C3.59178 12.105 5.31405 10.0015 7.52562 8.52133C9.73719 7.04115 12.3385 6.25098 14.9997 6.25098C17.6609 6.25098 20.2621 7.04115 22.4737 8.52133C24.6853 10.0015 26.4075 12.105 27.4222 14.5652C27.5263 14.8458 27.5263 15.1546 27.4222 15.4352C26.4075 17.8954 24.6853 19.9989 22.4737 21.4791C20.2621 22.9593 17.6609 23.7494 14.9997 23.7494C12.3385 23.7494 9.73719 22.9593 7.52562 21.4791C5.31405 19.9989 3.59178 17.8954 2.57716 15.4352Z"
                        stroke="#2B517A" fill="none" stroke-width="1.25" stroke-linecap="round"
                        stroke-linejoin="round"/>
                    <path
                        d="M15 18.75C17.0711 18.75 18.75 17.0711 18.75 15C18.75 12.9289 17.0711 11.25 15 11.25C12.9289 11.25 11.25 12.9289 11.25 15C11.25 17.0711 12.9289 18.75 15 18.75Z"
                        stroke="#2B517A" fill="none" stroke-width="1.25" stroke-linecap="round"
                        stroke-linejoin="round"/>
                </svg>
            </a>
            <a title="Modifier la fiche de {!! $adopting->first_name !!}" href="{!! route('adoptings.edit', $adopting->id) !!}"
               class="inline-block pr-2 transition-all duration-300 hover:scale-105">
                <svg width="28" height="28" viewBox="0 0 28 28"
                     xmlns="http://www.w3.org/2000/svg">
                    <path
                        d="M24.7026 7.94745C25.3194 7.33078 25.666 6.49433 25.6661 5.62211C25.6662 4.7499 25.3199 3.91336 24.7032 3.29654C24.0865 2.67971 23.2501 2.33312 22.3778 2.33301C21.5056 2.3329 20.6691 2.67928 20.0523 3.29595L4.48193 18.8698C4.21105 19.1399 4.01073 19.4724 3.8986 19.8381L2.35743 24.9155C2.32728 25.0163 2.325 25.1235 2.35084 25.2256C2.37668 25.3277 2.42967 25.4209 2.50419 25.4953C2.57872 25.5697 2.67199 25.6225 2.77412 25.6482C2.87624 25.6739 2.98342 25.6714 3.08426 25.6411L8.16276 24.1011C8.52813 23.99 8.86063 23.7909 9.1311 23.5213L24.7026 7.94745Z"
                        stroke="#26486C" fill="none" stroke-width="1.45833" stroke-linecap="round"
                        stroke-linejoin="round"/>
                </svg>

            </a>
            <x-admin.button.delete_button
                wire_delete="deleteAdopting({!! $adopting->id !!})"
                delete_message="Supprimer la fiche de {!! $adopting->first_name !!}"
                class="inline-block pr-2 transition-all duration-300 hover:scale-105"
            >
                <svg width="24" height="27" viewBox="0 0 24 27"
                     xmlns="http://www.w3.org/2000/svg">
                    <path d="M9.375 11.875V19.375" stroke="#26486C" stroke-width="1.25"
                          stroke-linecap="round" fill="none" stroke-linejoin="round"/>
                    <path d="M14.375 11.875V19.375" stroke="#26486C" fill="none" stroke-width="1.25"
                          stroke-linecap="round" stroke-linejoin="round"/>
                    <path
                        d="M20.625 5.625V23.125C20.625 23.788 20.3616 24.4239 19.8928 24.8928C19.4239 25.3616 18.788 25.625 18.125 25.625H5.625C4.96196 25.625 4.32607 25.3616 3.85723 24.8928C3.38839 24.4239 3.125 23.788 3.125 23.125V5.625"
                        stroke="#26486C" fill="none" stroke-width="1.25" stroke-linecap="round"
                        stroke-linejoin="round"/>
                    <path d="M0.625 5.625H23.125" fill="none" stroke="#26486C" stroke-width="1.25"
                          stroke-linecap="round" stroke-linejoin="round"/>
                    <path
                        d="M6.875 5.625V3.125C6.875 2.46196 7.13839 1.82607 7.60723 1.35723C8.07607 0.888392 8.71196 0.625 9.375 0.625H14.375C15.038 0.625 15.6739 0.888392 16.1428 1.35723C16.6116 1.82607 16.875 2.46196 16.875 3.125V5.625"
                        stroke="#26486C" fill="none" stroke-width="1.25" stroke-linecap="round"
                        stroke-linejoin="round"/>
                </svg>
            </x-admin.button.delete_button>
        </td>
    </tr>

@endforeach
