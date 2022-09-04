<?php

namespace App\Http\Livewire\Adm\Positions;

use App\Models\Position;
use Livewire\Component;

class Form extends Component
{
    public $idPosition;
    public $state = [
        'status' => 'Ativo'
    ];

    protected $rules = [
        'state.name' => 'required',
        'state.status' => 'required',
    ];

    public function mount($id = null)
    {
       if ($id) {
            $this->idPosition = $id;
            $this->getPosition();
       }
    }

    public function getPosition()
    {
        $this->state = Position::query()->where('id', $this->idPosition)->first();
    }

    public function update()
    {
        $this->validate();
        $position = Position::where('id', $this->idPosition)->update([
            'name' => $this->state['name'],
            'status' => $this->state['status'],
        ]);

        $this->redirectRoute('adm.position.index');
    }

    public function save()
    {
        if ($this->idPosition) {
            return $this->update();
        }

        $this->validate();
        $position = Position::create([
            'name' => $this->state['name'],
            'status' => $this->state['status'],
        ]);

        $this->redirectRoute('adm.position.index');

    }

    public function render()
    {
        return view('livewire.adm.positions.form');
    }
}
