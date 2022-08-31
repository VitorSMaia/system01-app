<?php

namespace App\Http\Livewire\Adm\Users;

use App\Models\User;
use Livewire\Component;
use StdClass;

class Table extends Component
{
    public function delete($id)
    {
        User::destroy($id);
        $this->redirectRoute('adm.user.index');
    }

    public function getUsers()
    {
        return User::all();
    }

    public function render()
    {
        $response = new StdClass;
        $response->users = $this->getUsers();

        return view('livewire.adm.users.table', ['response' => $response]);
    }
}
