<div>
    <x-table.table>
        <thead>
            <tr>
                <th class="text-left">Nome</th>
                <th class="text-center">Status</th>
                <th class="text-center">Actions</th>
            </tr>
        </thead>
        <tbody>
        @foreach($response->positions as $itemPosition)
            <tr>
                <td class="text-left">
                    <span class="font-medium">{{  $itemPosition['name'] }}</span>
                </td>
                <td class="text-center">
                    <span class="jv-green-status"> {{ $itemPosition['status'] }}</span>
                </td>
                <td>
                    <div class="flex gap-x-1">
                        <span wire:click="delete( {{ $itemPosition['id'] }} )"
                              class="material-symbols-outlined cursor-pointer">
                            delete
                        </span>
                        <span wire:click="edit({{$itemPosition['id']}})"
                              class="material-symbols-outlined cursor-pointer">
                                edit
                        </span>
                    </div>
                </td>
            </tr>
        @endforeach
        </tbody>
    </x-table.table>
</div>
