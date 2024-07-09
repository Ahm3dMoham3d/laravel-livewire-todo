<form wire:submit='addNewTask' class="sticky top-0 flex flex-col w-full gap-4">
    <h4 class="text-2xl font-medium">Add new task</h4>
    <input wire:model='title' placeholder="Task title"
        class="p-2 text-black transition-all rounded-md focus:ring-2 focus:ring-primary focus:outline-none"
        type="text">
    @error('title')
        <span class="text-red-500">{{ $message }}</span>
    @enderror
    <textarea wire:model='description' placeholder="Task description"
        class="p-2 text-black transition-all rounded-md focus:ring-2 focus:ring-primary focus:outline-none" cols="30"
        rows="10"></textarea>
    @error('description')
        <span class="text-red-500">{{ $message }}</span>
    @enderror
    <x-button wire:click='addNewTask' wire:target="addNewTask" wire:loading.class="opacity-50 hover:scale-100"
        wire:loading.attr="disabled">
        Add task
    </x-button>
</form>
