<?php

namespace App\Http\Livewire\Adm\Users;

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
    }

    public function render()
    {
        return view('livewire.adm.users.form');
    }
}
