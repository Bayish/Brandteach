<!DOCTYPE html>
<html data-theme="lightTheme" lang="{{ str_replace('_', '-', app()->getLocale()) }}">

    <head>
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0" />

        <title inertia>{{ config('app.name', 'Laravel') }}</title>
        @routes
        @vite('resources/js/app.js')
        @inertiaHead
    </head>
    <body class="min-h-full overflow-y-auto bg-base-100">
        @inertia
    </body>
</html>
