<?php

namespace App\Http\Livewire;

use App\Models\Team;
use Livewire\Component;

class TeamTable extends Component
{
    public $teamName;

    public function addTeam()
    {
        if (empty($this->teamName)) {
            $this->teamName = 'NO_NAME';
        }
        $team = [
            'teamName' => strval($this->teamName),
            'winAmount' => 0,
            'loseAmount' => 0,
        ];

        $this->reset();

        $this->emit('addTeam', $team);
    }

    public function render()
    {
        return view('livewire.team-table');
    }

    public function removeTeam($index)
    {
       // array_splice($this->teams, $index, 1);
        $this->emit('removeTeam',$index);
    }
}
