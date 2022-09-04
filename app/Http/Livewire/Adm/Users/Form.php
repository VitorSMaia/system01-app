<?php

namespace App\Http\Livewire\Adm\Users;

use App\Models\Position;
use App\Models\User;
use Livewire\Component;
use StdClass;

class Form extends Component
{
    public $idUser;

    public $state = [
        'position_id' => ''
    ];

    protected $rules = [
        'state.position_id' => 'required',
        'state.first_name' => 'required',
        'state.last_name' => 'required',
        'state.cpf' => 'required',
        'state.password' => 'required',
        'state.email' => 'required|email',
    ];

    public function mount($id = null)
    {
        if ($id) {
            $this->idUser = $id;
            $this->getUser();
        }
    }

    public function getUser()
    {
        $this->state = User::query()->where('id', $this->idUser)->first();
    }

    public function getPositions()
    {
        return Position::query()->get();
    }

    public function update()
    {
        $user = User::where('id', $this->idUser)->update([
            'first_name' => $this->state['first_name'],
            'last_name' => $this->state['last_name'],
            'position_id' => $this->state['position_id'],
            'cpf' => $this->state['cpf'],
            'password' => $this->state['password'],
            'email' => $this->state['email'],
        ]);

        $this->redirectRoute('adm.user.index');
    }

    public function save()
    {
        if ($this->idUser) {
            return $this->update();
        }

        $this->validate();
        $user = User::create([
            'first_name' => $this->state['first_name'],
            'last_name' => $this->state['last_name'],
            'position_id' => $this->state['position_id'],
            'cpf' => $this->state['cpf'],
            'password' => $this->state['password'],
            'email' => $this->state['email'],
        ]);

//        $user->positions()->attach(['position_id' => $this->state['office']]);

        $this->redirectRoute('adm.user.index');
    }

    public function render()
    {
        $response = new StdClass;
        $response->positions = $this->getPositions();

        return view('livewire.adm.users.form', ['response' => $response]);
    }
}
