<?php

namespace App\Http\Livewire;

use Livewire\Component;

class BetPlatform extends Component
{
   // public $showModal = false;
    public function render()
    {
        return view('livewire.bet-platform');
    }

    public function voteGame($games)
    {
        $this->emit('updateGames',$games);
        // thank you for voting should be visible
    }

}
