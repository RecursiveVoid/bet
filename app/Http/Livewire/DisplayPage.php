<?php

namespace App\Http\Livewire;

use Livewire\Component;

class DisplayPage extends Component
{
    // this is probably the worst solution to Route...
    // But hey, this is the first time i'm using liveWire.
    protected ActivePage $activePage = ActivePage::Default;

    public function render()
    {
        return view('livewire.display-page');
    }

    public function goToAdminPage() {
        $this->activePage=ActivePage::AdminPage;
    }

    public function goToBetPlatform() {
        $this->activePage=ActivePage::BetPlatform;
    }

    public function setToDefault() {
        $this->activePage=ActivePage::Default;
    }

    public function getActivePage() {
        return $this->activePage;
    }

    public function backToMenu()
    {
        return redirect()->to('/');
    }
}
