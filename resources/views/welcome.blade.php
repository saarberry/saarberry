<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Saarberry</title>
        
        {{-- Resources --}}
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Lusitana:wght@400;700&display=swap" rel="stylesheet">
        <link href="https://fonts.googleapis.com/css2?family=Nunito+Sans:opsz@6..12&display=swap" rel="stylesheet">
        @vite('resources/js/app.js')
    </head>
    <body>
        <div class="Content">
            <div class="Wrapper">
                <h1 class="Title">saarberry.</h1>
                <div class="Rainbow">
                    <div class="Rainbow__Block Rainbow__Block--red"></div>
                    <div class="Rainbow__Block Rainbow__Block--orange"></div>
                    <div class="Rainbow__Block Rainbow__Block--yellow"></div>
                    <div class="Rainbow__Block Rainbow__Block--green"></div>
                    <div class="Rainbow__Block Rainbow__Block--indigo"></div>
                    <div class="Rainbow__Block Rainbow__Block--violet"></div>
                </div>
            </div>
        </div>
        <footer class="Footer">
            Laravel v{{ Illuminate\Foundation\Application::VERSION }} (PHP v{{ PHP_VERSION }})
        </footer>
    </body>
</html>
