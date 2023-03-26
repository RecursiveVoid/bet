<div x-data="{
        games: JSON.parse(localStorage.getItem('games') || '[]'),
        showModal: false,
        lastVotedTeamName: '',
    }"
     x-init="() => {
        Livewire.on('voteGame', (games) => {
            localStorage.setItem('games', JSON.stringify(games));
        });
    }"
>

    <div class="relative overflow-x-auto shadow-md sm:rounded-lg">
        <table class="w-full text-sm text-left text-gray-500 dark:text-gray-400">
            <thead class="text-xs text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400">
            <tr>
                <th scope="col" class="px-6 py-3">
                    Game Name
                </th>
                <th scope="col" class="px-6 py-3">
                    Vote Host Team
                </th>
                <th scope="col" class="px-6 py-3">
                    Vote Opponent Team
                </th>
            </tr>
            </thead>
            <tbody>
            <template x-for="(game, index) in games" :key="index">
                <tr  class="bg-white border-b dark:bg-gray-900 dark:border-gray-700">
                    <th scope="row" class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white" x-text="game.hostingTeam.teamName+' VS '+game.opponentTeam.teamName"></th>
                    <td>
                        <button x-text="'Vote for '+game.hostingTeam.teamName" x-on:click="() => {game.hostingTeamVote += 1; livewire.emit('voteGame', games); showModal = true; lastVotedTeamName = game.hostingTeam.teamName;}"/>
                    </td>
                    <td>
                        <button x-text="'Vote for '+game.opponentTeam.teamName"  x-on:click=" () => {game.opponentTeamVote += 1;livewire.emit('voteGame', games); showModal = true; lastVotedTeamName = game.opponentTeam.teamName;}"/>
                    </td>

                </tr>
            </template>
            </tbody>
        </table>
    </div>
        <div x-show="showModal" click.away="showModal = false">
            <div class="fixed inset-0 bg-gray-500 bg-opacity-75 flex items-center justify-center">
                <div class="bg-white p-6 rounded-lg">
                    <h2 class="text-xl font-bold mb-4">You Voted For</h2>
                    <p class = 'mb-5 text-2xl text-gray-900 dark:text-black' x-text='lastVotedTeamName' class="mb-4"></p>
                    <button class=" py-2.5 px-5 mr-2 mb-2 text-sm font-medium text-gray-900 focus:outline-none bg-white rounded-lg border border-gray-200 hover:bg-gray-100 hover:text-blue-700 focus:z-10 focus:ring-4 focus:ring-gray-200 dark:focus:ring-gray-700 dark:bg-gray-800 dark:text-gray-400 dark:border-gray-600 dark:hover:text-white dark:hover:bg-gray-700" @click="showModal = false">Close</button>
                </div>
            </div>
        </div>
</div>
