<div>
    {{-- Knowing others is intelligence; knowing yourself is true wisdom. --}}

    @if(isset($title))
        <h1>{{ $title }}</h1>
    @else
        <h1>No Title Found</h1>
    @endif

    <a wire:click="setTitle('Squiddy!')">Set My Title</a>
</div>