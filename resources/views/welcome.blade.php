<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Saarberry</title>

        {{-- Fonts --}}
        <link href="https://fonts.googleapis.com/css?family=Josefin+Sans:100,300,400&display=swap" rel="stylesheet">

        {{-- Styles --}}
        <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    </head>
    <body>
        <div class="flex-center position-ref full-height">
            <div class="content">
                <div class="title m-b-md">
                    Saarberry
                </div>
            </div>
        </div>
    </body>
</html>
