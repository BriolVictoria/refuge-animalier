{{--Mettre valeurs de la BD--}}

@for($i = 0; $i < 10; $i++)

<tr class="odd:bg-blue-50 even:bg-white border border-blue-100 text-center">
    <td class="px-4 py-4">Lorian Flamant</td>
    <td class="px-4 py-4">Pedro</td>
    <td class="px-4 py-4">24/06/2025</td>
    <td class="px-4 py-4"><span class="bg-green-500 py-1 px-2 rounded-2xl">En cours</span>
    </td>
    <td class="px-4 py-4">
        <img src="{!! asset('assets/img/mail_icon.svg') !!}" class="inline-block pr-2"
             alt="Icon de poubelle">
        <img src="{!! asset('assets/img/trash_icon.svg') !!}" class="inline-block"
             alt="Icon de poubelle">

    </td>
</tr>


@endfor
