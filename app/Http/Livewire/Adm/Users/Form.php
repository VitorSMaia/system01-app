<?php

namespace App\Http\Livewire\Adm\Users;

use App\Models\User;
use Livewire\Component;

class Form extends Component
{
    public $state = [
        'office' => ''
    ];

    protected $rules = [
        'state.office' => 'required',
        'state.first_name' => 'required',
        'state.last_name' => 'required',
        'state.cpf' => 'required',
        'state.password' => 'required',
        'state.email' => 'required|email',
    ];

    public function save()
    {

        $this->validate();
        User::create([
            'first_name' => $this->state['first_name'],
            'last_name' => $this->state['last_name'],
            'cpf' => $this->state['cpf'],
            'password' => $this->state['password'],
            'email' => $this->state['email'],
        ]);
        $this->redirectRoute('adm.user.index');
    }

    public function render()
    {
        return view('livewire.adm.users.form');
    }
}
