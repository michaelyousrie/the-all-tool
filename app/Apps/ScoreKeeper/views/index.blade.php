<x-layout>
    <div
        class="w-full flex flex-col items-center justify-center"
        x-data="{
            players: ['Michael', 'Merna'],
            newPlayer: '',

            resizeFont(event) {
                const input = event.target;
                const maxFont = 144; // 9xl
                const minFont = 24;
                const length = input.value.length;
                let size = maxFont - (length - 1) * 20;
                if (size < minFont) size = minFont;
                input.style.fontSize = size + 'px';
            },

            addPlayer() {
                this.players.push(this.newPlayer);
                this.newPlayer = '';
            },
        }"
    >
        <form
            class="flex items-center justify-center gap-4 border p-2 border-gray-600 rounded-lg"
            @submit.prevent="addPlayer()"
        >
            <input
                type="text"
                class="bg-gray-600 p-2 rounded-sm border border-gray-500 outline-none w-64"
                x-model="newPlayer"
                placeholder="New Player Name.."
                autofocus
                tabindex="1"
            />
            <x-button type="submit">Add Player</x-button>
        </form>

        <div :class="`w-full grid grid-cols-${Math.min(players.length, 12)} gap-4 my-12`">
            <template x-for="(player, index) in players" :key="index">
                <div>
                <div class="flex items-center justify-center gap-4 ">
                        <h2 class="font-bold text-2xl" x-text='player'></h2>
                        <x-button class="text-xs" @click="players.splice(index, 1);">Remove</x-button>
                    </div>
                    <div class="w-full flex items-center justify-center">
                        <div class="bg-gray-600 p-6 mt-4 w-64 h-64 flex items-center justify-center rounded-2xl border border-gray-400">
                            <input
                                type="number"
                                @input="resizeFont($event)"
                                x-ref="scoreInput"
                                class="font-bold w-full text-center focus:outline-none text-9xl"
                                value="0"
                            />
                        </div>
                    </div>
                </div>

            </template>
        </div>
    </div>
</x-layout>
