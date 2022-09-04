<?php

namespace App\Http\Livewire\Adm\Positions;

use App\Models\Position;
use Livewire\Component;
use StdClass;

class Table extends Component
{
    public function delete($id)
    {
        Position::destroy($id);
        $this->redirectRoute('adm.position.index');
    }

    public function edit($id)
    {
        $this->redirectRoute('adm.position.edit',[ 'id'=> $id ]);
    }

    public function getPositions()
    {
        $position = Position::query()->get();
        return $position;
    }

    public function render()
    {
        $response = new StdClass;
        $response->positions = $this->getPositions();

        return view('livewire.adm.positions.table', ['response' => $response]);
    }
}
