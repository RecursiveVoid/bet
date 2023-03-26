<?php

namespace App\Http\Livewire;

use Livewire\Component;

class GameTable extends Component
{
    public $hostingTeamName;
    public $oppositeTeamName;

    public function render()
    {
        return view('livewire.game-table');
    }

    public function showErrorMessage() {
        $data = [
            'showError' => true,
            'errorMessage' => 'Cannot create game with same teams.',
        ];
        $this->emit('show-error', $data);
    }

    public function hideErrorMessage() {
        $data = [
            'showError' => false,
            'errorMessage' => '',
        ];
        $this->emit('show-error', $data);
    }

    public function createGame() {
        $isSameTeams = $this->hostingTeamName == $this->oppositeTeamName;
        if($isSameTeams) {
            $this->showErrorMessage();
            return;
        }
        $this->emit('createGame',[$this->hostingTeamName, $this->oppositeTeamName]);
        $this->hideErrorMessage();
    }
}
