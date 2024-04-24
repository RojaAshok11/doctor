<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    @vite(['resources/sass/app.scss', 'resources/js/app.js'])
    <title>medical</title>
    <link rel="stylesheet"
        href="{{ asset('css/' . (App::make('themesetting') ? App::make('themesetting')->path : 'theme/bluetheme.css')) }}">
</head>

<body>
    @livewire('medicalfield.patientslot')

    
</body>

</html>
