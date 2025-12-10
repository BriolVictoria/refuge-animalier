{{--Mettre valeurs de la BD--}}

@for($i = 0; $i < 10; $i++)

    <tr class="odd:bg-blue-50 even:bg-white border border-blue-100 text-center">
        <td class="px-4 py-4">Ambre Flamant</td>
        <td class="px-4 py-4">ambre.flamant@gmail.com</td>
        <td class="px-4 py-4">04 70.85.96.48.85</td>
        <td class="px-4 py-4">20/06/2025</td>
        <td class="px-4 py-4">
            <img src="{!! asset('assets/img/mail_icon.svg') !!}" class="inline-block pr-2"
                 alt="Icon de poubelle">
            <img src="{!! asset('assets/img/trash_icon.svg') !!}" class="inline-block"
                 alt="Icon de poubelle">

        </td>
    </tr>


@endfor
