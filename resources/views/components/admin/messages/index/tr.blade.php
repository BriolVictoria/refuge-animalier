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
        <img src="{!! asset('assets/img/mail_icon.svg') !!}" class="inline-block pr-2"
             alt="Icon de poubelle">
        <img src="{!! asset('assets/img/trash_icon.svg') !!}" class="inline-block"
             alt="Icon de poubelle">

    </td>
</tr>


@endfor
