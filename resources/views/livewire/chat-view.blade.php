<div class="h-screen">
    <div class="bg-blue-200 h-5/6 overflow-auto rounded shadow-lg w-96 m-2 p-2 flex flex-col">
        @foreach($messages as $message)
            <div class="flex items-center justify-between">
                <li class="flex flex-col justify-center py-2 px-3 pr-6 bg-white @if($message->user === 'admin') bg-gray-200 @endif rounded text-xs m-1">
                    <div class="flex justify-between pb-0.5 mb-1 border-b">
                        <div>{{ $message->user }}</div>
                    </div>
                    <div class="pr-2">{{ $message->message }}</div>
                </li>
                <p class="text-sm text-right pr-2 w-2/5">{{ $message->created_at->diffForHumans() }}</p>
            </div>
        @endforeach
    </div>
    <div class="bg-green-200 rounded shadow-lg m-2 p-2">
        <form wire:submit.prevent="post" class="flex flex-no-wrap">
            @csrf
            <input type="text" name="message" wire:model.lazy="message" class="w-40 p-1 rounded" required>
            <input type="hidden" name="user" wire:model="{{ $user }}">
            <button class="rounded bg-green-500 text-white p-1 w-full ml-2">Send</button>
        </form>
    </div>
</div>
