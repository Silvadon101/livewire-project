<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Livewire is Heat!</title>
	<link rel="stylesheet" href=" {{ mix('css/app.css') }} ">

	@livewireStyles
</head>
<body>


	<livewire:comment :com="$comments" />

	@livewireScripts
</body>
</html>