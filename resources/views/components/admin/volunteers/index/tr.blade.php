{{--Mettre valeurs de la BD--}}

@for($i = 0; $i < 10; $i++)

    <tr class="odd:bg-blue-50 even:bg-white border border-blue-100 text-center">
        <td class="px-4 py-4">Ambre Flamant</td>
        <td class="px-4 py-4">ambre.flamant@gmail.com</td>
        <td class="px-4 py-4">04 70.85.96.48.85</td>
        <td class="px-4 py-4">20/06/2025</td>
        <td class="px-4 py-4">
            <a href="{!! route('animals.edit') !!}" class="inline-block pr-2">
                <svg width="28" height="28" viewBox="0 0 28 28" xmlns="http://www.w3.org/2000/svg">
                    <path
                        d="M24.7026 7.94745C25.3194 7.33078 25.666 6.49433 25.6661 5.62211C25.6662 4.7499 25.3199 3.91336 24.7032 3.29654C24.0865 2.67971 23.2501 2.33312 22.3778 2.33301C21.5056 2.3329 20.6691 2.67928 20.0523 3.29595L4.48193 18.8698C4.21105 19.1399 4.01073 19.4724 3.8986 19.8381L2.35743 24.9155C2.32728 25.0163 2.325 25.1235 2.35084 25.2256C2.37668 25.3277 2.42967 25.4209 2.50419 25.4953C2.57872 25.5697 2.67199 25.6225 2.77412 25.6482C2.87624 25.6739 2.98342 25.6714 3.08426 25.6411L8.16276 24.1011C8.52813 23.99 8.86063 23.7909 9.1311 23.5213L24.7026 7.94745Z"
                        stroke="#26486C" stroke-width="1.45833" stroke-linecap="round" stroke-linejoin="round"/>
                </svg>

            </a>
            <a href="{!! route('animals.edit') !!}" class="inline-block pr-2">
                <svg width="24" height="27" viewBox="0 0 24 27" xmlns="http://www.w3.org/2000/svg">
                    <path d="M9.375 11.875V19.375" stroke="#26486C" stroke-width="1.25" stroke-linecap="round"
                          stroke-linejoin="round"/>
                    <path d="M14.375 11.875V19.375" stroke="#26486C" stroke-width="1.25" stroke-linecap="round"
                          stroke-linejoin="round"/>
                    <path
                        d="M20.625 5.625V23.125C20.625 23.788 20.3616 24.4239 19.8928 24.8928C19.4239 25.3616 18.788 25.625 18.125 25.625H5.625C4.96196 25.625 4.32607 25.3616 3.85723 24.8928C3.38839 24.4239 3.125 23.788 3.125 23.125V5.625"
                        stroke="#26486C" stroke-width="1.25" stroke-linecap="round" stroke-linejoin="round"/>
                    <path d="M0.625 5.625H23.125" stroke="#26486C" stroke-width="1.25" stroke-linecap="round"
                          stroke-linejoin="round"/>
                    <path
                        d="M6.875 5.625V3.125C6.875 2.46196 7.13839 1.82607 7.60723 1.35723C8.07607 0.888392 8.71196 0.625 9.375 0.625H14.375C15.038 0.625 15.6739 0.888392 16.1428 1.35723C16.6116 1.82607 16.875 2.46196 16.875 3.125V5.625"
                        stroke="#26486C" stroke-width="1.25" stroke-linecap="round" stroke-linejoin="round"/>
                </svg>


            </a>


        </td>
    </tr>

@endfor
