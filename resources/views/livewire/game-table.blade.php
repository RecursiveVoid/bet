<div x-data="{
        teams: JSON.parse(localStorage.getItem('teams') || '[]'),
        games: JSON.parse(localStorage.getItem('games') || '[]'),
        showError: false,
        errorMessage: '',
    }"
     x-init="() => {
        Livewire.on('createGame', (game) => {
            console.log(game);
            // games.push(game);
           // localStorage.setItem('games', JSON.stringify(games));
        });
           Livewire.on('removeGames', (indexToRemove) => {
            //games.splice(indexToRemove, 1);
             //localStorage.setItem('games', JSON.stringify(games));
        });
           Livewire.on('show-error', (data) => {
            showError = data.showError;
            errorMessage = data.errorMessage;
        });
    }"
>

    <div >
        <div >
            <form wire:submit.prevent="createGame">
                <div class="mb-6">
                <label class="block mb-2" for="teams">Hosting Team</label>
                <select id="hostingTeamName" wire:model="hostingTeamName">
                    <option value="">-- Select a team --</option>
                    <template x-for="(team, index) in teams" :key="team.teamName">
                        <option :value="index" x-text="team.teamName"></option>
                    </template>
                </select>
                </div>
                <div class="mb-6">
                <label class="block mb-2" for="teams">Opposite Team</label>
                <select id="oppositeTeamName" wire:model="oppositeTeamName">
                    <option value="">-- Select a team --</option>
                    <template x-for="(team, index) in teams" :key="team.teamName">
                        <option :value="index" x-text="team.teamName"></option>
                    </template>
                </select>
                </div>
                <template x-if="showError">
                    <div><p x-text="errorMessage" class="text-red-600"/></div>
                </template>
                <button class="py-2.5 px-5 mr-2 mb-2 text-sm font-medium text-gray-900 focus:outline-none bg-white rounded-lg border border-gray-200 hover:bg-gray-100 hover:text-blue-700 focus:z-10 focus:ring-4 focus:ring-gray-200 dark:focus:ring-gray-700 dark:bg-gray-800 dark:text-gray-400 dark:border-gray-600 dark:hover:text-white dark:hover:bg-gray-700" type="button" wire:click="createGame()">Create Game</button>
            </form>
        </div>
    </div>



<div class="relative overflow-x-auto shadow-md sm:rounded-lg">
    <table class="w-full text-sm text-left text-gray-500 dark:text-gray-400">
        <thead class="text-xs text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400">
        <tr>
            <th scope="col" class="px-6 py-3">
                Game Name
            </th>
            <th scope="col" class="px-6 py-3">
                Score
            </th>
            <th scope="col" class="px-6 py-3">
                User Votes
            </th>
            <th scope="col" class="px-6 py-3">
                Remaining Time
            </th>
        </tr>
        </thead>
        <tbody>
        <tr class="bg-white border-b dark:bg-gray-900 dark:border-gray-700">
            <th scope="row" class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                A vs B
            </th>
            <td class="px-6 py-4">
                1 : 2
            </td>
            <td class="px-6 py-4">
                101 : 321
            </td>
            <td class="px-6 py-4">
                1:20
            </td>
        </tr>
        </tbody>
    </table>
</div>
