<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Donate Today</title>
    @livewireStyles
    @vite('resources/js/app.js')
    @vite('resources/css/app.css')

</head>
<body>

    <h1 class="mx-auto w-full text-center my-12 font-bold text-4xl text-slate-600 ">Donate Today!</h1>
        @livewire('donation-form')

    @livewireScripts
</body>
</html>
