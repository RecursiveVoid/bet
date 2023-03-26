<div x-data="{
        teams: JSON.parse(localStorage.getItem('teams') || '[]')
    }"
     x-init="() => {
        Livewire.on('addTeam', (team) => {
            teams.push(team);
            localStorage.setItem('teams', JSON.stringify(teams));
        });
           Livewire.on('removeTeam', (indexToRemove) => {
            teams.splice(indexToRemove, 1);
            localStorage.setItem('teams', JSON.stringify(teams));
        });
    }"
>
    <div >
        <div >
            <form wire:submit.prevent="addTeam">
                <div>
                    <label class="block mb-2 text-sm font-medium text-gray-900 dark:text-black" for="teamName">Team Name</label>
                    <input type="text" wire:model="teamName" id="teamName">
                    <button class="py-2.5 px-5 mr-2 mb-2 text-sm font-medium text-gray-900 focus:outline-none bg-white rounded-lg border border-gray-200 hover:bg-gray-100 hover:text-blue-700 focus:z-10 focus:ring-4 focus:ring-gray-200 dark:focus:ring-gray-700 dark:bg-gray-800 dark:text-gray-400 dark:border-gray-600 dark:hover:text-white dark:hover:bg-gray-700" type="submit">Add Team</button>
                </div>
            </form>
        </div>
    </div>

    <table class="w-full text-sm text-left text-gray-500 dark:text-gray-400">
        <thead class="text-xs text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400">
        <tr>
            <th scope="col" class="px-6 py-3">Team Name</th>
            <th scope="col" class="px-6 py-3">Win Amount</th>
            <th scope="col" class="px-6 py-3">Lose Amount</th>
            <th scope="col" class="px-6 py-3">Action</th>
        </tr>
        </thead>
        <tbody>
        <template x-for="(team, index) in teams" :key="index">
            <tr  class="bg-white border-b dark:bg-gray-900 dark:border-gray-700">
                <th scope="row" class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white" x-text="team.teamName"></th>
                <td class="px-6 py-4" x-text="team.winAmount"></td>
                <td class="px-6 py-4" x-text="team.loseAmount"></td>
                <td>
                    <button x-on:click="livewire.emit('removeTeam', index)">Remove</button>
                </td>
            </tr>
        </template>
        </tbody>
    </table>
</div>
