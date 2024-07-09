<div>
    <h4 class="mb-2 text-2xl font-medium">My Tasks</h4>
    <div class="flex gap-2 mb-2 fliters">

        <input wire:model.live.debounce='search' placeholder="Search for a todo..."
            class="flex-1 p-2 text-black transition-all rounded-md focus:ring-2 focus:ring-primary focus:outline-none"
            type="search">

        <x-button color="{{ $done == 0 ? 'primary' : 'gray-800' }}" wire:click='falseTodos'>
            <x-fas-x class="w-4 h-4" />
        </x-button>

        <x-button color="{{ $done == 1 ? 'primary' : 'gray-800' }}" wire:click='trueTodos'>
            <x-fas-check class="w-4 h-4" />
        </x-button>

    </div>
    @forelse ($todos as $todo)
        <div wire:key='{{ $todo['id'] }}' class="p-4 mb-4 bg-gray-900 rounded-md">
            <div class="flex items-center justify-between">
                <h4 class="text-xl font-medium">{{ $todo['title'] }}</h4>
                <h4 class="text-white/50">{{ $todo['created_at'] }}</h4>
            </div>
            <p>{{ $todo['description'] }}</p>
            <x-button wire:click="changeStatus({{ $todo['id'] }})" wire:target="changeStatus({{ $todo['id'] }})"
                wire:loading.class="opacity-50 hover:scale-100" wire:loading.attr="disabled"
                action="changeStatus({{ $todo['id'] }})" :color="$todo['done'] ? 'red-500' : 'primary'">
                {{ $todo['done'] ? 'Mark as undone' : 'Mark as done' }}
            </x-button>
        </div>

    @empty
        <div>There is not todos yet...</div>
    @endforelse
    {{ $todos->links() }}
</div>
