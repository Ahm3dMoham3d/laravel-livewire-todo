<div>
    <h4 class="mb-4 text-2xl font-medium">My Tasks</h4>
   @foreach ($todos as $todo)
   <div class="bg-gray-900 p-4 rounded-md mb-4">
    <div class="flex items-center justify-between">
        <h4 class="text-xl font-medium">{{ $todo['title'] }}</h4>
        <h4 class="text-white/50">{{ $todo['created_at'] }}</h4>
    </div>
    <p>{{ $todo['description'] }}</p>
    <button class="mt-4 bg-primary p-2 rounded-md font-medium hover:scale-105 transition-transform">MARK AS DONE</button>   
</div>
   @endforeach
</div>
