<thead class="none 2xl:bg-blue-500">
<tr class="text-white font-medium text-xs">
    <th class="px-4 py-4">{{ __('admin/animals.fields.photo')}}</th>
    <th
        wire:click="sortBy('name')"
        class="px-4 py-4 cursor-pointer select-none"
    >
        <div class="flex items-center justify-center gap-1">
            {{ __('admin/animals.fields.name')}}

            @if ($this->sortField === 'name')
                @if ($this->sortDirection === 'asc')
                    <svg width="13" height="12" viewBox="0 0 13 12"  xmlns="http://www.w3.org/2000/svg">
                        <path d="M6.49512 0L12.9903 11.25L-7.34329e-05 11.25L6.49512 0Z" fill="white"/>
                    </svg>

                @else
                    <svg width="13" height="12" viewBox="0 0 13 12"  xmlns="http://www.w3.org/2000/svg">
                        <path d="M6.49512 11.25L-7.34031e-05 -2.69824e-07L12.9903 8.65831e-07L6.49512 11.25Z"
                              fill="white"/>
                    </svg>

                @endif
            @else
                <span class="text-blue-300"><svg width="13" height="12" viewBox="0 0 13 12"
                                                 xmlns="http://www.w3.org/2000/svg">
<path d="M6.49512 0L12.9903 11.25L-7.34329e-05 11.25L6.49512 0Z" fill="white"/>
</svg>
</span>
            @endif
        </div>
    </th>
    <th class="px-4 py-4">{{ __('admin/animals.fields.type')}}</th>
    <th class="px-4 py-4">{{ __('admin/animals.fields.state')}}</th>
    <th class="px-4 py-4">{{ __('admin/animals.fields.updated_at')}}</th>
    <th class="px-4 py-4">{{ __('admin/animals.fields.actions')}}</th>
</tr>
</thead>
