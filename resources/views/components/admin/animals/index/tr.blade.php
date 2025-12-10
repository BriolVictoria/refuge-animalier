@for($i = 0; $i < 10; $i++)
    <tr class="odd:bg-blue-50 even:bg-white border border-blue-100 text-center">
        <td class="px-4 py-4"><img alt="Image d'un chien" class="inline-block w-10 rounded-lg"
                                   src="{!! asset('assets/img/image_table.svg') !!}"></td>
        <td class="px-4 py-4">Pedro</td>
        <td class="px-4 py-4">Chien</td>
        <td class="px-4 py-4"><span class="bg-orange-300 py-1 px-2 rounded-2xl">En attente d'adoption</span></td>
        <td class="px-4 py-4">20/06/2025</td>
        <td class="px-4 py-4"><img src="{!! asset('assets/img/trash_icon.svg') !!}" class="inline-block w-6 h-6"
                                   alt="Icon de poubelle"></td>
    </tr>
@endfor
