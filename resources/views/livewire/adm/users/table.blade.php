<div>
    <x-table.table>
        <thead>
            <tr>
                <th class="text-left">Nome Completo</th>
                <th class="text-left">CPF</th>
                <th class="text-center">Cargo</th>
                <th class="text-center">Email</th>
                <th class="text-center">Status</th>
                <th class="text-center">Actions</th>
            </tr>
        </thead>
        <tbody>
            @foreach($response->users as $itemUser)
                <tr>
                    <td class="text-left">
                        <span class="font-medium">{{  $itemUser['first_name'] . ' ' . $itemUser['last_name'] }}</span>
                    </td>
                    <td class="text-left">
                        {{ $itemUser['cpf'] }}
                    </td>
                    <td class="text-center">
                        {{ $itemUser['position']['name'] }}
                    </td>
                    <td class="text-center">
                        {{ $itemUser['email'] }}
                    </td>
                    <td class="text-center">
                        <span class="jv-green-status"> {{ $itemUser['status'] }}</span>
                    </td>
                    <td>
                        <div class="flex gap-x-1">
                            <span wire:click="delete({{$itemUser['id']}})"
                                class="material-symbols-outlined cursor-pointer">
                                delete
                            </span>
                            <span wire:click="edit({{$itemUser['id']}})"
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
