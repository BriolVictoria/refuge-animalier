{{--Mettre valeurs de la BD--}}

@for($i = 0; $i < 10; $i++)

<tr class="odd:bg-blue-50 even:bg-white border border-blue-100 text-center">
    <td class="px-4 py-4">Simon Alvarez</td>
    <td class="px-4 py-4">simon.alvarez@gmail.com</td>
    <td class="px-4 py-4">Avez-vous des nouvelles de Sol?</td>
    <td class="px-4 py-4">02/12/2505</td>
    <td class="px-4 py-4"><span class="bg-red-100 py-1 px-2 rounded-2xl">Non lu</span>
    </td>
    <td class="px-4 py-4">
        <a href="{!! route('animals.edit') !!}" class="inline-block pr-2">
            <svg width="24" height="27" viewBox="0 0 24 27" xmlns="http://www.w3.org/2000/svg">
                <path d="M9.375 11.875V19.375" stroke="#26486C" stroke-width="1.25" stroke-linecap="round" stroke-linejoin="round"/>
                <path d="M14.375 11.875V19.375" stroke="#26486C" stroke-width="1.25" stroke-linecap="round" stroke-linejoin="round"/>
                <path d="M20.625 5.625V23.125C20.625 23.788 20.3616 24.4239 19.8928 24.8928C19.4239 25.3616 18.788 25.625 18.125 25.625H5.625C4.96196 25.625 4.32607 25.3616 3.85723 24.8928C3.38839 24.4239 3.125 23.788 3.125 23.125V5.625" stroke="#26486C" stroke-width="1.25" stroke-linecap="round" stroke-linejoin="round"/>
                <path d="M0.625 5.625H23.125" stroke="#26486C" stroke-width="1.25" stroke-linecap="round" stroke-linejoin="round"/>
                <path d="M6.875 5.625V3.125C6.875 2.46196 7.13839 1.82607 7.60723 1.35723C8.07607 0.888392 8.71196 0.625 9.375 0.625H14.375C15.038 0.625 15.6739 0.888392 16.1428 1.35723C16.6116 1.82607 16.875 2.46196 16.875 3.125V5.625" stroke="#26486C" stroke-width="1.25" stroke-linecap="round" stroke-linejoin="round"/>
            </svg>


        </a>

    </td>
</tr>


@endfor
