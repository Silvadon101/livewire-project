<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Livewire is live!</title>
    @livewireStyles
</head>
<body>
    
    {{-- Another way to include 'livewire' components
        ============================================== --}}
    
        {{-- @livewire('post') --}}
    
    <livewire:post />

    <livewire:calculator />

    @livewireScripts
</body>
</html>