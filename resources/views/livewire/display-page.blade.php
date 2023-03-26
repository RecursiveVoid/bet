@if ($this->activePage == \App\Http\Livewire\ActivePage::Default)
    <div class="flex items-center justify-center min-h-screen py-12 bg-gray-50 sm:px-6 lg:px-8">
        <div class="flex flex-col justify-around">
            <div class="space-y-6">
                <h1 class="text-5xl font-extrabold tracking-wider text-center text-gray-600">
                    Just Bet
                </h1>
                <ul class="list-reset">
                    <button  wire:click="goToAdminPage" class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded">
                        Admin Page
                    </button>
                    <button wire:click="goToBetPlatform" class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded">
                        Bet Platform
                    </button>
                </ul>
            </div>
        </div>
    </div>
</div>
@endif

@if ($this->activePage == \App\Http\Livewire\ActivePage::AdminPage)
    <livewire:admin-page/>
@endif
@if ($this->activePage == \App\Http\Livewire\ActivePage::BetPlatform)
    <livewire:bet-platform/>
@endif
