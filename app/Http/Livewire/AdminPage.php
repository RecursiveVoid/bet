<?php

namespace App\Http\Livewire;

use Livewire\Component;

class AdminPage extends Component
{
    public function render()
    {
        return view('livewire.admin-page');
    }

    public function backToMenu()
    {
        return redirect()->to('/');
    }
}
