<div>
    {{-- The best athlete wants his opponent at his best. --}}
    <div class="flex justify-center">
        <div class="w-6/12">
            <h1 class="my-10 text-3xl">Comments</h1>
            {{-- -----you can also press down on 'enter' key to add comment due to the '<form></form>'----- --}}
            <form class="my-4 flex" wire:submit.prevent="addComment">
                <input type="text" class="w-full focus:outline-none focus:ring focus:border-blue-300 rounded border shadow p-2 mr-2 my-2" placeholder="What's on your mind?" wire:model.lazy="newComment">
                <div class="py-2">
                    <button class="p-2 bg-blue-500 w-20 rounded shadow text-white hover:bg-blue-600" type="submit">Add</button>
                </div>
            </form>
            @foreach($comment as $comments)
            <div class="rounded border shadow p-3 my-2">
                <div class="flex justify-start my-2">
                    <p class="font-bold text-lg">{{ $comments->user->name }} </p>
                    <p class="mx-3 py-1 text-xs text-gray-400 font-semibold">{{ $comments->created_at->diffForHumans() }}</p>
                </div>
                <p class="text-gray-800">{{ $comments->body }}</p>
            </div>
            @endforeach
        </div>
    </div>

</div>
